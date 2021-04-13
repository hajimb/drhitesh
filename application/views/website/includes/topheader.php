<div class="top_nav2">
            <div class="container">
                <div class="left">
                    <ul class="topsocial text-left fleft">
                        <li><a href="mailto:info@yourdomain.com"><i class="fa fa-envelope"></i>&nbsp; info@yourdomain.com</a> </li>
                    </ul>
                    
                </div>
                <!-- end left -->
                <div class="right">
                    <ul class="topsocial">
                        <li><a href="<?php echo base_url();?>about">About </a></li>
                        <li> | </li>
                        <li><a href="<?php echo base_url();?>contact">Contact</a></li>
                        <li> | </li>
                        <li><a href="<?php echo base_url();?>blog" target="_blank">Blog</a></li>
                        <li> | </li>
                        <?php if($this->session->userdata('user_id')){?>
                        <!-- <li><a href="<?php echo base_url();?>login"><i class="fa fa-lock"></i>&nbsp; Logout</a></li> -->
                        <li><a href="<?php echo base_url();?>login"><i class="fa fa-lock"></i> Manage Account</a></li>
                        <?php }else{?>
                        <li><a href="<?php echo base_url();?>login"><i class="fa fa-lock"></i>&nbsp; Login</a></li>
                        <?php }?>
                        <li>&nbsp;</li>
                        <?php if (!empty($setting->facebook)): ?>
                        <li><a href="<?php echo $setting->facebook ?>"><i class="fa fa-lg fa-facebook"></i></a></li>
                        <?php endif; ?>
                        <?php if (!empty($setting->twitter)): ?>
                        <li><a href="<?= $setting->twitter ?>"><i class="fa fa-twitter"></i></a></li>
                        <?php endif; ?>
                        <?php if (!empty($setting->google_plus)): ?>
                        <li><a href="<?= $setting->google_plus ?>"><i class="fa fa-google-plus"></i></a></li>
                        <?php endif; ?>
                        <?php if (!empty($setting->youtube)): ?>
                        <li><a href="<?= $setting->youtube ?>"><i class="fa fa-youtube"></i></a></li>
                        <?php endif; ?>
                        <?php if (!empty($setting->linkedin)): ?>
                        <li><a href="<?= $setting->linkedin ?>"><i class="fa fa-linkedin"></i></a></li>
                        <?php endif; ?>
                        
                    </ul>
                </div>
                <!-- end right -->
            </div>
        </div>
<div class="top_section3">
    <div class="container">
        <div class="left">
            <a href="<?php echo base_url();?>"><div class="logocont" id="logo"></div></a>
        </div>
        <div class="right">
            <ul class="tinfo last">
                <li><i class="fa fa-phone"></i></li>
                <li><em>Call Us</em>
                    <strong><a href="tel:+919819035111">+91 98190 35111</a></strong></li>
            </ul>
            <ul class="tinfo">
                <a href="<?php echo base_url();?>ask-sexologist" style="background:#52bed9;color:#fff">Ask Sexologist</a>
            </ul>
        </div>
    </div>
</div>
