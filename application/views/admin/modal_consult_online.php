<div class="box-body">
    <div class="form-group">
        <div class="col-sm-4">Name</div>
        <div class="col-sm-8"><?php echo ucwords($result->full_name);?></div>
    </div>
    <div class="form-group">
        <div class="col-sm-4">Email</div>
        <div class="col-sm-8"><?php echo $result->email;?></div>
    </div>
    <div class="form-group">
        <div class="col-sm-4">Subject</div>
        <div class="col-sm-8"><?php echo $result->subject;?></div>
    </div>
   <div class="form-group">
        <div class="col-sm-4">Message</div>
        <div class="col-sm-8"><?php echo $result->message;?></div>
    </div>
</div>
