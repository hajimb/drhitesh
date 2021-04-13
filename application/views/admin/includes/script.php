<script src="<?php echo base_url();?>assets/admin/bootstrap/js/jQuery-2.1.4.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.toaster.js"></script>
<script src="<?php echo base_url()?>assets/admin/js/sweetalert.min.js"></script>
<script src="<?php echo base_url()?>assets/admin/js/shadowbox.js"></script>
<script src="<?php echo base_url()?>assets/js/common.js"></script>

<script>
var base_url = $("#base_url").val();
var param1   = "<?php echo $this->uri->segment(1);?>";
var param2   = "<?php echo $this->uri->segment(2);?>";
var param3   = "<?php echo $this->uri->segment(3);?>";
$(function () {
    //clear modal cache, so that new content can be loaded
    $('body').on('hidden.bs.modal', '.modal', function () {
        $(this).removeData('bs.modal');
        $("#modal_body").html('');

    });
});
</script>
<?php if($pagename == 'answer'){?>
<script src="<?php echo base_url();?>assets/admin/ckeditor/ckeditor.js"></script> 
<?php }
if($pagename == 'dashboard'){?>
	<script src="<?php echo base_url();?>assets/admin/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js?v=v1.2.3"></script>
<?php }
if($pagename == 'flot' || $pagename == 'dashboard2'){?>
	<script src="<?php echo base_url();?>assets/admin/bootstrap/js/Chart.min.js"></script> 
<?php }
 if($pagename == 'flot'){?>
	<script src="<?php echo base_url();?>assets/admin/bootstrap/js/jquery.flot.min.js"></script> 
	<script src="<?php echo base_url();?>assets/admin/bootstrap/js/jquery.flot.resize.min.js"></script> 
	<script src="<?php echo base_url();?>assets/admin/bootstrap/js/jquery.flot.pie.min.js"></script> 
	<script src="<?php echo base_url();?>assets/admin/bootstrap/js/jquery.flot.categories.min.js"></script> 
<?php }
if($pagename == 'morris'){?>
	<script src="<?php echo base_url();?>assets/admin/bootstrap/js/raphael.js"></script>
	<script src="<?php echo base_url();?>assets/admin/bootstrap/js/morris.min.js"></script>
<?php }
if($pagename == 'inline'){?>
	<script src="<?php echo base_url();?>assets/admin/bootstrap/js/jquery.knob.js"></script>
	<script src="<?php echo base_url();?>assets/admin/bootstrap/js/jquery.sparkline.min.js"></script>
<?php }
if($pagename == 'advancedform'){?>
	<script src="<?php echo base_url();?>assets/admin/bootstrap/js/select2.full.min.js"></script> 
	<script src="<?php echo base_url();?>assets/admin/bootstrap/js/jquery.inputmask.js"></script> 
	<script src="<?php echo base_url();?>assets/admin/bootstrap/js/jquery.inputmask.date.extensions.js"></script>
	<script src="<?php echo base_url();?>assets/admin/bootstrap/js/jquery.inputmask.extensions.js"></script> 
	<script src="<?php echo base_url();?>assets/admin/bootstrap/js/moment.min.js"></script>
	<script src="<?php echo base_url();?>assets/admin/bootstrap/js/daterangepicker.js"></script> 
	<script src="<?php echo base_url();?>assets/admin/bootstrap/js/bootstrap-colorpicker.min.js"></script> 
	<script src="<?php echo base_url();?>assets/admin/bootstrap/js/bootstrap-timepicker.min.js"></script> 
	<script src="<?php echo base_url();?>assets/admin/bootstrap/js/icheck.min.js"></script>
<?php }
if($pagename == 'sliders'){?>
	<script src="<?php echo base_url();?>assets/admin/bootstrap/js/ion.rangeSlider.min.js"></script>
	<script src="<?php echo base_url();?>assets/admin/bootstrap/js/bootstrap-slider.js"></script>
<?php } ?>
	<script src="<?php echo base_url();?>assets/admin/bootstrap/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url();?>assets/admin/bootstrap/js/dataTables.bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/admin/bootstrap/js/dataTables.responsive.min.js"></script>
	<script src="<?php echo base_url();?>assets/admin/bootstrap/js/responsive.bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/admin/bootstrap/js/fastclick.min.js"></script>
	<script src="<?php echo base_url();?>assets/admin/bootstrap/js/app.min.js"></script>
	<script src="<?php echo base_url();?>assets/admin/bootstrap/js/demo.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/fullcalendar.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/gcal.js"></script>