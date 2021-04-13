if(userid !=''){
    $("#online-wologin").show();
}

$(document).on("change","#app_type",function(){
    var val = $(this).val();
    var fee = $('option:selected', this).attr('data-fee');
    if(val!=''){
        $('#feeamount').val(fee);
        Show('apptype' ,'Patient_name' ,val);
    }else{
        $('#feeamount').val('');
    }
});

$(document).on("click","#addPatient",function(){
    $("#first_name,#last_name,#spouse_first_name,#spouse_last_name").val('');

    var app_type      = $("#app_type").val();
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


function getTimeslot(date) {
    $("#datein").val(date);
    $("#timeslots").html('');
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
    if(explode[0]=='Whatsapp'){
        $("#consultid").attr("placeholder", "Enter Whataspp Number");
    }else{
        $("#consultid").attr("placeholder", "Enter Skype ID");
    }
    if(consult_type!=''){$("#consultid").prop("disabled", false);}
        else{$("#consultid").prop("disabled", true);}
});

$(document).on("click",".time-list-item",function(){
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


    if(appfor==''){
        $.toaster('Please Select Appointment For', 'Error', 'danger');
        $("#appfor").focus();
    }
    /*else if(first_name==''){
        $.toaster('Please Enter Patient First Name', 'Error', 'danger');
        $("#first_name").focus();
    }else if(last_name==''){
        $.toaster('Please Enter Patient Last Name', 'Error', 'danger');
        $("#last_name").focus();
    }*/
    else if(consult_type==''){
        $.toaster('Please Select Consult Type', 'Error', 'danger');
        $("#consult_type").focus();
    }else if(consultid==''){
        $.toaster(placeholder, 'Error', 'danger');
        $("#consultid").focus();
    }else{
   
        appfor = last_name.charAt(0)+first_name.charAt(0);
        var exurl  = base_url + "modal/popup/" + param1 + "/" + adate + "/" + timing+"/"+appfor+"/"+first_name+"/"+last_name+"/"+consult_type+"/"+consultationtype+"/"+consultid;
        $("#modal_body").load(encodeURI(exurl));
        $("#MyModalLabel").html('<b>Appointment Confirmation</b>');
        $('#MyModal').modal('show');
    }
});

$(document).on("click","#PayNow",function(){
    
    // var formdata = $(".dp").serialize();
    $("#MyModal").modal('hide');
    $("#paypalform").submit();
    /*console.log(formdata);
    $.ajax({
        type    : 'post',
        url     : base_url+'paypaltest/create_payment_with_paypal',
        data    : formdata,
        cache   : false,
        success : function(resData){
         console.log(resData);
            var response = jQuery.parseJSON(resData);
            if (response['Response-Validate'] === true) {
                if(response['Response-Status'] == true){
                    $.toaster('Successfully Login', 'Success', 'success');
                    // setTimeout(function() {window.location = base_url+"/ask-sexologist";}, 3000);
                }else if(response['Response-Status'] == false){
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
    });*/
    return false;
});