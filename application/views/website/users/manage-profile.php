<div class="clearfix margin_top6"></div>
<div class="featured_div19 featured_section56">
    <div class="container animate fadeInRight professsional" data-anim-type="fadeInRight" data-anim-delay="300">
        <h2 class="page-heading text-center">Personal Profile</h2>
        <div class="row ">
            <div class="col-lg-12 ">
                <div class="separator-holder clearfix text-center ">
                    <div class="separator "></div>
                </div>
            </div>
        </div>
        <div class="row wbg" id="online-wologin">
            <div class="col-lg-12">
                <form id="QuestionForm" method="post">
                    <div class="form-group">
                        <div class="col-lg-6">
                            <label for="first_name" class="control-label">First Name</label>
                            <input type="text" class="form-control" name="first_name" id="first_name" value="<?= $result['first_name'];?>" placeholder="Full Name">
                        </div>
                        <div class="col-lg-6">
                            <label for="middle_name" class="control-label">Middle Name</label>
                            <input type="text" class="form-control" name="middle_name" id="middle_name" value="<?= $result['middle_name'];?>" placeholder="Middle Name">
                        </div>
                    </div>
                    <div style="clear: both;height: 15px"></div>
                    <div class="form-group">
                        <div class="col-lg-6">
                            <label for="last_name" class="control-label">Last Name</label>
                            <input type="text" class="form-control" name="last_name" id="last_name" value="<?= $result['last_name'];?>" placeholder="Last Name">
                        </div>
                        <div class="col-lg-6">
                            <label for="email" class="control-label">Email</label>
                            <input type="text" class="form-control" name="email" id="email" value="<?= $result['email'];?>" placeholder="abc@xyz.com">
                        </div>
                    </div>
                    <div style="clear: both;height: 15px"></div>
                    <div class="form-group">
                        <div class="col-lg-6">
                            <label for="mobile" class="control-label">Mobile</label>
                            <input type="text" class="form-control" name="mobile" id="mobile" value="<?= $result['contact'];?>" placeholder="1234567890">
                        </div>
                        <div class="col-lg-6">
                            <label for="gender" class="control-label">Gender</label>
                            <?php echo form_dropdown('gender', $gender, $result['gender'], 'class="form-control" id="gender"') ?>
                        </div>
                    </div>
                    <div style="clear: both;height: 15px"></div>
                    <div class="form-group">
                        <div class="col-lg-6">
                          <label for="age" class="control-label">Age</label>
                          <input type="text" class="form-control" name="age" id="age" value="<?= $result['age'];?>" placeholder="15">
                        </div>
                        <div class="col-lg-6">
                            <label for="marital_status">Marital Status </label>
                            <?php echo form_dropdown('marital_status', $marital_status, $result['marital_status'], 'class="form-control" id="marital_status"') ?>
                        </div>
                    </div>
                    <div style="clear: both;height: 15px"></div>
                    <div class="form-group">
                        <div class="col-lg-6">
                            <label for="country" class="control-label">Country</label>
                            <input type="text" class="form-control" name="country" id="country" value="<?= $result['country'];?>" placeholder="">
                        </div>
                        <div class="col-lg-6">
                            <label for="state" class="control-label">State</label>
                            <input type="text" class="form-control" name="state" id="state" value="<?= $result['state'];?>" placeholder="">
                        </div>
                    </div>
                    <div style="clear: both;height: 15px"></div>
                    <div class="form-group">
                        <div class="col-lg-6">
                            <label for="city" class="control-label">City</label>
                            <input type="text" class="form-control" name="city" id="city" value="<?= $result['city'];?>" placeholder="">
                        </div>
                        <div class="col-lg-6">
                            <label for="pincode" class="control-label">Pincode</label>
                            <input type="text" class="form-control" name="pincode" id="pincode" value="<?= $result['pincode'];?>" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <label for="address" class="control-label">Address</label>
                            <textarea class="form-control" name="address" id="address" placeholder=""><?= $result['address'];?></textarea>
                        </div>
                       
                    </div>
                    <div style="clear:both;height:15px"></div>
                    <div class="form-group">
                        <div class="col-lg-12 text-center">
                            <input type="hidden" value="web" name="client" id="client">
                            <input type="hidden" name="id" id="id" value="<?= $result['id'];?>">
                            <input type="submit" class="fbut rad0 custombtn" value="Update Profile">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>