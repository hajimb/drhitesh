var table = $('#example1').dataTable();

$(document).on("click", "#add", function() {

  var formId = $(this).data('form');
  var formdata = $("#" + formId).serialize();

  var Id = $("#id").val();



  $.ajax({

    type: 'post',

    url: base_url + 'symptoms/addnew',

    data: formdata,
    dataType: 'json',

    cache: false,

    success: function(response) {

      console.log(response);

      var {Status,Validate,Message} = response;

      if (Validate === true) {

        if (Status === true) {

          $.toaster(Message, 'Success', 'success');
          reset(); 

          calllist();

        } else if (Status === false) {

          $.toaster(Message, 'Error', 'danger');

        }

      } else {

        $.each(Message, function(key, value) {

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

});

$(document).ready(function() {

  calllist();

});

function calllist() {

  $('#example1').dataTable({

    "bProcessing": true,
    "bServerSide": false,
    "bSortClasses": false,
    "destroy": true,

    "sAjaxSource": base_url + 'symptoms/getlist/'

  });

}



$(document).on("click", ".GetDetail", function() {
  var ID = $(this).data('id');
  $.ajax({
    type: 'post',
    url: base_url + 'symptoms/getById',
    data: { id: ID },
    dataType: 'json',
    cache: false,
    success: function(resData) {
      var {id,symptoms,status}=resData;
      $('#id').val(id);
      $('#symptoms').val(symptoms);
      $('#status').val(status);
      $('#add').html('Update');
      $('#reset').html('Back');
    },
    error: function(error) {}
  });
  return false;
});


$(document).on("click", "#resetfield", function() {
  reset();
});

function reset(){
  $('#status,#symptoms').val('');
  $('#id').val(0);
  $('#add').html('Add');
  $('#reset').html('Reset');
}