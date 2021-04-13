
var patient_id = $('#patient_id').val();
CKEDITOR.on( 'instanceCreated', function ( event ) {
    var editor = event.editor,
    element = editor.element;
    editor.on( 'configLoaded', function () {

        editor.config.toolbarGroups = [
            { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
            { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
            { name: 'styles', groups: [ 'styles' ] },
            { name: 'colors', groups: [ 'colors' ] },
        ];

        // editor.config.removeButtons = 'Source,Save,Templates,SelectAll,Scayt,Form,CopyFormatting,RemoveFormat,NumberedList,BulletedList,Outdent,Indent,Blockquote,CreateDiv,JustifyLeft,JustifyCenter,JustifyRight,JustifyBlock,Language,BidiRtl,BidiLtr,Link,Unlink,Anchor,Image,Flash,Table,HorizontalRule,Smiley,PageBreak,Iframe,Format,Styles,Maximize,ShowBlocks,About,NewPage,Preview,Print,Cut,Copy,Paste,PasteText,PasteFromWord,Find,Replace,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Font,FontSize';
    });
} );

CKEDITOR.replace( 'editor1' , {
    toolbar: [
    ['Source'],                              
    ['Save'],
    ['Cut','Copy','Paste','PasteText','PasteFromWord'],
    ['Undo','Redo', 'Find','Replace','SelectAll','RemoveFormat'],
    ['Link','Image','Unlink','Anchor'],
    ['Table','Smiley'],
    ['TextColor','BGColor'],
    ['Maximize','Preview'],
    '/',
    ['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
    ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],
    ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
    ['FontSize']
    ] 
});

$(document).on("click", "#pateintprofile", function(e) {
    var  data ={
        first_name : $("#first_name").html(),
        middle_name : $("#middle_name").html(),
        last_name : $("#last_name").html(),
        patient_dob : $("#patient_dob").html(),
        patient_age : $("#patient_age").html(),
        maritalstatus : $("#maritalstatus").val(),
        marital_since : $("#marital_since").html(),
        tomarry : $("#tomarry").html(),
        country_code : $("#country_code").html(),
        mobile : $("#mobile").html(),
        emailaddress : $("#emailaddress").html(),
        landline : $("#landline").html(),
        education : $("#education").val(),
        occupation : $("#occupation").val(),       
        patient_id : param3    
    }
    $.ajax({
        type: 'post',
        url: base_url + 'Api/patient/profile',
        data: data,
        cache: false,
        success: function(resData) {
            var response = jQuery.parseJSON(resData);
            // console.log(resData);
            if (response['Response-Validate'] === true) {
                if (response['Response-Status'] === true) {
                    $.toaster(response['Response-Message'], 'Success', 'success');
                } else if (response['Response-Status'] === false) {
                    $.toaster(response['Response-Message'], 'Error', 'danger');
                }
            } else {
                $.each(response['Response-Message'], function(key, value) {
                    if (value != '') {
                        $.toaster(value, 'Error', 'danger');
                        $("#" + formname + " input[name='" + key + "']").focus();
                        return false;
                    }
                });
            }
        },
        error: function(error) {}
    });
    e.preventDefault();    
});

$(document).on("click", "#updatelifestyle", function(e) {
    var  data ={
        lifestyle_count : $("#lifestyle_count").val(),
        bedtime : $("#bedtime").html(),
        wakeup_time : $("#wakeup_time").html(),
        breakfast_time : $("#breakfast_time").html(),
        breakfast_content : $("#breakfast_content").html(),
        lunch_time : $("#lunch_time").html(),
        lunch_content : $("#lunch_content").html(),
        dinner_time : $("#dinner_time").html(),
        dinner_content : $("#dinner_content").html(),
        snack_time : $("#snack_time").html(),
        snack_content : $("#snack_content").html(),
        other_eatable : $("#other_eatable").html(),
        sunday_content : $("#sunday_content").html(),
        sleep_day : $("#sleep_day").html(),
        wake_fresh : $("#wake_fresh").html(),
        life_feedback : $("#life_feedback").html(),   

        travel_count : $("#travel_count").val(),
        place_residence : $("#place_residence").html(),
        place_work : $("#place_work").html(),
        leave_home : $("#leave_home").html(),
        return_home : $("#return_home").html(),
        holidays : $("#holidays").html(),
        transport_type : $("#transport_type").html(),
        by_road : $("#by_road").html(),
        by_train : $("#by_train").html(),
        by_walk : $("#by_walk").html(),
        overnight : $("#overnight").html(),
        sp_leave_home : $("#sp_leave_home").html(),
        sp_return_home : $("#sp_return_home").html(),
        sp_holidays : $("#sp_holidays").html(),
        exercise : $("#exercise").html(),       
        exercise_time : $("#exercise_time").html(),       
        exercise_detail : $("#exercise_detail").html(),       
        sports : $("#sports").html(),       
        from_work_time : $("#from_work_time").html(),       
        to_work_time : $("#to_work_time").html(),       
        rotating_shift : $("#rotating_shift").html(),       
        flexi_hour : $("#flexi_hour").html(),       
        travelling_feedback : $("#travelling_feedback").html(),      
        patient_id : param3    
    }
    $.ajax({
        type: 'post',
        url: base_url + 'Api/patient/updatelifestyle',
        data: data,
        cache: false,
        success: function(resData) {
            var response = jQuery.parseJSON(resData);
            // console.log(resData);
            if (response['Response-Validate'] === true) {
                if (response['Response-Status'] === true) {
                    $.toaster(response['Response-Message'], 'Success', 'success');
                } else if (response['Response-Status'] === false) {
                    $.toaster(response['Response-Message'], 'Error', 'danger');
                }
            } else {
                $.each(response['Response-Message'], function(key, value) {
                    if (value != '') {
                        $.toaster(value, 'Error', 'danger');
                        $("#" + formname + " input[name='" + key + "']").focus();
                        return false;
                    }
                });
            }
        },
        error: function(error) {}
    });
    e.preventDefault();    
});

$(document).on("click", "#spouseupdate", function(e) {
    var sid = $(this).data('id');
    var  data ={
        spouse_count : $("#spouse_count").val(),
        spouse_name : $("#spouse_name").html(),
        spouse_age : $("#spouse_age").html(),
        spouse_illness : $("#spouse_illness").html(),
        spouse_occupation : $("#spouse_occupation").val(),
        spouse_education : $("#spouse_education").val(),
        spouse_feedback : $("#spouse_feedback").html(),
        patient_id :param3    
    }
    $.ajax({
        type: 'post',
        url: base_url + 'Api/patient/spouseupdate',
        data: data,
        cache: false,
        success: function(resData) {
            var response = jQuery.parseJSON(resData);
            // console.log(resData);
            if (response['Response-Validate'] === true) {
                if (response['Response-Status'] === true) {
                    $.toaster(response['Response-Message'], 'Success', 'success');
                } else if (response['Response-Status'] === false) {
                    $.toaster(response['Response-Message'], 'Error', 'danger');
                }
            } else {
                $.each(response['Response-Message'], function(key, value) {
                    if (value != '') {
                        $.toaster(value, 'Error', 'danger');
                        $("#" + formname + " input[name='" + key + "']").focus();
                        return false;
                    }
                });
            }
        },
        error: function(error) {}
    });
    e.preventDefault();    
});

// $(this).data('id');
$(document).on("click", "#submit_famliy_detail", function(e) {
    var family_count = $("#family_count").val();
    var array = [];
    var agevalue = '';
    var illvalue = '';
    var ageattr = 0;
    var illattr = 0;
    jQuery("div[name='patient_family_age[]']").each(function() {
      agevalue= this.innerHTML;
      ageattr = $(this).attr('data-id');
      jQuery("div[name='patient_family_illness[]']").each(function() {
        illattr = $(this).attr('data-id');
        if(ageattr==illattr){
            illvalue= this.innerHTML;
            let newElement = {id :ageattr,'age': agevalue,'illness': illvalue};
            array.push(newElement);
        }
      });
    });

    $.ajax({
        type: 'post',
        url: base_url + 'Api/patient/family',
        data: {array},
        cache: false,
        success: function(resData) {
            var response = jQuery.parseJSON(resData);
            // console.log(resData);
            if (response['Response-Validate'] === true) {
                if (response['Response-Status'] === true) {
                    $.toaster(response['Response-Message'], 'Success', 'success');
                } else if (response['Response-Status'] === false) {
                    $.toaster(response['Response-Message'], 'Error', 'danger');
                }
            } 
        },
        error: function(error) {}
    });
    e.preventDefault();
    
});

$(document).on("click", "#submitmedicalhistory", function(e) {
    var medical_count          = $("#medical_count").val();
    var medical_history         = $("#medical_history").html();
    var medical_history_other   = $("#medical_history_other").html();
    var current_medication      = $("#current_medication").html();
    var habits                  = $("#habits").html();
    var allergy                 = $("#allergy").html();
    var dr_feedback             = $("#dr_feedback").html();
    var patient_id               = param3;
    var submitdata ={
        medical_count,
        patient_id,
        medical_history,
        medical_history_other,
        current_medication,
        habits,
        allergy,
        dr_feedback
    };
    $.ajax({
        type: 'post',
        url: base_url + 'Api/patient/medicalhistory',
        data: submitdata,
        cache: false,
        success: function(resData) {
            var response = jQuery.parseJSON(resData);
            // console.log(resData);
            if (response['Response-Validate'] === true) {
                if (response['Response-Status'] == true) {
                    $.toaster(response['Response-Message'], 'Success', 'success');
                } else if (response['Response-Status'] == false) {
                    $.toaster(response['Response-Message'], 'Error', 'danger');
                }
            } else {
                $.each(response['Response-Message'], function(key, value) {
                    if (value != '') {
                        $.toaster(value, 'Error', 'danger');
                        $("#" + formname + " input[name='" + key + "']").focus();
                        return false;
                    }
                });
            }
        },
        error: function(error) {}
    });
    e.preventDefault();
    
});

$(document).on("click", "#updatedocs" , function(e) {
    $("#updatedocs").prop('disabled',true);
    e.preventDefault();
    var formdata = new FormData($("#docform")[0]);
    // console.log('formdata '+JSON.stringify(formdata));
    $.ajax({
     url     : base_url+"Api/patient/newdoc",
     contentType : false,
     cache   : false,
     processData : false,
     data    : formdata,
     type    : 'POST',
     success : function(resData){
      // alert(resData);
      console.log(resData);
      var response = jQuery.parseJSON(resData);
      if (response['Response-Validate'] === true) {
        if(response['Response-Status']  === true){
          $.toaster(response['Response-Message'], 'Success', 'success');
          $(".blank").val('');
          $("#updatedocs").prop('disabled',false);
          getFile()
        }else if(response['Response-Status'] === false){
          $.toaster(response['Response-Message'], 'Error', 'danger');
          $("#updatedocs").prop('disabled',false);
          return false;
        }
      }else{
        $.each(response['Response-Message'], function(key, value) {
            if(value!=''){
                $.toaster(value, 'Error', 'danger');
                $("#"+key).focus();
                return false;
            }
        });
      }
     },error: function(){
        $("#updatedocs").prop('disabled',false);
    }
   });
    $("#updatedocs").prop('disabled',false);
   return false;  //stop the actual form post !important!
});
    /* <![CDATA[ */
    var shadowbox_conf = {
        animate: true,
        animateFade: true,
        animSequence: "sync",
        modal: false,
        showOverlay: true,
        overlayColor: "#000",
        overlayOpacity: "0.8",
        flashBgColor: "#000000",
        autoplayMovies: true,
        showMovieControls: true,
        slideshowDelay: 0,
        resizeDuration: "0.35",
        fadeDuration: "0.35",
        displayNav: true,
        continuous: false,
        displayCounter: true,
        counterType: "default",
        counterLimit: "10",
        viewportPadding: "20",
        handleOversize: "resize",
        handleUnsupported: "link",
        autoDimensions: false,
        initialHeight: "160",
        initialWidth: "320",
        enableKeys: true,
        skipSetup: false,
        useSizzle: false,
        flashParams: {bgcolor:"#000000", allowFullScreen:true},
        flashVars: {},
        flashVersion: "9.0.0"
    };
    
/* ]]> */

getFile()
function getFile() {
    $.ajax({
     url     : base_url+"Api/patient/getFile",
     data    : {patient_id:patient_id},
     type    : 'POST',
     success : function(resData){
      // alert(resData);
      // console.log(resData);
      var response = jQuery.parseJSON(resData);
      var html = ''
      var icon =''
      var n=1;
      if (response['validate'] === true) {
        if(response['status']  === true){
            if(response['count']  > 0){

                $.each(response['html'], function(i){
                    if(response['html'][i]['is_image'] ==0){
                        icon = `<img src="${base_url}assets/img/pdf.png" class="img-responsive">`
                    }else{
                        icon = `<img src="${base_url}uploads/doc/${response['html'][i]['filename']}" class="img-responsive">`
                    }
                    html += `<div class="col-sm-3">
                                <a class="mustang-gallery" href="${base_url}uploads/doc/${response['html'][i]['filename']}" rel="shadowbox[mustang]">
                                    ${icon}
                                </a>
                                <p>${response['html'][i]['title']}</p>
                                <p>Added On ${moment(response['html'][i]['added_date']).format("DD MMM YY")}</p>
                            </div>`
                            if((n%4) == 0){
                        html += `<div style="height:20px;clear:both"></div>`    
                    }
                    n++
                })

            }else{
                html += `<div class="col-sm-3"><p>No Reports</p></div>`
            }
            $('#fileDetail').html(html)
            Shadowbox.init(shadowbox_conf)
        }else if(response['status'] === false){
          $.toaster(response['message'], 'Error', 'danger');
          $("#updatedocs").prop('disabled',false);
          return false;
        }
      }else{
        
      }
     },error: function(){
        $("#updatedocs").prop('disabled',false);
    }
   });
}