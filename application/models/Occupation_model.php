<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Occupation_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}
	
	
	public function newoccupation($master_occupation,$id){
				
			$this->db->trans_begin();
			$isexists = $this->isquaxist($master_occupation,$id);
			if($isexists==0){
				if($id ==0){
					$insert = $this->db->insert('master_occupation',$master_occupation);
					if($this->db->trans_status() === FALSE){
					    $this->db->trans_rollback();
					    $result = array("status" => false,"success" => true,"msg" => "Roll back Error");
					}
					else{
					    $this->db->trans_commit();
					    $result = array("status" => true,"success" => true,"msg" => "occupation Successfully Added");
					}	
				}else{
					$this->db->where('id', $id);
					$this->db->update('master_occupation', $master_occupation);
					if($this->db->trans_status() === FALSE){
					    $this->db->trans_rollback();
					    $result = array("status" => false,"success" => true,"msg" => "Roll back Error");
					}
					else{
					    $this->db->trans_commit();
					    $result = array("status" => true,"success" => true,"msg" => "occupation Successfully Updated");
					}	
				}
			}else{
				$result = array("status" => false,"success" => true,"msg" => "occupation Already Exists");
			}
			

		return $result;
	}	

	public function getoccupationById($param1){
		$sql 	  = "SELECT * FROM master_occupation WHERE id = ?";	
		$runquery = $this->db->query($sql,array($param1))->row();
		return $runquery;
	}
	public function getoccupationlist(){
		$sql = "SELECT * FROM master_occupation";	
		$runquery = $this->db->query($sql)->result_array();
		return $runquery;
	}

	public function isquaxist($master_occupation,$id){
		
		$this->db->select('id');
		$this->db->from('master_occupation');
		$this->db->where('occupation',$master_occupation['occupation']);
		if($id>0){
			$this->db->where('id !=',$id);	
		}
		$query = $this->db->get()->num_rows();
		return $query;
	}
	

}