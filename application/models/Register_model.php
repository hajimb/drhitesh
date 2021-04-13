<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register_model extends CI_Model {

	private $table;
	public function __construct(){
		parent::__construct();
		$this->table = 'master_user';
	}


	public function newuser($master_user, $id){

			$this->db->trans_begin();
			$isuserexist = $this->isuserexist($master_user, $id);
			if($isuserexist == 0){
				if($id == 0){
					$msg 	 = 'Registered';
					$insert	 = $this->db->insert($this->table, $master_user);
					$user_id = $this->db->insert_id();
				}else{
					$msg = 'Profile Updated';
					$this->db->where('id', $id);
					$this->db->update($this->table, $master_user);
					$user_id = $id;
				}
				$error = $this->db->error();
				if($error['code'] == 0){

					if ($this->db->trans_status() === FALSE){
					    $this->db->trans_rollback();
					    $result = array("status" => false,"success" => true,"msg" => "Roll back Error","user_id"=>0);
					}
					else{
					    $this->db->trans_commit();
					    $result = array("status" => true,"success" => true,"msg" => "Successfully ".$msg,"user_id"=>$user_id);
					}
				}else{
					$result = array("status" => false,"success" => true,"msg" => "Error While  ".$msg,"user_id"=>0);
				}
			}else{
				$result = array("status" => false,"success" => true,"msg" => "User Already Exists","user_id"=>0);
			}
		return $result;
	}

	public function isuserexist($master_user, $id){
		if($id == 0){
			$this->db->select('*');
			$this->db->from($this->table);
			$this->db->group_start();
			$this->db->where("contact", $master_user['contact']);
			$this->db->or_where("email",$master_user['email']);
			$this->db->group_end();
			$query = $this->db->get();
		}else{
			$this->db->select('*');
			$this->db->from($this->table);
			$this->db->group_start();
			$this->db->where("contact", $master_user['contact']);
			$this->db->or_where("email",$master_user['email']);
			$this->db->group_end();
			$this->db->where("id !=".$id);
			$query = $this->db->get();
		}
		return $query->num_rows();
	}

	


}
