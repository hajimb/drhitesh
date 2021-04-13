$(document).on("click",".loginbtn",function(){
	$("#toaster").remove();
	var formdata = $("#loginform").serialize();
	//console.log(formdata);
	$.ajax({
		type    : 'post',
		url     : base_url+'Api/login/signin',
		data    : formdata,
		cache   : false,
		success : function(resData){
			//console.log(resData);
			var response = jQuery.parseJSON(resData);
			if (response['Response-Validate'] === true) {
				if(response['Response-Status'] == true){
					$.toaster('Successfully Login', 'Success', 'success');
					setTimeout(function() {window.location = base_url+"dashboard";}, 3000);
				}else if(response['Response-Status'] == false){
					$.toaster(response['Response-Message'], 'Error', 'danger');
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
		error : function(error){
			return false;
		}
	});
	return false;
});