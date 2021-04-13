<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
    $this->load->helper(['common','security']);
		$this->load->model([
        'website/section_model',
        'website/home_model',
        'website/setting_model',
        'register_model'
    ]);
	}

	public function index(){
      $page_data['setting'] = $this->home_model->setting();
      $page_data['heading']    = 'Sexologist Register';
      $page_data['pagename']   = 'register';
      $page_data['page_title'] = 'Sexologist :: Register';
      $page_data['page_meta']  = '';
      $this->load->view('website/main', $page_data);
	}

  public function newuser(){
		$this->load->library('encryption');
		$data           = array('Response-Status' => false,'Response-Validate' => false, 'Response-Message' => array());
		$master_contact =  array();
		writeToFile($this->input->post('Data'),"Register Request");
    		if($this->input->post('Data')){
	      	// print_r($_POST);
			$postdata = json_decode($this->input->post('Data'),true);
			$client		= $postdata['client'];
  			if($client != "web"){
  				$secret_key = (isset($postdata['secret_key']) ?$postdata['secret_key'] : '') ;
  				if(VerifySecretKey($secret_key) == false){
  					$data['Response-Message']  = 'Invalid Secret Key';
  					echo json_encode($data);
  					exit();
  				}
  			}else{
  				if($client=='app'){
	  				$master_user['device-id'] 	= $postdata['device-id'];
		    		$master_user['fcm-id'] 	 	= $postdata['fcm-id'];
		    		$master_user['client']   	= $postdata['client'];
		    		$master_user['device_type'] = $postdata['device_type'];
		    		$master_user['os-name'] 	= $postdata['os-name'];
		    		$master_user['os-version'] 	= $postdata['os-version'];
		    	}
  			}
        		// echo $postdata['full_name'];exit();
  				$id 							= $postdata['id'] ?? 0;

  				$this->form_validation->set_data($postdata);
		        if($id == 0){
		        	$this->form_validation->set_rules('full_name', 'Full Name', 'trim|xss_clean|required');
		        }else{
		        	$this->form_validation->set_rules('first_name', 'First Name', 'trim|xss_clean|required');
		        	$this->form_validation->set_rules('last_name', 'Last Name', 'trim|xss_clean|required');

		        }
		        $this->form_validation->set_rules('email', 'Email', 'trim|xss_clean|valid_email|required');
		        $this->form_validation->set_rules('mobile', 'Mobile', 'trim|xss_clean|required');
		       /* if($id==0){
	  				$this->form_validation->set_rules('email', 'Email', 'trim|xss_clean|valid_email|is_unique[master_user.email]|required');
	  				$this->form_validation->set_message('is_unique', 'This email is already taken');
		        	$this->form_validation->set_rules('mobile', 'Mobile', 'trim|xss_clean|is_unique[master_user.contact]|required');
	  				$this->form_validation->set_message('is_unique', 'This mobile is already taken');
		        }else{
		        	$this->form_validation->set_rules('email', 'Email', 'trim|xss_clean|valid_email|edit_unique[master_user.email]|required');
	  				$this->form_validation->set_message('is_unique', 'This email is already taken');
		        	$this->form_validation->set_rules('mobile', 'Mobile', 'trim|xss_clean|edit_unique[master_user.contact]|required');
	  				$this->form_validation->set_message('is_unique', 'This mobile is already taken');
		        }*/
	  			// $this->form_validation->set_rules('mobile', 'Contact Number', 'trim|xss_clean|required');
	  			// $this->form_validation->set_message('is_unique', 'This number is already taken');
	  			$this->form_validation->set_rules('gender', 'gender', 'trim|xss_clean|required');
	  			$this->form_validation->set_rules('age', 'Age', 'trim|xss_clean|required');
	  			$this->form_validation->set_rules('marital_status', 'Marital Status', 'trim|xss_clean|required');

	    		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	    		$this->form_validation->set_message('required', 'Enter %s');

	    		
	    		$full_name						= $postdata['full_name'] ?? '';

  				$master_user['first_name'] 		= $postdata['first_name'] ?? '';
  				$master_user['last_name'] 		= $postdata['last_name'] ?? '';
  				$master_user['middle_name'] 	= $postdata['middle_name'] ?? '';
  				$master_user['country'] 		= $postdata['country'] ?? '';
  				$master_user['state'] 			= $postdata['state'] ?? '';
  				$master_user['city'] 			= $postdata['city'] ?? '';
  				$master_user['pincode'] 		= $postdata['pincode'] ?? '';
  				$master_user['address'] 		= $postdata['address'] ?? '';

  				$master_user['email'] 	 		= $postdata['email'];
	    		$master_user['contact']   		= $postdata['mobile'];
	    		$master_user['gender'] 			= $postdata['gender'];
	    		$master_user['age'] 	 		= $postdata['age'];
	    		$master_user['marital_status'] 	= $postdata['marital_status'];
	    		$master_user['ip'] 				= $this->input->ip_address();

  				if($id == 0){
  					$master_user['password']	= $this->encryption->encrypt($postdata['mobile']);
		    		$master_user['name'] 		= $postdata['full_name'];
		    	}else{
		    		$master_user['name'] 		= $postdata['first_name']. ' '.$postdata['middle_name'].' '.$postdata['last_name'];
		    	}
	    		
	    		if($this->form_validation->run()) {
	    			$result = $this->register_model->newuser($master_user, $id);
	    			// print $this->db->last_query();
	    			//print_r($result);exit();
	    			if($result['status']==true){
	    				$data['Response-Status']   = $result['status'];
	    				$data['Response-Validate'] = true;
	    				$data['Response-Message']  = $result['msg'];
	    				$data['user_id']           = $result['user_id'];
	
	    			}else{
	    				$data['Response-Status']   = $result['status'];
	    				$data['Response-Validate'] = true;
	    				$data['Response-Message']  = $result['msg'];
	
	    			}
	    		}else{
	    			foreach ($postdata as $key => $value) {
	    				$data['Response-Message'][$key] = form_error($key);
	    				//$data['Response-Message']['f'] = validation_errors();
	    			}
	    		}
	    		writeToFile($data,"Register Response");
	    		echo json_encode($data);
	      }
	}
}
