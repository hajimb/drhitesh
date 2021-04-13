<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Detail_model extends CI_Model {
    
    public function __construct(){
        parent::__construct();
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->load->library('encryption');
    }
	
	public function getcontact(){
		$query   = "SELECT * FROM contact_details WHERE delete_flag = 0";
		writeToFile($query,"Get Contact Query ");
		$runquery = $this->db->query($query)->result_array();
		return $runquery;
    }
		
	public function getevents(){
		$query   = "SELECT * FROM event_details WHERE delete_flag = 0";
		writeToFile($query,"Get Events Query ");
		$runquery = $this->db->query($query)->result_array();
		return $runquery;
    }		

	public function gettestimonials(){
		$query   = "SELECT * FROM master_testimonials WHERE active = 1  order by id DESC limit 0,10";
		writeToFile($query,"Get Testimonials Query ");
		$runquery = $this->db->query($query)->result_array();
		return $runquery;
    }

	public function getbanner(){
		$query   = "SELECT * FROM master_banner WHERE delete_flag = 0";
		writeToFile($query,"Get Banner Query ");
		$runquery = $this->db->query($query)->result_array();
		return $runquery;
    }
	
	public function getmarital_status(){
		$query   = "SELECT id, maritalstatus FROM master_maritalstatus WHERE deleted = 0";
		writeToFile($query,"Get Banner Query ");
		$runquery = $this->db->query($query)->result_array();
		return $runquery;
    }	

	public function getoffers(){
		$query   = "SELECT * FROM coupon_code WHERE start_date <= now() AND (expiry_date is NULL OR expiry_date >= now())";
		writeToFile($query,"Get Banner Query ");
		$runquery = $this->db->query($query)->result_array();
		return $runquery;
    }
	
	public function getquestions($q_type,$user_id){
		$filter = '';
		if($q_type == 1 && $user_id != 0){
			$filter = " AND user_id = ".$user_id." AND ispublic = 'Private'";
		}
		$query   = "SELECT * FROM master_question WHERE approved = 1 ".$filter;
		writeToFile($query,"Get Questions Query ");
		$runquery = $this->db->query($query)->result_array();
		return $runquery;
    }
	
}
?>