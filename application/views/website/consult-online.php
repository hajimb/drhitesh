<div class="clearfix margin_top6"></div>
<div class="featured_div19 featured_section56">
    <div class="container animate fadeInRight professsional" data-anim-type="fadeInRight" data-anim-delay="300">
        <h2 class="page-heading text-center ">Consult Online</h2>
        <div class="row ">
            <div class="col-lg-12 ">
                <div class="separator-holder clearfix text-center ">
                    <div class="separator "></div>
                </div>
            </div>
        </div>
        <div class="row wbg" id="online-wologin">
            <div class="col-lg-12 text-center">
                <p class="lineheight28 text-center">From the comfort of your home or office or garden!
                    <br> and convenience of your time!
                    <br> From any where in the world, and without travelling!</p>
                <p class="lineheight28 text-center">We assure you the satisfaction of having the best of professional opinion and guidance.</p>
            </div>
        </div>
    </div>
</div>
<?php
if(($this->session->userdata('logged_in')==true) && ($this->session->userdata('logintype')=='normal')){?>

<div class="featured_div19 ">
    <div class="container animate fadeInLeft professsional" data-anim-type="fadeInLeft " data-anim-delay="300 ">
        <div class="row ">
            <div class="col-lg-4 col-sm-4 col-xs-12 col-md-4 ">
                <p>Note:</p>
                <ul class="arrows_list1 ">
                    <li><i class="fa fa-angle-right "></i> Currently we provide online consultations only between Indian Standard Time 9 am to 9 pm</li>
                    <li><i class="fa fa-angle-right "></i> If You do not want to use video feature, for any reason, we can have pure audio interview.</li>
                    <li><i class="fa fa-angle-right "></i> Try to maintain total privacy and no interruptions during the consultation.</li>
                    <li><i class="fa fa-angle-right "></i> Send us invite on our skype ID <a href="skype:drhiteshcounseller?ajdd " style="font-size: 14px "> <img src="<?php echo base_url();?>assets/img/skype.png" alt="Skype call"> drhiteshcounsellor</a></li>
                    <li><i class="fa fa-angle-right "></i> Our Mobile number for Telephonic and WhatsApp consultation is <a href="whatsapp://send?text=For Online Consultation&phone=+919819035111" style="font-size: 14px "> <img src="<?php echo base_url();?>assets/img/whatsapp.png" alt="WhatsApp call"> +91 98190 35111</a></li>
                    <li><i class="fa fa-angle-right"></i> We will intimate you about day and time for interview.</li>
                </ul>
            </div>
            <div class="col-lg-8 col-sm-8 col-xs-12 col-md-8">
                <?php $this->load->view('website/appointment_form');?>
                <!-- <div class="row">
                    <div class="col-md-12 col-lg-12 col-xs-12">
                            <div class="widget-body innerAll half">
                            <form class="dp" action="<?= base_url()?>paypaltest/create_payment_with_paypal" id="paypalform" method="POST">
                                <label for="gender" class="control-label">Appointment For</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <select class="form-control" id="app_type" name="app_type">
                                            <option value="">Select Appointment Type</option>
                                            <option value="Single" data-fee="<?= OnlineSingle?>">Single (INR <?= OnlineSingle?>)</option>
                                            <option value="Couple" data-fee="<?= OnlineCouple?>">Couple (INR <?= OnlineCouple?>)</option>
                                        </select>
                                    </div>
                                    <input type="hidden" name="feeamount" id="feeamount">
                                    <input type="hidden" name="first_name" id="first_name">
                                    <input type="hidden" name="last_name" id="last_name">
                                    <input type="hidden" name="spouse_first_name" id="spouse_first_name">
                                    <input type="hidden" name="spouse_last_name" id="spouse_last_name">
                                    <input type="hidden" name="timing" id="timing">
                                    <input type="hidden" name="adate" id="adate">
                                    <input type="hidden" name="userId" id="userId" value="<?= $this->session->userdata('user_id');?>">
                                </div>
                                <div class="row" style="margin-top:20px ">
                                    <div class="col-md-6">
                                        <select class="form-control" id="consult_type" name="consult_type">
                                            <option value="">Select Consultation Type</option>
                                            <option value="Whatsapp Chat">Whatsapp Chat</option>
                                            <option value="Whatsapp Calling">Whatsapp Calling</option>
                                            <option value="Skype Chat">Skype Chat</option>
                                            <option value="Skype Calling">Skype Calling</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6"> 
                                        <input type="text" name="consultid" id="consultid" placeholder="Consultation Type" class="form-control">
                                    </div>
                                </div>
                                <?php //$js = 'id="appfor" class="form-control"';echo form_dropdown('appfor',  $appfor, '',$js);?>
                                <input type="hidden" name="datein" id="datein">
                                <input type="hidden" name="consultationtype" id="consultationtype" value="online">
                                <input type="hidden" name="client" id="client" value="web">
                            </form>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6 col-lg-6 col-xs-12">
                         <div id="datepicker-inline" class="margin_top3"></div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12" id="timeslots"></div>
                            <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 hidden-xs"></div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
<?php }else{?>
<div class="featured_div19 featured_section56">
    <div class="container animate fadeInRight professsional" data-anim-type="fadeInRight" data-anim-delay="300">
        <div class="row">
            <h2 class="page-heading text-center">Login</h2>
            <div class="col-lg-12">
                <div class="separator-holder clearfix  text-center">
                    <div class="separator"></div>
                </div>
            </div>
        </div>
          <div class="row">
            <form id="loginform" method="post">
                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Mobile No./ Email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                </div>
                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 text-center">
                    <a href="javascript:void(0)" class="rad0 loginbtn custombtn fbut" style="margin-right:15px">Login</a>
                    <a href="javascript:void(0)" class="rad0 gotoregister fbut">Register</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php }?>
<?php //$this->load->view('website/consultation');?>