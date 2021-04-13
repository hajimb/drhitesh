<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Serviceterms extends CI_Controller {	
	public function __construct(){
        parent::__construct();
        
        $this->load->model([
            'website/section_model',
            'website/home_model',
            'website/setting_model'
        ]); 
    }

	public function index(){
		$page_data['setting'] 	 = $this->home_model->setting();
	    $page_data['heading']    = 'Sexologist';
	    $page_data['pagename']   = 'refund-policy';
	    $page_data['page_title'] = 'Refund / Cancellation Policy| Sexologist';
	    $page_data['page_meta']  = '';
	    $page_data['setting'] 	 = $this->home_model->setting();
		$this->load->view('website/main', $page_data);
		
	}
	
}
