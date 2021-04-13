<?php $this->load->view('website/users/top');?>
<div class="site_wrapper">
<?php
	$this->load->view('website/includes/users-header');
	$this->load->view('website/users/'.$pagename);
	$this->load->view('website/includes/footer');
?>
</div>
<?php $this->load->view('website/includes/modalhidden');?>
</body>
<?php  
	$this->load->view('website/users/script');
	$uniqu     = uniqid();
	$dir       = realpath(dirname(__FILE__));
	$path      = realpath($dir.'/../../../').'/';
	$filename  = $path."assets/js/users/".$pagename.".js";
	$filename1 = base_url()."assets/js/users/".$pagename.".js?random=".$uniqu;
	if (file_exists($filename)) {
	   echo '<script src="'.$filename1.'"></script>';
	}
?>
</html>