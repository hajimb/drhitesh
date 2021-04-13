<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Online extends CI_Controller {	
	public function __construct(){
		parent::__construct();
		/*cache control*/
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
		$this->load->helper(['master','common']);
	}

	public function index($param=''){
		if($param == ''){
			redirect('/');
		}else{
			$token = base64url_decode($param);
			$id    = getpatientid($token);
			if(!is_object($id)){
				redirect('/');
			}
		}

	    $page_data['page_title']= 'Sexologist Online Application';
	    $page_data['pagename']  = 'online-form';
	    $page_data['heading']   = 'Sexologist | Dr. Hitesh Shah - Sexologist in Mumbai';
	    $page_data['page_meta'] = '';
		
	    $page_data['master_education']  = $this->createdropdown('education',0,'html','qualification','Qualification');
	    $page_data['master_occupation'] = $this->createdropdown('occupation',0,'html','occupation','Occupation');
	    $page_data['master_spouseeducation'] = $this->createdropdown('spouse_education',0,'html','qualification','Qualification');
	    $page_data['master_spouseoccupation']= $this->createdropdown('spouse_occupation',0,'html','occupation','Occupation');
	    $page_data['master_maritalstatus']   = $this->createdropdown('maritalstatus',0,'html','maritalstatus','Marital Status');
	    $page_data['industry'] = $this->createdropdown('industry',0,'html','industry','Industry');
	    $page_data['spouseindustry'] = $this->createdropdown('spouseindustry',0,'html','industry','Industry');

	    $page_data['master_medical_history'] = $this->createdropdown('medical_history[]',0,'html','disease','','class="medicalhistory smart-select2"','multiple="multiple"',true);
	    $page_data['master_exercise'] = $this->createdropdown('exercise[]',0,'html','exercise','','class="exercise smart-select2"','multiple="multiple"',true);
	    $page_data['master_habits'] = $this->createdropdown('habits[]',0,'html','habits','','class="habits smart-select2"','multiple="multiple"',true);
	    $page_data['master_allergy'] = $this->createdropdown('allergy[]',0,'html','allergy','','class="allergy smart-select2"','multiple="multiple"',true);
	    // if()
	    $page_data['id'] = $id->id;
	    $page_data['patient_id'] = $id->patient_id;
	    $page_data['first_name'] = $id->first_name;
	    $page_data['last_name']  = $id->last_name;
            $this->load->view('online-form/home', $page_data);
	}


	public function createdropdown($display,$id,$format,$table,$select,$class='',$multiple='',$byidortext=false){
		//echo $select;
		$drop_id = str_replace('[]', '', $display);
		$data	= getmaster($id,$format,$table,$select,$byidortext);
		// print_r($data);
	    $js 	= 'id="'.$drop_id.'" tabindex="" aria-invalid="false" '.$class.' '. $multiple;
	    return form_dropdown($display,  $data, '',$js);
	}
	
    

}