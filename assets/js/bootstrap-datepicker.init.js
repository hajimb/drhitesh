$.fn.bdatepicker = $.fn.datepicker.noConflict();
var d = new Date();
var userid = $("#userid").val();
var month = d.getMonth() + 1;
var day = d.getDate();

var output = d.getFullYear() + '-' +
    (('' + month).length < 2 ? '0' : '') + month + '-' +
    (('' + day).length < 2 ? '0' : '') + day;

var date = new Date();
var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());

var daysshow = $("#daysshow").val();
$(function() {

    /* DatePicker */
    // default
    // $("#datepicker1").bdatepicker({
    // 	format: 'yyyy-mm-dd',
    // 	startDate: "2013-02-14"
    // });

    // // component
    // $('#datepicker2').bdatepicker({
    // 	format: "dd MM yyyy",
    // 	startDate: "2013-02-14"
    // });

    // // today button
    // $('#datepicker3').bdatepicker({
    // 	format: "dd MM yyyy",
    // 	startDate: "2013-02-14",
    // 	todayBtn: true
    // });

    // // advanced
    // $('#datetimepicker4').bdatepicker({
    // 	format: "dd MM yyyy - hh:ii",
    //        autoclose: true,
    //        todayBtn: true,
    //        startDate: "2013-02-14 10:00",
    //        minuteStep: 10
    // });

    // // meridian
    // $('#datetimepicker5').bdatepicker({
    // 	format: "dd MM yyyy - HH:ii P",
    //     showMeridian: true,
    //     autoclose: true,
    //     startDate: "2013-02-14 10:00",
    //     todayBtn: true
    // });

    // other


    if ($('#datepicker').length) $("#datepicker").bdatepicker({ showOtherMonths: true });
    if ($('#datepicker-inline').length) $('#datepicker-inline').bdatepicker({ inline: true, showOtherMonths: false, startDate: today, endDate: '+7d', });
    // alert('userid')
    if(userid!=''){getTimeslot(output);}
});

$('#datepicker-inline').bdatepicker({ showOtherMonths: false, format: "yyyy-mm-dd", startDate: today, endDate: daysshow }).on('changeDate', function(e) {
    // $('#other-input').val(e.format(0,"dd/mm/yyyy"));
    // alert(e.format(0));
    console.log(e.date);
    if(userid!=''){getTimeslot(e.format(0));}    
});