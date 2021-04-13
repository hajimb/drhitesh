<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
	private $heading;
	public function __construct(){
		parent::__construct();
		/*cache control*/
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
		if ($this->session->userdata('logged_in') != 1 || $this->session->userdata('logintype') != 'admin' )
        redirect(base_url().'admin', 'refresh');
		$this->load->model('category_model');
		$this->load->helper('security');
		$this->heading = 'Category';
	}

	public function index(){
	    $page_data['heading']    = 'Sexologist $this->heading Lists';
	    $page_data['pagename']   = 'category';
	    $page_data['header']     = $this->heading;
	    $page_data['page_title'] = 'Sexologist | Dr. Hitesh Shah - Sexologist in Mumbai';
	    $page_data['page_meta']  = '';
		$this->load->view('admin/home', $page_data);
	}

	public function create(){
		$data = array('Response-Status' => false,'Response-Validate' => false, 'Response-Message' => array());
		$master_contact =  array();
		$id = $this->input->post('id');
		$master['category'] 	= $this->input->post('category');
		$master['status'] 	 	= $this->input->post('status');
		$master['ip'] 			= $this->input->ip_address();
		$master['added_date'] 	= time();
		$master['added_by'] 	= $this->session->userdata('user_id');
		
		$this->form_validation->set_rules('category', 'Category', 'trim|xss_clean|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|xss_clean|numeric');
		if($id>0){
			$this->form_validation->set_rules('deleted', 'Deleted', 'trim|xss_clean|numeric');
			$master['deleted'] = $this->input->post('deleted');
		}
		$this->form_validation->set_error_delimiters('<span>', '</span>');
		$this->form_validation->set_message('required', 'Enter %s');

		if($this->form_validation->run()) {
			$result = $this->category_model->create($master,$id);
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

	public function getlist($param1 = '') {
        $results = $this->category_model->getlist();
        $data 	 = array();
		$no 	 = 0;
        foreach ($results  as $r) {
        	$id = $r['id'];
			$no++;
			$row    = array();
			$row[]  = $r['category'];
			$row[]  = $r['status'];
			$row[]  = $r['deleted'];
			$row[]  = date('m/d/Y', $r['added_date']);		
			$row[]  = '<a class="btn btn-info GetDetail" data-id="'.$id.'" href="javascript:void(0)"> Edit</a> <a class="btn btn-danger delete" data-id="'.$id.'" href="javascript:void(0)" data-modal="confirmation"> Delete</a>';			
			$data[] = $row;
        }
        echo json_encode(array('data' => $data));
    }

    public function getById() {
    	$id 	 = $this->input->post('id');
        $results = $this->category_model->getById($id);
        $data 	 = array();
        echo json_encode(array('data' => $results));
    }
	
}
