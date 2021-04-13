<?php  
  $this->load->view('front/includes/top.php');
?>
<div class="edgtf-wrapper">
    <div class="edgtf-wrapper-inner">
        <?php $this->load->view('front/includes/header.php');?>
        <!-- close .edgtf-mobile-header -->
        <a id='edgtf-back-to-top' href='#'><span class="edgtf-icon-stack"> <i class="edgtf-icon-font-awesome fa fa-angle-up"></i></span></a>
        <div class="edgtf-content">
            <?php $this->load->view('front/'.$pagename);?>
        </div>
        <?php $this->load->view('front/includes/footer.php');?>
    </div>
</div>
</body>
<?php 
  $this->load->view('front/includes/script.php');
  $uniqu = uniqid();
  if($_SERVER['HTTP_HOST'] == 'arshad-pc' || $_SERVER['HTTP_HOST'] == 'localhost'){$path = '/ciproject/sexologist/';}
    else{$path = '/';}
    $filename  = $_SERVER['DOCUMENT_ROOT'] . $path."/assets/js/".$pagename.".js";
echo "Filename : ".$filename;
    $filename1 = base_url()."assets/js/".$pagename.".js?random=".$uniqu;
    if(file_exists($filename)) {
       echo '<script type="text/javascript" src="'.$filename1.'"></script>';
  }
?>

</html>
