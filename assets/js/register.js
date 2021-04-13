$(document).on("click",".custombtn",function(){
	var formdata = $("#QuestionForm").serializeToJSON();
	console.log(formdata);
	$.ajax({
		type    : 'post',
		url     : base_url+'Api/register/newuser',
		data    : {'Data': formdata},
		cache   : false,
		success : function(resData){
			//alert(resData);
			console.log(resData);
			var response = jQuery.parseJSON(resData);
			if (response['Response-Validate'] === true) {
				if(response['Response-Status']  == true){
					setTimeout(function(){ $.toaster('Successfully Registerd', 'Success', 'success');window.location = base_url+"login";}, 2000);
				}else if(response['Response-Status'] == false){
					$.toaster(response['Response-Message'], 'Error', 'danger');
					return false;
				}
			}
			else{
				$.each(response['Response-Message'], function(key, value) {
					if(value!=''){
						$.toaster(value, 'Error', 'danger');
						$("#"+key).focus();
						return false;
					}

				});
			}
		 },
		error : function(error){}
	});
	return false;
});
