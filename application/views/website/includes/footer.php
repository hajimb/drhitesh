<div class="clearfix"></div>
       <footer class="footer6 lesstp">
           <div class="container">
               <div class="col-sm-3 col-md-3 animate" data-anim-type="fadeIn" data-anim-delay="100">
                   <h3>About Us</h3>
                   <p>Dr. Hitesh Shah, an extraordinary blend of Physician and Counsellor, and a Sexologist Par Excellence, classical and top most sexologist in Mumbai. <a href="<?php echo base_url();?>about" class="rm">read more</a></p>
               </div>
               <!-- end section -->
               <div class="col-sm-6 col-md-6 animate" data-anim-type="fadeIn" data-anim-delay="150">
                   <h3>Quik Links</h3>
                 <div class="col-sm-4 col-md-4 text-left">
                   <ul>
                       <li><a href="<?php echo base_url('men')?>">Men</a></li>
                       <li><a href="<?php echo base_url('women')?>">Women</a></li>
                       <li><a href="<?php echo base_url('couple')?>">Couple</a></li>
                       <li><a href="<?php echo base_url('premarriage-counselling')?>">Pre Marriage</a></li>
                       <li><a href="<?php echo base_url('about')?>">About</a></li>
                       <li><a href="<?php echo base_url('testimonials')?>">Testimonials</a></li>
                       <li><a href="<?php echo base_url('contact')?>">Contact</a></li>
                   </ul>
                   </div>
                 <div class="col-sm-4 col-md-4 text-left">
                   <ul>
                       <li><a href="#">Media</a></li>
                       <li><a href="#">Survey</a></li>
                       <li><a href="#">Training</a></li>
                       <li><a href="<?php echo base_url('consult-online');?>">Consult Online</a></li>
                       <li><a href="<?php echo base_url('consult-personally');?>">Consult Personaly</a></li>
                       <li><a href="<?php echo base_url('ask-sexologist');?>">Ask Sexologist</a></li>
                       <li><a href="<?php echo base_url('events');?>">Events</a></li>

                   </ul>
                   </div>
                 <div class="col-sm-4 col-md-4 text-left">
                   <ul>
                       <?php if($this->session->userdata('user_id')){?>
                         <li><a href="<?php echo base_url('login/logout')?>">Logout</a></li>
                       <?php }else{?>
                         <li><a href="<?php echo base_url('login')?>">Login</a></li>
                         <li><a href="<?php echo base_url('register')?>">Register</a></li>
                         <li><a href="<?php echo base_url('forgot-password')?>">Forgot Password</a></li>
                       <?php }?>
                       <li><a href="<?php echo base_url('privacy-policy');?>">Privacy Poilcy</a></li>
                       <li><a href="<?php echo base_url('refund-policy');?>">Refund Poilcy</a></li>
                       <li><a href="<?php echo base_url('pricing-policy');?>">Pricing Poilcy</a></li>
                       <li><a href="<?php echo base_url('terms-conditions');?>">Terms & Conditions</a></li>
                   </ul>
                   </div>
               </div>
               <div class="col-sm-3 col-md-3 last animate" data-anim-type="fadeIn" data-anim-delay="250">
                   <h3>Get Connected</h3>
                   <ul class="footer_social_links3 styltwo ulcenter">
                       <?php if (!empty($setting->facebook)): ?>
                       <li class="animate zoomIn" data-anim-type="zoomIn" data-anim-delay="300"><a href="<?php echo $setting->facebook ?>"><i class="fa fa-facebook"></i></a></li>
                       <?php endif; ?>
                       <?php if (!empty($setting->twitter)): ?>
                       <li class="animate zoomIn" data-anim-type="zoomIn" data-anim-delay="300"><a href="<?php echo $setting->twitter ?>"><i class="fa fa-twitter"></i></a></li>
                       <?php endif; ?>
                       <?php if (!empty($setting->youtube)): ?>
                       <li class="animate zoomIn" data-anim-type="zoomIn" data-anim-delay="300"><a href="<?php echo $setting->youtube ?>"><i class="fa fa-youtube"></i></a></li>
                       <?php endif; ?>
                       <?php if (!empty($setting->linkedin)): ?>
                       <li class="animate zoomIn" data-anim-type="zoomIn" data-anim-delay="300"><a href="<?php echo $setting->linkedin ?>"><i class="fa fa-linkedin"></i></a></li>
                       <?php endif; ?>
                       <?php if (!empty($setting->envelop)): ?>
                       <li class="animate zoomIn" data-anim-type="zoomIn" data-anim-delay="300"><a href="<?php echo $setting->envelop ?>"><i class="fa fa-envelope"></i></a></li>
                       <?php endif; ?>

                   </ul>
                   <div class="clearfix margin_top2">
                     <p class="animate zoomIn text-center" data-anim-type="zoomIn" data-anim-delay="300"><a href="tel:+919819035111" class="black tpbut two active fnone"> <i class="fa fa-phone-square"></i> +91 98190 35111</a></p>
                     <p class="animate zoomIn text-center" data-anim-type="zoomIn" data-anim-delay="300"><a href="<?php echo base_url('ask-sexologist')?>" class="black tpbut two active fnone">Ask Sexologist </a></p>
                     <p class="animate zoomIn text-center" data-anim-type="zoomIn" data-anim-delay="300"><a href="<?php echo base_url('consult')?>" class="black tpbut two active fnone">Consult </a></p>

                   </div>
                   <!-- <img src="images/footer-logo3.png" alt="" /> -->
               </div>
               <!-- end section -->
           </div>
           <!-- end footer -->
           <div class="clearfix"></div>
           <div class="copyright_info4">
               <div class="container">
                   <div class="clearfix divider_dashed10"></div>
                   <div class="one_half animate" data-anim-type="fadeInRight" data-anim-delay="200">
                       Copyright © 1990 Dr. Hitesh D Shah - <a href="http://www.purnamhealth.com" target="_blank">Purnam Health Centre</a>. All rights reserved.
                   </div>
                   <!--div class="one_half last animate" data-anim-type="fadeInLeft" data-anim-delay="200">
                       <a href="#">Terms of Use</a> | <a href="#">Privacy Policy</a>
                   </div-->
               </div>
           </div>
           <!-- end copyright info -->
       </footer>
       <a href="#" class="scrollup">Scroll</a>

<div class="sbuttons">
    
  <a href="https://web.whatsapp.com/send?phone=919819035111" target="_blank" class="sbutton whatsapp" id="waicon" tooltip="WhatsApp"><i class="fab fa-whatsapp"></i></a>  
      
  <a href="tel:919819035111" target="_blank" class="sbutton fb" tooltip="Facebook" id="mobileicon" style="display: none"><i class="fa fa-phone"></i></a>
 
  <a href="<?= base_url();?>consult" class="sbutton gplus" tooltip="Consult"><i class="fas fa-user-md"></i></a>
 
  <a target="_blank" class="sbutton mainsbutton" tooltip="Share"><i class="fa fa-ellipsis-v"></i></a>
      
</div> 