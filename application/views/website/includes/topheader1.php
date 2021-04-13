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
              <li><a href="<?php echo base_url();?>user-profile"><i class="fa fa-user"></i> Manage Account</a></li>
              <?php }else{?>
              <li><a href="<?php echo base_url();?>login"><i class="fa fa-lock"></i>&nbsp; Login</a></li>
              <?php }?>

          </ul>
        </div>
        <div class="right">
            <ul class="topsocial hidden-xs">


                <li><a href="<?php echo base_url();?>about">About </a></li>
                <li> | </li>
                <li><a href="<?php echo base_url();?>contact">Contact</a></li>
                <li> | </li>
                <li><a href="<?php echo base_url();?>blog" target="_blank">Blog</a></li>
                <li> | </li>
                <?php if($this->session->userdata('user_id')){?>
                  <!-- <li><a href="<?php echo base_url();?>login/logout"><i class="fa fa-lock"></i>&nbsp; Logout</a></li> -->
                      <li><a href="<?php echo base_url();?>user-profile"><i class="fa fa-user"></i> Manage Account</a></li>
                <?php }else{?>
                <li><a href="<?php echo base_url();?>login"><i class="fa fa-lock"></i>&nbsp; Login</a></li>
                <?php }?>
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
