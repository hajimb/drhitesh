if(userid !=''){
    $("#online-wologin").show();
}

$(document).on("change","#appfor",function(){
    var val = $(this).val();
    var fee = $('option:selected', this).attr('data-fee');
    // alert(fee);
    if(val != ''){
        $('#feeamount').val(fee);
        // Show('apptype' ,'Patient_name' ,val);
    }else{
        $('#feeamount').val('');
    }
});

$(document).on("click","#addPatient",function(){
    $("#first_name,#last_name,#spouse_first_name,#spouse_last_name").val('');

    var app_type      = $("#appfor").val();
    var p_first_name  = $("#p_first_name").val();
    var p_last_name   = $("#p_last_name").val();
    var s_first_name  = $("#s_first_name").val();
    var s_last_name   = $("#s_last_name").val();

    if(p_first_name==''){
        $.toaster('Please Enter Patient First Name', 'Error', 'danger');
        $("#p_first_name").focus();
    }else if(p_last_name==''){
        $.toaster('Please Enter Patient Last Name', 'Error', 'danger');
        $("#p_last_name").focus();
    }else if(app_type=='Couple'){
        if(s_first_name==''){
            $.toaster('Please Enter Spouse / Partner First Name', 'Error', 'danger');
            $("#s_first_name").focus();
        }else if(s_last_name==''){
            $.toaster('Please Enter Spouse / Partner Last Name', 'Error', 'danger');
            $("#s_last_name").focus();
        }
    }
    // else{
        $("#first_name").val(p_first_name);
        $("#last_name").val(p_last_name);
        $("#spouse_first_name").val(s_first_name);
        $("#spouse_last_name").val(s_last_name);
        $('#MyModal').modal('hide');
    // }
    
});

$(document).on("click",".gotoregister",function(){
    window.location = base_url+'register';
});

$(document).on("click",".loginbtn",function(){
    $("#toaster").remove();
    var formdata = $("#loginform").serialize();
    //console.log(formdata);
    $.ajax({
        type    : 'post',
        url     : base_url+'login/signin',
        data    : formdata,
        cache   : false,
        success : function(resData){
         // console.log(resData);
            var response = jQuery.parseJSON(resData);
            if (response['Response-Validate'] === true) {
                if(response['Response-Status'] === true){
                    $.toaster('Successfully Login', 'Success', 'success');
                    setTimeout(function() {location.reload();}, 3000);
                }else if(response['Response-Status'] === false){
                    $.toaster(response['Response-Message'], 'Error', 'danger');
                }
            }
            else{
                $.each(response['Response-Message'], function(key, value) {
                    if(value!=''){
                        $.toaster(value, 'Error', 'danger');
                        $("#"+key).focus();
                        return false;
                    }
                });
            }
         },
        error : function(error){
            return false;
        }
    });
    return false;
});

$(document).on('click',"#cancelpayment",function(){
    $("#payment_wrap").hide();
    $("#appointment_wrap").show();
})

