<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Habits_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}
	
	
	public function newhabits($master_habits,$id){
				
			$this->db->trans_begin();
			$isexists = $this->isquaxist($master_habits,$id);
			if($isexists==0){
				if($id ==0){
					$insert = $this->db->insert('master_habits',$master_habits);
					if($this->db->trans_status() === FALSE){
					    $this->db->trans_rollback();
					    $result = array("status" => false,"success" => true,"msg" => "Roll back Error");
					}
					else{
					    $this->db->trans_commit();
					    $result = array("status" => true,"success" => true,"msg" => "habits Successfully Added");
					}	
				}else{
					$this->db->where('id', $id);
					$this->db->update('master_habits', $master_habits);
					if($this->db->trans_status() === FALSE){
					    $this->db->trans_rollback();
					    $result = array("status" => false,"success" => true,"msg" => "Roll back Error");
					}
					else{
					    $this->db->trans_commit();
					    $result = array("status" => true,"success" => true,"msg" => "habits Successfully Updated");
					}	
				}
			}else{
				$result = array("status" => false,"success" => true,"msg" => "habits Already Exists");
			}
			

		return $result;
	}	

	public function gethabitsById($param1){
		$sql 	  = "SELECT * FROM master_habits WHERE id = ?";	
		$runquery = $this->db->query($sql,array($param1))->row();
		return $runquery;
	}
	public function gethabitslist(){
		$sql = "SELECT * FROM master_habits";	
		$runquery = $this->db->query($sql)->result_array();
		return $runquery;
	}

	public function isquaxist($master_habits,$id){
		
		$this->db->select('id');
		$this->db->from('master_habits');
		$this->db->where('habits',$master_habits['habits']);
		if($id>0){
			$this->db->where('id !=',$id);	
		}
		$query = $this->db->get()->num_rows();
		return $query;
	}
	

}