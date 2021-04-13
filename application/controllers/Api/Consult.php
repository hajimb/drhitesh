<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consult extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
    $this->load->helper(['common','security']);
		$this->load->model([
        'website/section_model',
        'website/home_model',
        'website/setting_model',
        'contact_model'
    ]);
	}

  public function newconsult(){
		$data           = array('Response-Status' => false,'Response-Validate' => false, 'Response-Message' => array());
		$master_contact =  array();
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
  			}
        // echo $postdata['full_name'];exit();
        $master_contact['full_name'] 	  = $postdata['full_name'];
    		$master_contact['email'] 	 	    = $postdata['email'];
    		$master_contact['subject']   	  = $postdata['subject'];
    		$master_contact['contact_type'] = $postdata['contact_type'];
    		$master_contact['message'] 	 	  = $postdata['message'];

        $this->form_validation->set_data($postdata);
    		$this->form_validation->set_rules('full_name', 'Full Name', 'trim|xss_clean|required');
    		$this->form_validation->set_rules('email', 'Email', 'trim|xss_clean|valid_email|required');
    		$this->form_validation->set_rules('subject', 'Subject', 'trim|xss_clean|required');
    		$this->form_validation->set_rules('message', 'Message', 'trim|xss_clean|required');

    		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    		$this->form_validation->set_message('required', 'Enter %s');

    		if($this->form_validation->run()) {
    			$result = $this->contact_model->newcontact($master_contact);
    			//print_r($result);exit();
    			if($result['status']==true){
    				$data['Response-Status']   = $result['status'];
    				$data['Response-Validate'] = true;
    				$data['Response-Message']  = $result['msg'];

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
    		echo json_encode($data);
      }
	}
}
