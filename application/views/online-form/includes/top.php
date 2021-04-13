<!DOCTYPE html>
<html lang="en">
<head>
    <title> <?php echo $page_title;?> </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/online-form/css/smart-forms.css?i=<?php echo rand(); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/online-form/css/smart-addons.css?i=<?php echo rand(); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/online-form/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/online-form/css/essential.css?i=<?php echo rand(); ?>">
    <script type="text/javascript" src="<?php echo base_url();?>assets/online-form/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/online-form/js/jquery.steps.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/online-form/js/jquery-ui-custom.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/online-form/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/online-form/js/additional-methods.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/online-form/js/jquery-ui-slider-pips.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/online-form/js/jquery-ui-touch-punch.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/online-form/js/jquery.formShowHide.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/online-form/js/jquery-ui-monthpicker.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/online-form/js/select2.full.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/online-form/js/jquery-cloneya.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/online-form/js/intlTelInput.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/online-form/js/jquery.maskedinput.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/online-form/js/jquery-ui-timepicker.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/online-form/js/jquery-ui-touch-punch.min.js"></script>
    <input type="hidden" id="base_url" value="<?php echo base_url();?>">
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        
        $("#smart-form").steps({
            bodyTag: "fieldset",
            headerTag: "h2",
            bodyTag: "fieldset",
            transitionEffect: "slideLeft",
            titleTemplate: "<span class='number'>#index#</span> #title#",
            labels: {
                finish: "Submit Form",
                next: "Continue",
                previous: "Go Back",
                loading: "Loading..."
            },
            onStepChanging: function(event, currentIndex, newIndex) {
                if (currentIndex > newIndex) { return true; }
                var form = $(this);
                if (currentIndex < newIndex) {}
                return form.valid();
            },
            onStepChanged: function(event, currentIndex, priorIndex) {},
            onFinishing: function(event, currentIndex) {
                var form = $(this);
                form.validate().settings.ignore = ":disabled";
                return form.valid();
            },
            onFinished: function(event, currentIndex) {
                var form = $(this);
                submitform(form);
                //alert($("#medical_history").val());
            }
        }).validate({
            errorClass: "state-error",
            validClass: "state-success",
            errorElement: "em",
            onkeyup: false,
            onclick: false,
            rules: {
                /*first_name: {
                    required: true
                },
                last_name: {
                    required: true
                },
                dob: {
                    required: true
                },
                maritalstatus: {
                    required: true
                },
                emailaddress: {
                    required: true,
                    email: true
                },*/
                // mobile: {
                //     //required: true,
                //     number: true
                // },
                landline: {
                    //required: true,
                    number: true
                },
                contact_person: {
                    required: true
                },
                generalTerms: {
                    required: true
                }
            },
            messages: {
                first_name: {
                    required: "Please enter firstname"
                },
                last_name: {
                    required: "Please enter lastname"
                },
                dob: {
                    required: "Please enter Date of Birth"
                },
                maritalstatus: {
                    required: "Please Select Marital Status"
                },
                emailaddress: {
                    required: 'Enter your email address',
                    email: 'Enter a Valid email address'
                },
                // mobile: {
                //     number: 'Please enter numbers only'
                // },
                landline: {
                    number: 'Please enter numbers only'
                },
                contact_person: {
                    required: 'Please enter contact person'
                },
                generalTerms: {
                    required: 'Please agree to our terms'
                }
            },
            highlight: function(element, errorClass, validClass) {
                $(element).closest('.field').addClass(errorClass).removeClass(validClass);
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).closest('.field').removeClass(errorClass).addClass(validClass);
            },
            errorPlacement: function(error, element) {
                if (element.is(":radio") || element.is(":checkbox")) {
                    element.closest('.option-group').after(error);
                } else {
                    error.insertAfter(element.parent());
                }
            }

        });

        $.mask.definitions['H'] = "[0-2]";
        $.mask.definitions['h'] = "[0-9]";
        $.mask.definitions['M'] = "[0-5]";
        $.mask.definitions['m'] = "[0-9]";
        $.mask.definitions['N'] = "[0-1]";
        $.mask.definitions['n'] = "[0-12]";
        $.mask.definitions['P'] = "[AaPp]";
        $.mask.definitions['p'] = "[Mm]";

        $(".timepicker").mask("Hh:Mm");
        $(".yearpicker").mask("hh/Nn");
        /* Project datepicker range
        ----------------------------------------------- */
        $("#start_date").datepicker({
            defaultDate: "+1w",
            changeMonth: false,
            numberOfMonths: 1,
            prevText: '<i class="fa fa-chevron-left"></i>',
            nextText: '<i class="fa fa-chevron-right"></i>',
            onClose: function(selectedDate) {
                $("#end_date").datepicker("option", "minDate", selectedDate);
            }
        });

        $("#end_date").datepicker({
            defaultDate: "+1w",
            changeMonth: false,
            numberOfMonths: 1,
            prevText: '<i class="fa fa-chevron-left"></i>',
            nextText: '<i class="fa fa-chevron-right"></i>',
            onClose: function(selectedDate) {
                $("#start_date").datepicker("option", "maxDate", selectedDate);
            }
        });

        /* The budget slider 
        ------------------------------------------------------ */
       
        /* Show hide payment options
        ------------------------------------------------------- */
        $('.smartfm-ctrl').formShowHide();

        $('.smart-select2').each(function() {
            $(this).attr('style','width:100%!important;');
        });
                                  
