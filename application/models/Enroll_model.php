<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Enroll_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}


	public function newenroll($master_user){

			$this->db->trans_begin();
			$isuserexist = $this->iseventexist($master_user);
			if($isuserexist==0){
				$insert		 = $this->db->insert('master_enroll',$master_user);
				$user_id 	 = $this->db->insert_id();
				$affrows = $this->db->affected_rows();
				if($affrows == 1){

					if ($this->db->trans_status() === FALSE){
					    $this->db->trans_rollback();
					    $result = array("status" => false,"success" => true,"msg" => "Roll back Error");
					}
					else{
					    $this->db->trans_commit();
					    $result = array("status" => true,"success" => true,"msg" => "User Enrolled Successfully for the Event");
					}
				}else{
					$result = array("status" => false,"success" => true,"msg" => "Error While Submitting Registering Event");
				}
			}else{
				$result = array("status" => false,"success" => true,"msg" => "User Already Registered for this Event");
			}
		return $result;
	}

	public function iseventexist($master_user){
		$where = array('user_id' => $master_user['user_id'],'event_id' => $master_user['event_id']);
		$query =$this->db->where($where)->from("master_enroll")->count_all_results();
		return $query;
	}




}
