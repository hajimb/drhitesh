<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Physicalexamination extends CI_Controller {	
	public function __construct(){
	    parent::__construct();
        $this->load->model([
            'website/section_model',
            'website/home_model',
            'website/setting_model',
            'physicalexamination_model'
        ]); 
		$this->load->helper('security');
    }

	public function index(){
		$page_data['heading']    = 'Sexologist Testimonials';
		$page_data['pagename']   = 'physical-examination';
		$page_data['breadcrumb'] = 'Physical Examination';
		$page_data['page_title'] = 'Physical Examination | Dr. Hitesh Shah - Sexologist in Mumbai';
		$page_data['page_meta']  = '';
		$this->load->view('admin/home', $page_data);
	}

	public function addnew(){
		// print_r($_POST);exit;
		$data = array('Status' => false,'Validate' => false, 'Message' => array());
		$id = $this->input->post('id');
		$master_data['examination'] 	= $this->input->post('examination');
		$master_data['status'] 	 		= $this->input->post('status');
		$this->form_validation->set_rules('examination', 'examination', 'trim|xss_clean|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|xss_clean|required|numeric');
		
		$this->form_validation->set_error_delimiters('<span>', '</span>');
		$this->form_validation->set_message('required', 'Enter %s');

		if($this->form_validation->run()) {
			$result = $this->physicalexamination_model->addnew($master_data,$id);
			$data['Status']   = $result['status'];
			$data['Validate'] = true;
			$data['Message']  = $result['msg'];
		}
		else{
			foreach ($this->input->post() as $key => $value) {
				$data['Message'][$key] = form_error($key);
			}
		}
		echo json_encode($data);
	}

	public function getlist($param1 = '') {
        $results = $this->physicalexamination_model->getlist();
        $data 	 = array();
		$no 	 = 0;
        foreach ($results  as $r) {
        	$id = $r['id'];
			$no++;
			$row    = array();
			$row[]  = $r['examination'];
			$row[]  = $r['active'];
			$row[]  = '<a class="btn btn-info GetDetail" data-id="'.$id.'" href="javascript:void(0)"> Edit</a> <a class="btn btn-danger delete" data-id="'.$id.'" data-module="physical_examination" data-title="Physical Examination" href="javascript:void(0)" data-modal="confirmation"> Delete</a>';	
			$data[] = $row;
        }
        echo json_encode(array('data' => $data));
	}

	public function getById() {
    	$id = $this->input->post('id');
        $results = $this->physicalexamination_model->getById($id);
        $data 	 = array();
        echo json_encode($results);
	}

}