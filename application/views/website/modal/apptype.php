<div class="sky-form">
      <h4>Main Patient</h4>
      <div class="form-group">
            <div class="col-md-6"><input type="text" name="p_first_name" id="p_first_name" placeholder="Patient First Name" class="txthidden form-control"></div>
            <div class="col-md-6"> <input type="text" name="p_last_name" id="p_last_name" placeholder="Patient Last Name" class="txthidden form-control"></div>
      </div>
    <?php if($apptype=='Couple'){?>
        <div class="col-md-12"><h4>Partner / Spouse</h4></div>
        <div class="form-group">
            <div class="col-md-6"><input type="text" name="s_first_name" id="s_first_name" placeholder="Spouse First Name" class="txthidden form-control"></div>
            <div class="col-md-6"> <input type="text" name="s_last_name" id="s_last_name" placeholder="Spouse Last Name" class="txthidden form-control"></div>
        </div>
        
    <?php }?>
    <hr>
    <div class="row marbot0">
      <div class="col-md-9 col-md-offset-3">
        <a href="javascript:void(0)" class="rad0 fbut" id="addPatient">Add Patient</a>
        <a href="javascript:void(0)" data-dismiss="modal" class="rad0 fbut" style="margin-left: 20px">Cancel</a>
      </div>
    </div>
</div>