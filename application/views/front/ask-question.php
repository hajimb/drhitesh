<section class="container-fluid wbg">
   <div class="container">
      <?php if($this->session->userdata('logged_in') == 0 && !$this->session->userdata('logintype') == 'normal'){?>
      <div class="row">
         <h2 class="page-heading text-center">Ask Question</h2>
         <div class="col-lg-12">
            <div class="separator-holder clearfix  text-center">
               <div class="separator" style=""></div>
            </div>
         </div>
      </div>
      <form id="QuestionForm" method="post">
         <div class="row">
            <div class="col-lg-6">
               <div class="form-group">
                  <label for="full_name">Your Name</label>
                  <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Full Name">
               </div>
            </div>
            <div class="col-lg-6">
               <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" name="email" id="email" placeholder="abc@xyz.com">
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-6">
               <div class="form-group">
                  <label for="mobile">Mobile</label>
                  <input type="text" class="form-control" name="mobile" id="mobile" placeholder="1234567890">
               </div>
            </div>
            <div class="col-lg-6">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control" name="gender" id="gender">
                           <option value="">Select Gender</option>
                           <option value="male">Male</option>
                           <option value="female">Female</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="form-group">
                        <label for="age">Age</label>
                        <input type="text" class="form-control" name="age" id="age" placeholder="15">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-6">
               <div class="form-group">
                  <label for="marital_status">Marital Status </label>
                  <select name="marital_status" id="marital_status" class="form-control">
                     <option value="">Select Marital Status</option>
                     <option value="Never Married">Never Married</option>
                     <option value="Married">Married</option>
                     <option value="Divorced">Divorced</option>
                  </select>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="form-group">
                  <label for="ispublic">Select Public/Private </label>
                  <select name="ispublic" id="ispublic" class="form-control">
                     <option value="">Select Public/Private</option>
                     <option value="Public">Public</option>
                     <option value="Private">Private</option>
                  </select>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <div class="form-group">
                  <label for="question">Question</label>
                  <textarea name="question" id="question" rows="5" class="form-control"></textarea>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12 text-teft">
               <div class="form-group">
                  <input type="hidden" value="0" name="id" id="id">
                  <input type="submit" class="rad0 custombtn" value="Ask Question">
               </div>
            </div>
         </div>
      </form>
      <?php }else{?>
<div class="row">
         <h2 class="page-heading text-center">Ask Question</h2>
         <div class="col-lg-12">
            <div class="separator-holder clearfix  text-center">
               <div class="separator" style=""></div>
            </div>
         </div>
      </div>
      <form id="QuestionForm" method="post">
         <div class="row">
            <div class="col-lg-6">
               <div class="form-group">
                  <label for="ispublic">Select Public/Private </label>
                  <select name="ispublic" id="ispublic" class="form-control">
                     <option value="">Select Public/Private</option>
                     <option value="Public">Public</option>
                     <option value="Private">Private</option>
                  </select>
               </div>
            </div>
            <div class="col-lg-12">
               <div class="form-group">
                  <label for="question">Question</label>
                  <textarea name="question" id="question" rows="5" class="form-control"></textarea>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12 text-teft">
               <div class="form-group">
                  <input type="hidden" name="id" id="id" value="<?php echo $this->session->userdata('user_id');?>">
                  <input type="submit" class="rad0 custombtn" value="Ask Question">
               </div>
            </div>
         </div>
      </form>
      
      <?php }?>
      <div class="row">
         <h2 class="page-heading text-center"> Questions / Answer</h2>
         <div class="col-lg-12">
            <div class="separator-holder clearfix  text-center">
               <div class="separator" style=""></div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12">
               <div id="ajax_table">
                     <!-- First Blog Post -->
               </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12 text-center">
      <button class="btn" id="load_more" data-val = "0">Load more..<img style="display: none" id="loader" src="<?php echo base_url();?>assets/img/loader.GIF"> </button>
      </div>
      </div>
   </div>
</section>