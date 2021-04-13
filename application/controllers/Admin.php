<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		/*cache control*/
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
		/*if($this->session->userdata('logged_in') == FALSE || $this->session->userdata('logintype') != 'admin'  ){
	         redirect('/admin/login',refresh);
	    }*/
	}

	public function index(){
	    $page_data['heading']    = 'Sexologist Login';
	    $page_data['pagename']   = 'login';
	    $page_data['page_title'] = 'Sexologist | Dr. Hitesh Shah - Sexologist in Mumbai';
		$this->load->view('admin/login', $page_data);
	}

	public function dashboard(){
	    $page_data['heading']    = 'Sexologist Dashboard';
	    $page_data['pagename']   = 'dashboard';
	    $page_data['page_title'] = 'Sexologist | Dr. Hitesh Shah - Sexologist in Mumbai';
		$this->load->view('admin/home', $page_data);
	}
	public function users(){
	    $page_data['heading']    = 'Sexologist Users List';
	    $page_data['pagename']   = 'users';
	    $page_data['page_title'] = 'Sexologist | Dr. Hitesh Shah - Sexologist in Mumbai';
		$this->load->view('admin/home', $page_data);
	}
	
	public function consult(){
	    $page_data['heading']    = 'Sexologist Consult Lists';
	    $page_data['pagename']   = 'consult';
	    $page_data['page_title'] = 'Sexologist | Dr. Hitesh Shah - Sexologist in Mumbai';
	    $page_data['page_meta']  = '';
		$this->load->view('admin/home', $page_data);
	}

	public function appointment(){
	    $page_data['heading']    = 'Sexologist Appointment Lists';
	    $page_data['pagename']   = 'appointment-list';
	    $page_data['page_title'] = 'Sexologist | Dr. Hitesh Shah - Sexologist in Mumbai';
	    $page_data['page_meta']  = '';
		$this->load->view('admin/home', $page_data);
	}
	
	public function logout($param1=''){
		$newdata = array(
		'logintype'	 => '',
		'full_name'  => '',
		'user_id'    => '',
		'user_name'  => '',
		'logged_in'  => FALSE,
		);
		$this->session->unset_userdata($newdata);
		$this->session->sess_destroy();		
		//$this->session->set_userdata($language);
		redirect('/admin', 'refresh');
	}
	
}
