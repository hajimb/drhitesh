<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model {

	private $table;
	private $return;
	public function __construct(){
		parent::__construct();
		$this->table = 'master_user';
		$this->return = array();
	}
	

	public function getById(int $id){
		
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where('id', $id);
		
		$query = $this->db->get();
		$rows  = $query->num_rows();
		if($rows == 0){
			return $this->return;
		}else{
			return $query->row_array();
		}
	}
	

	public function payment(int $id){
		
		$this->db->select('*');
		$this->db->from('clinic_payment');
		$this->db->where('user_id', $id);
		$this->db->order_by('added_time', 'DESC');
		
		$query = $this->db->get();
		$rows  = $query->num_rows();
		if($rows == 0){
			return $this->return;
		}else{
			return $query->result_array();
		}
	}
	

}