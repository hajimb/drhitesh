<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Referby_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}
	
	
	public function newreferby($master_referby,$id){
				
			$this->db->trans_begin();
			$isexists = $this->isquaxist($master_referby,$id);
			if($isexists==0){
				if($id ==0){
					$insert = $this->db->insert('master_referby',$master_referby);
					if($this->db->trans_status() === FALSE){
					    $this->db->trans_rollback();
					    $result = array("status" => false,"success" => true,"msg" => "Roll back Error");
					}
					else{
					    $this->db->trans_commit();
					    $result = array("status" => true,"success" => true,"msg" => "referby Successfully Added");
					}	
				}else{
					$this->db->where('id', $id);
					$this->db->update('master_referby', $master_referby);
					if($this->db->trans_status() === FALSE){
					    $this->db->trans_rollback();
					    $result = array("status" => false,"success" => true,"msg" => "Roll back Error");
					}
					else{
					    $this->db->trans_commit();
					    $result = array("status" => true,"success" => true,"msg" => "referby Successfully Updated");
					}	
				}
			}else{
				$result = array("status" => false,"success" => true,"msg" => "referby Already Exists");
			}
			

		return $result;
	}	

	public function getreferbyById($param1){
		$sql 	  = "SELECT * FROM master_referby WHERE id = ?";	
		$runquery = $this->db->query($sql,array($param1))->row();
		return $runquery;
	}
	public function getreferbylist(){
		$sql = "SELECT * FROM master_referby";	
		$runquery = $this->db->query($sql)->result_array();
		return $runquery;
	}

	public function isquaxist($master_referby,$id){
		
		$this->db->select('id');
		$this->db->from('master_referby');
		$this->db->where('referby',$master_referby['referby']);
		if($id>0){
			$this->db->where('id !=',$id);	
		}
		$query = $this->db->get()->num_rows();
		return $query;
	}
	

}