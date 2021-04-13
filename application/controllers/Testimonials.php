<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonials extends CI_Controller {	
	public function __construct(){
	        parent::__construct();
	        
	        $this->load->model([
	            'website/section_model',
	            'website/home_model',
	            'website/setting_model',
	            'testimonials_model'
	        ]); 
		$this->load->helper('security');

	    }

	public function index(){
		$page_data['setting'] 	 = $this->home_model->setting();
		$page_data['heading']    = 'Sexologist';
		$page_data['pagename']   = 'testimonials';
		$page_data['page_title'] = 'Testimonials | Sexologist';
		$page_data['page_meta']  = '';
		$page_data['setting'] 	 = $this->home_model->setting();
		$page_data['handtestimonials'] 	 = $this->testimonials_model->gethandtestimonials();
		$page_data['testimonials'] 	 = $this->testimonials_model->gettestimonials();
		$this->load->view('website/main', $page_data);	
	}

	public function create(){
		$page_data['heading']    = 'Sexologist Testimonials';
		$page_data['pagename']   = 'testimonials';
		$page_data['breadcrumb'] = 'Testimonials';
		$page_data['page_title'] = 'Sexologist | Dr. Hitesh Shah - Sexologist in Mumbai';
		$page_data['page_meta']  = '';
		$this->load->view('admin/home', $page_data);
	}

	public function addnew(){
		$data = array('Response-Status' => false,'Response-Validate' => false, 'Response-Message' => array());
		$master_contact =  array();
		$id = $this->input->post('id');
		$master_testimonial['name'] 		= $this->input->post('name');
		$master_testimonial['category']		= $this->input->post('category');
		$master_testimonial['testimonial']	= $this->input->post('testimonial');
		// $master_testimonial['testimonial_date']	= $this->input->post('testimonial_date');
		$master_testimonial['active'] 	 	= $this->input->post('active');
		
		$this->form_validation->set_rules('name', 'Name', 'trim|xss_clean|required');
		$this->form_validation->set_rules('category', 'Category', 'trim|xss_clean');
		$this->form_validation->set_rules('testimonial', 'Testimonial', 'trim|xss_clean');
		$this->form_validation->set_rules('active', 'Status', 'trim|xss_clean|numeric');
		
		$this->form_validation->set_error_delimiters('<span>', '</span>');
		$this->form_validation->set_message('required', 'Enter %s');

		if($this->form_validation->run()) {
			$result = $this->testimonials_model->addnew($master_testimonial,$id);
			if($result['status'] == true){
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
        $results = $this->testimonials_model->gettestimonials();
        $data 	 = array();
		$no 	 = 0;
        foreach ($results  as $r) {
        	$id = $r['id'];
			$no++;
			$row    = array();
			$row[]  = $r['name'];
			$row[]  = $r['category'];
			$row[]  = $r['testimonial'];
			$row[]  = '<a class="btn btn-info GetDetail" data-id="'.$id.'" href="javascript:void(0)"> Edit</a> <a class="btn btn-danger delete" data-id="'.$id.'" data-module="testimonials" data-title="Testimonial" href="javascript:void(0)" data-modal="confirmation"> Delete</a>';	
			$data[] = $row;
        }
        echo json_encode(array('data' => $data));
	}

	public function getById() {
    	$id = $this->input->post('id');
        $results = $this->testimonials_model->getById($id);
        $data 	 = array();
        echo json_encode(array('data' => $results));
	}

	public function handwritten(){
		$page_data['heading']    = 'Sexologist Testimonials';
		$page_data['pagename']   = 'testimonials-handwritten';
		$page_data['breadcrumb'] = 'Hand Written Testimonials';
		$page_data['page_title'] = 'Sexologist | Dr. Hitesh Shah - Sexologist in Mumbai';
		$page_data['page_meta']  = '';
		$this->load->view('admin/home', $page_data);
	}

	public function addnewhandwritten(){
		// print_r($_POST);print_r($_FILES);
    	$astatus 	= false;
        $data 		= array('Status' => false,'Validate' => false,'Message' =>array());
       	$id   		= $this->input->post('id');
       	$oldimage   = $this->input->post('oldimage');
       	$newimage   = '';
        $this->form_validation->set_rules('id', '', 'trim|required');
        if ($_FILES['filename']['size'] == 0  && $id == 0) {
    		$this->form_validation->set_rules('filename', 'Select Image', 'trim|required');
        }
        $this->form_validation->set_rules('active', 'Status', 'trim|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
        $this->form_validation->set_message('required', 'Enter %s');

        if ($this->form_validation->run()) {
        	$astatus       	    			  = true;
        	$upload_path   	    			  = $this->config->item('upload_path');
        	$master_data['active']  		  = $this->input->post('active');
        	$master_data['testimonial_date']  = date('Y-m-d');
        	if($_FILES['filename']['size'] > 0) {
            	is_dir($upload_path);
            	$config['upload_path']   = $upload_path."/testimonial/";
            	$config['allowed_types'] = 'jpg|png|jpeg|JPG';
            	$config['overwrite']     = false;
            	$config['encrypt_name']  = false;
           	 	$config['remove_spaces'] = true;
            	$config['file_name']     = date("Ymdhis");
            	$this->load->library('upload', $config);
            	$this->upload->initialize($config);
            	if (!$this->upload->do_upload('filename')) {
            		// echo 'dasd:'.$this->upload->display_errors();
                	$data['Message']['filename'] = array('error'=>$this->upload->display_errors());
                	$astatus = false;
                } else {
                	// print_r($this->upload->data());exit;
                	$upload_data          = array('upload_data' => $this->upload->data());
                	$newimage			  = $upload_data['upload_data']['file_name'];
                	$master_data['image'] = $newimage;
                	$astatus        	  = true;
                }
        	}
        	$result = $this->testimonials_model->addnewhandwritten($master_data,$id);

        	$data['Status']    = $result['status'];
            $data['Validate']  = true;
            $data['Message']   = $result['msg'];

        	if($result['status'] == false){
                if (FCPATH.'uploads/testimonial/'.$master_data['filename']) {
                    unlink('uploads/testimonial/'.$master_data['filename']);
                }
				$data['Status']    = false;
				$data['Validate']  = true;
				$data['Message']   = "Error While Adding Casestudy";
			}else{
				if($id >0 && $newimage !='' && $oldimage!=''){
					if (FCPATH.'uploads/testimonial/'.$oldimage) {
                        unlink('uploads/testimonial/'.$oldimage);
	                }
				}
			}
        } else {
        	foreach ($this->input->post() as $key => $value) {
            	$data['Message'][$key] = form_error($key);
        	}
        	$data['data']  = validation_errors();
        }
	    echo json_encode($data);
	}

	public function gethandwrittenlist($param1 = '') {
	    $results = $this->testimonials_model->gethandwrittenlist();
	    $data 	 = array();
		$no 	 = 0;
        foreach ($results  as $r) {
        	$id = $r['id'];
			$no++;
			$image = $r['image'];
			if($image != NULL){
				if (FCPATH.'uploads/testimonial/'.$image) {
					$image = '<img src="'.base_url().'uploads/testimonial/'.$image.'" width="200" />';
				}else{
					$image = '';
				}
			}else{
				$image = '';
			}
			$row    = array();
			$row[]  = $image;
			$row[]  = '<a class="btn btn-info GetDetail" data-id="'.$id.'" href="javascript:void(0)"> Edit</a> <a class="btn btn-danger delete" data-id="'.$id.'" data-module="testimonials_handwritten" data-title="Handwritten Testimonial" href="javascript:void(0)" data-modal="confirmation"> Delete</a>';
			$data[] = $row;
        }
        echo json_encode(array('data' => $data));
	}

	public function gethandwrittenById() {
    	$id = $this->input->post('id');
        $results = $this->testimonials_model->gethandwrittenById($id);
        $data 	 = array();
        echo json_encode($results);
	}
}