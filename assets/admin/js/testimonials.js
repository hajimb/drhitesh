var table = $('#example1').dataTable();

$(document).on("click", "#add", function() {

  var formId = $(this).data('form');
  var formdata = $("#" + formId).serialize();

  var Id = $("#id").val();



  $.ajax({

    type: 'post',

    url: base_url + 'testimonials/addnew',

    data: formdata,

    cache: false,

    success: function(resData) {



      var response = jQuery.parseJSON(resData);

      if (response['Response-Validate'] === true) {

        if (response['Response-Status'] == true) {

          $.toaster(response['Response-Message'], 'Success', 'success');



          if (Id == 0) { $('input[type=text]').val('');
            $('select').val(1); }

          calllist();

        } else if (response['Response-Status'] == false) {

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

    "sAjaxSource": base_url + 'testimonials/getlist/'

  });

}



$(document).on("click", ".GetDetail", function() {

  var ID = $(this).data('id');



  $.ajax({

    type: 'post',

    url: base_url + 'testimonials/getById',

    data: { id: ID },

    cache: false,

    success: function(resData) {

      console.log(resData);

      var response = jQuery.parseJSON(resData);

      $("#deletediv").show();

      $('#id').val(response.data['id']);

      $('#name').val(response.data['name']);
      $('#category').val(response.data['category']);
      $('#testimonial').val(response.data['testimonial']).attr('rows', 6);
      $('#active').val(response.data['active']);
      $('#add').html('Update');
      $('#reset').html('Back');

    },

    error: function(error) {}

  });

  return false;

});



$(document).on("click", "#resetfield", function() {

  $('#name,#testimonial,#testimonial_date,#category').val('');

  $('#active').val(1);
  $('#id').val(0);
  $('#add').html('Add');
  $('#reset').html('Reset');

});