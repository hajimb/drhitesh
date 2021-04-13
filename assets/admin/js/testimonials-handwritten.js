var table = $('#example1').dataTable();

$(document).on("click","#add",function(e){
    e.preventDefault();
    var formdata = new FormData($("#testmonialForm")[0]);
    $.ajax({
     url     : base_url+"testimonials/addnewhandwritten",
     contentType : false,
     cache   : false,
     processData : false,
     data    : formdata,
     type    : 'POST',
     dataType    : 'json',
     success : function(response){
      // alert(resData);
      console.log(response);
      // var response = jQuery.parseJSON(resData);
      var {Status,Validate,Message} = response;
      // alert(Status);
      if (Validate === true) {
        if(Status === true){
          $.toaster(Message, 'Success', 'success');
          ResetMe();
          $("#add").prop('disabled',false);
          calllist();
        }else if(Status === false){
          $.toaster(Message, 'Error', 'danger');
          $("#add").prop('disabled',false);
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
        $("#add").prop('disabled',false);
    }
   });
   $("#add").prop('disabled',false);
   return false;  //stop the actual form post !important!

});

$(document).ready(function() {
  calllist(); 
});

function calllist(){
  $('#example1').dataTable( {
    "bProcessing" : true,"bServerSide" : false,"bSortClasses" : false,"destroy"   : true,
    "sAjaxSource": base_url + 'testimonials/gethandwrittenlist'
  }); 
}

$(document).on("click",".GetDetail",function(){
  var ID = $(this).data('id');
  $.ajax({
    type    : 'post',
    url     : base_url+'testimonials/gethandwrittenById',
    data    : {id:ID},
    dataType:'json',
    cache   : false,
    success : function(response){
      console.log(response);
      // var response = jQuery.parseJSON(resData);
      var {id,comment,image,active} = response;
      // alert(image)
      if(image!=''){
        $("#oldimagewrapper").show();
        $("#image").attr('src',base_url+'uploads/testimonial/'+image);
      }else {
        $("#imagewrapper").hide();
        $("#image").attr('src','');
      }
      $('#id').val(id);
      $('#comment').val(comment).attr('rows',5);
      $('#active').val(active);
      $('#add').html('Update');
      $('#reset').html('Back');
     },
    error : function(error){
    }
  });
  return false;
 });



$(document).on("click","#resetfield",function(){
  ResetMe();
   return false;

});

function ResetMe(){
  $('#comment,#filename,#oldimage').val('');
  $('#active').val(1);
  $('#id').val(0);
  $('#add').html('Add');$('#reset').html('Reset');
  $("#image").attr('src','');
  return false;

}