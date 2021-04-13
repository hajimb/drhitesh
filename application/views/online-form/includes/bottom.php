</body>
<script src="<?php echo base_url();?>assets/js/jquery.toaster.js"></script>
<script type="text/javascript">
	var base_url = $("#base_url").val();
	function submitform(form){
	var formdata = form.serialize();
    // console.log(formdata);return false;
    $.ajax({
        type    : 'post',
        url     : base_url+'Api/onlineform/submit',
        data    : formdata+"&country_code="+$(".selected-dial-code").text(),
        cache   : false,
        success : function(resData){
         console.log(resData);
            var response = jQuery.parseJSON(resData);
            if (response['Response-Validate'] === true) {
                if(response['Response-Status'] === true){
                    $.toaster('Successfully Submittted', 'Success', 'success');
                    // setTimeout(function() {location.reload();}, 3000);
                }else if(response['Response-Status'] === false){
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
	}
</script>
<script>
	jQuery(document).ready(function($){
		$(".date-picker").datepicker({
			showOn: "both",
			// buttonText: '<i class="fa fa-calendar"></i>',
			prevText: '<i class="fa fa-chevron-left"></i>',
			nextText: '<i class="fa fa-chevron-right"></i>',
			changeYear: true					
		});
	});		
</script>

</html>