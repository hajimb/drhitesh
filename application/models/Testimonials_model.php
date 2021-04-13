<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Testimonials_model extends CI_Model {
	private $table;
	private $table1;
	public function __construct(){
		parent::__construct();
		$this->table  = 'master_testimonials';
		$this->table1 = 'master_testimonials_handwritten';
	}
	
	public function gettestimonials($param1=''){
		$sql 	  = "SELECT * FROM ".$this->table." WHERE active = 1 ";
		$runquery = $this->db->query($sql)->result_array();
		return $runquery;
	}	
	public function gethandtestimonials($param1=''){
		$sql 	  = "SELECT * FROM ".$this->table1 ." WHERE active = 1 ";
		$runquery = $this->db->query($sql)->result_array();
		return $runquery;
	}

	public function addnew($master,$id){
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
				    $result = array("status" => true,"success" => true,"msg" => "Testimonial Successfully Added");
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
				    $result = array("status" => true,"success" => true,"msg" => "Testimonial Successfully Updated");
				}	
			}
		}else{
			$result = array("status" => false,"success" => true,"msg" => "Testimonial Already Exists");
		}
		return $result;
	}	

	public function getById($param1){
		$sql 	  = "SELECT * FROM $this->table WHERE id = ?";	
		$runquery = $this->db->query($sql,array($param1))->row();
		return $runquery;
	}

	public function isexist($master,$id){
		$this->db->select('id');
		$this->db->from($this->table);
		$this->db->where('name',$master['name']);
		$this->db->where('testimonial',$master['testimonial']);
		if($id>0){
			$this->db->where('id !=',$id);	
		}
		$query = $this->db->get()->num_rows();
		return $query;
	}


	public function gethandwrittenlist(){
		$sql 	  = "SELECT * FROM ".$this->table1;
		$runquery = $this->db->query($sql)->result_array();
		return $runquery;
	}

	public function addnewhandwritten($master_data, $id){
        $this->db->trans_begin();
        if($id == 0){
            $this->db->insert($this->table1, $master_data);
            $id = $this->db->insert_id();
            $val = 'Hand Written Testimonial Successfully Added';
        }else{
            $this->db->where('id', $id);
            $this->db->update($this->table1, $master_data);
            $val = 'Hand Written Testimonial Successfully Updated';
        }

        if ($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
            $result = array('msg' => ' Rollback Error!','status' => false, 'success' => true,"id" => $id);
        }else{
            $this->db->trans_commit();
            $result = array('msg' => $val ,'status' => true, 'success' => true,"id" => $id);
        }
        return $result;
    }

	public function gethandwrittenById($param1){
		$sql 	  = "SELECT * FROM $this->table1 WHERE id = ?";	
		$runquery = $this->db->query($sql,array($param1))->row();
		return $runquery;
	}
}