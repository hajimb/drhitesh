<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller {

    public function __construct(){
		parent::__construct();
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
		$this->load->model(['patient_model']);

		// $this->load->helper('security');
	}

	
	public function profile(){
		$data = array('Response-Status' => FALSE,'Response-Validate' => FALSE, 'Response-Message' => array());
		$patient_id = $this->input->post('patient_id');
		$profiledata['first_name'] = $this->input->post('first_name');
        $profiledata['middle_name'] = $this->input->post('middle_name');
        $profiledata['last_name'] = $this->input->post('last_name');
        $profiledata['dob'] = $this->input->post('patient_dob');
        $profiledata['age'] = $this->input->post('patient_age');
        $profiledata['maritalstatus'] = $this->input->post('maritalstatus');
        $profiledata['marital_since'] = $this->input->post('marital_since');
        $profiledata['tomarry'] = $this->input->post('tomarry');
        $profiledata['country_code'] = $this->input->post('country_code');
        $profiledata['mobile'] = $this->input->post('mobile');
        $profiledata['emailaddress'] = $this->input->post('emailaddress');
        $profiledata['landline'] = $this->input->post('landline');
        $profiledata['education'] = $this->input->post('education');
        $profiledata['occupation'] = $this->input->post('occupation');
        $condition['id'] = $patient_id; 
        $result = $this->patient_model->update($profiledata,$condition,1,$patient_id,'patient_master');
	        // print $this->db->last_query();
		if($result['code']==0){
			$data['Response-Status']  	= true;
			$data['Response-Validate'] 	= true;
			$data['Response-Message']   = "Patient Profile Successfully Updated";
      		}else{
			$data['Response-Status']  	= false;
			$data['Response-Validate'] 	= true;
			$data['Response-Message']   = "Error While Updating Patient Profile";
		}
		echo json_encode($data);
	}

	public function medicalhistory(){
		// print_r($_POST);
		$data = array('Response-Status' => FALSE,'Response-Validate' => FALSE, 'Response-Message' => array());
		$count 	    = $this->input->post('medical_count');
		$patient_id = $this->input->post('patient_id');
		$medicalhistory['medical_history']       = $this->input->post('medical_history');
		$medicalhistory['medical_history_other'] = $this->input->post('medical_history_other');
		$medicalhistory['current_medication']	 = $this->input->post('current_medication');
		$medicalhistory['habits'] 		 = $this->input->post('habits');
		$medicalhistory['allergy'] 		 = $this->input->post('allergy');
		$medicalhistory['dr_feedback'] 		 = $this->input->post('dr_feedback');
		$condition['patient_id'] 		 = $patient_id;
		$result = $this->patient_model->update($medicalhistory,$condition,$count,$patient_id,'patient_medical',0);
		if($result['code']==0){
			$data['Response-Status']  	= true;
			$data['Response-Validate'] 	= true;
			$data['Response-Message']   = "Medical History Successfully Updated";
      		}else{
			$data['Response-Status']  	= false;
			$data['Response-Validate'] 	= true;
			$data['Response-Message']   = "Error While Updating Medical History";
		}
		echo json_encode($data);
	}

	public function spouseupdate(){
		$count 	    = $this->input->post('spouse_count');
		$patient_id = $this->input->post('patient_id');
		$spousedata['spouse_name'] 	=  $this->input->post("spouse_name");
        $spousedata['spouse_age'] 	=  $this->input->post("spouse_age");
        $spousedata['spouse_illness'] 	=  $this->input->post("spouse_illness");
        $spousedata['spouse_occupation']=  $this->input->post("spouse_occupation");
        $spousedata['spouse_education'] =  $this->input->post("spouse_education");
        $spousedata['dr_feedback']  	=  $this->input->post("spouse_feedback");
        $condition['patient_id'] 	= $patient_id;
        $result = $this->patient_model->update($spousedata,$condition,$count,$patient_id,'patient_spouse',0);
	        // print $this->db->last_query();
		if($result['code']==0){
			$data['Response-Status']  	= true;
			$data['Response-Validate'] 	= true;
			$data['Response-Message']   = "Spouse Detail Successfully Updated";
      		}else{
			$data['Response-Status']  	= false;
			$data['Response-Validate'] 	= true;
			$data['Response-Message']   = "Error While Updating Spouse Detail";
		}
		echo json_encode($data);
	}

	public function family(){
		$data = array('Response-Status' => FALSE,'Response-Validate' => FALSE, 'Response-Message' => array());
		if(null !==($this->input->post('array'))){
			$familydata = $this->input->post('array');
			$familydata = $this->security->xss_clean($familydata);
			$result = $this->patient_model->updatebybatch('patient_family',$familydata,'id');
			if($result['code']==0){
				$data['Response-Status']  = true;
				$data['Response-Validate'] = true;
				$data['Response-Message']   = "Family Detail Successfully Updated";
		      	}else{
				$data['Response-Status']  = false;
				$data['Response-Validate'] = true;
				$data['Response-Message']   = "Error While Updating Family Detail";
			}
		}
		echo json_encode($data);
	}

	public function updatelifestyle(){
		// print_r($_POST);
		$count 					= $this->input->post('lifestyle_count');
		$patient_id 			= $this->input->post('patient_id');
		$lifestyle['bedtime'] 	= $this->input->post("bedtime");
        $lifestyle['wakeup_time'] = $this->input->post("wakeup_time");
        $lifestyle['breakfast_time'] = $this->input->post("breakfast_time");
        $lifestyle['breakfast_content'] = $this->input->post("breakfast_content");
        $lifestyle['lunch_time'] = $this->input->post("lunch_time");
        $lifestyle['lunch_content'] = $this->input->post("lunch_content");
        $lifestyle['dinner_time'] = $this->input->post("dinner_time");
        $lifestyle['dinner_content'] = $this->input->post("dinner_content");
        $lifestyle['snack_time'] = $this->input->post("snack_time");
        $lifestyle['snack_content'] = $this->input->post("snack_content");
        $lifestyle['other_eatable'] = $this->input->post("other_eatable");
        $lifestyle['sunday_content'] = $this->input->post("sunday_content");
        $lifestyle['sleep_day'] = $this->input->post("sleep_day");
        $lifestyle['wake_fresh'] = $this->input->post("wake_fresh");
        $lifestyle['dr_feedback'] = $this->input->post("life_feedback");
        $condition['patient_id'] = $patient_id;

        $travelcount = $this->input->post('lifestyle_count');
		$travellingdata['place_residence'] = $this->input->post("place_residence");
        $travellingdata['place_work'] = $this->input->post("place_work");
        $travellingdata['leave_home'] = $this->input->post("leave_home");
        $travellingdata['return_home'] = $this->input->post("return_home");
        $travellingdata['holidays'] = $this->input->post("holidays");
        $travellingdata['transport_type'] = $this->input->post("transport_type");
        $travellingdata['by_road'] = $this->input->post("by_road");
        $travellingdata['by_train'] = $this->input->post("by_train");
        $travellingdata['by_walk'] = $this->input->post("by_walk");
        $travellingdata['overnight'] = $this->input->post("overnight");
        $travellingdata['sp_leave_home'] = $this->input->post("sp_leave_home");
        $travellingdata['sp_return_home'] = $this->input->post("sp_return_home");
        $travellingdata['sp_holidays'] = $this->input->post("sp_holidays");
        $travellingdata['exercise'] = $this->input->post("exercise");
        $travellingdata['exercise_time'] = $this->input->post("exercise_time");
        $travellingdata['exercise_detail'] = $this->input->post("exercise_detail");
        $travellingdata['sports'] = $this->input->post("sports");
        $travellingdata['from_work_time'] = $this->input->post("from_work_time");
        $travellingdata['to_work_time'] = $this->input->post("to_work_time");
        $travellingdata['rotating_shift'] = $this->input->post("rotating_shift");
        $travellingdata['flexi_hour'] = $this->input->post("flexi_hour");
        $travellingdata['dr_feedback'] = $this->input->post("travelling_feedback");
        $condition['patient_id'] = $patient_id;
        $result = $this->patient_model->update($travellingdata,$condition,$travelcount,$patient_id,'patient_travel',0);
        $result = $this->patient_model->update($lifestyle,$condition,$count,$patient_id,'patient_lifestyle',0);

		if($result['code'] == 0){
			$data['Response-Status']  	= true;
			$data['Response-Validate'] 	= true;
			$data['Response-Message']   = "Lifestyle Detail Successfully Updated";
      	}else{
			$data['Response-Status']  	= false;
			$data['Response-Validate'] 	= true;
			$data['Response-Message']   = "Error While Updating Lifestyle Detail";
		}
		echo json_encode($data);
	}

	public function updatetravelling(){
		// print_r($_POST);
		$count = $this->input->post('lifestyle_count');
		$patient_id = $this->input->post('patient_id');
		$travellingdata['place_residence'] = $this->input->post("place_residence");
        $travellingdata['place_work'] = $this->input->post("place_work");
        $travellingdata['leave_home'] = $this->input->post("leave_home");
        $travellingdata['return_home'] = $this->input->post("return_home");
        $travellingdata['holidays'] = $this->input->post("holidays");
        $travellingdata['transport_type'] = $this->input->post("transport_type");
        $travellingdata['by_road'] = $this->input->post("by_road");
        $travellingdata['by_train'] = $this->input->post("by_train");
        $travellingdata['by_walk'] = $this->input->post("by_walk");
        $travellingdata['overnight'] = $this->input->post("overnight");
        $travellingdata['sp_leave_home'] = $this->input->post("sp_leave_home");
        $travellingdata['sp_return_home'] = $this->input->post("sp_return_home");
        $travellingdata['sp_holidays'] = $this->input->post("sp_holidays");
        $travellingdata['exercise'] = $this->input->post("exercise");
        $travellingdata['exercise_time'] = $this->input->post("exercise_time");
        $travellingdata['exercise_detail'] = $this->input->post("exercise_detail");
        $travellingdata['sports'] = $this->input->post("sports");
        $travellingdata['from_work_time'] = $this->input->post("from_work_time");
        $travellingdata['to_work_time'] = $this->input->post("to_work_time");
        $travellingdata['rotating_shift'] = $this->input->post("rotating_shift");
        $travellingdata['flexi_hour'] = $this->input->post("flexi_hour");
        $travellingdata['dr_feedback'] = $this->input->post("travelling_feedback");
        $condition['patient_id'] = $patient_id;
        $result = $this->patient_model->update($travellingdata,$condition,$count,$patient_id,'patient_travel',0);
		if($result['code'] == 0){
			$data['Response-Status']  	= true;
			$data['Response-Validate'] 	= true;
			$data['Response-Message']   = "Travelling Detail Successfully Updated";
      		}else{
			$data['Response-Status']  	= false;
			$data['Response-Validate'] 	= true;
			$data['Response-Message']   = "Error While Updating Travelling Detail";
		}
		echo json_encode($data);
	}


	public function newdoc(){
        // print_r($_POST);print_r($_FILES);
        $data = array('Response-Status' => false,'Response-Validate' => false,'Response-Message' =>array());
       
        $this->form_validation->set_rules('pid', 'Pateint Doc', 'trim|required');
        $this->form_validation->set_rules('title', 'File Name', 'trim|required');
        $this->form_validation->set_rules('patient_id', 'Patient ID Missing', 'trim|required');
        if ($_FILES['filename']['size'] == 0 ) {
            $this->form_validation->set_rules('filename', 'Pateint Doc', 'trim|required');
        }
       
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
        $this->form_validation->set_message('required', 'Enter %s');

        if ($this->form_validation->run()) {
            $astatus       = true;
            $upload_path   = $this->config->item('upload_path');
            $master_file['patient_id']    = $this->input->post('pid');
            if($_FILES['filename']['size'] > 0) {
                is_dir($upload_path);
                $config['upload_path']   = $upload_path."/doc/";
                $config['allowed_types'] = 'jpg|png|jpeg|JPG|pdf';
                $config['overwrite']       = false;
                $config['encrypt_name']  = false;
                $config['remove_spaces'] = true;
                $config['file_name']       = date("Ymdhis");
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('filename')) {
                    $data['Response-Message']['filename'] = array('error'=>$this->upload->display_errors());
                    $astatus = false;
                } else {
                    $upload_data              = array('upload_data' => $this->upload->data());
                    $master_file['is_image']  = $upload_data['upload_data']['is_image'];
                    $master_file['filename']  = $upload_data['upload_data']['file_name'];
                    $master_file['ext'] 	  = $upload_data['upload_data']['file_ext'];
                    $master_file['file_type'] = $upload_data['upload_data']['file_type'];
                    $master_file['title'] 	  = $this->input->post('title');
                    $master_file['patient_id']= $this->input->post('patient_id');
                    $astatus        = true;
                } 
            }
            $result = $this->patient_model->adddoc($master_file);
           
            if($result['code'] == 0){
				$data['Response-Status']  	= true;
				$data['Response-Validate'] 	= true;
				$data['Response-Message']   = "Pateint Doc Successfully Adding";
	      	}else{
                    if (FCPATH.'uploads/doc/'.$master_file['filename']) {
                        unlink('uploads/doc/'.$master_file['filename']);
                    }
				$data['Response-Status']  	= false;
				$data['Response-Validate'] 	= true;
				$data['Response-Message']   = "Error While Adding Pateint Doc";
			}
			
        } else {
            foreach ($this->input->post() as $key => $value) {
                $data['Response-Message'][$key] = form_error($key);
            }
            $data['Response-data']  = validation_errors();
        }
        echo json_encode($data);
    }

	public function flag(){
		// print_r($_POST);
		// exit();
    		$data = array('Response-Status' => FALSE,'Response-Validate' => FALSE, 'Response-Message' => array());
		$id 		    		= $this->input->post('id');
		$table 		    		= $this->input->post('table');
		if($table!='patient_treatment'){
	    	$flag 		 			= $this->input->post('dr_flag');
			$feedback 		    	= $this->input->post('feedback');
			$insdata['dr_feedback']	= $feedback;
			$insdata['dr_flag'] 	= $flag;
			$insdata['updated_on'] 	= date('Y-m-d H:i:s');
			$this->form_validation->set_rules('dr_flag', 'Select Flag', 'trim|xss_clean|required');
			$this->form_validation->set_rules('feedback', 'Enter Feedback', 'trim|xss_clean|required|min_length[4]');
		}else{
			$duration 					= $this->input->post('duration');
			$duration_period    		= $this->input->post('duration_period');
			$fees    					= $this->input->post('fees');
			$frequency    				= $this->input->post('frequency');
			$patient_id    				= $this->input->post('patient_id');
			$insdata['duration']		= $duration;
			$insdata['duration_period'] = $duration_period;
			$insdata['fees'] 			= $fees;
			$insdata['frequency'] 		= $frequency;
			$insdata['patient_id'] 		= $patient_id;
			$insdata['updated_on'] 	= date('Y-m-d H:i:s');
			$this->form_validation->set_rules('duration', 'Enter Duration', 'trim|xss_clean|required');
			$this->form_validation->set_rules('duration_period', 'Select Duration Period', 'trim|xss_clean|required');
			$this->form_validation->set_rules('fees', 'Enter Fees', 'trim|xss_clean|required');
			$this->form_validation->set_rules('frequency', 'Select Frequency', 'trim|xss_clean|required');
		}
		$this->form_validation->set_error_delimiters('<span>', '</span>');
		$this->form_validation->set_message('required', ' %s');

		if($this->form_validation->run()) {
			if($this->security->xss_clean($insdata)){
              	$result 		 			= $this->patient_model->addflag($insdata,$id,$table);
              	if($result==1 || $result==0){
					$data['Response-Status']  	= true;
					$data['Response-Validate'] 	= true;
					$data['Response-Message']   = "Flag Successfully Added";
              	}else{
					$data['Response-Status']  	= false;
					$data['Response-Validate'] 	= true;
					$data['Response-Message']   = "Error While Adding Flag";
              	}
            }else{
				$data['msg'] = 'Your site failed xss security validation';
            }
		}else{
			foreach ($this->input->post() as $key => $value) {
				$data['Response-Message'][$key] = form_error($key);
			}
			//$data['Response-Message']     = validation_errors();
		}
		echo json_encode($data);
    }

	public function addtag(){
    	$data 		= array('Response-Status' => FALSE,'Response-Validate' => FALSE, 'Response-Message' => array());
		$patient_id = $this->input->post('patient_id');
		$tag   		= $this->input->post('tag');
		$implodetag = '';
		$i = 0;
		$result ='';
		foreach($tag as $row){
			$insdata[$i]['patient_id']	= $patient_id;
			$insdata[$i]['tag_id']	= $row;
			$i++;
		}

		$this->form_validation->set_rules('tag[]', 'Select Tag', 'trim|xss_clean|required');
		$this->form_validation->set_error_delimiters('<span>', '</span>');
		$this->form_validation->set_message('required', ' %s');

		if($this->form_validation->run()) {
			if($this->security->xss_clean($insdata)){
				if($i>0){
					$implodetag = implode(',',$this->input->post('tag'));
					$result = $this->patient_model->addtag($insdata);
				}
              	if($result > 0){
					$data['Response-Status']  	= true;
					$data['Response-Validate'] 	= true;
					$data['Response-Message']   = "Flag Successfully Added";
					$data['html'] 				= $this->creattagtable($patient_id);
              	}else{
					$data['Response-Status']  	= false;
					$data['Response-Validate'] 	= true;
					$data['Response-Message']   = "Error While Adding Flag";
              	}
            }else{
				$data['msg'] = 'Your site failed xss security validation';
            }
		}else{
			foreach ($this->input->post() as $key => $value) {
				$data['Response-Message'][$key] = form_error($key);
			}
			//$data['Response-Message']     = validation_errors();
		}
		echo json_encode($data);
    }

    public function creattagtable($id){
    	$html='';
    	$data = $this->patient_model->patient_followp_by_id($id);
    	if(count($data)>0){
    		$no=1;
    		$html  ='<table class="table">';
    		foreach ($data as $rows) {
    			$html .= '<tr>';
    			$html .= '<td>'.$no.'</td>';
    			$html .= '<td>'.$rows->tag.'</td>';
    			$html .= '<td><input type="text" class="form-control" name="'.$rows->fid.'"></td>';
    			$html .= '</tr>';
    			$no++;
    		}
    		$html  .='</table>';
    	}
    	return $html;
    }

	public function getpateintlist() {
        $results = $this->patient_model->read();
        $data 	 = array();
		$no 	 = 0;
        foreach ($results  as $r) {
			$no++;
			$row    = array();
			$row[]  = '<a href="'.base_url().'patient/detail/'.$r->id.'">'.$r->patient_id.'</a>';
			$row[]  = ucwords(strtolower($r->first_name.' '.$r->middle_name.' '.$r->last_name));
			$row[]  = $r->dob;
			$row[]  = $r->age;
			$row[]  = $r->maritalstatus;
			$row[]  = $r->mobile;
			/*$row[] = '<div class="btn-group">
                   <!--button type="button" class="btn btn-info">Action</button-->
                  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button><ul class="dropdown-menu" role="menu">
                    <li><a href="'.base_url().'patient/detail/'.$r->id.'">View Pateint Detail</a></li>
                  </ul></div>';*/
			$data[] = $row;
        }
        echo json_encode(array('data' => $data));
    }

    public function getFile(){
    	$data 		= array('status' => FALSE,'validate' => FALSE, 'message' => array());
		$this->form_validation->set_rules('patient_id', 'Patient  ID Missing', 'trim|numeric|required');
		$this->form_validation->set_error_delimiters('<span>', '</span>');
		$this->form_validation->set_message('required', ' %s');

		if($this->form_validation->run()) {
			$patient_id 		= $this->input->post('patient_id');
			$result  			= $this->patient_model->filedetail($patient_id);
			$data['status']  	= true;
			$data['validate'] 	= true;
			$data['message']    = "";
			$data['html'] 		= $result;
			$data['count'] 		= count($result);
		}else{
			foreach ($this->input->post() as $key => $value) {
				$data['message'][$key] = form_error($key);
			}
			//$data['Response-Message']     = validation_errors();
		}
		echo json_encode($data);
    }


    public function getdisease(){
    	$data 		= array('status' => FALSE,'validate' => FALSE, 'message' => array());
		$this->form_validation->set_rules('patient_id', 'Patient  ID Missing', 'trim|numeric|required');
		$this->form_validation->set_error_delimiters('<span>', '</span>');
		$this->form_validation->set_message('required', ' %s');

		if($this->form_validation->run()) {
			$patient_id 		= $this->input->post('patient_id');
			$result  			= getdisease($patient_id);
			$data['status']  	= true;
			$data['validate'] 	= true;
			$data['message']    = "";
			$data['html'] 		= $result;
			$data['count'] 		= count($result);
		}else{
			foreach ($this->input->post() as $key => $value) {
				$data['message'][$key] = form_error($key);
			}
			//$data['Response-Message']     = validation_errors();
		}
		echo json_encode($data);
    }
    
}
