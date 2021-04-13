var patient_id = $('#patient_id').val();

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

getFile()
function getFile() {
    $.ajax({
     url     : base_url+"Api/patient/getFile",
     data    : {patient_id:patient_id},
     type    : 'POST',
     success : function(resData){
      // alert(resData);
      console.log(resData);
      var response = jQuery.parseJSON(resData);
      var html = ''
      var icon =''
      if (response['validate'] === true) {
        if(response['status']  === true){
            if(response['count']  > 0){

                var n =1
                $.each(response['html'], function(i){
                    // alert((n%4))
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
            $('#fileData').html(html)
            Shadowbox.init()
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