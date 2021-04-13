<div class="clearfix margin_top6"></div>
<div class="featured_div19">
    <div class="container">
        <?php if($this->session->userdata('logged_in') == 0 && !$this->session->userdata('logintype') == 'normal'){?>
        <div class="row">
            <h2 class="page-heading text-center">Ask Question</h2>
            <div class="col-lg-12">
                <div class="separator-holder clearfix  text-center">
                    <div class="separator" style="margin-bottom: 0"></div>
                </div>
                <h3 class="page-heading text-center" style="margin-top:-10px;">(Confidential)</h3>
            </div>
        </div>
        <div class="content_fullwidth">
            <div class="container">
                <form id="QuestionForm" method="post">
                    <div class="form-group">
                        <div class="col-lg-6">
                            <label for="full_name" class="control-label">Your Name</label>
                            <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Full Name">
                        </div>
                        <div class="col-lg-6">
                            <label for="email" class="control-label">Email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="abc@xyz.com">
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="form-group">
                        <div class="col-lg-6">
                            <label for="mobile" class="control-label">Mobile</label>
                            <input type="text" class="form-control" name="mobile" id="mobile" placeholder="1234567890">
                        </div>
                        <div class="col-lg-3">
                            <label for="gender" class="control-label">Gender</label>
                            <select class="form-control" name="gender" id="gender">
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Transgender">Transgender</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <label for="age" class="control-label">Age</label>
                            <input type="text" class="form-control" name="age" id="age" placeholder="15">
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="form-group">
                        <div class="col-lg-6">
                            <label for="marital_status">Marital Status </label>
                            <select name="marital_status" id="marital_status" class="form-control">
                                <option value="">Select Marital Status</option>
                                <option value="Bacheolar">Bacheolar</option>
                                <option value="Live in">Live in</option>
                                <option value="Engaged">Engaged</option>
                                <option value="Married">Married</option>
                                <option value="Widow/Widower">Widow / Widower</option>
                                <option value="Divorcee">Divorcee</option>
                                <option value="Second Marriage">Second Marriage</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <label for="ispublic">Select Public (Free) / Private (Paid) </label>
                            <select name="ispublic" id="ispublic" class="form-control">
                                <option value="">Select Public/Private</option>
                                <option value="Public">Public (Free)</option>
                                <option value="Private">Private (Paid)</option>
                            </select>
                        </div>
                        <div class="col-lg-3" style="margin-top: 30px;">
                            <input type="checkbox" id="anonymous" name="anonymous" value="1">
                            <label for="anonymous">Don't Show my Name</label>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <label for="question">Question</label>
                            <textarea name="question" id="question" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12 text-center">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>" />
                            <input type="hidden" value="0" name="user_id" id="user_id">
                            <input type="hidden" value="web" name="client" id="client">
                            <input type="submit" class="fbut rad0 custombtn" value="Ask Question">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php }else{?>
        <div class="row">
            <h2 class="page-heading text-center">Ask Question</h2>
            <div class="col-lg-12">
                <div class="separator-holder clearfix text-center">
                    <div class="separator" style=""></div>
                </div>
            </div>
        </div>
        <form id="QuestionForm" method="post">
          <input type="hidden" value="web" name="client" id="client">
          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>" />
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="question">Question</label>
                        <textarea name="question" id="question" rows="5" class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="col-lg-6 text-center">
                        <div class="form-group">
                            <label for="ispublic">Select Public/Private </label>
                            <select name="ispublic" id="ispublic" class="form-control">
                                <option value="">Select Public/Private</option>
                                <option value="Public">Public (Free)</option>
                                <option value="Private">Private (Paid)</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin-top: 30px;">
                        <input type="checkbox" id="anonymous" name="anonymous" value="1">
                        <label for="anonymous">Don't Show my Name</label>
                    </div>
                    <div class="col-lg-12 text-right">
                        <input type="hidden" name="user_id" id="user_id" value="<?php echo $this->session->userdata('user_id');?>">
                        <input type="submit" class="rad0 custombtn fbut" value="Ask Question">
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-teft">
                    <div class="form-group">
                    </div>
                </div>
            </div>
        </form>
        <?php }?>
    </div>
</div>
<div class="featured_div19 featured_section56 padtopbot0">&nbsp;</div>
<div class="featured_div19">
    <div class="container animate fadeInLeft professsional" data-anim-type="fadeInLeft" data-anim-delay="300">
        <div class="row">
            <h2 class="page-heading text-center"> Questions / Answer</h2>
            <div class="col-lg-12">
                <div class="separator-holder clearfix  text-center">
                    <div class="separator"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div id="ajax_table">
                </div>
            </div>
        </div>
<!--         <div class="row">
            <div class="col-lg-12 text-center">
                <button class="btn" id="load_more" data-val="0">Load more..<img style="display: none" id="loader" src="<?php echo base_url();?>assets/img/loader.GIF"> </button>
            </div>
        </div>
 -->    
    </div>
</div>
