<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}
	
	public function getuserlist($param1){
		$sql 	  = "SELECT * FROM master_user WHERE deleted = 0";
		$runquery = $this->db->query($sql)->result_array();
		return $runquery;
	}

	public function getById($param1){
		$sql 	  = "SELECT * FROM master_user WHERE id=".$param1;
		$runquery = $this->db->query($sql)->row();
		return $runquery;
	}

	public function getuserdetailFromappointment($pid){
		$sql 	  = "SELECT pm.first_name, pm.middle_name, pm.last_name, pm.mobile, pm.emailaddress,ca.onlineoffline From patient_master pm , clinic_appointment ca WHERE ca.id = '".$pid."' AND pm.id = ca.patient_id";
		$runquery = $this->db->query($sql)->row();
		return $runquery;
	}
	public function getstatus($status){
		return $this->db->select("*")
			->from('master_appointmentstatus')
			->where('id',$status)
			->get()
			->row();
	} 
}