<div class="clearfix margin_top6"></div>
<div class="featured_div19 featured_section56">
    <div class="container animate fadeInRight professsional" data-anim-type="fadeInRight" data-anim-delay="300">
        <div class="row">
            <h2 class="page-heading text-center">Reset your password</h2>
            <div class="col-lg-12">
                <div class="separator-holder clearfix text-center">
                    <div class="separator"></div>
                </div>
            </div>
        </div>
          <div class="row">
            <form id="loginform" method="post">
                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="password">
                    </div>
                    <div class="form-group">
                        <label for="confirmpassword">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="password">
                    </div>
                </div>
                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 text-center">
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>" />
                    <input type="hidden" name="client" value="web">
                    <input type="hidden" name="token" id="token" value="<?php echo $cleanToken;?>">
                    <a href="javascript:void(0)" class="rad0 loginbtn custombtn fbut">Reset Password</a>
                </div>
            </form>
        </div>
    </div>
</div>
