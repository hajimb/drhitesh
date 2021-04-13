<?php
  $this->load->view('admin/includes/top');
?>
<div class="wrapper">
  <?php $this->load->view('admin/includes/header');?>
  <aside class="main-sidebar"> 
    <?php $this->load->view('admin/includes/sidebar');?>
  </aside>
  <?php $this->load->view('admin/'.$pagename);?>
  <?php $this->load->view('admin/includes/footer');?>
  <div class="control-sidebar-bg"></div>
</div>
<?php $this->load->view('admin/modalhidden');?>
</body>
<?php 
  $this->load->view('admin/includes/script');

  $uniqu = uniqid();

  $dir  = realpath(dirname(__FILE__));
  $path   = realpath($dir.'/../../../').'/';

  
  $filename  =  $path."/assets/admin/js/".$pagename.".js";
  $filename1 = base_url()."assets/admin/js/".$pagename.".js?random=".$uniqu;
  if(file_exists($filename)) {
      echo '<script type="text/javascript" src="'.$filename1.'"></script>';
  }
?>
</html>