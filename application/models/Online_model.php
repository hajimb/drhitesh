<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Online_model extends CI_Model {
	public function __construct(){
		parent::__construct();
	}

	public function create($patient_master,$patient_medical,$patient_spouse,$patient_family,$patient_lifestyle,$patient_travel,$patient_id){

			$this->db->trans_begin();
			// 1st update patient_master
			// $patient_master['token'] = '';
			$Query1 = $this->db->where('id', $patient_id)->update('patient_master',$patient_master);
			// 2nd Insert Into patient_medical
			$Query2 = $this->db->insert('patient_medical',$patient_medical);
			// 3rd Insert Into patient_spouse
			$Query3 = $this->db->insert('patient_spouse',$patient_spouse);
			// 4th Insert Into patient_spouse
			$Query4 = $this->db->insert_batch('patient_family',$patient_family);
			// 5th Insert Into patient_spouse
			$Query5 = $this->db->insert('patient_lifestyle',$patient_lifestyle);
			// 6th Insert Into patient_spouse
			$Query6 = $this->db->insert('patient_travel',$patient_travel);

			if($this->db->trans_status() === FALSE){
			    $this->db->trans_rollback();
			    $result = array("Response-Status" => false,"Response-Validate" => true,"Response-Message" => "Roll back Error");
			}
			else{
			    $this->db->trans_commit();
			    $result = array("Response-Status" => true,"Response-Validate" => true,"Response-Message" => "Success");
			}	
		return $result;
	}	

	private function isappointmentexists($stime,$etime,$date){
		$array = array('start_time' => $stime, 'end_time' => $etime, 'date' => $date);
		$this->db->from('clinic_appointment'); 
		$this->db->where($array); 
		$query = $this->db->get();
	    return $query->num_rows();
	}
}