<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
		$this->load->helper('common');
		$this->load->model('login_model');
		$this->load->helper('security');
	}	

	public function signin(){
		
    	$data = array('Response-Status' => FALSE,'Response-Validate' => FALSE, 'Response-Message' => array());
    	$username 		 	= $this->input->post('username');
		$password 		    = $this->input->post('password');
		$remember		    = $this->input->post('remember');
		$pdata['username']  = $username;
		$pdata['password']  = $password;
		$this->form_validation->set_rules('username', 'User Name', 'trim|xss_clean|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|xss_clean|required|min_length[4]');
		$this->form_validation->set_error_delimiters('<span>', '</span>');
		$this->form_validation->set_message('required', 'Enter %s');

		if($this->form_validation->run()) {
			// if($this->security->xss_clean($pdata)){
              	$result 		 = $this->login_model->login($pdata);
				$data['Response-Status']  = $result['status'];
				$data['Response-Validate'] = $result['success'];
				$data['Response-Message']     = $result['msg'];
				// $data1['name'] 	= $username;
				// $body = $this->load->view('email/login', $data1, true);
				// $rst = sendemail($username,'You Logged In',$body);
				// $rst1 = sendsms('8169839706',$username. ' Just Logged In');

				$data['Response-Data']     = $this->login_model->GetUserById($result['user_id']);
   //          }
			// else{
			// 	$data['msg'] = 'Your site failed xss security validation';
   //          }
		}else{
			foreach ($this->input->post() as $key => $value) {
				$data['Response-Message'][$key] = form_error($key);
			}
			//$data['Response-Message']     = validation_errors();
		}
		echo json_encode($data);
    }
	
	public function checklogin(){
		
		$data = array('Response-Status' => FALSE,'Response-Validate' => FALSE, 'Response-Message' => array());

		
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
			$username = (isset($postdata['username']) ? $postdata['username'] : ''); 	//user - done
			$password = (isset($postdata['password']) ? $postdata['password'] : '' ); 	//pass - done
			
			if(!isset($postdata['remember'])){
				$postdata['remember'] = NULL;
			}
		 	$this->form_validation->set_data($postdata);
		 	$this->form_validation->set_rules('username', 'User Name', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');
			$this->form_validation->set_error_delimiters('', '');
			$this->form_validation->set_message('required', 'Enter %s');		

			if($this->form_validation->run() == FALSE){
				$data['Response-Validate'] = FALSE;
				foreach ($postdata as $key => $value) {
					$data['Response-Message'][$key]  = form_error($key);
				}
				$data['Response-Message']['text']  = validation_errors();
				
				echo json_encode($data);
				exit();
			}
			else{
				$result = $this->login_model->login($postdata,'user');
				$data['Response-Status']  = $result['status'];
				$data['Response-Validate'] = $result['success'];
				$data['Response-Message']     = $result['msg'];
				$data['Response-Data']     = $this->login_model->GetUserById($result['user_id']);
				if($data['Response-Status']==true){
					if($client == "web"){
						$data =  $this->signin($data, $postdata);
						// exit();
					}else{
						//$this->update_user($data['Response-Data']['user_id']);
						//$this->master_log($data['Response-Data']['user_id']);
					}

				}
				echo json_encode($data);
				exit();
			}
		}
	}	
}