<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnosis extends CI_Controller {	
	public function __construct(){
	    parent::__construct();
        $this->load->model([
            'website/section_model',
            'website/home_model',
            'website/setting_model',
            'diagnosis_model'
        ]); 
		$this->load->helper('security');
    }

	public function index(){
		$page_data['heading']    = 'Sexologist Testimonials';
		$page_data['pagename']   = 'diagnosis';
		$page_data['breadcrumb'] = 'Diagnosis';
		$page_data['page_title'] = 'Diagnosis | Dr. Hitesh Shah - Sexologist in Mumbai';
		$page_data['page_meta']  = '';
		$this->load->view('admin/home', $page_data);
	}

	public function addnew(){
		// print_r($_POST);exit;
		$data = array('Status' => false,'Validate' => false, 'Message' => array());
		$id = $this->input->post('id');
		$master_data['diagnosis'] 	= $this->input->post('diagnosis');
		$master_data['status'] 	 	= $this->input->post('status');
		$this->form_validation->set_rules('diagnosis', 'diagnosis', 'trim|xss_clean|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|xss_clean|required|numeric');
		
		$this->form_validation->set_error_delimiters('<span>', '</span>');
		$this->form_validation->set_message('required', 'Enter %s');

		if($this->form_validation->run()) {
			$result = $this->diagnosis_model->addnew($master_data,$id);
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
        $results = $this->diagnosis_model->getlist();
        $data 	 = array();
		$no 	 = 0;
        foreach ($results  as $r) {
        	$id = $r['id'];
			$no++;
			$row    = array();
			$row[]  = $r['diagnosis'];
			$row[]  = $r['active'];
			$row[]  = '<a class="btn btn-info GetDetail" data-id="'.$id.'" href="javascript:void(0)"> Edit</a> <a class="btn btn-danger delete" data-id="'.$id.'" data-module="diagnosis" data-title="Diagnosis" href="javascript:void(0)" data-modal="confirmation"> Delete</a>';	
			$data[] = $row;
        }
        echo json_encode(array('data' => $data));
	}

	public function getById() {
    	$id = $this->input->post('id');
        $results = $this->diagnosis_model->getById($id);
        $data 	 = array();
        echo json_encode($results);
	}

	
}