$(document).on("click",".custombtn",function(){
	
	var ispublic = $("#ispublic").val();
	if(ispublic == 'Private'){
		paidQuestion()
	}else{
		freeQuestion()
	}
	return false;
});


    $(document).ready(function(){
             getcountry(0);

             $("#load_more").click(function(e){
                 e.preventDefault();
                 var page = $(this).data('val');
                 getcountry(page);

             });
             //getcountry();
         });

         var getcountry = function(page){

             $("#loader").show();
             $.ajax({
                 url:base_url+"question/getQuestion",
                 type:'GET',
                 data: {page:page}
             }).done(function(resData){
             	var response = jQuery.parseJSON(resData);
             	console.log(response);
                 $("#ajax_table").append(response['Response-Message']);
                 $("#loader").hide();
                 $('#load_more').data('val', ($('#load_more').data('val')+1));
                 scroll();
             });
         };

      /*   var scroll  = function(){
             $('html, body').animate({
                 scrollTop: $('#load_more').offset().top
             }, 1000);
         };*/


function freeQuestion(){ 
    var formdata = $("#QuestionForm").serializeToJSON();
	var Id 	= $("#id").val();
	console.log(formdata);
	$.ajax({
	type    : 'post',
	url     : base_url+'Api/question/newquestion',
	data    : { 'Data': formdata },
	cache   : false,
	success : function(resData){
		console.log(resData);
		var response = jQuery.parseJSON(resData);
		if (response['Response-Validate'] === true) {
			if(response['Response-Status'] == true){
				$.toaster(response['Response-Message'], 'Success', 'success');
				//$('input[type=text],textarea,select').val('');
				if(Id==0){$("#QuestionForm").hide();}
				location.reload();return false;
			}else if(response['Response-Status'] == false){
				$.toaster(response['Response-Message'], 'Error', 'danger');
			}
		}else{
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
}

function paidQuestion(){
    var formdata = $("#QuestionForm").serialize();
    $.ajax({
        type    : 'post',
        url     : base_url+'payment/payQuestion',
        data    : formdata,
        cache   : false,
        dataType: "json",
        success : function(resData){
            console.log(`resData ${JSON.stringify(resData)}`);
            const {Status,Validate,Message,Data:{encrypted_data,access_code,url}} = resData;
            console.log(`encrypted_data ${encrypted_data}`);
            console.log(`access_code ${access_code}`);
            console.log(`ccurl ${url}`);
            // return false;
            if (Validate === true) {
                if (Status === true) {
                    // $.toaster(Message, 'Success', 'success');
                    var form  = $('<form action="' + url + '" method="post" id="paymentform" name="paymentform">' +
                      '<input type="hidden" name="encRequest" value="' + encrypted_data + '" />' +
                      '<input type="hidden" name="access_code" value="' + access_code + '" />' +
                      '</form>');
                    $('body').append(form);
                    $("#paymentform").submit();

                } else if (Status === false) { 
                    $.toaster(Message, 'Error', 'danger'); 
                    return false; 
                }
            } else {
                $.each(Message, function(key, value) {
                    if (value !== '') {
                        $.toaster(value, 'Error', 'danger');
                        $("#" + formId + " input[name='" + key + "']").focus();
                        return false;
                    }
                });
            }
         },
        error : function(error){
            console.log(`error ${JSON.stringify(error)}`);
        }
    });
}