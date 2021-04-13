<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Allergy_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}
	
	
	public function newallergy($master_allergy,$id){
				
			$this->db->trans_begin();
			$isexists = $this->isquaxist($master_allergy,$id);
			if($isexists==0){
				if($id ==0){
					$insert = $this->db->insert('master_allergy',$master_allergy);
					if($this->db->trans_status() === FALSE){
					    $this->db->trans_rollback();
					    $result = array("status" => false,"success" => true,"msg" => "Roll back Error");
					}
					else{
					    $this->db->trans_commit();
					    $result = array("status" => true,"success" => true,"msg" => "allergy Successfully Added");
					}	
				}else{
					$this->db->where('id', $id);
					$this->db->update('master_allergy', $master_allergy);
					if($this->db->trans_status() === FALSE){
					    $this->db->trans_rollback();
					    $result = array("status" => false,"success" => true,"msg" => "Roll back Error");
					}
					else{
					    $this->db->trans_commit();
					    $result = array("status" => true,"success" => true,"msg" => "allergy Successfully Updated");
					}	
				}
			}else{
				$result = array("status" => false,"success" => true,"msg" => "allergy Already Exists");
			}
			

		return $result;
	}	

	public function getallergyById($param1){
		$sql 	  = "SELECT * FROM master_allergy WHERE id = ?";	
		$runquery = $this->db->query($sql,array($param1))->row();
		return $runquery;
	}
	public function getallergylist(){
		$sql = "SELECT * FROM master_allergy";	
		$runquery = $this->db->query($sql)->result_array();
		return $runquery;
	}

	public function isquaxist($master_allergy,$id){
		
		$this->db->select('id');
		$this->db->from('master_allergy');
		$this->db->where('allergy',$master_allergy['allergy']);
		if($id>0){
			$this->db->where('id !=',$id);	
		}
		$query = $this->db->get()->num_rows();
		return $query;
	}
	

}