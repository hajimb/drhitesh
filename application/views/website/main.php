<?php $this->load->view('website/includes/top');?>
<div class="site_wrapper">

<?php
	$this->load->view('website/includes/topheader1');
	$this->load->view('website/includes/header1');
?>
<!--div class="container-fluid"-->
    <?php $this->load->view('website/'.$pagename);?>
<!--/div-->
<?php $this->load->view('website/includes/footer');?>
</div>
<?php $this->load->view('website/includes/modalhidden');?>
</body>
<?php  $this->load->view('website/includes/script');

$uniqu    = uniqid();
$dir    = realpath(dirname(__FILE__));
$path     = realpath($dir.'/../../../').'/';
$filename   = $path."assets/js/".$pagename.".js";
$filename1  = base_url()."assets/js/".$pagename.".js?random=".$uniqu;
if (file_exists($filename)) {
   echo '<script src="'.$filename1.'"></script>';
}


?>
</html>