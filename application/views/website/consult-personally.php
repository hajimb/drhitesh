<style type="text/css">

</style>
<div class="clearfix margin_top6"></div>
<div class="banner">
    <img src="<?php echo base_url();?>assets/img/contact-us.jpg" class="img-responsive" style="width: 100%;">
</div>
<div class="featured_div19 featured_section56">
    <div class="container animate fadeInRight professsional" data-anim-type="fadeInRight" data-anim-delay="300">
        
        <div class="row">
            <h2 class="page-heading text-center">Consult Us Personally</h2>
            <div class="col-lg-12">
                <div class="separator-holder clearfix text-center">
                    <div class="separator" style=""></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <p class="lineheight28">Committed For:</p>
                <ol>
                    <li>Long term Solutions for Every Sexual Problems</li>
                    <li>Rejuvenating yourself</li>
                    <li>Nurturing Relationship</li>
                    <li>Enriching Chemistry</li>
                    <li>Emotional healing</li>
                </ol>
            </div>
            <div class="col-lg-6">
                <p>Request:</p>
                <ol>
                    <li>Reach 10 minutes in advance of your scheduled appointment time.</li>
                    <li>Bring all your medical / investigations papers</li>
                    <li>If you have a partner, its ideal to consult together.</li>
                    <li>Avoid perfume, deo / body spray, when you visit the heath centre.</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 ">
                <div class="row">
                    <div class="address_info" style="padding: 20px 10px;margin-bottom: 0;min-height: 312px">
                        <h4>PURNAM HEALTH CENTRE – Kandivali West</h4>
                        <div class="col-lg-6 col-xs-12">
                            <ul>
                                <li>
                                    301, Sanjar Enclave, Above Balaji Banquets, Opp.
                                    <br /> Milap PVR Cinema,S.V. Road, Kandivali west,
                                    <br /> Mumbai 400067, Maharashtra, India
                                    <br /> +91 22 28053555
                                    <br /> MON to SAT: 9 am to 9 pm.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ">
                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/d/u/3/embed?mid=1jGcFuu80zTNSk3dEKiopIwEeYWlpfEan"  frameborder="0" style="border:0" allowfullscreen=""></iframe>
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.973030787405!2d72.8456797144544!3d19.196380253166925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b6e09023fc99%3A0xec3a2eb8f7f64dc3!2sSexologist+in+Mumbai%2C+Dr.+Hitesh+Shah!5e0!3m2!1sen!2sin!4v1465638869491" frameborder="0" style="border:0" allowfullscreen=""></iframe> -->
                </div>
            </div>
            <!-- <div class="col-lg-6 minheight">
                <div class="row">
                    <div class="address_info" style="padding: 20px 10px;margin-bottom: 0;min-height: 288px">
                    <h4>PURNAM HEALTH CENTRE – Chowpatty</h4>
                        <div class="col-lg-6 col-xs-12">
                            <ul>
                                <li>
                                    29-A, Dr. Atmaram Ranganekar Marg,
                                    <br /> Opp Starbucks, Chowpatty,
                                    <br /> Mumbai 400007, Maharashtra, India
                                    <br /> +91 98190 35111
                                    <br /> By appointment only.
                                   </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-xs-12">
                            <div class="map-responsive">
                                <iframe src="https://www.google.com/maps/d/u/3/embed?mid=1TGZXPjE57g_Rwxf9akJLaKMaYAeV3Pjw" frameborder="0" style="border:0" allowfullscreen=""></iframe>
  
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
<?php
if(($this->session->userdata('logged_in') == true) && ($this->session->userdata('logintype') == 'normal')){?>
    <div class="featured_div19 ">
    <div class="container animate fadeInLeft professsional" data-anim-type="fadeInLeft " data-anim-delay="300 ">
        <div class="row ">
            <div class="col-lg-12 col-sm-12 col-xs-12 col-md-8">
                <?php $this->load->view('website/appointment_form');?>
                <!-- <div class="row">
                    <div class="col-md-12 col-lg-12 col-xs-12">
                            <div class="widget-body innerAll half">
                            <form class="dp">
                                <label for="gender" class="control-label">Appointment For</label>
                                <div class="row">
                                    <div class="col-md-6 col-xs-6 col-lg-6"><input type="text" name="first_name" id="first_name" placeholder="Patient First Name" class="txthidden form-control"></div>
                                    <div class="col-md-6 col-xs-6 col-lg-6"> <input type="text" name="last_name" id="last_name" placeholder="Patient Last Name" class="txthidden form-control"></div>

                                </div>
                                <input type="hidden" name="datein" id="datein">
                                <input type="hidden" name="consultationtype" id="consultationtype" value="personally">
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
