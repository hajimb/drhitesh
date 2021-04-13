<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
		$this->load->model('login_model');
		$this->load->helper(['common','security']);
		$this->load->model([
            'website/section_model',
            'website/home_model',
            'website/setting_model'
        ]); 
	}	

	public function index(){
		$page_data['setting'] = $this->home_model->setting();
		$page_data['heading']    = 'Sexologist Login';
	    $page_data['pagename']   = 'login';
	    $page_data['page_title'] = 'Sexologist :: Login';
	    $page_data['page_meta']  = '';
		$this->load->view('website/main', $page_data);
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
			if($this->security->xss_clean($pdata)){
              	$result 		 		   = $this->login_model->login($pdata,'front');
				$data['Response-Status']   = $result['status'];
				$data['Response-Validate'] = $result['success'];
				$data['Response-Message']  = $result['msg'];
				$data1['name'] 	= $username;
				$body = $this->load->view('email/login', $data1, true);
				//$rst = sendemail($username,'You Logged In',$body);
				//$rst1 = sendsms('8169839706',$username. ' Just Logged In');
            }
			else{
				$data['msg'] = 'Your site failued xss security validataion';
            }
		}else{
			foreach($this->input->post() as $key => $value) {
				$data['Response-Message'][$key] = form_error($key);
			}
			//$data['Response-Message']     = validation_errors();
		}
		echo json_encode($data);
    }
    public function logout($param1=''){
  		
  		$newdata = array(
  		'logintype'	 => '',
  		'user_name'  => '',
  		'user_id'    => '',
  		'logged_in'  => FALSE,
  		);
      $this->session->unset_userdata($newdata);
  		$this->session->sess_destroy();
  		redirect('/', 'refresh');

  	}
}