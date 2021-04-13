<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Women extends CI_Controller {	
	public function __construct(){
		parent::__construct();
		/*cache control*/
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
		$this->load->helper('security');
		$this->load->model('question_model');
		$this->load->model([
            'website/section_model',
            'website/home_model',
            'website/setting_model'
        ]);
        $this->load->helper('common');
	}
	
	public function index(){
		$page_data['setting'] 	 = $this->home_model->setting();
	    $page_data['heading']    = 'Sexologist';
	    $page_data['pagename']   = 'women';
	    $page_data['content']    = getcontent('Women');
	    $page_data['page_title'] = 'Effective Sex  Solutions for Women | Sexologist';
	    $page_data['page_meta']  = '<meta name="description" itemprop="description" content="Confidential and effective sex solutions for women by renowned sexologist in Mumbai. No side effects. No dependence." />
<meta name="keywords" itemprop="keywords" content="female sexual dysfunction,painful intercourse,narrow vaginal opening,vaginal dryness,lubrication disorder,lack of orgasm,penetration phobia,non consummation of marriage,sexual problems in women,female sexologist,ladies sexologist" />';
		$this->load->view('website/main', $page_data);
		
	}
	
}
