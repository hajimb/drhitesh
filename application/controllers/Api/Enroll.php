<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Enroll extends CI_Controller {

    public function __construct(){
		parent::__construct();
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
        $this->load->helper(['common','security']);
		$this->load->model('enroll_model');
		
	}



  	public function newenroll(){
		$data = array('Response-Status' => FALSE,'Response-Validate' => FALSE, 'Response-Message' => '');

		//writeToFile($this->input->post('Data'),"contact Request");
		if($this->input->post('Data')){
		 	$postdata = json_decode($this->input->post('Data'),true);
			$client		= (isset($postdata['client']) ? $postdata['client'] : '');
			if($client != "web"){
				$secret_key = (isset($postdata['secret_key']) ?$postdata['secret_key'] : '') ;
				if(VerifySecretKey($secret_key) == false){
					$data['Response-Message']  = 'Invalid Secret Key';
					echo json_encode($data);
					exit();
				}
			}
        // echo $postdata['full_name'];exit();
			$master_user['event_id']	= $postdata['event_id'];
    		$master_user['user_id']		= $postdata['user_id'];
    		$master_user['device_type']	= $postdata['client'];
			if($client != "web"){
				$master_user['ip']		= $postdata['ip'];
			}else{	
				$master_user['ip']		= $this->input->ip_address();
			}
			$this->form_validation->set_data($postdata);
			$this->form_validation->set_rules('event_id', 'Full Name', 'trim|xss_clean|required');
			$this->form_validation->set_rules('user_id', 'Email', 'trim|xss_clean|required');
    		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    		$this->form_validation->set_message('required', 'Enter %s');

    		if($this->form_validation->run()) {
    			$result = $this->enroll_model->newenroll($master_user);
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
