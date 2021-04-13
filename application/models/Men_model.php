<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Men_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}
	
	public function getuserlist($param1){
		$sql 	  = "SELECT * FROM master_content";
		$runquery = $this->db->query($sql)->result_array();
		return $runquery;
	}
}