var table = $('#example1').dataTable();



$(document).ready(function() {

  calllist(); 

})

function calllist(){

  $('#example1').dataTable( {

    "bProcessing" : true,"bServerSide" : false,"bSortClasses" : false,"destroy"   : true,

    "sAjaxSource": base_url+'user/getuserlist'

  }); 

}
