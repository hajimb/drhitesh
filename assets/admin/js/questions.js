var table = $('#example1').dataTable();

$(document).ready(function() {
  calllist(); 
//  alert(base_url+'question/getquestionlist/'+param3);
});
function calllist(){
  $('#example1').dataTable( {
    "bProcessing" : true,"bServerSide" : false,"bSortClasses" : false,"destroy"   : true,
    "sAjaxSource": base_url+'question/getquestionlist/'+param3
  }); 
}

$(document).on("click",".view",function(){
  var ID = $(this).data('id');
/*
  $.ajax({
    type    : 'post',
    url     : base_url+'delete.php',
    data    : {id:ID},
    cache   : false,
    success : function(resData){
      console.log(resData);
      var response = jQuery.parseJSON(resData);
      if (response['Response-Validate'] === true) {
        if(response['Response-Status']  == true){
          $.toaster(response['Response-Message'], 'Success', 'success');
          table.fnClearTable();
          table.fnDraw();
          calllist();
        }else if(response['Response-Status'] == false){
          $.toaster(response['Response-Message'], 'Error', 'danger');
        }
      }
      else{
        $.each(response['Response-Message'], function(key, value) {
          if(value != ''){
            $.toaster(value, 'Error', 'danger');
            $("#"+key).focus();
            return false;
          }
        });
      }
     },
    error : function(error){}
  });
  return false;
  */
  $('#myModal').modal('show');
});