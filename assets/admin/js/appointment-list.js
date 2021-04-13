var table = $('#example1').dataTable();
$(document).ready(function() {
  calllist(); 
})

function calllist(){
  $('#example1').dataTable( {
    "bProcessing" : true,"bServerSide" : false,"bSortClasses" : false,"destroy"   : true,
    "sAjaxSource": base_url+'Api/appointment/getlist'
  }); 
}

$(document).on("click", ".GetDetail", function() {
    var ID = $(this).data('id');
    var exurl = base_url + "Api/appointment/getdetail/" + ID;
    $("#modal_body").load(exurl);
    $("#mySmallModalLabel").html('<b>Patient Detail</b>');
    $('#mainModel').modal('show');
});
