<div class="top_nav2">
    <div class="container">
        <div class="left visible-xs">
          <ul class="topsocial">

              <li><a href="<?php echo base_url();?>about">About </a></li>
              <li> | </li>
              <li><a href="<?php echo base_url();?>contact">Contact</a></li>
              <li> | </li>
              <li><a href="<?php echo base_url();?>blog" target="_blank">Blog</a></li>
              <li> | </li>
              <?php if($this->session->userdata('user_id')){?>
              <li><a href="<?php echo base_url();?>login"><i class="fa fa-lock"></i>&nbsp; Logout</a></li>
              <?php }else{?>
              <li><a href="<?php echo base_url();?>login"><i class="fa fa-lock"></i>&nbsp; Login</a></li>
              <?php }?>

          </ul>
        </div>
        <div class="right">
            <ul class="topsocial hidden-xs">
               
                <li><a href="<?php echo base_url();?>login/logout"><i class="fa fa-lock"></i>&nbsp; Logout</a></li>
                <li> | </li>
                <li><a href="<?php echo base_url();?>"><i class="fa fa-home"></i>&nbsp; Back to Website</a></li>
                
                <li> | </li>
                <li><a href="<?php echo base_url('ask-sexologist');?>" class="black tpbut two active">Ask Sexologist </a></li>
                <li><a href="<?php echo base_url('consult');?>" class="black tpbut two active">Consult</a></li>
                <!-- <li><a href="tel:+919819035111"> <i class="fa fa-2x fa-phone-square"></i></a> </li> -->
            </ul>
            <ul class="topsocial visible-xs">
              <li><a href="<?php echo base_url('ask-sexologist');?>" class="black tpbut two active">Ask Sexologist </a></li>
              <li><a href="<?php echo base_url('consult');?>" class="black tpbut two active">Consult</a></li>
<!--               <li> | </li>
              <li><a href="tel:+919819035111"> <i class="fa fa-phone-square"></i> +91 98190 35111</a> </li>
 -->            </ul>
        </div>
    </div>
</div>

<header class="header">
    <div class="container">
        <!-- Logo -->
        <div class="logo"><a href="<?php echo base_url('')?>" id="logo"></a></div>
        <!-- Navigation Menu -->
        <div class="menu_main">
            <div class="navbar yamm navbar-default">
                <div class="navbar-header">
                    <div class="navbar-toggle .navbar-collapse .pull-right " data-toggle="collapse" data-target="#navbar-collapse-1"> <span>Menu</span>
                        <button type="button"> <i class="fa fa-bars"></i></button>
                    </div>
                </div>
                <div id="navbar-collapse-1" class="navbar-collapse collapse pull-right">
                    <ul class="nav navbar-nav">
                        <li class="dropdown"><a href="<?php echo base_url('user-profile') ?>" class="page-scroll">Profile</a></li>
                        <li class="dropdown"><a href="<?php echo base_url('medical-history') ?>" class="page-scroll">Medical History </a></li>
                        <li class="dropdown"><a href="<?php echo base_url('consultation') ?>" class="page-scroll">Consultation</a></li>
                        <li class="dropdown"><a href="<?php echo base_url('users/reports')?>" class="page-scroll">Reports</a></li>
                        <li class="dropdown"><a href="<?php echo base_url('users-payment')?>" class="page-scroll">Payment</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end Navigation Menu -->
    </div>
</header>
