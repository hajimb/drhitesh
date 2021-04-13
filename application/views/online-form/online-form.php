<style type="text/css">
    .alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
}.alert-success {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6;
}.alert-info {
    color: #31708f;
    background-color: #d9edf7;
    border-color: #bce8f1;
}.alert-warning {
    color: #8a6d3b;
    background-color: #fcf8e3;
    border-color: #faebcc;
}.alert-danger {
    color: #a94442;
    background-color: #f2dede;
    border-color: #ebccd1;
}.tagline{font-weight: bold}
</style>
<div class="form-body smart-steps steps-progress">
    <div class="frm-row">
        <div class="section colm colm4">
            <img src="<?php echo base_url();?>assets/img/logo.png">
        </div>
        <div class="section colm colm4">
            <p class="text-center mar-top-0"><b>Dr. Hitesh Shah's</b></p>
            <p class="text-center"><b>Purnam Health Centre</b></p>
        </div>
        <div class="section colm colm4">
            <P class="text-right mar-top-0"><b>Date - <?php echo date('m/d/Y');?></b></P>
            <P class="text-right"><b>Reg. No. - <?php echo $patient_id;?></b></P>
        </div>
    </div>
    <form method="post" action="php/formprocess.php" id="smart-form">
        <h2>Preliminaries</h2>
        <fieldset>
            <div class="frm-row">
                <div class="section colm colm4">
                    <label class="field prepend-icon">
                        <input type="text" name="first_name" id="first_name" value="<?php echo $first_name;?>" class="gui-input" placeholder="First Name">
                        <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
                        <span class="field-icon"><i class="fa fa-user"></i></span>
                    </label>
                </div>
                <div class="section colm colm4">
                    <label class="field prepend-icon">
                         
                        <input type="text" name="middle_name" id="middle_name" class="gui-input" placeholder="Middle Name">
                        <span class="field-icon"><i class="fa fa-user"></i></span>
                    </label>
                </div>
                <div class="section colm colm4">
                    <label class="field prepend-icon">
                        <input type="text" name="last_name" id="last_name" value="<?php echo $last_name;?>" class="gui-input" placeholder="Last Name">
                        <span class="field-icon"><i class="fa fa-user"></i></span>
                    </label>
                </div>
            </div>
            <div class="frm-row">
                <div class="section colm colm3">
                    <label class="field prepend-icon">
                        <input type="text" id="dob" name="dob" class="gui-input date-picker" placeholder="DoB">
                        <span class="field-icon"><i class="fa fa-birthday-cake"></i></span>
                    </label>
                </div>
                <div class="section colm colm2">
                    <label class="field prepend-icon">
                        <input type="text" name="age" id="age" class="gui-input" READONLY placeholder="Age">
                        <span class="field-icon"><i class="fa fa-calendar-o"></i></span>
                    </label>
                </div>
                <div class="section colm colm3">
                    <label class="field select">
                        <?php echo $master_maritalstatus;?>
                        <i class="arrow double"></i>
                    </label>
                </div>
                <!-- end section -->
                <div class="section colm colm2">
                    <div class="smart-widget sm-left">
                        <label for="marital_since" class="field prepend-icon marital_sincelabel">
                            <input class="gui-input yearpicker" data-nm="marital_since" type="text" DISABLED id="marital_since" name="marital_since" placeholder="Since When ?" value="00/00" />
                            <b class="tooltip tip-left-top"><em>Since when? (Years / Months)</em></b>
                            <!-- <input type="text" name="marital_since" id="marital_since" class="gui-input timepicker2" placeholder="Return Home at"> -->
                            <span class="field-icon"><i class="fa fa-hourglass-half"></i></span>
                        </label>
                    </div>
                        <!--<label class="field prepend-icon">
                        <label for="marital_since" class="field prepend-icon marital_sincelabel sml-95">
                            <input class="gui-input yearpicker" data-nm="marital_since" type="text" id="marital_since" name="marital_since" placeholder="YY:MM (YY/MM)" />
                            <b class="tooltip tip-left-top"><em>Since when? (Years / Months)</em></b>
                            <input type="text" name="from_work_time" id="from_work_time" class="gui-input timepicker2" placeholder="Return Home at">
                            <span class="field-icon"><i class="fa fa-hourglass-half"></i></span>
                        </label>
                        <span class="marital_sinceErrorMsg timeErrMsg telHideMsg">Invalid Time</span>

                    </label> -->
                </div>
                <div class="section colm colm2">
                        <label for="tomarry" class="field prepend-icon tomarrylabel">
                            <input class="gui-input yearpicker" data-nm="tomarry" type="text" DISABLED id="tomarry" name="tomarry" placeholder="To Marry in" value="00/00" />
                            <b class="tooltip tip-left"><em>To Marry in (Years / Months) ?</em></b>
                            <!-- <input type="text" name="tomarry" id="tomarry" class="gui-input timepicker2" placeholder="Return Home at"> -->
                            <span class="field-icon"><i class="fa fa-hourglass-half"></i></span>
                        </label>

