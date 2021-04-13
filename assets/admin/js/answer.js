
editor = CKEDITOR.replace( 'answer', {
    toolbar: [
        { name: 'format', items : ['Bold', 'Italic', 'Underline', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']},
        { name : 'paste' , items : ['Paste', 'PasteText']},     // Defines toolbar group without name.
        { name : 'idents' , items : ['NumberedList', 'BulletedList','lineheight' ,'-','Outdent', 'Indent']},      // Defines toolbar group without name.
        { name : 'links' , items : ['TextColor', 'BGColor', '-', 'Link', 'Unlink', 'Anchor']},      // Defines toolbar group without name.
        { name: 'basicstyles', items: [ 'RemoveFormat','Source'] }

      ],
    //skin : 'bootstrapck',
    resize_enabled : false
  });

  $(document).on("click",".answerclick",function(){
  editor = CKEDITOR.instances['answer'];
  var description_text = editor.getData() ;

  $("#answer_text").val(description_text);
  var formdata = $("#BlogForm").serialize();
  //console.log(formdata);
  //return false;
  $.ajax({
    type    : 'post',
    url     : base_url+'question/answering',
    data    : formdata,
    cache   : false,
    success : function(resData){
      console.log(resData);
      var response = jQuery.parseJSON(resData);
      if (response['Response-Validate'] === true) {
        if(response['Response-Status']  == true){
          $.toaster(response['Response-Message'], 'Success', 'success');
        }else if(response['Response-Status'] == false){
          $.toaster(response['Response-Message'], 'Error', 'danger');
        }
      }
      else{
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
  return false;
});

function CKupdate(){
    for ( instance in CKEDITOR.instances ){
        CKEDITOR.instances[instance].updateElement();
        CKEDITOR.instances[instance].setData('');
    }
}