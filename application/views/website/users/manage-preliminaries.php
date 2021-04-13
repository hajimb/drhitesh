<style>
    .panel{margin-bottom: 0!important}
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
<div class="clearfix margin_top6"></div>
<div class="featured_div19 featured_section56">
    <div class="container animate fadeInRight professsional" data-anim-type="fadeInRight" data-anim-delay="300">
        <h2 class="page-heading text-center"><?= $heading;?></h2>
        <div class="row ">
            <div class="col-lg-12 ">
                <div class="separator-holder clearfix text-center ">
                    <div class="separator "></div>
                </div>
            </div>
        </div>
        <div class="row">
<div class="col-md-12">

        <div class="wbg" id="accordion">
            <div class="panel panel-default">
                  <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                        <h4 class="panel-title text-left">
                          Preliminaries
                        </h4>
                    </a>    
                  </div>
              <div id="collapse1" class="panel-collapse collapse in">
                <div class="panel-body">
                    
                    <?php 
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
                                                        <div id="first_name"><?= ucwords($result->first_name);?>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div id="middle_name">
                                                            <?= ucwords($result->middle_name);?>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div id="first_name">
                                                            <?= ucwords($result->last_name);?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-3 bold">Age</div>
                                                    <div class="col-sm-3">
                                                        <div id="patient_age">
                                                            <?= $result->age;?>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 bold">Marital Status</div>
                                                    <div class="col-sm-3">
                                                        <?= $result->mstatus;?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-3 bold">Marital Since</div>
                                                    <div class="col-sm-3">
                                                        <div id="marital_since">
                                                            <?= $result->marital_since;?>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 bold">To Marry</div>
                                                    <div class="col-sm-3">
                                                        <div id="tomarry">
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
                                                        <?= '<div class="rtf" id="country_code" style="display:inline-block; width:30px;">'.$result->country_code.'</div> <div class="rtf" id="mobile" style="display:inline-block; width:150px;">'.$result->mobile.'</div>';?>
                                                    <?php }else{?>
                                                    
                                                       + <div id="country_code" style="display:inline-block;width:20px">  </div> <div id="mobile" style="display:inline-block;width:150px">  </div>
                                                <?php }?>
                                                    </div>
                                                    <div class="col-sm-3 bold">Email </div>
                                                    <div class="col-sm-3">
                                                        <div id="emailaddress">
                                                            <?= $result->emailaddress;?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-3 bold">Landline</div>
                                                    <div class="col-sm-3">
                                                        <div id="landline">
                                                            <?= $result->landline;?>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 bold">Education</div>
                                                    <div class="col-sm-3">
                                                        <?= $result->qualification;?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-3 bold">Occupation</div>
                                                    <div class="col-sm-3">
                                                        <?= $result->occu;?>
                                                    </div>
                                                    <div class="col-sm-3 bold">DoB</div>
                                                    <div class="col-sm-3">
                                                        <div id="patient_dob">
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
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                    <h4 class="panel-title text-left">
                      Medical
                    </h4>
                </a>
              </div>
              <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="form-horizontal">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <label>Medical History</label>
                                                            <div class="rtf" id="medical_history">
                                                            <?= $medical->medical_history ?? '';?>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label>Medical History Other</label>
                                                            <div class="rtf" id="medical_history_other">
                                                            <?= $medical->medical_history_other ?? '';?>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <label>Current Medication</label>
                                                            <div class="rtf" id="current_medication">
                                                                <?= $medical->current_medication ?? '';?>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label>Habits</label>
                                                            <div class="rtf" id="habits">
                                                                <?= $medical->habits ?? '';?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <label>Allergy</label>
                                                            <div class="rtf" id="allergy">
                                                                <?= $medical->allergy ?? '';?>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label>Feedback</label>
                                                            <div class="rtf" id="dr_feedback">
                                                                <?= $medical->dr_feedback ?? '';?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                <h4 class="panel-title text-left">
                  Life Style
                </h4>
                </a>
              </div>
              <div id="collapse3" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="box-body">
                                        <style type="text/css">
                                        
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
                                                        <div id="bedtime">
                                                            <?= $lifestyle->bedtime ?? '';?>
                                                        </div>
                                                </div>
                                                <div class="col-sm-3 bold">Wake Up Time</div>
                                                <div class="col-sm-3">
                                                        <div id="wakeup_time">
                                                            <?= $lifestyle->wakeup_time ?? '';?>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3 bold">Sleep Day</div>
                                                <div class="col-sm-3">
                                                    <div id="sleep_day">
                                                        <?= $lifestyle->sleep_day ?? '';?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 bold">Wake Fresh</div>
                                                <div class="col-sm-3">
                                                    <div id="wake_fresh">
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
                                                        <div id="breakfast_time">
                                                        <?= $lifestyle->breakfast_time ?? '';?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 bold">Lunch Time</div>
                                                <div class="col-sm-3">
                                                    <div id="lunch_time">
                                                        <?= $lifestyle->lunch_time ?? '';?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3 bold">Breakfast Content</div>
                                                    <div class="col-sm-3">
                                                        <div id="breakfast_content">
                                                        <?= $lifestyle->breakfast_content ?? '';?>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-3 bold">Lunch Content</div>
                                                <div class="col-sm-3">
                                                    <div id="lunch_content">
                                                        <?= $lifestyle->lunch_content ?? '';?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3 bold">Snack Time</div>
                                                <div class="col-sm-3">
                                                    <div id="snack_time">
                                                    <?= $lifestyle->snack_time ?? '';?>
                                                </div>
                                                </div>
                                                <div class="col-sm-3 bold">Dinner Time</div>
                                                <div class="col-sm-3">
                                                    <div id="dinner_time">
                                                        <?= $lifestyle->dinner_time ?? '';?>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3 bold">Snack Content</div>
                                                <div class="col-sm-3">
                                                    <div id="snack_content">
                                                        <?= $lifestyle->snack_content ?? '';?>
                                                    </div>
                                                    </div>
                                                <div class="col-sm-3 bold">Dinner Content</div>
                                                <div class="col-sm-3">
                                                    <div id="dinner_content">
                                                        <?= $lifestyle->dinner_content ?? '';?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3 bold">Other Content</div>
                                                <div class="col-sm-3">
                                                    <div id="other_eatable">
                                                        <?= $lifestyle->other_eatable ?? '';?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 bold">Sunday Content</div>
                                                <div class="col-sm-3">
                                                    <div id="sunday_content">
                                                        <?= $lifestyle->sunday_content ?? '';?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3 bold">Feedback</div>
                                                <div class="col-sm-3">
                                                   <div id="life_feedback"> <?= $lifestyle->dr_feedback ?? '';?></div>
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
                                                    <div id="place_residence">
                                                        <?= $travel->place_residence ?? '';?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 bold">Work Place</div>
                                                <div class="col-sm-3">
                                                    <div id="place_work">
                                                        <?= $travel->place_work ?? '';?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3 bold">Leave Home</div>
                                                <div class="col-sm-3">
                                                    <div id="leave_home">
                                                        <?= $travel->leave_home ?? '';?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 bold">Home Return</div>
                                                <div class="col-sm-3">
                                                    <div id="return_home">
                                                        <?= $travel->return_home ?? '';?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3 bold">Holidays Per Week</div>
                                                <div class="col-sm-3">
                                                    <div id="holidays">
                                                        <?= $travel->holidays ?? '';?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 bold">Transport Type</div>
                                                <div class="col-sm-3">
                                                    <div id="transport_type">
                                                        <?= $travel->transport_type ?? '';?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3 bold">By Road</div>
                                                <div class="col-sm-3">
                                                    <div id="by_road">
                                                        <?= $travel->by_road ?? '';?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 bold">By Train</div>
                                                <div class="col-sm-3">
                                                    <div id="by_train">
                                                        <?= $travel->by_train ?? '';?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3 bold">By Walk</div>
                                                <div class="col-sm-3">
                                                    <div id="by_walk">
                                                        <?= $travel->by_walk ?? '';?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 bold">Overnight</div>
                                                <div class="col-sm-3">
                                                    <div id="overnight">
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
                                                    <div id="sp_leave_home">
                                                        <?= $travel->sp_leave_home ?? '';?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 bold">Spouse Return Home</div>
                                                <div class="col-sm-3">
                                                    <div id="sp_return_home">
                                                        <?= $travel->sp_return_home ?? '';?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3 bold">Spouse Holidays Fresh</div>
                                                <div class="col-sm-3">
                                                    <div id="sp_holidays">
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
                                                    <div id="exercise">
                                                        <?= $travel->exercise ?? '';?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 bold">Exercise Time</div>
                                                <div class="col-sm-3">
                                                    <div id="exercise_time">
                                                        <?= $travel->exercise_time ?? '';?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3 bold">Exercise Detail</div>
                                                <div class="col-sm-3">
                                                    <div id="exercise_detail">
                                                        <?= $travel->exercise_detail ?? '';?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 bold">Sports</div>
                                                <div class="col-sm-3">
                                                    <div id="sports">
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
                                                    <div id="rotating_shift">
                                                        <?= $travel->rotating_shift ?? '';?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 bold">Flexi Hour</div>
                                                <div class="col-sm-3">
                                                    <div id="flexi_hour">
                                                        <?= $travel->flexi_hour ?? '';?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3 bold">Feedback</div>
                                                <div class="col-sm-3">
                                                   <div id="travelling_feedback"> <?= $travel->dr_feedback ?? '';?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                </div>
              </div>
            </div>
          </div> 
          </div> 

        </div>
    </div>
</div>