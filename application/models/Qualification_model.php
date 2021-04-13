<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Qualification_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}
	
	
	public function newqualification($master_qualification,$id){
				
			$this->db->trans_begin();
			$isexists = $this->isquaxist($master_qualification,$id);
			if($isexists==0){
				if($id ==0){
					$insert = $this->db->insert('master_qualification',$master_qualification);
					if($this->db->trans_status() === FALSE){
					    $this->db->trans_rollback();
					    $result = array("status" => false,"success" => true,"msg" => "Roll back Error");
					}
					else{
					    $this->db->trans_commit();
					    $result = array("status" => true,"success" => true,"msg" => "Qualification Successfully Added");
					}	
				}else{
					$this->db->where('id', $id);
					$this->db->update('master_qualification', $master_qualification);
					if($this->db->trans_status() === FALSE){
					    $this->db->trans_rollback();
					    $result = array("status" => false,"success" => true,"msg" => "Roll back Error");
					}
					else{
					    $this->db->trans_commit();
					    $result = array("status" => true,"success" => true,"msg" => "Qualification Successfully Updated");
					}	
				}
			}else{
				$result = array("status" => false,"success" => true,"msg" => "Qualification Already Exists");
			}
			

		return $result;
	}	

	public function getqualificationById($param1){
		$sql 	  = "SELECT * FROM master_qualification WHERE id = ?";	
		$runquery = $this->db->query($sql,array($param1))->row();
		return $runquery;
	}
	public function getqualificationlist(){
		$sql = "SELECT * FROM master_qualification";	
		$runquery = $this->db->query($sql)->result_array();
		return $runquery;
	}

	public function isquaxist($master_qualification,$id){
		
		$this->db->select('id');
		$this->db->from('master_qualification');
		$this->db->where('qualification',$master_qualification['qualification']);
		if($id>0){
			$this->db->where('id !=',$id);	
		}
		$query = $this->db->get()->num_rows();
		return $query;
	}
	

}