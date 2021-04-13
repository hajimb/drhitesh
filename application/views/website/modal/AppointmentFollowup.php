<div class="sky-form">
  <div class="row">
    <div class="col-md-12" id="message" style="display: none"></div>
    <div class="col-md-12" id="appointment_wrap">
      <div class="box-body">
        <div class="form-group">
          <div class="col-sm-6">
            <div id="datepicker-inline"></div>
          </div>
          <div class="col-lg-6 col-sm-6 col-xs-12 col-md-12" id="timeslots"></div>
        </div>
        <div class="clearfix"></div>
        <form class="dp" id="appointment_form" method="POST">
          <?php
            if(strtolower($consultationtype) == 'online'){?>
            <div class="form-group">
              <div class="col-md-6">
                <select class="form-control" id="consult_type" name="consult_type">
                  <option value="">Select Consultation Type</option>
                  <option value="Whatsapp Chat">Whatsapp Chat</option>
                  <option value="Whatsapp Calling">Whatsapp Calling</option>
                  <option value="Skype Chat">Skype Chat</option>
                  <option value="Skype Calling">Skype Calling</option>
                </select>
              </div>
              <div class="col-md-6">
                <input type="text" name="consultid" id="consultid" placeholder="Consultation Type" class="form-control"> </div>
            </div>
            <?php }?>
              <input type="hidden" name="feeamount" id="feeamount">
              <input type="hidden" name="first_name" id="first_name" value="<?= $this->session->userdata('first_name');?>">
              <input type="hidden" name="last_name" id="last_name" value="<?= $this->session->userdata('last_name');?>">
              <input type="hidden" name="timing" id="timing">
              <input type="hidden" name="userId" id="userId" value="<?= $this->session->userdata('user_id');?>">
              <input type="hidden" name="adate" id="adate">
              <input type="hidden" name="datein" id="datein">
              <input type="hidden" name="consultationtype" id="consultationtype" value="<?= $consultationtype;?>">
              <input type="hidden" name="client" id="client" value="web"> </form>
      </div>
    </div>
    <div class="col-md-12 col-lg-12 col-xs-12" id="payment_wrap" style="display: none">
      <div class="sky-form">
        <form class="form-horizontal padding-rl-20 marbot0" id="form" method="POST">
          <div class="form-group">
            <div class="col-md-12 col-lg-12">
              <h3 class="bold marbot0 text-center">Confirm your Appointment</h3>
              <p class="text-center marbot0"><span>Appointment Date <b id="appdate"></b></span> <span>at <b id="apptiming"></b></span></p>
            </div>
          </div>
          <hr>
            <div class="col-md-12 text-center">
              <a href="javascript:void(0)" class="rad0 fbut" id="confirmBooking">Confirm</a>
              <a href="javascript:void(0)" class="rad0 fbut" style="margin-left: 20px" id="cancelpayment">Cancel</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script>
  function getTimeslot(date) {
    $("#datein").val(date);
    $("#timeslots").html('');
    var newdate = new Date(date);
    var single_week = $("#single_week").val();
    var single_sun = $("#single_sun").val();
    var couple_week = $("#couple_week").val();
    var couple_sun = $("#couple_sun").val();
    var html = '';
    var dayOfWeek = newdate.getUTCDay();
    if (dayOfWeek == 0) {
      html += `<option value="">Select Appointment Type</option>
                <option value="Single" data-fee="${single_sun}">Single (INR ${single_sun})</option>
                <option value="Couple" data-fee="${couple_sun}">Couple (INR ${couple_sun})</option>
                `;
    } else {
      html += `<option value="">Select Appointment Type</option>
                <option value="Single" data-fee="${single_week}">Single (INR ${single_week})</option>
                <option value="Couple" data-fee="${couple_week}">Couple (INR ${couple_week})</option>
                `;
    }
    if (html != '') {
      $("#appfor").html(html);
      $("#appfor").removeAttr('disabled');
    } else {
      $("#appfor").attr('disabled', true);
    }
    var formdata = $(".dp").serializeToJSON();
    $.ajax({
      type: 'post',
      url: base_url + 'Api/appointment/getslot',
      data: {
        'Data': formdata
      },
      cache: false,
      success: function(resData) {
        // console.log(resData);
        var response = jQuery.parseJSON(resData);
        if (response['Response-Validate'] === true) {
          if (response['Response-Status'] === true) {
            $("#timeslots").html(response['Response-Data']);
          } else if (response['Response-Status'] === false) {
            $.toaster(response['Response-Message'], 'Error', 'danger');
          }
        } else {
          $.each(response['Response-Message'], function(key, value) {
            if (value != '') {
              $.toaster(value, 'Error', 'danger');
              $("#" + key).focus();
              return false;
            }
          });
        }
      },
      error: function(error) {}
    });
    return false;
  }
  // $.fn.bdatepicker = $.fn.datepicker.noConflict();
  var d = new Date();
  var userid = $("#userid").val();
  var month = d.getMonth() + 1;
  var day = d.getDate();
  var output = d.getFullYear() + '-' + (('' + month).length < 2 ? '0' : '') + month + '-' + (('' + day).length < 2 ? '0' : '') + day;
  var date = new Date();
  var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
  var daysshow = $("#daysshow").val();
  $('#datepicker-inline').bdatepicker({
    showOtherMonths: false,
    format: "yyyy-mm-dd",
    startDate: today,
    endDate: daysshow
  }).on('changeDate', function(e) {
    // $('#other-input').val(e.format(0,"dd/mm/yyyy"));
    // alert(e.format(0));
    console.log(e.date);
    if (userid != '') {
      getTimeslot(e.format(0));
    }
  });
  fillolddetail();

  function fillolddetail() {
    $('#apptime').val($("#slottime").val());
  }
  $(document).on("change", "#consult_type", function() {
    var consult_type = $(this).val();
    var explode = consult_type.split(' ');
    if (explode[0] == 'Whatsapp') {
      $("#consultid").attr("placeholder", "Enter Whataspp Number").focus();
    } else {
      $("#consultid").attr("placeholder", "Enter Skype ID").focus();
    }
    if (consult_type != '') {
      $("#consultid").prop("disabled", false);
    } else {
      $("#consultid").prop("disabled", true);
    }
  });
  $(document).on("click", ".time-list-item", function() {
    var appfor = $("#appfor").val();
    var first_name = $("#first_name").val();
    var last_name = $("#last_name").val();
    var consult_type = $("#consult_type").val();
    var consultationtype = $("#consultationtype").val();
    var consultid = $("#consultid").val();
    let placeholder = $("#consultid").attr('placeholder');
    var adate = $(this).data('cdate');
    var timing = $(this).data('timing');
    var param1 = "confirmation";
    $("#timing").val(timing);
    $("#adate").val(adate);
    if (consult_type == '') {
      $.toaster('Please Select Consult Type', 'Error', 'danger');
      $("#consult_type").focus();
    } else if (consultid == '') {
      $.toaster(placeholder, 'Error', 'danger');
      $("#consultid").focus();
    } else {
      $("#payment_wrap").show();
      $("#appointment_wrap").hide();
      $("#apptiming").html(timing);
      $("#appdate").html(moment(adate).format('DD/MM/YYYY'));
      appfor = last_name.charAt(0) + first_name.charAt(0);
      var exurl = base_url + "modal/m/" + param1 + "/" + adate + "/" + timing + "/" + appfor + "/" + first_name + "/" + last_name + "/" + consult_type + "/" + consultationtype + "/" + consultid;

      /*$("#modal_body").load(encodeURI(exurl));*/
      /*$("#MyModalLabel").html('<b>Appointment Confirmation</b>');*/
      /*$('#MyModal').modal('show');*/
    }
  });
</script>