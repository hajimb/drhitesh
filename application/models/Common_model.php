<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends CI_Model {

	private $table;
 	
	public function delete($id = null, $table){
		
		$this->table = 'master_'.$table;
		$path = '';
		// echo $this->table = 'master_'.$table;exit;
		if($this->table == 'master_casestudy' || $this->table == 'master_testimonials_handwritten'){
			$this->db->select('image')->from($this->table)->where('id',$id);

			$query = $this->db->get();
			$rows  = $query->num_rows();
			if($rows==0){
				$result = array("status" => false,"success" => true,"msg" => "Record Not Found");
			}
			else{
				$row   = $query->row();
				if($this->table == 'master_casestudy'){
					$path = 'case-study';
				}else if($this->table == 'master_testimonials_handwritten'){
					$path = 'testimonial';
				}
				if (FCPATH.'uploads/'.$path.'/'.$row->image) {
					// echo 'yes';
	                unlink('uploads/'.$path.'/'.$row->image);
	            }else{
	            	// echo 'no';
	            }
				$this->db->where('id',$id)->delete($this->table);
			}
		}else{
			$this->db->where('id',$id)->delete($this->table);
		}
		$error = $this->db->error();
		// print_r($error);exit;
		if ($error['code'] == 0) {
			$result = array("status" => true, "success" => true,"msg" => "Record Successfully Deleted");			
		} else {
			$result = array("status" => false,"success" => true,"msg" => "Error While Deleting Record");
		}
		return $result;
	} 
}