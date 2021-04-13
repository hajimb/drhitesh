
$(document).on("click", ".getCalendar", function(){
    var datatype = $(this).attr('data-type');
    var title = datatype+"-Appointment";
    ShowAppointmentModal('AppointmentFollowup' ,title , datatype)
    return false;
});

function ShowAppointmentModal(modalname ,title ,apptype){
    // param1 modalname
    // param2 title
    // param3 no
    var exurl  = base_url+"modal/appointment/"+modalname+"/"+title+"/"+apptype;
    var ftitle = title.replace(/_/g , ' ');
    $('#MyModal .modal-dialog').addClass('modal-lg');
    $("#modal_body").load(encodeURI(exurl));
    $("#MyModalLabel").html('<b>'+ftitle+'</b>');
    $('#MyModal').modal('show');
}

$(document).on('click',"#cancelpayment",function(){
    $("#payment_wrap").hide();
    $("#appointment_wrap").show();
})

$(document).on("click","#confirmBooking",function(){
    var formdata = $("#appointment_form :input").serialize();
    var formId = "appointment_form";
    //alert(formdata)
    //alert(formdata)
    $.ajax({
        type    : 'post',
        url     : base_url+'Api/appointment/confirmBooking',
        data    : formdata,
        cache   : false,
        dataType: "json",
        success : function(resData){
            // console.log(`resData ${JSON.stringify(resData)}`);
            
            let {status, validate, message} = resData;
           
            if (validate === true) {
                if (status === true) {
                    $('#appointment_wrap,#payment_wrap').hide();
                    $.toaster(message, 'Success', 'success'); 

                    $('#message').html(message).show();
                    $('#MyModal').modal('hide');
                } else if (status === false) { 
                    $.toaster(message, 'Error', 'danger'); 
                    $('#message').html('').hide();
                    $('#appointment_wrap').show();
                    return false; 
                }
            } else {
                $.each(message, function(key, value) {
                    if (value !== '') {
                        $.toaster(value, 'Error', 'danger');
                        $("#" + formId + " textarea[name='" + key + "']").focus();
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

$(document).on("click", ".followup", function(){
    var appId  = $(this).attr('data-id');
    var exurl  = base_url+"modal/followup/"+appId;
    $("#modal_body").load(encodeURI(exurl));
    $("#MyModalLabel").html('<b>Add Followup</b>');
    $('#MyModal').modal('show');
});
$(document).on("click", "#addfollowup",function(){
    var formId   = $(this).data('form');
    var formdata = $("#"+formId+" :input").serialize();
    //alert(formdata)
    //alert(formdata)
    $.ajax({
        type    : 'post',
        url     : base_url+'Api/appointment/addfollowup',
        data    : formdata,
        cache   : false,
        dataType: "json",
        success : function(resData){
            // console.log(`resData ${JSON.stringify(resData)}`);
            
            let {status, validate, message} = resData;
           
            if (validate === true) {
                if (status === true) {
                    $.toaster(message, 'Success', 'success'); 
                    $('#MyModal').modal('hide');
                } else if (status === false) { 
                    $.toaster(message, 'Error', 'danger'); 
                    return false; 
                }
            } else {
                $.each(message, function(key, value) {
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