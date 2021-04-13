var table = $('#example1').dataTable();

$(document).on("click", "#add", function(e) {
    var formname = $(this).data('form');
    var formdata = $("#"+formname).serialize();
    var Id = $("#id").val();
    $.ajax({
        type: 'post',
        url: base_url + 'icons/create',
        data: formdata,
        cache: false,
        success: function(resData) {
            console.log("resData "+resData);
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
    e.preventDefault();
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
        "sAjaxSource": base_url + 'icons/getlist'
    });
}

$(document).on("click", ".GetDetail", function() {
    var ID = $(this).data('id');
    $.ajax({
        type: 'post',
        url: base_url + 'icons/getById',
        data: { id: ID },
        cache: false,
        success: function(resData) {
            console.log(resData);
            var response = jQuery.parseJSON(resData);
            $("#deletediv").show();
            $('#id').val(response.data['id']);
            $('#iconname').val(response.data['iconname']);
            $('#icon').val(response.data['icon']);
            $('#status').val(response.data['status']);
            $('#deleted').val(response.data['deleted']);
            $('#add').html('Update');
            $('#reset').html('Back');
        },
        error: function(error) {}
    });
    return false;
});

$(document).on("click", "#resetfield", function() {
    $('#icon').val('');
    $('#iconname').val('');
    $('#status').val(1);
    $('#add').html('Add');
    $('#reset').html('Reset');
    $('#id').val(0);
    $("#deletediv").hide();
    return false;
});