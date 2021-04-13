<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Couple extends CI_Controller {	
	public function __construct(){
		parent::__construct();
		/*cache control*/
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
		$this->load->model([
            'website/section_model',
            'website/home_model',
            'website/setting_model'
        ]);
        $this->load->helper('common');
	}

	public function index(){
	    $page_data['heading']    = 'Sexologist';
	    $page_data['pagename']   = 'couple';
	    $page_data['page_title'] = 'Sexologist | Dr. Hitesh Shah - Sexologist in Mumbai';
	    $page_data['page_meta']  = '';
	    $page_data['setting'] 	 = $this->home_model->setting();
	    $page_data['content']    = getcontent('Women');
		$this->load->view('website/main', $page_data);
	}
	
}