//      .attr('style','max-height: 45px;border-bottom: 1px solid #cecece;border-top: 1px solid #cecece;overflow: overlay !important;');
    
        $(".medicalhistory").select2({
            placeholder: "Medical Problem / Disease"
        });
         $(".exercise").select2({
            placeholder: "Exercises"
        });$(".habits").select2({
            placeholder: "Habits"
        });$(".allergy").select2({
            placeholder: "Allergies"
        });
        $('.timepicker2').timepicker({
                    timeFormat: 'HH:mm:ss:TT',
                    showSecond: true,
                    beforeShow: function(input, inst) {
                            var newclass = 'smart-forms'; 
                            var smartpikr = inst.dpDiv.parent();
                            if (!smartpikr.hasClass('smart-forms')){
                                inst.dpDiv.wrap('<div class="'+newclass+'"></div>');
                            }
                    }                   
                
                });

        $('#clone-fields').cloneya();
            
            /* Group Cloning
            ------------------------------------------------- */            
            $('#clone-group-fields').cloneya({
                maximum: 5
            }); 
            
            /* MIN MAX Cloning 
            ------------------------------------------------- */            
            $('#clone-min-max').cloneya({
                maximum: 3,
                minimum: 2
            }); 
            
            /* Animated Cloning with custom events 
            ------------------------------------------------- */
            $('.clone-animate').cloneya()
            .on('before_clone.cloneya', function (event, toclone) {
                // do something
            })
            .on('after_clone.cloneya', function (event, toclone, newclone) {
                // do something   
            })
            .on('before_append.cloneya', function (event, toclone, newclone) {
                $(newclone).css('display', 'none');
                $(toclone).fadeOut('fast', function () {
                    $(this).fadeIn('fast');
                });
            })
            .on('after_append.cloneya', function (event, toclone, newclone) {
                $(newclone).slideToggle();
            })
            .off('remove.cloneya')
            .on('remove.cloneya', function (event, clone) {
                $(clone).slideToggle('slow', function () {
                    $(clone).remove();
                });
            })
            .on('after_delete.cloneya', function () {
                  
            });

        $("#dob").datepicker({
                changeMonth: true,
                changeYear: true,
                minDate: '1901-01-01',
                maxDate: new Date(),
                yearRange: "-116:+0",
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',            
                dateFormat: 'yy-mm-dd'
            }).on('change', function () {
                var age = getAge(this);
                if(age<=0){
                    //alert('Age cannot be 0');
                    //$.datepicker._clearDate(this);
                    $("#age").val(1);
                }else{
                
               /* $('#age').val(age);*/
                    $("#age").val(age);
                //alert(age);
                }
            });
    
        $("#mobile").intlTelInput({
            separateDialCode:true,
            preferredCountries: ["in"],
            utilsScript: "<?php echo base_url();?>assets/online-form/js/utils.js"
        });
    
    //      var inputInput = $("#phone5"),
        var telInput = $("#mobile"),
                  //telErrorMsg = $(".telErrorMsg");
                  telErrorMsg = $(".telErrorMsg"),
                  //telValidMsg = $(".telValidMsg"),
                  outputInput = $("#landline");         
    
        telInput.intlTelInput({
            preferredCountries: ["in"],
            utilsScript: "js/utils.js"
        });
        /*
        // update when the user selects a country
        telInput.on("keyup change", function() {
            var outputNumber = telInput.intlTelInput("getNumber");
            if (outputNumber) {
                outputInput.val(outputNumber);
            } else {
                outputInput.val("");
            }
        });
    */
    
        var reset = function() {
            telInput.removeClass("telErrorNum");
            //telInput.removeClass("telValidNum");
            telErrorMsg.addClass("telHideMsg");
            //telValidMsg.addClass("telHideMsg");
            $("a[href='#next']").parent().css({"display": "block"});

        };
    
            // on blur: validate
        telInput.blur(function() {
            reset();
            //console.log('Text:'+$("a[href='#next']").parent().text());
            if ($.trim(telInput.val())) {
                if (telInput.intlTelInput("isValidNumber")) {
                    //telValidMsg.removeClass("telHideMsg");
                    telInput.addClass("telValidNum");
                    $("a[href='#next']").parent().css({"display": "block"});
                } else {
                    telInput.addClass("telErrorNum");
                    telErrorMsg.removeClass("telHideMsg");
                    $("a[href='#next']").parent().css({"display": "none"});
                }
            }
        });
        function resetMe(id){
            $("."+id+"label").addClass("state-success").removeClass("state-error");
            $("."+id+"ErrorMsg").addClass("telHideMsg");
            $("a[href='#next']").parent().css({"display": "block"});

        }

        $(".timepicker").on("blur", function() {
            var Hh = $(this).val().substr(0, 2);
            // var Mm = $(this).val().substr(3, 2);
            var id = $(this).data('nm');
            resetMe(id);
            if(parseInt(Hh) > 23){
                //alert('error')
                $("."+id+"ErrorMsg").removeClass("telHideMsg");
                $("."+id+"label").removeClass("state-success").addClass("state-error");
                $("a[href='#next']").parent().css({"display": "none"});
            }

        });
        $("#maritalstatus").on("change", function() {
            $("#tomarry").val('');
            $("#marital_since").val('');
            $("#marital_since").attr("disabled",false);
            $("#tomarry").attr("disabled",true);

            if($(this).find( "option:selected" ).prop("value") == 6 || $(this).find( "option:selected" ).prop("value") == 7 || $(this).find( "option:selected" ).prop("value") == 10 ){
                $("#tomarry").attr("disabled",false);
            }else if($(this).find( "option:selected" ).prop("value") == 1 || $(this).find( "option:selected" ).prop("value") == 13){
                $("#marital_since").attr("disabled",true);
            }else{
                $("#tomarry").attr("disabled",true);
            }
        });
        $('.select2-container').css({"max-height": "45px", "border-bottom": "1px solid #cecece", "border-top": "1px solid #cecece", "overflow": "overlay"});

//  $.mask.definitions['f'] = "[A-Fa-f0-9]";    
//  $("#marital_since").mask('99/99', {placeholder:'_'});

    });
    
    


    function getAge(dateVal) {
        var
            birthday = new Date(dateVal.value),
            today = new Date(),
            ageInMilliseconds = new Date(today - birthday),
            years = ageInMilliseconds / (24 * 60 * 60 * 1000 * 365.25 );
            //years = ageInMilliseconds / (24 * 60 * 60 * 1000 * 365.25 ),
            //months = 12 * (years % 1),
            //days = Math.floor(30 * (months % 1));
            return Math.floor(years) ;
            //return Math.floor(years) + ' years ' + Math.floor(months) + ' months ' + days + ' days';

    }

         

    </script>

    <!--[if lte IE 9]>

        <script type="text/javascript" src="<?php echo base_url();?>assets/online-form/js/jquery.placeholder.min.js"></script>

    <![endif]-->

    <!--[if lte IE 8]>

        <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/online-form/css/smart-forms-ie8.css">

    <![endif]-->

</head>

<body class="woodbg">