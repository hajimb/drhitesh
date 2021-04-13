<style type="text/css">
.nav li a {
    font-weight: bold;
    font-family: verdana
}
.bold{font-weight: bold;}
.rtf{
    border: 1px solid #ccc;
    padding: 5px;
}
</style>
<input type="hidden" id="patient_id" value="<?= $patient_id;?>">
<div class="content-wrapper">
    <section class="content-header">
        <h1> Patient</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Patient</a></li>
            <li class="active">Detail</li>
        </ol>
    </section>
    <section class="content patientdetail">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-body">
                        <div class="box-group">
                            <div class="nav-tabs-custom">
                                <div class="box box-white box-solid">
                                    <div class="box-header with-border">
                                      <h3 class="box-title" data-widget="collapse">Preliminaries</h3>
                                      <div class="box-tools pull-right">
                                        <button type="submit" class="btn btn-danger" id="pateintprofile" data-form="premilinaryContainers">Update </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                      </div>
                                    </div>
                                    <div class="box-body" id="premilinaryContainers">
                                        <?php 
                                        // print_r($result);
                                        if(count( (array) $result) > 0){?>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-3 bold">Patient ID</div>
                                                    <div class="col-sm-3 bold">
                                                        <?= $result->patient_id;?>
                                                     </div>  
                                                </div> 
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-3 bold">Patient Name</div>
                                                    <div class="col-sm-3">
                                                        <div contenteditable="true" class="form-control" id="first_name"><?= ucwords($result->first_name);?>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div contenteditable="true" class="form-control" id="middle_name">
                                                            <?= ucwords($result->middle_name);?>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div contenteditable="true" class="form-control" id="first_name">
                                                            <?= ucwords($result->last_name);?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-3 bold">Age</div>
                                                    <div class="col-sm-3">
                                                        <div class="form-control" contenteditable="true" id="patient_age">
                                                            <?= $result->age;?>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 bold">Marital Status</div>
                                                    <div class="col-sm-3">
                                                        <?= $master_maritalstatus;?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-3 bold">Marital Since</div>
                                                    <div class="col-sm-3">
                                                        <div class="form-control" contenteditable="true" id="marital_since">
                                                            <?= $result->marital_since;?>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 bold">To Marry</div>
                                                    <div class="col-sm-3">
                                                        <div class="form-control" contenteditable="true" id="tomarry">
                                                            <?= $result->tomarry;?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-3 bold">Contact Number</div>
                                                    <div class="col-sm-3">
                                                    <?php if(strlen(($result->mobile))>1){?>
                                                        +
                                                        <?= '<div class="rtf" contenteditable="true" id="country_code" style="display:inline-block; width:30px;">'.$result->country_code.'</div> <div class="rtf" contenteditable="true" id="mobile" style="display:inline-block; width:150px;">'.$result->mobile.'</div>';?>
                                                    <?php }else{?>
                                                    
                                                       + <div class="form-control" contenteditable="true" id="country_code" style="display:inline-block;width:20px">  </div> <div class="form-control" contenteditable="true" id="mobile" style="display:inline-block;width:150px">  </div>
                                                <?php }?>
                                                    </div>
                                                    <div class="col-sm-3 bold">Email </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-control" contenteditable="true" id="emailaddress">
                                                            <?= $result->emailaddress;?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-3 bold">Landline</div>
                                                    <div class="col-sm-3">
                                                        <div class="form-control" contenteditable="true" id="landline">
                                                            <?= $result->landline;?>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 bold">Education</div>
                                                    <div class="col-sm-3">
                                                        <?= $master_education;?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-3 bold">Occupation</div>
                                                    <div class="col-sm-3">
                                                        <?= $master_occupation;?>
                                                    </div>
                                                    <div class="col-sm-3 bold">DoB</div>
                                                    <div class="col-sm-3">
                                                        <div class="form-control" contenteditable="true" id="patient_dob">
                                                            <?= $result->dob;?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } else{?>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <p>No Record Found</p>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }?>
                                    </div>
                                </div>

                                <div class="box box-white box-solid">
                                    <div class="box-header with-border">
                                        <h3 class="box-title" data-widget="collapse">Medical History</h3>
                                        <div class="box-tools pull-right">
                                            <button type="submit" class="btn btn-danger" id="submitmedicalhistory">Update </button>
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                            </button>
                                            <input type="hidden" id="medical_count" name="medical_count" value="<?= count( (array) $medical);?>">
                                        </div>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="form-horizontal">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <label>Medical History</label>
                                                            <div class="rtf" id="medical_history" contenteditable="true">
                                                            <?= $medical->medical_history ?? '';?>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label>Medical History Other</label>
                                                            <div class="rtf" id="medical_history_other" contenteditable="true">
                                                            <?= $medical->medical_history_other ?? '';?>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <label>Current Medication</label>
                                                            <div class="rtf" id="current_medication" contenteditable="true">
                                                                <?= $medical->current_medication ?? '';?>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label>Habits</label>
                                                            <div class="rtf" id="habits" contenteditable="true">
                                                                <?= $medical->habits ?? '';?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <label>Allergy</label>
                                                            <div class="rtf" id="allergy" contenteditable="true">
                                                                <?= $medical->allergy ?? '';?>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label>Feedback</label>
                                                            <div class="rtf" id="dr_feedback" contenteditable="true">
                                                                <?= $medical->dr_feedback ?? '';?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="box box-white box-solid">
                                    <div class="box-header with-border">
                                        <h3 class="box-title" data-widget="collapse">Spouse</h3>
                                        <div class="box-tools pull-right">
                                            <button type="submit" class="btn btn-danger" id="spouseupdate" data-id='<?= $spouse->id;?>'>Update </button>
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <?php //if(count($spouse)>0){?>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-3 bold">Spouse Name</div>
                                                    <div class="col-sm-3">
                                                        <div class="form-control" contenteditable="true" id="spouse_name">
                                                            <?= $spouse->spouse_name ?? '';?>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 bold">Spouse Age</div>
                                                    <div class="col-sm-3">
                                                        <div class="form-control" contenteditable="true" id="spouse_age">
                                                            <?= $spouse->spouse_age ?? '';?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-3 bold">Spouse Illness</div>
                                                    <div class="col-sm-3">

                                                    <div class="form-control" contenteditable="true" id="spouse_illness">
                                                        <?= $spouse->spouse_illness ?? '';?>
                                                    </div>
                                                    </div>
                                                    <div class="col-sm-3 bold">Occupation</div>
                                                    <div class="col-sm-3">
                                                        <?= $master_spouseoccupation ?? '';?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-3 bold">Education</div>
                                                    <div class="col-sm-3">
                                                        <?= $master_spouseeducation ?? '';?>
                                                    </div>
                                                    <div class="col-sm-3 bold">Feedback</div>
                                                    <div class="col-sm-3">
                                                        <div class="rtf" id="spouse_feedback" contenteditable="true">
                                                                <?= $spouse->dr_feedback ?? '';?>
                                                            </div>
                                                    </div>
                                                    <input type="hidden" id="spouse_count" name="spouse_count" value="<?= count( (array)$spouse);?>">
                                                </div>
                                            </div>
                                        <?php //} else{?>
                                            <!-- <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <p>No Record Found</p>
                                                    </div>
                                                </div>
                                            </div> -->
                                        <?php //}?>
                                        <!-- </div> -->
                                    </div>
                                </div>

                                <div class="box box-white box-solid">
                                    <div class="box-header with-border">
                                        <h3 class="box-title" data-widget="collapse">Family</h3>
                                        <div class="box-tools pull-right">
                                            <button type="submit" class="btn btn-danger" id="submit_famliy_detail">Update </button>
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                            </button>
                                            <input type="hidden" id="family_count" name="family_count" value="<?= count( (array)$family);?>">
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <table class="table">
                                           <tr>
                                               <th>S No.</th>
                                               <th>Relation</th>
                                               <th>Age</th>
                                               <th>Illness</th>
                                           </tr>
                                           <?php 
                                            $i=1;
                                            if (count( (array)$family)>0){
                                                // print_r($family);
                                            foreach ($family as $row) {?>
                                               <tr>
                                                   <td><?= $i;?></td>
                                                   <td><?= $row['relation'];?></td>
                                                   <td><div contenteditable="true" data-id="<?= $row['id'];?>" name="patient_family_age[]"><?= $row['age'];?></div></td>
                                                   <td><div contenteditable="true" data-id="<?= $row['id'];?>" name="patient_family_illness[]"><?= $row['illness'];?></div></td>
                                               </tr>
                                           <?php $i++; }}else{ ?>
                                            <tr>
                                                <td colspan="4">No Member Added</td>
                                            </tr>
                                           <?php } ?>
                                       </table>
                                    </div>
                                </div>
                                
                                <div class="box box-white box-solid">
                                    <div class="box-header with-border">
                                        <h3 class="box-title" data-widget="collapse">Life Style</h3>
                                        <div class="box-tools pull-right">
                                            <button type="submit" class="btn btn-danger" id="updatelifestyle">Update </button>
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                            </button>
                                            <input type="hidden" id="lifestyle_count" name="lifestyle_count" value="<?= count( (array)$lifestyle);?>">
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <style type="text/css">
                                        .tagline {
                                            height: 0;
                                            border-top: 1px solid #CFCFCF;
                                            text-align: center;
                                        }.tagline {
                                            font-weight: bold;
                                        }
                                                       .spacer-b30 {
                                            margin-bottom: 30px;
                                            margin-top: 30px;
                                        }             .tagline span {
                                            text-transform: uppercase;
                                            display: inline-block;
                                            position: relative;
                                            padding: 0 15px;
                                            background: #fff;
                                            color: #000000;
                                            top: -10px;
                                        } 
                                        </style>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="spacer-b30">
                                                    <div class="tagline"><span> Daily Sleep</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3 bold">Bed Time</div>
                                                    <div class="col-sm-3">
                                                        <div class="form-control" contenteditable="true" id="bedtime">
                                                            <?= $lifestyle->bedtime ?? '';?>
                                                        </div>
                                                </div>
                                                <div class="col-sm-3 bold">Wake Up Time</div>
                                                <div class="col-sm-3">
                                                        <div class="form-control" contenteditable="true" id="wakeup_time">
                                                            <?= $lifestyle->wakeup_time ?? '';?>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3 bold">Sleep Day</div>
                                                <div class="col-sm-3">
                                                    <div class="form-control" contenteditable="true" id="sleep_day">
                                                        <?= $lifestyle->sleep_day ?? '';?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 bold">Wake Fresh</div>
                                                <div class="col-sm-3">
                                                    <div class="form-control" contenteditable="true" id="wake_fresh">
                                                        <?= $lifestyle->wake_fresh ?? '';?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="spacer-b30">
                                                    <div class="tagline"><span> Daily Food Habits</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3 bold">Breakfast Time</div>
                                                    <div class="col-sm-3">
                                                        <div class="form-control" contenteditable="true" id="breakfast_time">
                                                        <?= $lifestyle->breakfast_time ?? '';?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 bold">Lunch Time</div>
                                                <div class="col-sm-3">
                                                    <div class="form-control" contenteditable="true" id="lunch_time">
                                                        <?= $lifestyle->lunch_time ?? '';?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3 bold">Breakfast Content</div>
                                                    <div class="col-sm-3">
                                                        <div class="form-control" contenteditable="true" id="breakfast_content">
                                                        <?= $lifestyle->breakfast_content ?? '';?>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-3 bold">Lunch Content</div>
                                                <div class="col-sm-3">
                                                    <div class="form-control" contenteditable="true" id="lunch_content">
                                                        <?= $lifestyle->lunch_content ?? '';?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3 bold">Snack Time</div>
                                                <div class="col-sm-3">
                                                    <div class="form-control" contenteditable="true" id="snack_time">
                                                    <?= $lifestyle->snack_time ?? '';?>
                                                </div>
                                                </div>
                                                <div class="col-sm-3 bold">Dinner Time</div>
                                                <div class="col-sm-3">
                                                    <div class="form-control" contenteditable="true" id="dinner_time">
                                                        <?= $lifestyle->dinner_time ?? '';?>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3 bold">Snack Content</div>
                                                <div class="col-sm-3">
                                                    <div class="form-control" contenteditable="true" id="snack_content">
                                                        <?= $lifestyle->snack_content ?? '';?>
                                                    </div>
                                                    </div>
                                                <div class="col-sm-3 bold">Dinner Content</div>
                                                <div class="col-sm-3">
                                                    <div class="form-control" contenteditable="true" id="dinner_content">
                                                        <?= $lifestyle->dinner_content ?? '';?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3 bold">Other Content</div>
                                                <div class="col-sm-3">
                                                    <div class="form-control" contenteditable="true" id="other_eatable">
                                                        <?= $lifestyle->other_eatable ?? '';?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 bold">Sunday Content</div>
                                                <div class="col-sm-3">
                                                    <div class="form-control" contenteditable="true" id="sunday_content">
                                                        <?= $lifestyle->sunday_content ?? '';?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3 bold">Feedback</div>
                                                <div class="col-sm-3">
                                                   <div class="form-control" id="life_feedback" contenteditable="true"> <?= $lifestyle->dr_feedback ?? '';?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="spacer-b30">
                                                    <div class="tagline"><span> Daily Travel</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3 bold">Place Residence</div>
                                                <div class="col-sm-3">
                                                    <div class="form-control" id="place_residence" contenteditable="true">
                                                        <?= $travel->place_residence ?? '';?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 bold">Work Place</div>
                                                <div class="col-sm-3">
                                                    <div class="form-control" id="place_work" contenteditable="true">
                                                        <?= $travel->place_work ?? '';?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3 bold">Leave Home</div>
                                                <div class="col-sm-3">
                                                    <div class="form-control" id="leave_home" contenteditable="true">
                                                        <?= $travel->leave_home ?? '';?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 bold">Home Return</div>
                                                <div class="col-sm-3">
                                                    <div class="form-control" id="return_home" contenteditable="true">
                                                        <?= $travel->return_home ?? '';?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3 bold">Holidays Per Week</div>
                                                <div class="col-sm-3">
                                                    <div class="form-control" id="holidays" contenteditable="true">
                                                        <?= $travel->holidays ?? '';?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 bold">Transport Type</div>
                                                <div class="col-sm-3">
                                                    <div class="form-control" id="transport_type" contenteditable="true">
                                                        <?= $travel->transport_type ?? '';?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3 bold">By Road</div>
                                                <div class="col-sm-3">
                                                    <div class="form-control" id="by_road" contenteditable="true">
                                                        <?= $travel->by_road ?? '';?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 bold">By Train</div>
                                                <div class="col-sm-3">
                                                    <div class="form-control" id="by_train" contenteditable="true">
                                                        <?= $travel->by_train ?? '';?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3 bold">By Walk</div>
                                                <div class="col-sm-3">
                                                    <div class="form-control" id="by_walk" contenteditable="true">
                                                        <?= $travel->by_walk ?? '';?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 bold">Overnight</div>
                                                <div class="col-sm-3">
                                                    <div class="form-control" id="overnight" contenteditable="true">
                                                        <?= $travel->overnight ?? '';?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="spacer-b30">
                                                    <div class="tagline"><span> About Spouse</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3 bold">Spouse Leave Home</div>
                                                <div class="col-sm-3">
                                                    <div class="form-control" id="sp_leave_home" contenteditable="true">
                                                        <?= $travel->sp_leave_home ?? '';?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 bold">Spouse Return Home</div>
                                                <div class="col-sm-3">
                                                    <div class="form-control" id="sp_return_home" contenteditable="true">
                                                        <?= $travel->sp_return_home ?? '';?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3 bold">Spouse Holidays Fresh</div>
                                                <div class="col-sm-3">
                                                    <div class="form-control" id="sp_holidays" contenteditable="true">
                                                        <?= $travel->sp_holidays ?? '';?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="spacer-b30">
                                                    <div class="tagline"><span> Daliy Excercise</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3 bold">Exercise</div>
                                                <div class="col-sm-3">
                                                    <div class="form-control" id="exercise" contenteditable="true">
                                                        <?= $travel->exercise ?? '';?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 bold">Exercise Time</div>
                                                <div class="col-sm-3">
                                                    <div class="form-control" id="exercise_time" contenteditable="true">
                                                        <?= $travel->exercise_time ?? '';?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3 bold">Exercise Detail</div>
                                                <div class="col-sm-3">
                                                    <div class="form-control" id="exercise_detail" contenteditable="true">
                                                        <?= $travel->exercise_detail ?? '';?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 bold">Sports</div>
                                                <div class="col-sm-3">
                                                    <div class="form-control" id="sports" contenteditable="true">
                                                        <?= $travel->sports ?? '';?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="spacer-b30">
                                                    <div class="tagline"><span> Working Hours</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3 bold">Rotating Shift</div>
                                                <div class="col-sm-3">
                                                    <div class="form-control" id="rotating_shift" contenteditable="true">
                                                        <?= $travel->rotating_shift ?? '';?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 bold">Flexi Hour</div>
                                                <div class="col-sm-3">
                                                    <div class="form-control" id="flexi_hour" contenteditable="true">
                                                        <?= $travel->flexi_hour ?? '';?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3 bold">Feedback</div>
                                                <div class="col-sm-3">
                                                   <div class="form-control" id="travelling_feedback" contenteditable="true"> <?= $travel->dr_feedback ?? '';?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="box box-white box-solid">
                                    <div class="box-header with-border">
                                        <h3 class="box-title" data-widget="collapse">Patient File</h3>
                                        <div class="box-tools pull-right">
                                            <button type="submit" class="btn btn-danger" id="updatedocs">Update </button>
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="form-group">
                                            <form class="form-horizontal" method="post" id="docform" enctype="multipart/form-data">
                                                <label for="duration" class="col-sm-3 control-label">Upload Doc</label>
                                                <div class="col-sm-3">
                                                    <input type="hidden" name="pid" id="pid" value="<?= $this->uri->segment(3);?>">
                                                    <input type="file" class="form-control blank" name="filename" id="filename">
                                                </div>
                                                <label for="title" class="col-sm-3 control-label">Title</label>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control blank" name="title" id="title">
                                                    <input type="hidden" name="patient_id" value="<?= $patient_id;?>">
                                                </div>
                                            </form>
                                        </div>
                                        <?php //if(count( (array)$filedetail)>0){?>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="spacer-b30">
                                                    <!-- <div class="tagline"><span> Prevous</span></div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group" id="fileDetail">
                                            <?php foreach ($filedetail as $row) {?>
                                                
                                                <div class="col-sm-3">
                                                    <a class="mustang-gallery" href="<?= base_url();?>uploads/doc/<?= $row['filename'];?>" rel="shadowbox[mustang]">
                                                    <img src="<?= base_url();?>uploads/doc/<?= $row['filename'];?>" class="img-responsive"></a>
                                                </div>
                                            <?php }?>
                                        </div>
                                    <?php //}?>
                                    </div>
                                </div>


                                <div class="box box-white box-solid">
                                    <div class="box-header with-border">
                                        <h3 class="box-title" data-widget="collapse">Prescription</h3>
                                        <div class="box-tools pull-right">
                                            <button type="submit" class="btn btn-danger" id="">Update </button>
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="form-group">
                                            <form class="form-horizontal" method="post" id="docform" enctype="multipart/form-data">
                                                <!-- <label for="duration" class="col-sm-3 control-label">Prescription</label> -->
                                                <div class="col-sm-12">
                                                    <textarea name="editor1"></textarea>
                                                </div>
                                            </form>
                                        </div>
                                       
                                    </div>
                                </div>
                                
                                <div class="box box-white box-solid">
                                    <div class="box-header with-border">
                                        <h3 class="box-title" data-widget="collapse">Treatment</h3>
                                        <div class="box-tools pull-right">
                                            <button type="submit" class="btn btn-danger" id="submitmedicalhistory">Update </button>
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <form class="form-horizontal" id="treatment-form">
                                            <div class="form-group">
                                                <label for="duration" class="col-sm-2 control-label">Treatment Duration</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="duration" id="duration" style="width: 250px;display: inline-block;" tabindex="1">
                                                    <select name="duration_period" class="form-control" id="duration_period" style="width: 250px;display: inline-block;" tabindex="2">
                                                        <option value="">Select Duraion</option>
                                                        <option value="D">Days</option>
                                                        <option value="M">Month</option>
                                                        <option value="Y">Year</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="fees" class="col-sm-2 control-label">Fees</label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="fees" class="form-control" id="fees" tabindex="3">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="frequency" class="col-sm-2 control-label">Frequency</label>
                                                <div class="col-sm-4">
                                                    <select name="frequency" class="form-control" id="frequency" tabindex="4">
                                                        <option value="">Select Frequency</option>
                                                        <option value="D">Daily</option>
                                                        <option value="W">Weekly</option>
                                                        <option value="M">Monthly</option>
                                                        <option value="Q">Quaterly</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="box-footer text-center">
                                                <input type="hidden" name="patient_id" value="<?= $patient_id;?>">
                                                <button type="submit" class="btn btn-info submitdetail" data-form="treatment-form" data-type="patient_treatment" tabindex="5">Submit Treatment</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                 
                                <div class="box box-white box-solid">
                                    <div class="box-header with-border">
                                        <h3 class="box-title" data-widget="collapse">Symptoms</h3>
                                        <div class="box-tools pull-right">
                                            <button type="submit" class="btn btn-danger" id="submitmedicalhistory">Symptoms </button>
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <form class="form-horizontal" id="followUp-form">
                                            <div class="form-group">
                                                <label for="duration" class="col-sm-2 control-label"> Duration</label>
                                                <div class="col-sm-8">
                                                    <?php $js='id="symptoms" class="form-control pointer" multiple';echo form_dropdown('symptoms[]' ,$symptoms,'',$js);?>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="hidden" name="patient_id" value="<?= $patient_id;?>">
                                                    <button type="submit" class="btn btn-info add">Add</button>
                                                </div>
                                            </div>
                                            <!-- <div class="box-footer text-center">
                                                <input type="hidden" name="patient_id" value="<?= $patient_id;?>">
                                                <button type="submit" class="btn btn-info">Submit Followup</button>
                                            </div> -->
                                        </form>
                                    </div>
                                     <div class="box-body" id="addform" style="display: none">
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
