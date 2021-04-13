<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
		$this->load->model('user_model');
	}

	public function addNewUser(){
	    $page_data['heading']    = 'Sexologist';
	    $page_data['pagename']   = 'd';
	    $page_data['page_title'] = 'Sexologist | Dr. Hitesh Shah - Sexologist in Mumbai';
	    $page_data['page_meta']  = '';
		$this->load->view('front/home', $page_data);
	}

	public function getuserlist($param1 = '') {
        $results = $this->user_model->getuserlist($param1);
        $data 	 = array();
		$no 	 = 0;

        foreach ($results  as $r) {
			$no++;
			$row    = array();
			$id  	= $r['id'];
			$row[]  = ucwords(strtolower($r['name']));
			$row[]  = $r['email'];
			$row[]  = $r['contact'];
			$row[]  = $r['age'];
			$row[]  = $r['gender'];
			$row[]  = $r['marital_status'];
			$row[]  = '<a class="btn btn-danger delete" data-id="'.$id.'" data-module="user" data-title="user" href="javascript:void(0)" data-modal="confirmation"> Delete</a>';
			$data[] = $row;
        }
        echo json_encode(array('data' => $data));
    }
	
	
}