<!-- 
                    <label class="field prepend-icon">
                        <input type="text" name="tomarry" id="tomarry" class="gui-input" DISABLED placeholder="To Marry in">
                        <b class="tooltip tip-left"><em> To Marry in (number of Months)</em></b>
                        <span class="field-icon"><i class="fa fa-hourglass-half"></i></span>
                    </label> -->
                </div>
                <!-- end section -->
            </div>
            <div class="frm-row">
                <div class="section colm colm6">
                    <label class="field">
                        <input type="tel" name="mobile" id="mobile" class="gui-input" placeholder="Mobile">
                        <span class="telValidMsg telHideMsg">Valid phone number </span>
                        <span class="telErrorMsg telHideMsg">Invalid phone number</span>
                    </label>
                </div>
                <div class="section colm colm6">
                    <label class="field prepend-icon">
                        <input type="tel" name="landline" id="landline" class="gui-input" placeholder="Landline">
                        <span class="field-icon"><i class="fa fa-phone-square"></i></span>
                    </label>
                </div>
            </div>
            <!-- end .frm-row section -->
            <div class="frm-row">
                <div class="section colm colm6">
                    <label class="field select">
                        <?php echo $master_education;?>
                        <i class="arrow double"></i>
                    </label>
                </div>
                <div class="section colm colm6">
                    <label class="field select">
                        <?php echo $master_occupation;?>
                        <i class="arrow double"></i>
                    </label>
                </div>
            </div>
            <div class="frm-row">
                <div class="section colm colm6">
                    <label class="field select">
                        <?php echo $industry;?>
                        <i class="arrow double"></i>
                    </label>
                </div>
                <div class="section colm colm6">
                    <label class="field prepend-icon">
                        <input type="text" name="organisation" id="organisation" class="gui-input" placeholder="Organisation">
                        <b class="tooltip tip-left-top"><em> Organisation</em></b>
                        <span class="field-icon"><i class="fa fa-hourglass-half"></i></span>
                    </label>
                </div>
            </div>
            <div class="frm-row">
                <div class="section colm colm6">
                    <label class="field prepend-icon">
                        <input type="email" name="emailaddress" id="emailaddress" class="gui-input" placeholder="Email address">
                        <span class="field-icon"><i class="fa fa-envelope"></i></span>
                    </label>
                </div>
                <!-- end section -->
                <div class="section colm colm6">
                    <label class="field prepend-icon">
                        <input type="url" name="website" id="website" class="gui-input" placeholder="Website">
                        <span class="field-icon"><i class="fa fa-globe"></i></span>
                    </label>
                </div>
                <!-- end section -->
            </div>
            <!-- end .frm-row section -->
            <!--div class="section">

                <label class="field prepend-icon">

                    <textarea class="gui-textarea" id="selfdetails" name="selfdetails" placeholder="More personal details"></textarea>

                    <span class="field-icon"><i class="fa fa-comments"></i></span>

                    <span class="input-hint"> 

                        <strong>More Details:</strong> add more specific details about yourself

                    </span>

                </label>

            </div-->
            <!-- end section -->
        </fieldset>
        <h2>Medical History</h2>
        <fieldset>
            <div class="frm-row">
                <div class="section colm colm12">
                    <!-- <p><small>Note: This section is not about your main Sexual or intimacy issues. Share them directly with doctor. In this section, select other medical problems that you may be having from the drop down list</small></p> -->
                </div>
            </div>
            <div class="frm-row">
                <div class="section colm colm6">
                    <label class="field select">
                        <?php echo $master_medical_history;?>
                        <i class="arrow double"></i>
                    </label>
                </div>
                <div class="section colm colm6">
                    <label class="field prepend-icon">
                        <input type="text" name="medical_history_other" id="medical_history_other" class="gui-input" placeholder="Other">
                        <span class="field-icon"><i class="fa fa-comment"></i></span>
                    </label>
                </div>
            </div>
            <div class="section">
                <label class="field prepend-icon">
                    <textarea class="gui-textarea" id="current_medication" name="current_medication" placeholder="Current Medication"></textarea>
                    <span class="field-icon"><i class="fa fa-comments"></i></span>
                    <!--span class="input-hint"> <strong>Current Medication:</strong> add more project specific details</span-->
                </label>
            </div>
            <div class="section">
                <label class="field prepend-icon">
                    <textarea class="gui-textarea" id="surgery" name="surgery" placeholder="Past Surgery"></textarea>
                    <span class="field-icon"><i class="fa fa-comments"></i></span>
                    <!--span class="input-hint"> <strong>Current Medication:</strong> add more project specific details</span-->
                </label>
            </div>
            <div class="frm-row">
                <div class="section colm colm6">
                    <label class="field select">
                        <?php echo $master_habits;?>
                        <i class="arrow double"></i>
                    </label>
                </div>
                <div class="section colm colm6">
                    <label class="field select">
                        <?php echo $master_allergy;?>
                        <i class="arrow double"></i>
                    </label>
                </div>
            </div>
        </fieldset>
        <h2>Partner / Family</h2>
        <fieldset>
            <div class="section margin-top-20">
                <div class="spacer-b30">
                    <div class="tagline"><span> About Spouse / Partner</span></div>
                    <!-- .tagline -->
                </div>
            </div>
            <div class="frm-row">
                <div class="section colm colm6">
                    <label class="field prepend-icon">
                        <input type="text" name="spouse_name" id="spouse_name" class="gui-input" placeholder="Name">
                        <span class="field-icon"><i class="fa fa-user"></i></span>
                    </label>
                </div>
                <div class="section colm colm6">
                    <label class="field prepend-icon">
                        <input type="text" name="spouse_age" id="spouse_age" class="gui-input" placeholder="Age">
                        <span class="field-icon"><i class="fa fa-calendar-o"></i></span>
                    </label>
                </div>
            </div>
            <div class="frm-row">
                <div class="section colm colm6">
                    <label class="field select">
                        <?php echo $master_spouseeducation;?>
                        <i class="arrow double"></i>
                    </label>
                </div>
                <div class="section colm colm6">
                    <label class="field select">
                        <?php echo $master_spouseoccupation;?>
                        <i class="arrow double"></i>
                    </label>
                </div>
            </div>
            <div class="frm-row">
                <div class="section colm colm6">
                    <label class="field select">
                        <?php echo $spouseindustry;?>
                        <i class="arrow double"></i>
                    </label>
                </div>
                <div class="section colm colm6">
                    <label class="field prepend-icon">
                        <input type="text" name="spouse_org" id="spouse_org" class="gui-input" placeholder="Organisation">
                        <b class="tooltip tip-left-top"><em> Organisation</em></b>
                        <span class="field-icon"><i class="fa fa-hourglass-half"></i></span>
                    </label>
                </div>
            </div>
            <div class="section">
                <label class="field prepend-icon">
                    <textarea class="gui-textarea" id="spouse_illness" name="spouse_illness" placeholder="Illness if any"></textarea>
                    <span class="field-icon"><i class="fa fa-comments"></i></span>
                    <!--span class="input-hint"> <strong>Current Medication:</strong> add more project specific details</span-->
                </label>
            </div>
            <div class="section margin-top-20">
                <div class="spacer-b30">
                    <div class="tagline"><span> About Other Family Member</span></div>
                    <!-- .tagline -->
                    <p class="text-center">Mention age, and illness, if any:</p>
                </div>
            </div>

            <div class="spacer-b30 spacer-t30">
                <div class="tagline"><span>Father</span></div>
                <!-- .tagline -->
            </div>
            <div id="" class="cloneya-wrap clone-animate">
                <div class="toclone clone-widget cloneya">
                    <div class="frm-row">
                        <div class="spacer-b10 colm colm6">
                            <label class="prepend-icon">
                                <input type="text" name="family_ages[3][0][]" id="fatherage" class="gui-input" placeholder="Father Age">
                                <span class="field-icon"><i class="fa fa-calendar-o"></i></span>
                            </label>
                        </div>
                        <div class="spacer-b10 colm colm6">
                            <label class="prepend-icon">
                                <input type="text" name="family_ages[3][1][]" id="fatherillness" class="gui-input" placeholder="Father Illness if any">
                                <span class="field-icon"><i class="fa fa-male"></i></span>
                            </label>
                        </div>
                    </div>
                    <!-- end frm-row section -->
                   <!--  <a href="#" class="clone button btn-primary"><i class="fa fa-plus"></i></a>
                    <a href="#" class="delete button"><i class="fa fa-minus"></i></a> -->
                </div>
            </div>
            <!-- end #clone-animate -->
            <div class="spacer-b30 spacer-t30">
                <div class="tagline"><span>Mother</span></div>
                <!-- .tagline -->
            </div>
            <div id="" class="cloneya-wrap clone-animate">
                <div class="toclone clone-widget cloneya">
                    <div class="frm-row">
                        <div class="spacer-b10 colm colm6">
                            <label class="prepend-icon">
                                <input type="text" name="family_ages[4][0][]" id="motherage" class="gui-input" placeholder="Mother Age">
                                <span class="field-icon"><i class="fa fa-calendar-o"></i></span>
                            </label>
                        </div>
                        <div class="spacer-b10 colm colm6">
                            <label class="prepend-icon">
                                <input type="text" name="family_ages[4][1][]" id="motherillness" class="gui-input" placeholder="Mother Illness if any">
                                <span class="field-icon"><i class="fa fa-female"></i></span>
                            </label>
                        </div>
                    </div>
                    <!-- end frm-row section -->
                    <!-- <a href="#" class="clone button btn-primary"><i class="fa fa-plus"></i></a>
                    <a href="#" class="delete button"><i class="fa fa-minus"></i></a> -->
                </div>
            </div>

            <div class="spacer-b30 spacer-t30">
                <div class="tagline"><span>Son(s)</span></div>
                <!-- .tagline -->
            </div>
            <div id="" class="cloneya-wrap clone-animate">
                <div class="toclone clone-widget cloneya">
                    <div class="frm-row">
                        <div class="spacer-b10 colm colm6">
                            <label class="prepend-icon">
                                <input type="text" name="family_ages[1][0][]" id="sonsage" class="gui-input" placeholder="Son Age">
                                <span class="field-icon"><i class="fa fa-calendar-o"></i></span>
                            </label>
                        </div>
                        <div class="spacer-b10 colm colm6">
                            <label class="prepend-icon">
                                <input type="text" name="family_ages[1][1][]" id="sonillness" class="gui-input" placeholder="Son Illness if any">
                                <span class="field-icon"><i class="fa fa-male"></i></span>
                            </label>
                        </div>
                    </div>
                    <!-- end frm-row section -->
                    <a href="#" class="clone button btn-primary"><i class="fa fa-plus"></i></a>
                    <a href="#" class="delete button"><i class="fa fa-minus"></i></a>
                </div>
            </div>
            <!-- end #clone-animate -->
            <div class="spacer-b30 spacer-t30">
                <div class="tagline"><span>Daughter(s)</span></div>
                <!-- .tagline -->
            </div>
            <div id="" class="cloneya-wrap clone-animate">
                <div class="toclone clone-widget cloneya">
                    <div class="frm-row">
                        <div class="spacer-b10 colm colm6">
                            <label class="prepend-icon">
                                <input type="text" name="family_ages[2][0][]" id="daughtersage" class="gui-input" placeholder="Daughter Age">
                                <span class="field-icon"><i class="fa fa-calendar-o"></i></span>
                            </label>
                        </div>
                        <div class="spacer-b10 colm colm6">
                            <label class="prepend-icon">
                                <input type="text" name="family_ages[2][1][]" id="daughtersillness" class="gui-input" placeholder="Daughter Illness if any">
                                <span class="field-icon"><i class="fa fa-female"></i></span>
                            </label>
                        </div>
                    </div>
                    <!-- end frm-row section -->
                    <a href="#" class="clone button btn-primary"><i class="fa fa-plus"></i></a>
                    <a href="#" class="delete button"><i class="fa fa-minus"></i></a>
                </div>
            </div>
            <!-- end #clone-animate -->
            
            <!-- end #clone-animate -->
            <div class="spacer-b30 spacer-t30">
                <div class="tagline"><span>Brother(s)</span></div>
                <!-- .tagline -->
            </div>
            <div id="" class="cloneya-wrap clone-animate">
                <div class="toclone clone-widget cloneya">
                    <div class="frm-row">
                        <div class="spacer-b10 colm colm6">
                            <label class="prepend-icon">
                                <input type="text" name="family_ages[5][0][]" id="Brotherage" class="gui-input" placeholder="Brother Age">
                                <span class="field-icon"><i class="fa fa-calendar-o"></i></span>
                            </label>
                        </div>
                        <div class="spacer-b10 colm colm6">
                            <label class="prepend-icon">
                                <input type="text" name="family_ages[5][1][]" id="Brotherillness" class="gui-input" placeholder="Brother Illness if any">
                                <span class="field-icon"><i class="fa fa-male"></i></span>
                            </label>
                        </div>
                    </div>
                    <!-- end frm-row section -->
                    <a href="#" class="clone button btn-primary"><i class="fa fa-plus"></i></a>
                    <a href="#" class="delete button"><i class="fa fa-minus"></i></a>
                </div>
            </div>
            <!-- end #clone-animate -->
            <div class="spacer-b30 spacer-t30">
                <div class="tagline"><span>Sister(s)</span></div>
                <!-- .tagline -->
            </div>
            <div id="" class="cloneya-wrap clone-animate">
                <div class="toclone clone-widget cloneya">
                    <div class="frm-row">
                        <div class="spacer-b10 colm colm6">
                            <label class="prepend-icon">
                                <input type="text" name="family_ages[6][0][]" id="Sisterage" class="gui-input" placeholder="Sister Age">
                                <span class="field-icon"><i class="fa fa-calendar-o"></i></span>
                            </label>
                        </div>
                        <div class="spacer-b10 colm colm6">
                            <label class="prepend-icon">
                                <input type="text" name="family_ages[6][1][]" id="Sisterillness" class="gui-input" placeholder="Sister Illness if any">
                                <span class="field-icon"><i class="fa fa-female"></i></span>
                            </label>
                        </div>
                    </div>
                    <!-- end frm-row section -->
                    <a href="#" class="clone button btn-primary"><i class="fa fa-plus"></i></a>
                    <a href="#" class="delete button"><i class="fa fa-minus"></i></a>
                </div>
            </div>
            <!-- end #clone-animate -->
        </fieldset>
        <h2>Life Style </h2>
        <fieldset>
            <div class="section">
                <div class="notification alert-info">
                    <p>Your lifestyle has immense bearing on your Health, Happiness, Disorders and Recovery</p>
                </div>
            </div>
            <div class="section margin-top-20">
                <div class="spacer-b30">
                    <div class="tagline"><span> Daily Sleep</span></div>
                </div>
            </div>
            <div class="frm-row">
                <div class="section colm colm6">
                    <div class="smart-widget sm-left">
                        <label for="sm" class="button smr">Time of going to bed </label>
                        <label for="bedtime" class="field prepend-icon sml-169 bedtimelabel">
                            <input class="gui-input timepicker" data-nm="bedtime" type="text" id="bedtime" name="bedtime" placeholder="hh:mm (24 Hour Format)" />
                            <!-- <input type="text" id="bedtime" name="bedtime" class="gui-input timepicker2"> -->
                            <span class="field-icon"><i class="fa fa-clock-o"></i></span>
                        </label>
                        <span class="bedtimeErrorMsg timeErrMsg telHideMsg">Invalid Time</span>
                    </div>
                </div>
                <div class="section colm colm6">
                    <div class="smart-widget sm-left">
                        <label for="sm" class="button smr">Wake Up Time </label>
                        <label for="wakeup_time" class="field prepend-icon sml-169 wakeup_timelabel">
                            <input class="gui-input timepicker" data-nm="wakeup_time" type="text" id="wakeup_time" name="wakeup_time" placeholder="hh:mm (24 Hour Format)" />
                            <!-- <input type="text" id="wakeup_time" name="wakeup_time" class="gui-input timepicker2"> -->
                            <span class="field-icon"><i class="fa fa-clock-o"></i></span>
                        </label>
                          <span class="wakeup_timeErrorMsg timeErrMsg telHideMsg">Invalid Time</span>
                    </div>
                </div>
            </div>
            <div class="frm-row">
                <div class="section colm colm6">
                    <label class="switch block">
                        <span class="spn"> Sleep During Day Time? </span>
                        <input type="checkbox" name="sleep_day" id="sleep_day" value="YES" checked>
                        <span class="switch-label" data-on="YES" data-off="NO"></span>
                    </label>
                </div>
                <div class="section colm colm6">
                    <label class="switch block">
                        <span class="spn"> Do you wake up fresh? </span>
                        <input type="checkbox" name="wake_fresh" id="wake_fresh" value="YES" checked>
                        <span class="switch-label" data-on="YES" data-off="NO"></span>
                    </label>
                </div>
            </div>
            <div class="section margin-top-20">
                <div class="spacer-b30">
                    <div class="tagline"><span> Daily Food Habits</span></div>
                </div>
            </div>
            <div class="frm-row">
                <div class="section colm colm3">
                    <div class="smart-widget sm-left">
                        <label for="sm" class="button smr">Breakfast </label>
                        <label for="breakfast_time" class="field prepend-icon breakfast_timelabel sml-95">
                            <input class="gui-input timepicker" data-nm="breakfast_time" type="text" id="breakfast_time" name="breakfast_time" placeholder="hh:mm (24 Hour Format)" />
                            <!-- <input type="text" id="breakfast_time" name="breakfast_time" class="gui-input timepicker2"> -->
                            <span class="field-icon"><i class="fa fa-clock-o"></i></span>
                        </label>
                        <span class="breakfast_timeErrorMsg timeErrMsg telHideMsg">Invalid Time</span>
                    </div>
                </div>
                <div class="section colm colm3">
                    <div class="smart-widget sm-left">
                        <label for="sm" class="button smr">Lunch </label>
                        <label for="lunch_time" class="field prepend-icon lunch_timelabel sml-95">
                            <input class="gui-input timepicker" data-nm="lunch_time" type="text" id="lunch_time" name="lunch_time" placeholder="hh:mm (24 Hour Format)" />
                            <!-- <input type="text" id="lunch_time" name="lunch_time" class="gui-input timepicker2"> -->
                            <span class="field-icon"><i class="fa fa-clock-o"></i></span>
                        </label>
                        <span class="lunch_timeErrorMsg timeErrMsg telHideMsg">Invalid Time</span>
                    </div>
                </div>
                <div class="section colm colm3">
                    <div class="smart-widget sm-left">
                        <label for="sm" class="button smr">Snacks </label>
                         <label for="snack_time" class="field prepend-icon snack_timelabel sml-95">
                            <input class="gui-input timepicker" data-nm="snack_time" type="text" id="snack_time" name="snack_time" placeholder="hh:mm (24 Hour Format)" />
                            <!-- <input type="text" id="snack_time" name="snack_time" class="gui-input timepicker2"> -->
                            <span class="field-icon"><i class="fa fa-clock-o"></i></span>
                        </label>
                        <span class="snack_timeErrorMsg timeErrMsg telHideMsg">Invalid Time</span>
                    </div>
                </div>
                <div class="section colm colm3">
                    <div class="smart-widget sm-left">
                        <label for="sm" class="button smr">Dinner </label>
                        <label for="dinner_time" class="field prepend-icon dinner_timelabel sml-95">
                            <input class="gui-input timepicker" data-nm="dinner_time" type="text" id="dinner_time" name="dinner_time" placeholder="hh:mm (24 Hour Format)" />
                            <!-- <input type="text" id="dinner_time" name="dinner_time" class="gui-input timepicker2"> -->
                            <span class="field-icon"><i class="fa fa-clock-o"></i></span>
                        </label>
                        <span class="dinner_timeErrorMsg timeErrMsg telHideMsg">Invalid Time</span>
                    </div>
                </div>
            </div>
            <div class="frm-row">
                <div class="section colm colm3">
                    <label class="field prepend-icon">
                        <input type="text" name="breakfast_content" id="breakfast_content" class="gui-input" placeholder="Breakfast Content">
                        <span class="field-icon"><i class="fa fa-coffee"></i></span>
                    </label>
                </div>
                <div class="section colm colm3">
                    <label class="field prepend-icon">
                        <input type="text" name="lunch_content" id="lunch_content" class="gui-input" placeholder="Lunch Content">
                        <span class="field-icon"><i class="fa fa-cutlery"></i></span>
                    </label>
                </div>
                <div class="section colm colm3">
                    <label class="field prepend-icon">
                        <input type="text" name="snack_content" id="snack_content" class="gui-input" placeholder="Snacks Content">
                        <span class="field-icon"><i class="fa fa-apple"></i></span>
                    </label>
                </div>
                <div class="section colm colm3">
                    <label class="field prepend-icon">
                        <input type="text" name="dinner_content" id="dinner_content" class="gui-input" placeholder="Dinner Content">
                        <span class="field-icon"><i class="fa fa-cutlery"></i></span>
                    </label>
                </div>
            </div>
            <div class="section">
                <label class="field prepend-icon">
                    <textarea class="gui-textarea" id="other_eatable" name="other_eatable" placeholder="Other Intake (e.g. Biscuits, Dry fruit, Tea, Coffee, Green Tea, Sprouts, Fruits, Soft Drinks, Ice Cream, Chocolates, Chewing Gums, etc)"></textarea>
                    <span class="field-icon"><i class="fa fa-comment-o"></i></span>
                    <!--span class="input-hint"> <strong>Current Medication:</strong> add more project specific details</span-->
                </label>
            </div>
            <div class="section">
                <label class="field prepend-icon">
                    <textarea class="gui-textarea" id="sunday_content" name="sunday_content" placeholder="On Sunday"></textarea>
                    <span class="field-icon"><i class="fa fa-comment-o"></i></span>
                    <!--span class="input-hint"> <strong>Current Medication:</strong> add more project specific details</span-->
                </label>
            </div>
            <!-- end section -->
            <!-- end section -->
        <!-- </fieldset>
        <h2>Travelling</h2>
        <fieldset> -->
            <div class="section margin-top-20">
                <div class="spacer-b30">
                    <div class="tagline"><span> Daily Travel</span></div>
                </div>
            </div>
            <div class="frm-row">
                <div class="section colm colm6">
                    <label class="field prepend-icon">
                        <input type="text" name="place_residence" id="place_residence" class="gui-input" placeholder="Place Of Residence">
                        <span class="field-icon"><i class="fa fa-home"></i></span>
                    </label>
                </div>
                <div class="section colm colm6">
                    <label class="field prepend-icon">
                        <input type="text" name="place_work" id="place_work" class="gui-input" placeholder="Place Of Work">
                        <span class="field-icon"><i class="fa fa-home"></i></span>
                    </label>
                </div>
            </div>
            <div class="frm-row">
                <div class="section colm colm4">
                    <div class="smart-widget sm-left">
                        <label for="sm" class="button smr">Leave Home For Work</label>
                        <label for="leave_home" class="field prepend-icon leave_homelabel sml-169">
                            <input class="gui-input timepicker" data-nm="leave_home" type="text" id="leave_home" name="leave_home" placeholder="hh:mm (24 Hour Format)" />
                            <!-- <input type="text" name="leave_home" id="leave_home" class="gui-input timepicker2" placeholder="Leave Home For Work"> -->
                            <span class="field-icon"><i class="fa fa-clock-o"></i></span>
                        </label>
                        <span class="leave_homeErrorMsg timeErrMsg telHideMsg">Invalid Time</span>
                    </div>

                </div>
                <div class="section colm colm4">
                    <div class="smart-widget sm-left">
                        <label for="sm" class="button smr">Return From Work</label>
                        <label for="return_home" class="field prepend-icon return_homelabel sml-169">
                            <input class="gui-input timepicker" data-nm="return_home" type="text" id="return_home" name="return_home" placeholder="hh:mm (24 Hour Format)" />
                            <!-- <input type="text" name="return_home" id="return_home" class="gui-input timepicker2" placeholder="Return Home at"> -->
                            <span class="field-icon"><i class="fa fa-clock-o"></i></span>
                        </label>
                        <span class="return_homeErrorMsg timeErrMsg telHideMsg">Invalid Time</span>
                    </div>
                </div>
                <div class="section colm colm4">
                    <label class="field select">
                        <select name="holidays" id="holidays" tabindex="" aria-invalid="false">
                            <option value="" selected="selected">Select Holidays Per Week</option>
                            <option value="1">1 day per week</option>
                            <option value="2">2 days per week</option>
                            <option value="3">3 days per week</option>
                            <option value="4">4 days per week</option>
                        </select>
                    </label>
                </div>
            </div>
            <div class="frm-row">
                <div class="section colm colm6">
                    <label class="field prepend-icon">
                        <input type="text" name="by_road" id="by_road" class="gui-input" placeholder="Duration Travelling by Road (One Way) in minutes">
                        <span class="field-icon"><i class="fa fa-hourglass-half"></i></span>
                    </label>
                </div>
                <div class="section colm colm6">
                    <label class="field select">
                        <select name="transport_type" id="transport_type" tabindex="" aria-invalid="false">
                            <option value="" selected="selected">Select Transport Type</option>
                            <option value="Public">Public</option>
                            <option value="Self-Driving">Self-Driving</option>
                            <option value="Chauffeur Driven">Chauffeur Driven</option>
                            <option value="Mix">Mix</option>
                        </select>
                    </label>
                </div>
            </div>
            <div class="frm-row">
                <div class="section colm colm6">
                    <label class="field prepend-icon">
                        <input type="text" name="by_train" id="by_train" class="gui-input" placeholder="Duration Travelling by Train (One Way) in minutes">
                        <span class="field-icon"><i class="fa fa-hourglass-half"></i></span>
                    </label>
                </div>
                <div class="section colm colm6">
                    <label class="field prepend-icon">
                        <input type="text" name="by_walk" id="by_walk" class="gui-input" placeholder="Travelling by Walk (One Way) in minutes">
                        <span class="field-icon"><i class="fa fa-hourglass-half"></i></span>
                    </label>
                </div>
            </div>
            <div class="section">
                <label class="field prepend-icon">
                    <textarea class="gui-textarea" id="overnight" name="overnight" placeholder="Outdoor Overnight travelling"></textarea>
                    <span class="field-icon"><i class="fa fa-comments"></i></span>
                    <!--span class="input-hint"> <strong>Current Medication:</strong> add more project specific details</span-->
                </label>
            </div>
            <div class="section margin-top-20">
                <div class="spacer-b30">
                    <div class="tagline"><span> About Spouse</span></div>
                </div>
            </div>
            <div class="frm-row">
                <div class="section colm colm4">
                    <div class="smart-widget sm-left">
                        <label for="sm" class="button smr">Leave Home For Work</label>
                        <label for="sp_leave_home" class="field prepend-icon sp_leave_homelabel sml-169">
                            <input class="gui-input timepicker" data-nm="sp_leave_home" type="text" id="sp_leave_home" name="sp_leave_home" placeholder="hh:mm (24 Hour Format)" />
                            <!-- <input type="text" name="sp_leave_home" id="sp_leave_home" class="gui-input timepicker2" placeholder="Leave Home For Work"> -->
                            <span class="field-icon"><i class="fa fa-clock-o"></i></span>
                        </label>
                        <span class="sp_leave_homeErrorMsg timeErrMsg telHideMsg">Invalid Time</span>
                    </div>

                </div>
                <div class="section colm colm4">
                    <div class="smart-widget sm-left">
                        <label for="sm" class="button smr">Return From Work</label>
                        <label for="sp_return_home" class="field prepend-icon sp_return_homelabel sml-169">
                            <input class="gui-input timepicker" data-nm="sp_return_home" type="text" id="sp_return_home" name="sp_return_home" placeholder="hh:mm (24 Hour Format)" />
                            <!-- <input type="text" name="sp_return_home" id="sp_return_home" class="gui-input timepicker2" placeholder="Return Home at"> -->
                            <span class="field-icon"><i class="fa fa-clock-o"></i></span>
                        </label>
                        <span class="sp_return_homeErrorMsg timeErrMsg telHideMsg">Invalid Time</span>
                    </div>
                </div>
                <div class="section colm colm4">
                    <label class="field select">
                        <select name="sp_holidays" id="sp_holidays" tabindex="" aria-invalid="false">
                            <option value="" selected="selected">Select Spouse Holidays Per Week</option>
                            <option value="1">1 day per week</option>
                            <option value="2">2 days per week</option>
                            <option value="3">3 days per week</option>
                            <option value="4">4 days per week</option>
                        </select>
                    </label>
                </div>
            </div>
            <div class="section margin-top-20">
                <div class="spacer-b30">
                    <div class="tagline"><span> Daily Exercise</span></div>
                </div>
            </div>
            <div class="frm-row">
                <div class="section colm colm4">
                    <label class="field select">
                        <?php echo $master_exercise;?>
                        <i class="arrow double"></i>
                    </label>
                </div>
                <div class="section colm colm4">
                    <div class="smart-widget sm-right">
                        <label for="exercise_time" class="field prepend-icon exercise_timelabel">
                            <input class="gui-input timepicker" data-nm="exercise_time" type="text" id="exercise_time" name="exercise_time" placeholder="hh:mm (24 Hour Format)" />
                            <!-- <input type="text" name="exercise_time" id="exercise_time" class="gui-input timepicker2" placeholder="Return Home at"> -->
                            <span class="field-icon"><i class="fa fa-clock-o"></i></span>
                        </label>
                        <span class="exercise_timeErrorMsg timeErrMsg telHideMsg">Invalid Time</span>
                    </div>
                </div>
                <div class="section colm colm4">
                    <label class="field prepend-icon">
                        <input type="text" name="exercise_detail" id="exercise_detail" class="gui-input" placeholder="Duration in minute/how many days a week">
                        <span class="field-icon"><i class="fa fa-hourglass-half"></i></span>
                    </label>
                </div>
            </div>
            <div class="section">
                <label class="field prepend-icon">
                    <textarea class="gui-textarea" id="sports" name="sports" placeholder="Sports/ Martial Arts"></textarea>
                    <span class="field-icon"><i class="fa fa-comments"></i></span>
                    <span class="input-hint"> Sports/ Martial Arts</span>
                </label>
            </div>
            <div class="section margin-top-20">
                <div class="spacer-b30">
                    <div class="tagline"><span> Working Hours</span></div>
                </div>
            </div>
            <div class="frm-row">
                <div class="section colm colm6">
                    <div class="smart-widget sm-left">
                        <label for="sm" class="button smr">From</label>
                        <label for="from_work_time" class="field prepend-icon from_work_timelabel sml-95">
                            <input class="gui-input timepicker" data-nm="from_work_time" type="text" id="from_work_time" name="from_work_time" placeholder="hh:mm (24 Hour Format)" />
                            <!-- <input type="text" name="from_work_time" id="from_work_time" class="gui-input timepicker2" placeholder="Return Home at"> -->
                            <span class="field-icon"><i class="fa fa-clock-o"></i></span>
                        </label>
                        <span class="from_work_timeErrorMsg timeErrMsg telHideMsg">Invalid Time</span>
                    </div>
                    <!-- <label class="field select">
                        <select name="from_work_time" id="from_work_time" tabindex="" aria-invalid="false">
                            <option value="" selected="selected">Select Work From</option>
                            <?php for($i=1;$i<=12;$i++){?>
                            <option value="<?php echo $i;?> AM">
                                <?php echo $i;?> AM</option>
                            <?php }?>
                            <?php for($i=1;$i<=12;$i++){?>
                            <option value="<?php echo $i;?> PM">
                                <?php echo $i;?> PM</option>
                            <?php }?>
                        </select>
                        <i class="arrow double"></i>
                    </label> -->
                </div>
                <div class="section colm colm6">
                    <div class="smart-widget sm-left">
                         <label for="sm" class="button smr">To</label>
                        <label for="to_work_time" class="field prepend-icon to_work_timelabel sml-95">
                            <input class="gui-input timepicker" data-nm="to_work_time" type="text" id="to_work_time" name="to_work_time" placeholder="hh:mm (24 Hour Format)" />
                            <!-- <input type="text" name="to_work_time" id="to_work_time" class="gui-input timepicker2" placeholder="Return Home at"> -->
                            <span class="field-icon"><i class="fa fa-clock-o"></i></span>
                        </label>
                        <span class="to_work_timeErrorMsg timeErrMsg telHideMsg">Invalid Time</span>
                    </div>
