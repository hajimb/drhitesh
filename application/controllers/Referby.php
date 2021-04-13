<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Referby extends CI_Controller {
	public function __construct(){
		parent::__construct();
		/*cache control*/
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
		if ($this->session->userdata('logged_in') != 1 || $this->session->userdata('logintype') != 'admin' )
        redirect(base_url().'admin', 'refresh');
		$this->load->model('referby_model');
		$this->load->helper('security');
	}

	public function index(){
	    $page_data['heading']    = 'Sexologist Consult Lists';
	    $page_data['pagename']   = 'referby';
	    $page_data['page_title'] = 'Sexologist | Dr. Hitesh Shah - Sexologist in Mumbai';
	    $page_data['page_meta']  = '';
		$this->load->view('admin/home', $page_data);
	}

	public function newreferby(){
		$data = array('Response-Status' => false,'Response-Validate' => false, 'Response-Message' => array());
		$master_contact =  array();
		$id = $this->input->post('id');
		$master_referby['referby'] = $this->input->post('referby');
		$master_referby['status'] 	 	= $this->input->post('status');
		$master_referby['ip'] 			= $this->input->ip_address();
		$master_referby['added_date'] 	= time();
		$master_referby['added_by'] 	= $this->session->userdata('user_id');
		
		$this->form_validation->set_rules('referby', 'referby', 'trim|xss_clean|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|xss_clean|numeric');
		if($id>0){
			$this->form_validation->set_rules('deleted', 'Deleted', 'trim|xss_clean|numeric');
			$master_referby['deleted'] = $this->input->post('deleted');
		}
		$this->form_validation->set_error_delimiters('<span>', '</span>');
		$this->form_validation->set_message('required', 'Enter %s');

		if($this->form_validation->run()) {
			$result = $this->referby_model->newreferby($master_referby,$id);
			if($result['status']==true){
				$data['Response-Status']   = $result['status'];
				$data['Response-Validate'] = true;
				$data['Response-Message']  = $result['msg'];
			}else{
				$data['Response-Status']   = $result['status'];
				$data['Response-Validate'] = true;
				$data['Response-Message']  = $result['msg'];	
			}
		}
		else{
			foreach ($this->input->post() as $key => $value) {
				$data['Response-Message'][$key] = form_error($key);
			}
		}
		echo json_encode($data);
	}

	public function getreferbylist($param1 = '') {
        $results = $this->referby_model->getreferbylist();
        $data 	 = array();
		$no 	 = 0;
        foreach ($results  as $r) {
        	$id = $r['id'];
			$no++;
			$row    = array();
			$row[]  = $r['referby'];
			$row[]  = $r['status'];
			$row[]  = $r['deleted'];
			$row[]  = date('m/d/Y', $r['added_date']);		
			$row[]  = '<a class="btn btn-info GetDetail" data-id="'.$id.'" href="javascript:void(0)"> Edit</a> <a class="btn btn-danger delete" data-id="'.$id.'" data-module="referby" data-title="Refer By" href="javascript:void(0)" data-modal="confirmation"> Delete</a>';			
			$data[] = $row;
        }
        echo json_encode(array('data' => $data));
    }

    public function getreferbyById() {
    	$id = $this->input->post('id');
        $results = $this->referby_model->getreferbyById($id);
        $data 	 = array();
		
        echo json_encode(array('data' => $results));
    }
	
}
