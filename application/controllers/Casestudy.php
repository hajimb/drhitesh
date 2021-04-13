<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Casestudy extends CI_Controller {	
	public function __construct(){
        parent::__construct();
        
        $this->load->model([
            'website/section_model',
            'website/home_model',
            'website/setting_model',
            'casestudy_model'
        ]); 
		$this->load->helper('security');
	}

public function index(){
        $page_data['setting']    = $this->home_model->setting();
        $page_data['heading']    = 'Sexologist';
        $page_data['pagename']   = 'case-study';
        $page_data['page_title'] = 'Case Study | Sexologist';
        $page_data['page_meta']  = '';
        $page_data['setting']    = $this->home_model->setting();
        $page_data['case_study']   = $this->casestudy_model->getlist();
        $this->load->view('website/main', $page_data);  
    }

    public function create(){
    	$page_data['heading']    = 'Sexologist Testimonials';
		$page_data['pagename']   = 'case-study';
		$page_data['breadcrumb'] = 'Case Study';
		$page_data['page_title'] = 'Sexologist | Dr. Hitesh Shah - Sexologist in Mumbai';
		$page_data['page_meta']  = '';
		$this->load->view('admin/home', $page_data);
	}

	public function addnew(){
    	// print_r($_POST);print_r($_FILES);
    	$astatus = false;
        $data = array('Status' => false,'Validate' => false,'Message' =>array());
       	$id   = $this->input->post('id');
       	$oldimage   = $this->input->post('oldimage');
       	$newimage   = '';
        $this->form_validation->set_rules('id', '', 'trim|required');
        // echo ': '.$_FILES['filename']['size']; 
        if ($_FILES['filename']['size'] == 0  && $id == 0) {
    		$this->form_validation->set_rules('filename', 'Select Image', 'trim|required');
        }
       
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
        $this->form_validation->set_message('required', 'Enter %s');

        if ($this->form_validation->run()) {
        	$astatus       	    = true;
        	$upload_path   	    = $this->config->item('upload_path');
        	$master_data['comment'] = str_replace("\r\n","<br />",$this->input->post('comment') ); //nl2br($this->input->post('comment'));
        	$master_data['active']  = $this->input->post('active');
        	$master_data['comment_date']  = date('Y-m-d');
        	if($_FILES['filename']['size'] > 0) {
            	is_dir($upload_path);
            	$config['upload_path']   = $upload_path."/case-study/";
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
        	$result = $this->casestudy_model->addnew($master_data,$id);

        	$data['Status']    = $result['status'];
            $data['Validate']  = true;
            $data['Message']   = $result['msg'];

        	if($result['status'] == false){
                if (FCPATH.'uploads/case-study/'.$master_data['filename']) {
                    unlink('uploads/case-study/'.$master_data['filename']);
                }
				$data['Status']    = false;
				$data['Validate']  = true;
				$data['Message']   = "Error While Adding Casestudy";
			}else{
				if($id >0 && $newimage !='' && $oldimage!=''){
					if (FCPATH.'uploads/case-study/'.$oldimage) {
                        unlink('uploads/case-study/'.$oldimage);
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

	public function getlist($param1 = '') {
        $results = $this->casestudy_model->getlist();
        $data 	 = array();
		$no 	 = 0;
        foreach ($results  as $r) {
        	$id = $r['id'];
			$no++;
			$image = $r['image'];
			if($image != NULL){
				if (FCPATH.'uploads/case-study/'.$image) {
					$image = '<img src="'.base_url().'uploads/case-study/'.$image.'" width="200" />';
				}else{
					$image = '';
				}
			}else{
				$image = '';
			}

			$row    = array();
			$row[]  = $image;
			$row[]  = $r['comment'];
			$row[]  =  $r['comment_date'];
            $row[]  = '<a class="btn btn-info GetDetail" data-id="'.$id.'" href="javascript:void(0)"> Edit</a> <a class="btn btn-danger delete" data-id="'.$id.'" ata-module="casestudy" data-title="Case Study" href="javascript:void(0)" data-modal="confirmation"> Delete</a>';
			$data[] = $row;
        }
        echo json_encode(array('data' => $data));
	}

	public function getById() {
	    	$id = $this->input->post('id');
	        $results = $this->casestudy_model->getById($id);
	        $results->comment = str_replace('<br />',"\r\n",$results->comment );
            // $data 	 = array();
	        echo json_encode($results);
	}
}