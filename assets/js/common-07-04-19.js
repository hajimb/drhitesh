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
    var modal = $(this).data('modal');
    var url   = base_url + 'modal/popup/' + id + '/' + modal ;
    var title = modal.replace(/_/g, ' ');  
    $('body').addClass('modal-open');   
    $("#ModalBody").html(''); 
  $("#modal_body").load(url);
  $("#myModalLabel").html('<b>Delete</b>');
  
  $('#myModal').modal('show');
  $("#deletebtn").html(param2);
});
$(document).on("click", "#deletebtn" , function() {
   var formdata = $("#state_form :input").serialize();
   $.ajax({
     type    : "POST",
     url     : base_url+"qualification/delete",
     data    : formdata,
     success : function(data){
      var result = $.parseJSON(data);
      if(result.status =='success'){
        $.toaster(result.message, 'Success', 'success');
        setTimeout(function(){$("#myModal").modal('hide');calllist();}, 3015);
      }else if(result.status =='fail'){
         $.toaster(result.message, 'Error', 'danger');
      }
      else{
        var result = $.parseJSON(data);
        $.each(result, function(key, val) {
          $('[name="'+ key +'"]').after(val);
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