<!--                     <label class="field-label">To </label>
                    <label class="field select">
                        <select name="to_work_time" id="to_work_time" tabindex="" aria-invalid="false">
                            <option value="" selected="selected">Select Work To</option>
                            <?php for($i=1;$i<=12;$i++){?>
                            <option value="<?php echo $i;?> AM">
                                <?php echo $i;?> AM</option>
                            <?php }?>
                            <?php for($i=1;$i<=12;$i++){?>
                            <option value="<?php echo $i;?> PM">
                                <?php echo $i;?> PM</option>
                            <?php }?>
                        </select>
                        <i class="arrow double"></i>
                    </label> -->
                </div>
            </div>
            <div class="frm-row">
                <div class="section colm colm6">
                    <label class="switch block">
                        <span class="spn"> Rotating Shift </span>
                        <input type="checkbox" name="rotating_shift" id="rotating_shift" value="1" checked>
                        <span class="switch-label" data-on="YES" data-off="NO"></span>
                    </label>
                </div>
                <div class="section colm colm6">
                    <label for="flexi_hour" class="field-label">Working From Home/ Flexi hour </label>
                    <label class="field prepend-icon">
                        <input type="text" name="flexi_hour" id="flexi_hour" class="gui-input" placeholder="At What time">
                        <span class="field-icon"><i class="fa fa-hourglass-half"></i></span>
                    </label>
                </div>
            </div>
            <div class="result"></div>
        </fieldset>
    </form>
</div>
<!-- end .form-body section -->