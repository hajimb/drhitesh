<!-- ######### JS FILES ######### -->
<!-- get jQuery used for the theme -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/universal/jquery.js"></script>
<script type="text/javascript">var base_url = "<?php echo base_url();?>";</script>
<script src="<?php echo base_url();?>assets/js/jquery.toaster.js"></script>
<script src="<?php echo base_url();?>assets/js/style-switcher/styleselector.js"></script>
<script src="<?php echo base_url();?>assets/js/animations/js/animations.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/mainmenu/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/mainmenu/customeUI.js"></script>
<script src="<?php echo base_url();?>assets/js/masterslider/jquery.easing.min.js"></script>
<script src="<?php echo base_url();?>assets/js/masterslider/masterslider.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.serializeToJSON.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js?v=v1.2.3"></script>
<!-- <script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.init.js?v=v1.2.3"></script>
<script src="<?php echo base_url();?>assets/js/appointment.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script> -->
<script src="<?php echo base_url();?>assets/js/jquery.serializeToJSON.js"></script>
<script src="<?php echo base_url();?>assets/js/shadowbox.js"></script>
<script src="<?php echo base_url();?>assets/js/slider.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mobile-detect/1.4.4/mobile-detect.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
<script type="text/javascript">

function isMobile() {
  var check = false;
  (function(a){
    if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) 
      check = true;
  })(navigator.userAgent||navigator.vendor||window.opera);
  return check;
};

var checkmobile = isMobile();
if(checkmobile){
  $("#mobileicon").show();
  $('#waicon').attr('href',"https://wa.me/919819035111");
}else{
  $("#mobileicon").hide();
  $('#waicon').attr('href',"https://web.whatsapp.com/send?phone=919819035111");
}
</script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.ui.min.js'></script>
<script src="<?php echo base_url();?>assets/js/scrolltotop/totop.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/mainmenu/sticky.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/mainmenu/modernizr.custom.75180.js"></script>

<script src="<?php echo base_url();?>assets/js/tabs/assets/js/responsive-tabs.min.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo base_url();?>assets/js/cubeportfolio/jquery.cubeportfolio.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/cubeportfolio/main8.js"></script>
<script src="<?php echo base_url();?>assets/js/custom.js"></script>

<script src="<?php echo base_url();?>assets/js/tabs2/index.js"></script>
<script src="<?php echo base_url();?>assets/js/carouselowl/owl.carousel.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>assets/js/accordion/jquery.accordion.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/accordion/custom.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>assets/js/universal/custom.js"></script>

<script defer src="<?php echo base_url();?>assets/js/flexslider/jquery.flexslider.js"></script>
<script defer src="<?php echo base_url();?>assets/js/flexslider/custom.js"></script>
<script defer src="<?php echo base_url();?>assets/js/common.js?rand=<?= time();?>"></script>
<script type="text/javascript">
    $(".modal").each(function(l){$(this).on("show.bs.modal",function(l){var o=$(this).attr("data-easein");"shake"==o?$(".modal-dialog").velocity("callout."+o):"pulse"==o?$(".modal-dialog").velocity("callout."+o):"tada"==o?$(".modal-dialog").velocity("callout."+o):"flash"==o?$(".modal-dialog").velocity("callout."+o):"bounce"==o?$(".modal-dialog").velocity("callout."+o):"swing"==o?$(".modal-dialog").velocity("callout."+o):$(".modal-dialog").velocity("transition."+o)})});
    $(".card").click(function() {
      var id = $(this).attr('id');
      $('#' + id).toggleClass('flipped');
    });
    $(".card").hover(function() {
      var id = $(this).attr('id');
      $('#' + id).toggleClass('flipped');
    });
    $(".card").mouseleave(function() {
      var id = $(this).attr('id');
      $('#' + id).toggleClass('flipped');
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

