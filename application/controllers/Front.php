<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {
	public function __construct(){
		parent::__construct();
		/*cache control*/
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
	}

	public function index(){
	    $page_data['heading']    = 'Sexologist';
	    $page_data['pagename']   = 'index';
	    $page_data['page_title'] = 'Sexologist | Dr. Hitesh Shah - Sexologist in Mumbai';
	    $page_data['page_meta']  = '<meta name="description" itemprop="description" content="Best Sexologist & Counsellor in Mumbai, Top Sexologist in Mumbai, Senior consultant in Sexual Medicine, Doctor for Sexual Problems, Sex therapist, Sex" />';
		$this->load->view('front/home', $page_data);
		
	}

	
}
