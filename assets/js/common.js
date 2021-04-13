'use strict';
$(document).on("click",".getdata",function(){
    var id    = $(this).data('id');
    var modal = $(this).data('modal');
    var url   = base_url + 'modal/popup/' + modal + '/' + id;
    //console.log(url);
    $('body').addClass('modal-open');    
    $.ajax({
        url: url,
        success: function(resData){
          console.log('resData '+resData);
            $(".modal-content").html('');
            $(".modal-content").html(resData);
            $('.closebtn').show();
            setTimeout(function(){$('#myModal').modal('show');});
        },
        error: function(error){$('body').removeClass('modal-open');}
    });
});

$('#myModal').on('hidden.bs.modal', function () {
  $('body').removeClass('modal-open');
  $("button").prop('disabled',false);
});


$(document).on("click","#back",function(){
    window.history.go(-1);
});

$("#wamount,#mobile").on("keypress",function (event) {    
   var key = $(this).attr('id');
   $(this).val($(this).val().replace(/[^\d].+/, ""));
   if((event.which < 48 || event.which > 57)) {
       $.toaster('Please Enter Number Only', 'Error', 'danger');
       $("#"+key).focus();
       event.preventDefault();
   }
});
$(document).on("click", ".delete" , function() {
    var id    = $(this).data('id');
    var del   = $(this).data('module');
    var title = $(this).data('title');
    var url   = base_url + 'modal/delete/' + id + '/' + del + '/' + encodeURI(title);
    // alert(url);
    $('body').addClass('modal-open');   
    // $("#ModalBody").html(''); 
    $("#modal-body-delete").load(url);
    $("#modal-delete #myModalLabel").html('<b>Delete</b>');
    $('#modal-delete').modal('show');
    $("#deletebtn").html('Confirm');
});


$(document).on("click", "#deletebtn" , function() {
   var formdata = $("#deleteForm :input").serialize();
   $.ajax({
     type    : "POST",
     url     : base_url+"Api/common/delete",
     data    : formdata,
     dataType: 'json',
     success : function(response){
      console.log(response);
      var {Status,Validate,Message} = response;
      // alert(Status);
      if (Validate === true) {
        if(Status  === true){
          $.toaster(Message, 'Success', 'success');
          $("#modal-delete").modal('hide');
          calllist();
          reset();
        }else if(Status === false){
          $.toaster(Message, 'Error', 'danger');
          return false;
        }
      }else{
        $.each(Message, function(key, value) {
          if (value != '') {
            $.toaster(value, 'Error', 'danger');
            $("#" + key).focus();
            return false;
          }
        });
      }
     },error: function(){
    }
   });
   event.preventDefault();
   return false;  //stop the actual form post !important!
});

function Show(modalname ,title ,apptype){
    // param1 modalname
    // param2 title
    // param3 no
    var exurl  = base_url+"modal/apppopup/"+modalname+"/"+title+"/"+apptype;
    console.log(exurl);
    var ftitle = title.replace(/_/g , ' ');
    //alert(param2);
    //alert(param4);
    $("#modal_body").load(encodeURI(exurl));
    $("#MyModalLabel").html('<b>'+ftitle+'</b>');
    $('#MyModal').modal('show');
}
