<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Marital_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}
	
	
	public function newmarital($master_marital,$id){
				
			$this->db->trans_begin();
			$isexists = $this->isquaxist($master_marital,$id);
			if($isexists==0){
				if($id ==0){
					$insert = $this->db->insert('master_maritalstatus',$master_marital);
					if($this->db->trans_status() === FALSE){
					    $this->db->trans_rollback();
					    $result = array("status" => false,"success" => true,"msg" => "Roll back Error");
					}
					else{
					    $this->db->trans_commit();
					    $result = array("status" => true,"success" => true,"msg" => "marital Successfully Added");
					}	
				}else{
					$this->db->where('id', $id);
					$this->db->update('master_maritalstatus', $master_marital);
					if($this->db->trans_status() === FALSE){
					    $this->db->trans_rollback();
					    $result = array("status" => false,"success" => true,"msg" => "Roll back Error");
					}
					else{
					    $this->db->trans_commit();
					    $result = array("status" => true,"success" => true,"msg" => "marital Successfully Updated");
					}	
				}
			}else{
				$result = array("status" => false,"success" => true,"msg" => "marital Already Exists");
			}
			

		return $result;
	}	

	public function getmaritalById($param1){
		$sql 	  = "SELECT * FROM master_maritalstatus WHERE id = ?";	
		$runquery = $this->db->query($sql,array($param1))->row();
		return $runquery;
	}
	public function getmaritallist(){
		$sql = "SELECT * FROM master_maritalstatus";	
		$runquery = $this->db->query($sql)->result_array();
		return $runquery;
	}

	public function isquaxist($master_marital,$id){
		
		$this->db->select('id');
		$this->db->from('master_maritalstatus');
		$this->db->where('maritalstatus',$master_marital['maritalstatus']);
		if($id>0){
			$this->db->where('id !=',$id);	
		}
		$query = $this->db->get()->num_rows();
		return $query;
	}
	

}