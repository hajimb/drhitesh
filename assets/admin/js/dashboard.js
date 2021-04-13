var table = $('#example1').dataTable();
var calendar ;
$(document).ready(function() {
    calllist();
});

function calllist() {
    $('#example1').dataTable({
        "bProcessing": true,
        "bServerSide": false,
        "bSortClasses": false,
        "destroy": true,
        "columnDefs": [
                      {
                          "targets": 4, // your case first column
                          "className": "text-center"
                     },
                     {
                          "targets": 2, // your case first column
                          "className": "text-wrap"
                     }],
        "sAjaxSource": base_url + 'dashboard/getconsultlist'
    });
}

$(document).on("click", ".GetDetail", function() {
    var ID = $(this).data('id');
    var exurl = base_url + "Api/appointment/getdetail/" + ID;
    $("#modal_body").load(exurl);
    $("#mySmallModalLabel").html('<b>Patient Detail</b>');
    $('#mainModel').modal('show');
});

$(document).on("click", ".edit", function() {
    var ID = $(this).data('id');
    var exurl = base_url + "Api/appointment/update/" + ID;
    $("#modal_body").load(exurl);
    $("#mySmallModalLabel").html('<b>Update Appointment Detail </b>');
    $('#mainModel').modal('show');
});

$(document).on("click", ".confirm", function() {
    var ID = $(this).data('id');
    confirmappoint(ID);
});


function confirmappoint(rowid) {
    swal({
        title: "Confirm Appointment",
        text: "Are you sure you want to Confirm this Appointment ?",
        type: "success",
        showCancelButton: true,
        confirmButtonColor: "#009551",
        confirmButtonText: "Yes",
        cancelButtonText: "No",
        closeOnConfirm: false,
        closeOnCancel: true,
        closeOnClickOutside: false,
        //timer: 5000,
    },
    function(isConfirm) {
        if (isConfirm) {
            confirmbox(rowid);
        } else {
            swal("Cancelled !!", "Hey, your product remain in cart !!", "error");
        }
    });
}

function confirmbox(ID) {
    $.ajax({
        type: 'post',
        url: base_url + 'Api/appointment/confirm',
        data: { id: ID },
        success: function(resData) {
            console.log(resData);
            var response = jQuery.parseJSON(resData);
            if (response['Response-Validate'] === true) {
                if (response['Response-Status'] == true) {
                    swal("Success !!", response['Response-Message'], "success");
                    // table.fnClearTable();
                    // table.fnDraw();
                    calllist();
                    $('#calendar').fullCalendar('refetchEvents');
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
}


function getTimeslot(date) {
    $("#apptime").html('');
    $.ajax({
        type: 'get',
        url: base_url + 'Api/appointment/getslot/' + date + '/admin',
        cache: false,
        success: function(resData) {
            console.log(resData);
            var response = jQuery.parseJSON(resData);
            if (response['Response-Validate'] === true) {
                if (response['Response-Status'] === true) {
                    $("#apptime").html(response['Response-Data']);
                } else if (response['Response-Status'] === false) {
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
}


$(document).on("click", "#update", function(e) {
    var formname = $(this).data('form');
    console.log($("#" + formname + " :input").serialize());
    $("#toaster").remove();
    e.preventDefault();
    $.ajax({
        type: "post",
        url: base_url + "Api/appointment/edit",
        data: $("#" + formname + " :input").serialize(),
        dataType: "json",
        success: function(resData) {
            console.log("resData " + JSON.stringify(resData));
            if (resData["Response-Validate"] == false) {
                $.each(resData["Response-Message"], function(k, v) {
                    if (v != "") {
                        $.toaster(v, "Error", "danger");
                        /*if ($("#" + formname + " input[name='" + k + "']").length > 0) {
                            $("#" + formname + " input[name='" + k + "']").focus();
                        } else if ($("." + formname + " select[name='" + k + "']").length > 0) {
                            $("#" + formname + " select[name='" + k + "']").focus();
                        } else if ($("." + formname + " textarea[name='" + k + "']").length > 0) {
                            $("#" + formname + " textarea[name='" + k + "']").focus();
                        }*/
                        return false;
                    }
                });
            } else if (resData["Response-Status"] == false) {
                $.toaster(resData["Response-Message"], "Error", "danger")
            } else {
                    $.toaster(resData["Response-Message"], "Success", "success");
                    // setTimeout(function(){window.location = base_url+'dashboard' }, 1000);
                    $('#calendar').fullCalendar('refetchEvents');
                    calllist();
                    $('#mainModel').modal('hide');
                    return false;
            }
        },
        error: function(xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            console.log(err.Message);
            $(".preloader").hide()
        }

    });
    
    return false;
});

/////////////////////////////Calendar


$(document).ready(function() {


    // callCalendar()
    var date_last_clicked = null;
   calendar= $('#calendar').fullCalendar({
        eventSources: [{
           events: function(start, end, timezone, callback) {
                $.ajax({
                    url: base_url+'Api/appointment/getconsultlistCalendar',
                    dataType: 'json',
                    data: {
                        // our hypothetical feed requires UNIX timestamps
                        start: start.unix(),
                        end: end.unix()
                    },
                    success: function(msg) {
                        var events = msg.events;
                        console.log(events);
                        callback(events);
                    }
                });
              }
            },
        ],
        eventClick: function(event, jsEvent, view) {
            var array = $.map(event.start, function(value, index) {
                return [value];
            });
            
            var exurl = base_url + "Api/appointment/update/" + event.id;
            $("#modal_body").load(exurl);
            $("#mySmallModalLabel").html('<b>Update Appointment Detail </b>');
            $('#mainModel').modal('show');
            
        },
    });
});
function callCalendar(){

}