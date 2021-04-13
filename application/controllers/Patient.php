<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller {
	public function __construct(){
		parent::__construct();
		/*cache control*/
		$this->output->set_header('Cache-Control:no-store, no-cache,must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
		if ($this->session->userdata('logged_in') != 1 || $this->session->userdata('logintype') != 'admin' )
        redirect(base_url().'admin', 'refresh');
    	$this->load->model('patient_model');
    	$this->load->helper(['master','common']);
	}
 
	public function index(){
		$page_data['heading']    = 'Sexologist Patient List';
	    $page_data['pagename']   = 'pateint-list';
	    $page_data['page_title'] = 'Sexologist | Dr. Hitesh Shah - Sexologist in Mumbai';
		$this->load->view('admin/home', $page_data);
	} 

	public function detail($id, $followup=''){

		$page_data['followup'] 	 = $followup;
		$page_data['patient_id'] = $id;
		$page_data['user_id'] 	 = getuseridBypatient($id);
		
		$page_data['filedetail'] = $this->patient_model->filedetail($id);
		$page_data['result']	 = $this->patient_model->detail_by_id($id);
		// echo 'mstatus '.$page_data['result']->maritalstatus;
		// print $this->db->last_query();
		$page_data['medical']	 = $this->patient_model->patient_medical_by_id($id);
		
		$page_data['spouse']	 = $this->patient_model->patient_spouse_by_id($id);
		$page_data['family']	 = $this->patient_model->patient_family_by_id($id);
		$page_data['lifestyle']	 = $this->patient_model->patient_lifestyle_by_id($id);
		$page_data['travel']	 = $this->patient_model->patient_travel_by_id($id);
	    $page_data['tag']   	 = gettag();
	    	// echo "qualification".$page_data['spouse']->spouse_education;
	    $page_data['master_education'] 		 = $this->createdropdown('education',0,'html','qualification','Qualification','form-control','',$page_data['result']->education ?? '');
		$page_data['master_occupation'] 	 = $this->createdropdown('occupation',0,'html','occupation','Occupation','form-control','',$page_data['result']->occupation ?? '');
		$page_data['master_maritalstatus']   = $this->createdropdown('maritalstatus',0,'html','maritalstatus','Marital Status','form-control','',$page_data['result']->maritalstatus ?? '');

		$page_data['master_spouseeducation'] = $this->createdropdown('spouse_education',0,'html','qualification','Qualification','form-control','',$page_data['spouse']->spouse_education ?? '');
		$page_data['master_spouseoccupation']= $this->createdropdown('spouse_occupation',0,'html','occupation','Occupation','form-control','',$page_data['spouse']->spouse_occupation ?? '');

		$page_data['symptoms'] = getsymptoms($id);

		// $page_data['industry']   		= $this->createdropdown('industry',0,'html','industry','Industry');
		$page_data['heading']    = 'Sexologist Patient Detail';
    	$page_data['pagename']   = 'pateint-detail';
    	$page_data['page_title'] = 'Sexologist | Dr. Hitesh Shah - Sexologist in Mumbai';
		$this->load->view('admin/home', $page_data);
	}

	public function createdropdown($display,$id,$format,$table,$select,$class='',$multiple='',$selected=''){
		$data	= getmaster($id,$format,$table,$select);
	    $js 	= 'id="'.$display.'"  class='.$class.' '. $multiple;
	    return form_dropdown($display,  $data, $selected,$js);
	}
}