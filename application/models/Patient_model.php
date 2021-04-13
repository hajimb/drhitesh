<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_model extends CI_Model {

	private $table = "patient_master";
 	public function adddoc($data){
		$this->db->insert('patient_file',$data);
		$result = $this->db->error();
		return $result;
	}
	public function update($data,$where,$count,$patient_id,$table,$prinquery=0){
		if($count==0){
			$data['patient_id'] = $patient_id;
			$this->db->insert($table,$data);
		}else{
			$this->db->where($where)->update($table,$data);
		}	 
		$result = $this->db->error();
		if($prinquery==1){
			print $this->db->last_query();
			return false;
		}else{

			return $result;
		}
	}

	public function updatebybatch($table,$data,$where){	 
		$this->db->update_batch($table,$data,$where); 
		$result = $this->db->error();
		return $result;
	}	

	public function create($data = []){	 
		return $this->db->insert($this->table, $data);
	}
 
	public function filedetail(int $patient_id){
		return $this->db->select("*")
			->from('patient_file')
			->where('patient_id', $patient_id)
			->order_by('added_date','desc')
			->get()
			->result_array();
	}

	public function read(){
		return $this->db->select("*")
			->from($this->table)
			->order_by('id','desc')
			->get()
			->result();
	} 

 	public function patient_medical_by_id($id = null){
 		//SELECT pm.id,pm.patient_id,pm.medical_history_other,pm.current_medication,pm.dr_flag,pm.dr_feedback,pm.medical_history, pm.habits,pm.allergy FROM patient_medical pm WHERE pm.patient_id='1'
 		$query = "SELECT pm.id,pm.patient_id,pm.medical_history_other,pm.current_medication,pm.dr_flag,pm.dr_feedback,pm.medical_history, pm.habits,pm.allergy	FROM patient_medical pm WHERE pm.patient_id='".$id."'";
 		return $this->db->query($query)->row();
 	}

 	public function patient_spouse_by_id($id = null){
 		$query = "SELECT ps.id,ps.spouse_name,ps.spouse_education,ps.spouse_occupation,ps.spouse_age,ps.spouse_illness,ps.dr_feedback,ps.dr_flag, mo.occupation, mq.qualification FROM patient_spouse ps LEFT JOIN master_occupation mo ON ps.spouse_occupation = mo.id LEFT JOIN master_qualification mq ON ps.spouse_education = mq.id WHERE ps.patient_id ='".$id."'";
 		return $this->db->query($query)->row();
 	}

 	public function patient_family_by_id($id = null){
 		$query = "select u.age ,u.illness,u.id,( CASE WHEN u.relation=3 THEN 'Son' WHEN u.relation=4 THEN 'Daughter' WHEN u.relation=1 THEN 'Father' WHEN u.relation=2 THEN 'Mother' WHEN u.relation=5 THEN 'Brother' WHEN u.relation=6 THEN 'Sister' END) AS relation from patient_family u WHERE u.patient_id ='".$id."' ORDER BY u.relation";
 		return $this->db->query($query)->result_array();
 	}

 	public function patient_lifestyle_by_id($id = null){
 		$query = "SELECT * FROM patient_lifestyle  WHERE patient_id ='".$id."'";
 		return $this->db->query($query)->row();
 	}

 	public function patient_travel_by_id($id = null){
 		$query = "SELECT pt.*, (SELECT GROUP_CONCAT(me.exercise) FROM master_exercise me WHERE FIND_IN_SET(me.id,pt.exercise)) as exercisede FROM patient_travel pt WHERE pt.patient_id='".$id."'";
 		return $this->db->query($query)->row();
 	}

 	

 	public function patient_followp_by_id($id = null){
		return $this->db->query("SELECT mf.id as fid,mt.tag FROM master_followup mf, master_tag mt WHERE mf.patient_id = '".$id."' AND mf.tag_id = mt.id")->result();
	}

	public function detail_by_id($id = null, $filterby = 'id'){
		return $this->db->select("pm.* ,mo.occupation as occu, mq.qualification as qualification, mm.maritalstatus as mstatus")
			->from('patient_master pm')
			->join('master_maritalstatus mm' ,'pm.maritalstatus = mm.id','left')
			->join('master_qualification mq' ,'pm.education = mq.id','left')
			->join('master_occupation mo' ,'pm.occupation = mo.id','left')
			->where('pm.'.$filterby, $id)
			->get()
			->row();
	}

	public function patient_consultation($id){
		return $this->db->select("app.id, app.onlineoffline, app.app_type, DATE_FORMAT(app.date, '".DATEFORMAT."') AS date, DATE_FORMAT(app.start_time, '".TIMEFORMAT."') AS start_time, DATE_FORMAT(app.end_time ,'".TIMEFORMAT."') AS end_time, app.consulttype")
			->from('clinic_appointment app')
			->where('app.confirm',2)
			->where('app.user_id',$id)
			->order_by('app.date', 'DESC')
			->get()
			->result_array();
	}


	public function patientDetail($userid){
		return $this->db->select("pm.* ,mo.occupation as occu,mq.qualification as qualification, mm.maritalstatus as mstatus")
			->from('patient_master pm')
			->join('master_maritalstatus mm' ,'pm.maritalstatus = mm.id','left')
			->join('master_qualification mq' ,'pm.education = mq.id','left')
			->join('master_occupation mo' ,'pm.occupation = mo.id','left')
			->where('pm.'.$filterby, $id)
			->get()
			->row();
	}

	public function get_medical($id = null){
		return $this->db->select("pm.* ,mo.occupation as occu,mq.qualification as qualification, mm.maritalstatus as mstatus")
			->from('patient_master pm,master_occupation mo,master_qualification mq,master_maritalstatus mm')
			->where('pm.id',$id)
			->where('pm.education = mq.id')
			->where('pm.occupation = mo.id')
			->where('pm.maritalstatus = mm.id')
			->get()
			->row();
	}

	public function read_by_id($id = null){
		return $this->db->select("*")
			->from($this->table)
			->where('id',$id)
			->get()
			->row();
	} 
 
	public function addflag($insdata,$id,$table){
		if($table != 'patient_treatment'){
			$this->db->where('id',$id)->update($table,$insdata); 
			return $this->db->affected_rows();
		}else{
			$this->db->insert($table,$insdata); 
			return $this->db->affected_rows();
		}
	} 


	public function addtag($insdata){
		$this->db->insert_batch('master_followup',$insdata); 
		return $this->db->affected_rows();
	} 
 
	public function delete($id = null){
		$this->db->where('id',$id)
			->delete($this->table);

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 
  
}
