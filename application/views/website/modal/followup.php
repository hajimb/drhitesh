<div class="sky-form" id="followupForm">
  <div class="row">
      <div class="form-group">
        <input type="hidden" name="appid" value="<?= $appid;?>">
        <input type="hidden" name="ftype" value="P">
          <div class="col-md-12"><textarea name="followup" id="followup" placeholder="followup" class="form-control" rows="5"></textarea></div>
      </div>
    </div>
    <hr>
    <div class="row marbot0">
      <div class="col-md-9 col-md-offset-3">
        <a href="javascript:void(0)" class="rad0 fbut" id="addfollowup" data-form="followupForm">Add Followup</a>
        <a href="javascript:void(0)" data-dismiss="modal" class="rad0 fbut" style="margin-left: 20px">Cancel</a>
      </div>
    </div>
</div>