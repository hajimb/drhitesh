<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Disease_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}
	
	
	public function newdisease($master_disease,$id){
				
			$this->db->trans_begin();
			$isexists = $this->isquaxist($master_disease,$id);
			if($isexists==0){
				if($id ==0){
					$insert = $this->db->insert('master_disease',$master_disease);
					if($this->db->trans_status() === FALSE){
					    $this->db->trans_rollback();
					    $result = array("status" => false,"success" => true,"msg" => "Roll back Error");
					}
					else{
					    $this->db->trans_commit();
					    $result = array("status" => true,"success" => true,"msg" => "disease Successfully Added");
					}	
				}else{
					$this->db->where('id', $id);
					$this->db->update('master_disease', $master_disease);
					if($this->db->trans_status() === FALSE){
					    $this->db->trans_rollback();
					    $result = array("status" => false,"success" => true,"msg" => "Roll back Error");
					}
					else{
					    $this->db->trans_commit();
					    $result = array("status" => true,"success" => true,"msg" => "disease Successfully Updated");
					}	
				}
			}else{
				$result = array("status" => false,"success" => true,"msg" => "disease Already Exists");
			}
			

		return $result;
	}	

	public function getdiseaseById($param1){
		$sql 	  = "SELECT * FROM master_disease WHERE id = ?";	
		$runquery = $this->db->query($sql,array($param1))->row();
		return $runquery;
	}
	public function getdiseaselist(){
		$sql = "SELECT * FROM master_disease";	
		$runquery = $this->db->query($sql)->result_array();
		return $runquery;
	}

	public function isquaxist($master_disease,$id){
		
		$this->db->select('id');
		$this->db->from('master_disease');
		$this->db->where('disease',$master_disease['disease']);
		if($id>0){
			$this->db->where('id !=',$id);	
		}
		$query = $this->db->get()->num_rows();
		return $query;
	}
	

}