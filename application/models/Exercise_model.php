<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Exercise_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}
	
	
	public function newexercise($master_exercise,$id){
				
			$this->db->trans_begin();
			$isexists = $this->isquaxist($master_exercise,$id);
			if($isexists==0){
				if($id ==0){
					$insert = $this->db->insert('master_exercise',$master_exercise);
					if($this->db->trans_status() === FALSE){
					    $this->db->trans_rollback();
					    $result = array("status" => false,"success" => true,"msg" => "Roll back Error");
					}
					else{
					    $this->db->trans_commit();
					    $result = array("status" => true,"success" => true,"msg" => "exercise Successfully Added");
					}	
				}else{
					$this->db->where('id', $id);
					$this->db->update('master_exercise', $master_exercise);
					if($this->db->trans_status() === FALSE){
					    $this->db->trans_rollback();
					    $result = array("status" => false,"success" => true,"msg" => "Roll back Error");
					}
					else{
					    $this->db->trans_commit();
					    $result = array("status" => true,"success" => true,"msg" => "exercise Successfully Updated");
					}	
				}
			}else{
				$result = array("status" => false,"success" => true,"msg" => "exercise Already Exists");
			}
			

		return $result;
	}	

	public function getexerciseById($param1){
		$sql 	  = "SELECT * FROM master_exercise WHERE id = ?";	
		$runquery = $this->db->query($sql,array($param1))->row();
		return $runquery;
	}
	public function getexerciselist(){
		$sql = "SELECT * FROM master_exercise";	
		$runquery = $this->db->query($sql)->result_array();
		return $runquery;
	}

	public function isquaxist($master_exercise,$id){
		
		$this->db->select('id');
		$this->db->from('master_exercise');
		$this->db->where('exercise',$master_exercise['exercise']);
		if($id>0){
			$this->db->where('id !=',$id);	
		}
		$query = $this->db->get()->num_rows();
		return $query;
	}
	

}