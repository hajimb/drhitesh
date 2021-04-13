<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment_model extends CI_Model {

	private $table = 'clinic_appointment';

	public function create($data = [])
	{	 
		return $this->db->insert($this->table,$data);
	}
 
 	public function getslot($date,$currentday){
 		$Query1 = "SELECT * FROM clinic_timing WHERE day = '".$currentday."'";
 		$Query2 = "SELECT * FROM clinic_holiday WHERE h_date = '".$date."'";
 		$Query3 = "SELECT * FROM clinic_appointment WHERE `date` = '".$date."' AND confirm != 2";

 		$runQuery1 = $this->db->query($Query1);
 		$numrows1  = $runQuery1->num_rows();
 		$QueryArray1 = $runQuery1->result_array();
 		$runQuery2 = $this->db->query($Query2);
 		$numrows2  = $runQuery2->num_rows();
 		$QueryArray2 = $runQuery2->result_array();
 		$runQuery3 = $this->db->query($Query3);
		$numrows3  = $runQuery3->num_rows();
 		$QueryArray3 = $runQuery3->result_array();

		return array("timing" => $QueryArray1, "t_rows"=>$numrows1, "holiday" => $QueryArray2,"h_rows"=>$numrows2,"appointment" => $QueryArray3,"a_rows"=>$numrows3);

 	}
	
	public function read()
	{
		return $this->db->select("
				ca.*, 
				pm.first_name, 
				pm.patient_id as patientid,
				pm.emailaddress,  
				pm.country_code,  
				pm.mobile,  
				pm.middle_name,  
				pm.last_name,
				ms.status
			")
			->from('clinic_appointment ca,patient_master pm,master_appointmentstatus ms')
			->where('ca.patient_id = pm.id')
			->where('ca.confirm = ms.id')
			->order_by('ca.id','desc')
			->get()
			->result();
	} 
 /*
	public function read()
	{
		return $this->db->select("
				appointment.*, 
				user.firstname, 
				user.lastname,  
				department.name
			")
			->from($this->table)
			->join('user','user.user_id = appointment.doctor_id')
			->join('department','department.dprt_id = appointment.department_id')
			->order_by('appointment.id','desc')
			->get()
			->result();
	} */
 
	public function read_by_id($appointment_id = null)
	{ 
		return $this->db->select("
				appointment.*, 
				appointment.appointment_id, 
				appointment.serial_no, 
				appointment.problem, 
				appointment.date, 
				user.firstname, 
				user.lastname,  
				user.picture,  
				user.degree,  
				department.name as department,
				schedule.available_days,
				schedule.start_time,
				schedule.end_time,
				patient.firstname AS pfirstname,
				patient.lastname AS plastname,
				patient.date_of_birth,
				patient.sex,
				patient.mobile,
				patient.picture,
			")
			->from($this->table)
			->where('appointment.appointment_id',$appointment_id)
			->join('user','user.user_id = appointment.doctor_id','left')
			->join('department','department.dprt_id = appointment.department_id','left')
			->join('patient','patient.patient_id = appointment.patient_id')
			->join('schedule','schedule.schedule_id = appointment.schedule_id','left')
			->order_by('appointment.id','desc')
			->get()
			->row();
	}  
 
	public function bookAppointment($clinic_appointment, $userid){
		$this->db->insert($this->table, $clinic_appointment);
		$error = $this->db->error();
		if($error['code'] == 0){
			return true;
		}else{
			return false;
		}

	}

	public function addfollowup($master_followup){
		$this->db->insert('patient_followup', $master_followup);
		$error = $this->db->error();
		if($error['code'] == 0){
			return true;
		}else{
			return false;
		}

	}

	public function delete($appointment_id = null)
	{
		$this->db->where('appointment_id',$appointment_id)
			->delete($this->table);

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 
	public function ConfirmByID($id)
	{
		$this->db->where('id',$id)->update('clinic_appointment',array('confirm'=>2));
		// print $this->db->last_query();
		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 
	public function edit($data,$id)
	{
		$this->db->where('id',$id)->update('clinic_appointment',$data);
		// if ($this->db->affected_rows()) {
			return true;
		// } else {
			// return false;
		// }
	} 

	public function getPateintdetailByID($pid)
	{
		$query = "SELECT pm.`patient_id`,pm.first_name,pm.middle_name,pm.last_name,pm.dob,pm.marital_since,pm.country_code,pm.mobile,pm.emailaddress,mms.maritalstatus,mq.qualification,mo.occupation FROM patient_master pm LEFT JOIN master_maritalstatus mms ON mms.id = pm.maritalstatus LEFT JOIN master_qualification mq ON mq.id = pm.education LEFT JOIN master_occupation mo ON mo.id = pm.occupation WHERE pm.id ='".$pid."' ";
		$query = $this->db->query($query)->row();
			return $query;
	} 

	public function getAppByID($id)
	{
		$query = "SELECT * FROM clinic_appointment WHERE id ='".$id."'";
		$query = $this->db->query($query)->row();
			return $query;
	} 
 }
