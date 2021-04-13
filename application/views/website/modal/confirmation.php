<div class="sky-form">
  <form class="form-horizontal padding-rl-20 marbot0" id="form" method="POST">
      <div class="form-group">
        <div class="col-md-12 col-lg-12">
  		    <p class="bold marbot0 text-center">Confirm your Appointment</p>
          <p class="text-center marbot0"><span id="appdate">Appointment Date <b><?php echo $appdate;?></b></span> <span id="appTime">at <b><?php echo $timing;?></b></span></p>    
        </div>
      </div>
    <hr>
    <div class="row marbot0">
      <input type="hidden" name="purl" id="purl" value="<?php echo $url;?>">
      <div class="col-md-12" style="height: 150px;overflow-y: scroll;">
        <p>The Online Consultation is primarily an expert opinion with certain limitations. It no way replaces the importance or significance or quality of a face to face consultation with any expert. Nevertheless utmost care is exercised to maintain highest quality standards of medical and counselling care.</p>

        <p>For this reason, before any advise on treatment, patient will be asked to do medical tests and any related / relevant speciality opinion especially for diagnosis and management of any comorbidity.</p> 

        <p>Online consultation carries risk of overlooking presence of certain medical - clinical condition which patient may not be aware of, or the expert can not detect online. </p>

        <p>For any circumstantial or technical reason there can be delay in timings of providing services which will not become a matter of dispute. We will give our best in terms of our timing and attention.</p>


        <p>Results, as in medical field which is though scientific is often filled with mystery and surprises, are never guaranteed by us.</p> 

        <p>Lot of variables and factors play role apart from our quality care in determining the result. The common factors on patient side are, lack of communication, lack of regularity in medicine, inability to follow advises on lifestyle, addiction, stress management and relationship management, sudden stresses of life etc. We fully empathise with every patients on these areas and help them deal with it , with all our moral support and expert guidance, in order to achieve the most desirable results. </p>


        <p>Any error of omission or commission or so called or probable medical negligence will be only incidental and can not be subjected to consumer court or any court of law or medical association organisation or any medical or government statutory body, for any reason whatsoever. Howsoever, in any case of dispute, the area of jurisdiction will remain Mumbai, Maharashtra, India irrespective of area / country of residence of the recipient or irrespective of mode of treatment - online or face to face or through any branches / associate clinics and doctors outside Mumbai.</p>

        <p>Refund policy: Consultation fees are non refundable. Treatment fees before dispatch of medicines are 75% refundable and within 15 days of dispatch of medicines, are 50 % refundable. This is in order to maintain highest standards of  doctor - patient trust relationship which becomes all the more important in an online set up.</p>

        <p>We commit for complete human care and best possible professional care.</p>
      </div>
      <div class="col-md-9 col-md-offset-3">
        <div class="form-group">
        <div class="col-xs-12">
            <div class="checkbox">
                <label>
                    <input type="checkbox" class="accept" id="agree" name="agree" value="agree" /> Agree with the terms and conditions
                </label>
            </div>
        </div>
        
    </div>
        <a href="javascript:void(0)" class="rad0 fbut disabled" id="PayNow">PayNow</a>
        <a href="javascript:void(0)" data-dismiss="modal" class="rad0 fbut" style="margin-left: 20px">Cancel</a>
        <!-- <input type="reset" class="btn btn-default" id="cancel" data-dismiss="modal" value="Cancel"> -->
      </div>
    </div>
  </form>
</div>