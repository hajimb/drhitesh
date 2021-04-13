<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
		$this->load->model('login_model');
		$this->load->helper('security');
		$this->load->model([
        'website/section_model',
        'website/home_model',
        'website/setting_model'
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

}
