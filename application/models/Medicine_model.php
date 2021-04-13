<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Medicine_model extends CI_Model {
	private $table;
	public function __construct(){
		parent::__construct();
		$this->table = 'master_medicine';
	}

	public function create($master,$id){
		$this->db->trans_begin();
		$isexists = $this->isexist($master,$id);
		if($isexists==0){
			if($id ==0){
				$insert = $this->db->insert($this->table,$master);
				if($this->db->trans_status() === FALSE){
				    $this->db->trans_rollback();
				    $result = array("status" => false,"success" => true,"msg" => "Roll back Error");
				}
				else{
				    $this->db->trans_commit();
				    $result = array("status" => true,"success" => true,"msg" => "Medicine Successfully Added");
				}	
			}else{
				$this->db->where('id', $id);
				$this->db->update($this->table, $master);
				if($this->db->trans_status() === FALSE){
				    $this->db->trans_rollback();
				    $result = array("status" => false,"success" => true,"msg" => "Roll back Error");
				}
				else{
				    $this->db->trans_commit();
				    $result = array("status" => true,"success" => true,"msg" => "Medicine Successfully Updated");
				}	
			}
		}else{
			$result = array("status" => false,"success" => true,"msg" => "Medicine Already Exists");
		}
		return $result;
	}	


	public function getById($param1){
		$sql 	  = "SELECT * FROM $this->table WHERE id = ?";	
		$runquery = $this->db->query($sql,array($param1))->row();
		return $runquery;
	}

	public function getlist(){
		$sql = "SELECT * FROM $this->table";	
		$runquery = $this->db->query($sql)->result_array();
		return $runquery;
	}

	public function isexist($master,$id){
		$this->db->select('id');
		$this->db->from($this->table);
		$this->db->where('medicine',$master['medicine']);
		if($id>0){
			$this->db->where('id !=',$id);	
		}
		$query = $this->db->get()->num_rows();
		return $query;
	}
}