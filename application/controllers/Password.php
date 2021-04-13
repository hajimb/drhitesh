<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Password extends CI_Controller {
	public function __construct(){
        parent::__construct();
				$this->load->helper('security');
        $this->load->model([
            'website/section_model',
            'website/home_model',
            'website/setting_model',
						'password_model'
        ]);
    }

	public function index(){
			$page_data['setting'] 	 = $this->home_model->setting();
			$page_data['heading']    = 'Forgot Password';
			$page_data['pagename']   = 'forgot-password';
			$page_data['page_title'] = 'Forgot Password | Sexologist';
			$page_data['page_meta']  = '';
			$this->load->view('website/main', $page_data);
	}

	public function reset_password(){
			$data       = array('Response-Status' => false,'Response-Validate' => false, 'Response-Message' => array());
      $token 			= $this->uri->segment(4);
      $cleanToken = $this->security->xss_clean($token);
			$page_data['setting'] 	 = $this->home_model->setting();
			$page_data['heading']    = 'Reset Password';
			$page_data['pagename']   = 'reset-password';
			$page_data['page_title'] = 'Reset Password | Sexologist';
			$page_data['cleanToken'] = $cleanToken;
			$page_data['page_meta']  = '';
			$this->load->view('website/main', $page_data);
  }
	public function base64url_encode($data) {
      return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
    }
    public function base64url_decode($data) {
      return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));
    }

}
