getaccounthistory();
function getaccounthistory(){
	//alert(zat_userid);
	var AccountData   	   = {};
	AccountData['client'] 		 = 'web';
	AccountData['secret_key'] = '';
	AccountData['content'] 		= 'aboutcontent';

	AccountData = JSON.stringify(AccountData);

	console.log(AccountData);
	$.ajax({
		type    : 'post',
		url     : base_url+'Api/getdetails/about',
		data    : {'Data': AccountData},
		cache   : false,
		success : function(resData){
			//alert(resData);
			//console.log(resData);
			var response = jQuery.parseJSON(resData);
			if (response['Response-Validate'] === true) {
				if(response['Response-Status']  == true){
					$("#aboutdata").html(response['Response-Message']);
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
		error : function(error){}
	});
	return false;
}
