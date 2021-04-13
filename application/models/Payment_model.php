<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Payment_model extends CI_Model {
	public function __construct(){
		parent::__construct();
	}

	public function makepayment($master_patient1, $master_payment, $clinic_payment, $clinic_appointment, $master_user, $userid){
		$this->db->trans_begin();
		$appointment_id = 0;
        // Check userid in pateint master
		$flag = false;
		$this->db->select('id,is_lock')->from('patient_master')->where('user_id',$userid);
		$Query = $this->db->get();
		// print $this->db->last_query();
		$rows = $Query->num_rows();
		$pid2 = 0;
		if($rows == 0){
			$firstCharacter  = substr($this->session->userdata('first_name'), 0, 1);
			$secondCharacter = substr($this->session->userdata('last_name'), 0, 1);
			$insert               = $this->db->insert('patient_master', $master_patient1);

	        $pid2                 = $this->db->insert_id();
	        $pad                  = str_pad($pid2, 5, "0", STR_PAD_LEFT);
	        $user_name            = $secondCharacter.$firstCharacter.$pad;
	        $updata['patient_id'] = $user_name;
	        $this->db->where('id', $pid2);
	        $this->db->update('patient_master', $updata);

	        $this->db->where('id', $master_patient1['user_id']);
	        $this->db->set('patient_id', $pid2);
	        $this->db->update('master_user');


	        $flag = true;
		}else{
			$row = $Query->row();
			$islock = $row->is_lock;
			if($islock==0){
				$flag = true;
			}
			$pid2 = $row->id;
		}

        
        $this->db->where('id',$userid);
        $this->db->update('master_user',$master_user);
		

		$clinic_appointment['patient_id'] = $pid2;
		$clinic_payment['patient_id'] 	  = $pid2;
		$isexists = $this->isappointmentexists($clinic_appointment['start_time'],$clinic_appointment['end_time'],$clinic_appointment['date']);
		if($isexists==0){
			$insert1   = $this->db->insert('master_payment',$master_payment);
			

			$insert2 = $this->db->insert('clinic_appointment',$clinic_appointment);
			$appointment_id = $this->db->insert_id();
			$clinic_payment['appointment_id'] = $appointment_id;
			$insert3 = $this->db->insert('clinic_payment',$clinic_payment);
			if($this->db->trans_status() === FALSE){
			    $this->db->trans_rollback();
			    $result = array("status" => false,"success" => true,"msg" => "Roll back Error", 'flag' => $flag);
			}
			else{
			    $this->db->trans_commit();
			    $result = array("status" => true,"success" => true,"msg" => "Appointment Request", 'flag' => $flag);
			}	
			
		}else{
			$result = array("status" => false,"success" => true,"msg" => "Appointment Already Exists", 'flag' => $flag);
		}
		return $result;
	}	


	public function makeQuestionpayment($master_payment,$master_question){
		$this->db->trans_begin();
		$insert1 = $this->db->insert('master_payment', $master_payment);
		$pid     = $this->db->insert_id();
		$master_question['pid'] = $pid;
		$insert2 = $this->db->insert('master_question', $master_question);
		if($this->db->trans_status() === FALSE){
		    $this->db->trans_rollback();
		    $result = array("status" => false,"success" => true,"msg" => "Roll back Error");
		}
		else{
		    $this->db->trans_commit();
		    $result = array("status" => true,"success" => true,"msg" => "Success");
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