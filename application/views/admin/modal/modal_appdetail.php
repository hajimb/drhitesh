<div class="row">
<div class="col-md-12">
    <form class="form-horizontal" id="appform" method="post">
    	<input type="hidden" id="slottime" name="slottime" value="<?php echo substr($result->start_time, 0, -3);?>">
    	<input id="olddate" type="hidden" value="<?php echo $result->date;?>">
    	<input id="changedate" name="changedate" type="hidden" value="<?php echo $result->date;?>">
        <div class="box-body">
            <div class="form-group">
                <label for="disease" class="col-sm-3 control-label text-left" for="status">Status</label>
                <div class="col-sm-9">
                    <?php $js='id="status" class="form-control pointer"';echo form_dropdown('status', $status, $result->confirm, $js);?>
                </div>
            </div>
            <div class="form-group">
                <label for="disease" class="col-sm-3 control-label text-left" for="datepicker-inline">Select Date</label>
                <div class="col-sm-9">
                    <div id="datepicker-inline"></div>
                </div>
            </div>
            <div class="form-group">
                <label for="deleted" class="col-sm-3 control-label text-left">Time Slot</label>
                <div class="col-sm-9">
                    <select class="form-control" name="apptime" id="apptime">
                        <option value="">Select Time Slot</option>
                        <?php foreach ($slotdata as $key => $value) {?>

                        <option value="<?php echo $value;?>" <?php if($result->start_time==$value.':00'){?> selected <?php }?>><?php echo $value;?></option>
                        <?php }?>

                        <script>
	                        fillolddetail();
	                        $('#datepicker-inline')
                        		.datepicker({showOtherMonths: false,startDate:$('#olddate').val(), format: "yyyy-mm-dd"})
                        		.on('changeDate', function (e) {$('#changedate').val(e.format(0,"yyyy-mm-dd"));
                        			getTimeslot(e.format(0));
                        			if($('#olddate').val()==$("#changedate").val()){
                        				setTimeout(function(){ fillolddetail(); }, 100);
                        			}
	                        });

                    		function fillolddetail(){
                    			$('#apptime').append($('<option>', { value : $("#slottime").val() }).text($("#slottime").val()));
                        		$('#apptime').val($("#slottime").val());
                    		}
                        </script>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12 text-center">
                    <input type="hidden" name="id" id="id" value="<?php echo $result->id;?>">
                    <button type="submit" class="btn btn-info" id="update" data-form="appform">Update</button>
                    <button type="submit" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </form>
</div>
</div>