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
            <div class="col-lg-12 text-center">
                <table id="user" class="table table-bordered table-striped" style="clear: both">
                    <?php //print_r($result);?>
                    <tbody> 
                        <tr>         
                            <td width="35%">First Name</td>
                            <td width="65%"><a href="#" id="firstname" data-type="text" data-pk="1" data-placeholder="Required" data-title="Enter first Name"><?= $result['first_name'];?></a></td>
                        </tr>
                        <tr>         
                            <td>Middle Name</td>
                            <!-- <td><a href="#" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"><?= $result['first_name'];?></a></td> -->
                            <td><a href="#" id="middlename" data-type="text" data-pk="1" data-placement="bottom" data-title="Enter Middle Name"><?= $result['middle_name'];?></a></td>
                        </tr>
                        <tr>         
                            <td>Last Name</td>
                            <td><a href="#" id="lastname" data-type="text" data-pk="1" data-placement="bottom" data-placeholder="Required" data-title="Enter Last Name"><?= $result['last_name'];?></a></td>
                        </tr> 
                        <tr>         
                            <td>Email</td>
                            <td><a href="#" id="email" data-type="text" data-pk="1" data-placement="bottom" data-placeholder="Required" data-title="Enter your firstname"></a></td>
                        </tr>
                        <tr>         
                            <td>Mobile</td>
                            <td><a href="#" id="firstname" data-type="text" data-pk="1" data-placement="bottom" data-placeholder="Required" data-title="Enter your firstname"></a></td>
                        </tr>
                        <tr>         
                            <td>Gender</td>
                            <td><a href="#" id="gender" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a></td>
                        </tr>    
                        <tr>         
                            <td>Age</td>
                            <td><a href="#" id="firstname" data-type="text" data-pk="1" data-placement="bottom" data-placeholder="Required" data-title="Enter your firstname"></a></td>
                        </tr>
                         <tr>         
                            <td>Marital Status</td>
                            <td><a href="#" id="sex" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a></td>
                        </tr> 
                             
                       <!--  <tr>         
                            <td>Datepicker</td>
                            <td>
                            
                            <span class="notready">not implemented for Bootstrap 3 yet</span>
                            
                            </td>
                        </tr>
                        <tr>         
                            <td>Combodate (date)</td>
                            <td><a href="#" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1"  data-title="Select Date of birth"></a></td>
                        </tr> 
                        <tr>         
                            <td>Combodate (datetime)</td>
                            <td><a href="#" id="event" data-type="combodate" data-template="D MMM YYYY  HH:mm" data-format="YYYY-MM-DD HH:mm" data-viewformat="MMM D, YYYY, HH:mm" data-pk="1"  data-title="Setup event date and time"></a></td>
                        </tr> 
                        <tr>         
                            <td>Textarea, buttons below. Submit by <i>ctrl+enter</i></td>
                            <td><a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a></td>
                        </tr> 
                        <tr>         
                            <td>Twitter typeahead.js</td>
                            <td><a href="#" id="state2" data-type="typeaheadjs" data-pk="1" data-placement="right" data-title="Start typing State.."></a></td>
                        </tr>                       
                        <tr>         
                            <td>Checklist</td>
                            <td><a href="#" id="fruits" data-type="checklist" data-value="2,3" data-title="Select fruits"></a></td>
                        </tr>
                        <tr>         
                            <td>Select2 (tags mode)</td>
                            <td><a href="#" id="tags" data-type="select2" data-pk="1" data-title="Enter tags">html, javascript</a></td>
                        </tr>                    
                        <tr>         
                            <td>Select2 (dropdown mode)</td>
                            <td><a href="#" id="country" data-type="select2" data-pk="1" data-value="BS" data-title="Select country"></a></td>
                        </tr>  
                        <tr>         
                            <td>Custom input, several fields</td>
                            <td><a href="#" id="address" data-type="address" data-pk="1" data-title="Please, fill address"></a></td>
                        </tr>    -->                   
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>