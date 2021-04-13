<div class="clearfix margin_top6"></div>
<div class="featured_div19 featured_section56">
    <div class="container animate fadeInRight professsional" data-anim-type="fadeInRight" data-anim-delay="300">
        <div class="row">
            <h2 class="page-heading text-center"><?php echo $heading;?></h2>
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
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                    </div>

                </div>
                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 text-center">
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>" />
                    <input type="hidden" name="client" id="client" value="web">
                    <a href="javascript:void(0)" class="rad0 loginbtn custombtn fbut">Send Password Link</a>
                </div>
            </form>
        </div>
    </div>
</div>
