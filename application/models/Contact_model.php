<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}
	
	public function newcontact($data){
		$insert  = $this->db->insert('master_contact',$data);
		$affrows = $this->db->affected_rows();
		if($affrows == 1){
			$result= array("status" => true,"success" => true,"msg" => "Thank You For Contact Us ");
		}else{
			$result = array("status" => false,"success" => true,"msg" => "Error While Adding User!");
		}				
		return $result;
	}	
}