function getTimeslot(date) {
    $("#datein").val(date);
    $("#timeslots").html('');
    var newdate     = new Date(date);
    var single_week = $("#single_week").val();
    var single_sun  = $("#single_sun").val();
    var couple_week = $("#couple_week").val();
    var couple_sun  = $("#couple_sun").val();
    var html ='';
    var dayOfWeek = newdate.getUTCDay();
    if(dayOfWeek == 0){
        html += `<option value="">Select Appointment Type</option>
                <option value="Single" data-fee="${single_sun}">Single (INR ${single_sun})</option>
                <option value="Couple" data-fee="${couple_sun}">Couple (INR ${couple_sun})</option>
                `;
    }else{
        html += `<option value="">Select Appointment Type</option>
                <option value="Single" data-fee="${single_week}">Single (INR ${single_week})</option>
                <option value="Couple" data-fee="${couple_week}">Couple (INR ${couple_week})</option>
                `;
    }

    if(html!=''){
        $("#appfor").html(html);
        $("#appfor").removeAttr('disabled');
    }else{
        $("#appfor").attr('disabled',true);
    }
    var formdata = $(".dp").serializeToJSON();
    $.ajax({
        type: 'post',
        url: base_url + 'Api/appointment/getslot',
        data: { 'Data': formdata },
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

$(document).on("change","#appfor",function(){
    // alert('ddd:');
    var appfor = $("#appfor").val();
    if(appfor==0){
        $(".txthidden").show();
    }else{
        $(".txthidden").hide();
    }
});

$(document).on("click",".accept",function(){
    if($(this).prop("checked") == true){
        $("#PayNow").removeClass('disabled');
        $("#PayNow").attr('href',$("#purl").val());
        // $("#PayNow").attr('href','javascript:void(0)');
    }
    else if($(this).prop("checked") == false){
        $("#PayNow").addClass('disabled');
        $("#PayNow").attr('href',"javascript:void(0)");
    }
});

$(document).on("change","#consult_type",function(){
    var consult_type = $(this).val();
    var explode = consult_type.split(' ');
    if(explode[0] == 'Whatsapp'){
        $("#consultid").attr("placeholder", "Enter Whataspp Number");
    }else{
        $("#consultid").attr("placeholder", "Enter Skype ID");
    }
    if(consult_type != ''){$("#consultid").prop("disabled", false);}
    else{$("#consultid").prop("disabled", true);}
});

$(document).on("click",".time-list-item",function(){
    alert()
    var appfor = $("#appfor").val();
    var first_name = $("#first_name").val();
    var last_name = $("#last_name").val();
    var consult_type = $("#consult_type").val();
    var consultationtype = $("#consultationtype").val();
    var consultid = $("#consultid").val();
    let placeholder = $("#consultid").attr('placeholder');
    var adate  = $(this).data('cdate');
	var timing = $(this).data('timing');
    var param1 = "confirmation";
    $("#timing").val(timing);
    $("#adate").val(adate);
    if(appfor == ''){
        $.toaster('Please Select Appointment For', 'Error', 'danger');
        $("#appfor").focus();
    }
   
    else if(consult_type == ''){
        $.toaster('Please Select Consult Type', 'Error', 'danger');
        $("#consult_type").focus();
    }else if(consultid == ''){
        $.toaster(placeholder, 'Error', 'danger');
        $("#consultid").focus();
    }else{
        $("#payment_wrap").show();
        $("#appointment_wrap").hide();
        $("#apptiming").html(timing);
        $("#appdate").html(moment(adate).format('DD/MM/YYYY'));
        appfor = last_name.charAt(0)+first_name.charAt(0);
        var exurl = base_url + "modal/m/" + param1 + "/" + adate + "/" + timing+"/"+appfor+"/"+first_name+"/"+last_name+"/"+consult_type+"/"+consultationtype+"/"+consultid;
        // alert(exurl);
        /*$("#modal_body").load(encodeURI(exurl));*/
        /*$("#MyModalLabel").html('<b>Appointment Confirmation</b>');*/
        /*$('#MyModal').modal('show');*/
    }
});

/*$(document).on("click","#PayNow",function(){
    // var formdata = $(".dp").serialize();
    var formdata = $("#appointment_form").serialize();

    $("#MyModal").modal('hide');
    $("#paypalform").submit();
    return false;
});*/


$(document).on("click","#PayNow",function(){
    var formdata = $("#appointment_form :input").serialize();
    var formId = "appointment_form";
    //alert(formdata)
    //alert(formdata)
    $.ajax({
        type    : 'post',
        url     : base_url+'payment/ccavRequestHandler',
        data    : formdata,
        cache   : false,
        dataType: "json",
        success : function(resData){
            console.log(`resData ${JSON.stringify(resData)}`);
            
            const {Status,Validate,Message,Data:{encrypted_data,access_code,url}} = resData;
            // var response = jQuery.parseJSON(resData);
            // console.log(`resData ${JSON.stringify(resData)}`);
            // console.log(`Status ${Status}`);
            // console.log(`Validate ${Validate}`);
            console.log(`encrypted_data ${encrypted_data}`);
            console.log(`access_code ${access_code}`);
            console.log(`ccurl ${url}`);
            // return false;
            if (Validate === true) {
                if (Status === true) {
                    // $.toaster(Message, 'Success', 'success');
                    var form  = $('<form action="' + url + '" method="post" id="paymentform" name="paymentform">' +
                      '<input type="hidden" name="encRequest" value="' + encrypted_data + '" />' +
                      '<input type="hidden" name="access_code" value="' + access_code + '" />' +
                      '</form>');
                    $('body').append(form);
                    $("#paymentform").submit();

                } else if (Status === false) { 
                    $.toaster(Message, 'Error', 'danger'); 
                    return false; 
                }
            } else {
                $.each(Message, function(key, value) {
                    if (value !== '') {
                        $.toaster(value, 'Error', 'danger');
                        $("#" + formId + " input[name='" + key + "']").focus();
                        return false;
                    }
                });
            }
         },
        error : function(error){
            console.log(`error ${JSON.stringify(error)}`);
        }
    });
});