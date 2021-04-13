<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marriage extends CI_Controller {	
	public function __construct(){
        parent::__construct();
        
        $this->load->model([
            'website/section_model',
            'website/home_model',
            'website/setting_model'
        ]); 
    }

	public function PremarriageCounselling(){
		$page_data['setting'] 	 = $this->home_model->setting();
	    $page_data['heading']    = 'Sexologist';
	    $page_data['pagename']   = 'premarriage-counselling';
	    $page_data['page_title'] = 'Premarriage Counselling | Sexologist';
	    $page_data['page_meta']  = '';
		$this->load->view('website/main', $page_data);
		
	}
	
}
