<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Onlineform extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
	    $this->load->helper(['common','security']);
		$this->load->model([
	        'website/section_model',
	        'website/home_model',
	        'website/setting_model',
	        'online_model'
	    ]);
	}

  public function submit(){
		$data           = array('Response-Status' => false,'Response-Validate' => false, 'Response-Message' => array());
		$master_contact =  array();
		 // print_r($_POST);
        // if($this->input->post('Data')){
			
        // echo $postdata['full_name'];exit();
		// 1st patient_master
		// 2nd patient_medical
		// 3rd patient_spouse
		// 4th patient_family
		// 4th patient_lifestyle
		// 5th patient_travel
		$patient_id 						= $this->input->post('id');

        $patient_master['user_id'] 	        = $this->session->userdata('user_id');
        // $patient_master['patient_id'] 	    = $this->input->post('patient_id');
        $patient_master['first_name'] 	    = $this->input->post('first_name');
        $patient_master['middle_name'] 	    = $this->input->post('middle_name');
        $patient_master['last_name'] 	    = $this->input->post('last_name');
        $patient_master['dob'] 	  			= $this->input->post('dob');
        $patient_master['age'] 	  			= $this->input->post('age');
        $patient_master['maritalstatus'] 	= $this->input->post('maritalstatus');
        $patient_master['marital_since'] 	= $this->input->post('marital_since');
        $patient_master['tomarry'] 			= $this->input->post('tomarry');
        $patient_master['country_code'] 	= $this->input->post('country_code');
        $patient_master['mobile'] 			= $this->input->post('mobile');
        $patient_master['landline'] 		= $this->input->post('landline');
        $patient_master['education'] 		= $this->input->post('education');
        $patient_master['occupation'] 		= $this->input->post('occupation');
        $patient_master['emailaddress'] 	= $this->input->post('emailaddress');
        $patient_master['website'] 			= $this->input->post('website');
        
        $patient_medical['patient_id'] 	    		= $patient_id;
        $patient_medical['medical_history'] 		= (null !== $this->input->post('medical_history')) ? implode(',',$this->input->post('medical_history')) : '';
        $patient_medical['medical_history_other'] 	= $this->input->post('medical_history_other');
        $patient_medical['current_medication'] 		= $this->input->post('current_medication');
        $patient_medical['habits'] 					= (null !== $this->input->post('habits')) ? implode(',',$this->input->post('habits')) : '';
        $patient_medical['allergy'] 				= (null !== $this->input->post('allergy')) ? implode(',',$this->input->post('allergy')) : '';

        $patient_spouse['patient_id'] 	    	= $patient_id;
        $patient_spouse['spouse_name'] 			= $this->input->post('spouse_name');
        $patient_spouse['spouse_age'] 			= $this->input->post('spouse_age');
        $patient_spouse['spouse_education'] 	= $this->input->post('spouse_education');
        $patient_spouse['spouse_occupation'] 	= $this->input->post('spouse_occupation');
        $patient_spouse['spouse_illness'] 		= $this->input->post('spouse_illness');
        
        $patient_lifestyle['patient_id'] 		= $patient_id;
        $patient_lifestyle['bedtime'] 			= $this->input->post('bedtime');
        $patient_lifestyle['wakeup_time'] 		= $this->input->post('wakeup_time');
        $patient_lifestyle['sleep_day'] 		= $this->input->post('sleep_day');
        $patient_lifestyle['wake_fresh'] 		= $this->input->post('wake_fresh');
        $patient_lifestyle['breakfast_time'] 	= $this->input->post('breakfast_time');
        $patient_lifestyle['lunch_time'] 		= $this->input->post('lunch_time');
        $patient_lifestyle['snack_time'] 		= $this->input->post('snack_time');
        $patient_lifestyle['dinner_time'] 		= $this->input->post('dinner_time');
        $patient_lifestyle['breakfast_content'] = $this->input->post('breakfast_content');
        $patient_lifestyle['lunch_content'] 	= $this->input->post('lunch_content');
        $patient_lifestyle['snack_content'] 	= $this->input->post('snack_content');
        $patient_lifestyle['dinner_content'] 	= $this->input->post('dinner_content');
        $patient_lifestyle['sunday_content'] 	= $this->input->post('sunday_content');
        
        $patient_travel['patient_id'] 		= $patient_id;
        $patient_travel['place_residence'] 	= $this->input->post('place_residence');
        $patient_travel['place_work'] 		= $this->input->post('place_work');
        $patient_travel['leave_home'] 		= $this->input->post('leave_home');
        $patient_travel['return_home'] 		= $this->input->post('return_home');
        $patient_travel['holidays'] 		= $this->input->post('holidays');
        $patient_travel['transport_type'] 	= $this->input->post('transport_type');
        $patient_travel['by_road'] 			= $this->input->post('by_road');
        $patient_travel['by_train'] 		= $this->input->post('by_train');
        $patient_travel['by_walk'] 			= $this->input->post('by_walk');
        $patient_travel['overnight'] 		= $this->input->post('overnight');
        $patient_travel['sp_leave_home'] 	= $this->input->post('sp_leave_home');
        $patient_travel['sp_return_home'] 	= $this->input->post('sp_return_home');
        $patient_travel['sp_holidays'] 		= $this->input->post('sp_holidays');

        $exercise = (null !==$this->input->post('exercise')) ? implode(',',$this->input->post('exercise')) : '';

        $patient_travel['exercise'] 		= $exercise;
        $patient_travel['exercise_time'] 	= $this->input->post('exercise_time');
        $patient_travel['exercise_detail'] 	= $this->input->post('exercise_detail');
        $patient_travel['sports'] 			= $this->input->post('sports');
        $patient_travel['from_work_time'] 	= $this->input->post('from_work_time');
        $patient_travel['to_work_time'] 	= $this->input->post('to_work_time');
        $patient_travel['rotating_shift'] 	= $this->input->post('rotating_shift');
        $patient_travel['flexi_hour'] 		= $this->input->post('flexi_hour');
        
		$familyage 						    = $this->input->post('family_ages[]');
		$j =0;
		foreach ($familyage as $relation =>  $rel_value) {
			for($i=0; $i<count($rel_value[0]);$i++){
                if($rel_value[0][$i] > 0){
            		$patient_family[$j]['patient_id']= $patient_id;
    		        $patient_family[$j]['relation']  = $relation;
    		        $patient_family[$j]['age'] 		 = $rel_value[0][$i];
    		        $patient_family[$j]['illness'] 	 = $rel_value[1][$i];
    		        $j++;
                }
				// echo $relation." -- ".$rel_value[0][$i].'--'.$rel_value[1][$i].'<br>';
			}
		}
        // 1st patient_master
		// 2nd patient_medical
		// 3rd patient_spouse
		// 4th patient_family
		// 5th patient_lifestyle
		// 6th patient_travel
		$result = $this->online_model->create($patient_master,  $patient_medical,  $patient_spouse, $patient_family, $patient_lifestyle, $patient_travel, $patient_id);
			$data['Response-Status']   = $result['Response-Status'];
			$data['Response-Validate'] = $result['Response-Validate'];
			$data['Response-Message']  = $result['Response-Message'];
		
    	echo json_encode($data);
	}
}
