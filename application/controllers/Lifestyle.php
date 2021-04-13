<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lifestyle extends CI_Controller {	
	public function __construct(){
	    parent::__construct();
        $this->load->model([
            'website/section_model',
            'website/home_model',
            'website/setting_model',
            'lifestyle_model'
        ]); 
		$this->load->helper('security');
    }

	public function index(){
		$page_data['heading']    = 'Sexologist Testimonials';
		$page_data['pagename']   = 'lifestyle';
		$page_data['breadcrumb'] = 'Lifestyle';
		$page_data['page_title'] = 'Lifestyle | Dr. Hitesh Shah - Sexologist in Mumbai';
		$page_data['page_meta']  = '';
		$this->load->view('admin/home', $page_data);
	}

	public function addnew(){
		// print_r($_POST);exit;
		$data = array('Status' => false,'Validate' => false, 'Message' => array());
		$id = $this->input->post('id');
		$master_data['lifestyle'] 	= $this->input->post('lifestyle');
		$master_data['status'] 	 	= $this->input->post('status');
		$this->form_validation->set_rules('lifestyle', 'lifestyle', 'trim|xss_clean|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|xss_clean|required|numeric');
		
		$this->form_validation->set_error_delimiters('<span>', '</span>');
		$this->form_validation->set_message('required', 'Enter %s');

		if($this->form_validation->run()) {
			$result = $this->lifestyle_model->addnew($master_data,$id);
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
        $results = $this->lifestyle_model->getlist();
        $data 	 = array();
		$no 	 = 0;
        foreach ($results  as $r) {
        	$id = $r['id'];
			$no++;
			$row    = array();
			$row[]  = $r['lifestyle'];
			$row[]  = $r['active'];
			$row[]  = '<a class="btn btn-info GetDetail" data-id="'.$id.'" href="javascript:void(0)"> Edit</a> <a class="btn btn-danger delete" data-id="'.$id.'" data-module="lifestyle" data-title="Lifestyle" href="javascript:void(0)" data-modal="confirmation"> Delete</a>';	
			$data[] = $row;
        }
        echo json_encode(array('data' => $data));
	}

	public function getById() {
    	$id = $this->input->post('id');
        $results = $this->lifestyle_model->getById($id);
        $data 	 = array();
        echo json_encode($results);
	}

	
}