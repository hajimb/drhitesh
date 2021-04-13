<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Consult_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}
	
	public function getConsultById($param1){
		$sql = "SELECT mu.name,mu.age,mu.marital_status,mq.question,mq.id,mq.ispublic ,mq.answer FROM master_user mu, master_question mq WHERE mq.user_id = mu.id AND mq.id = ?";	
		$runquery = $this->db->query($sql,array($param1))->row();
		return $runquery;
	}
	public function getconsultlist($param1){

		$this->db->select('ca.date,ca.start_time, ast.status as confirm,ca.end_time,ca.consulttype,ca.consultid,ca.onlineoffline,ca.date,ca.added_time,ca.id,ca.patient_id, pm.first_name,pm.middle_name,pm.last_name ,pm.mobile ,pm.emailaddress');
		$this->db->from('clinic_appointment ca');
		$this->db->join('patient_master pm','ca.patient_id = pm.id ','left');
		$this->db->join('master_appointmentstatus ast','ca.confirm = ast.id ','left');
		$this->db->where('ca.onlineoffline',$param1);
		$this->db->order_by('ca.date, ca.start_time','DESC');
		$runquery = $this->db->get()->result_array();
		return $runquery;
	}
	public function getCountry($page){
        $offset = 10*$page;
        $limit = 10;
        $sql = "select * from countries limit $offset ,$limit";
        $result = $this->db->query($sql)->result();
        return $result;
    }
    public function getconsultlistdashboard($param1){
    	$array = array(1,4);
		// $sql = "SELECT pm.first_name,pm.middle_name,pm.last_name ,pm.mobile ,pm.emailaddress,ca.date,ca.start_time,ast.status as confirm,ca.end_time,ca.consulttype,ca.consultid,ca.onlineoffline,ca.date,ca.added_time,ca.id,ca.patient_id from clinic_appointment ca, patient_master pm ,master_appointmentstatus ast WHERE ca.patient_id = pm.id AND ca.confirm IN (SELECT id from master_appointmentstatus where status != 'Confirm' AND status != 'Cancel') AND ca.date >= '".date('Y-m-d')."' AND ca.confirm = ast.id order by ca.date, ca.start_time";

		$this->db->select('ca.date, ca.start_time, ast.status as confirm, ca.end_time, ca.consulttype, ca.consultid, ca.onlineoffline, ca.added_time, ca.id, ca.patient_id, pm.first_name, pm.middle_name, pm.last_name, pm.mobile, pm.emailaddress');
		$this->db->from('clinic_appointment ca');
		$this->db->join('patient_master pm', 'ca.patient_id = pm.id', 'left');
		$this->db->join('master_appointmentstatus ast', 'ca.confirm = ast.id', 'left');
		$this->db->where_in("ca.confirm", $array);
		$this->db->order_by('ca.date, ca.start_time', 'DESC');

		// $sql = "SELECT pm.first_name,pm.middle_name,pm.last_name ,pm.mobile ,pm.emailaddress,ca.date,ca.start_time,ast.status as confirm,ca.end_time,ca.consulttype,ca.consultid,ca.onlineoffline,ca.date,ca.added_time,ca.id,ca.patient_id from clinic_appointment ca, patient_master pm ,master_appointmentstatus ast WHERE ca.patient_id = pm.id AND ca.confirm IN (SELECT id from master_appointmentstatus where status != 'Confirm' AND status != 'Cancel') AND ca.confirm = ast.id order by ca.date, ca.start_time";
		$runquery = $this->db->get()->result_array();
		 // print $this->db->last_query();
		return $runquery;
	}

	public function consultlistCalendar($start, $end){
    	$array = array(1,4);
		$this->db->select('ca.date, ca.start_time, ast.status as confirm, ca.end_time, ca.consulttype, ca.consultid, ca.onlineoffline,  ca.added_time, ca.id, ca.patient_id, pm.first_name, pm.middle_name, pm.last_name, pm.mobile, pm.emailaddress');
		$this->db->from('clinic_appointment ca');
		$this->db->join('patient_master pm','ca.patient_id = pm.id ','left'); 
		$this->db->join('master_appointmentstatus ast','ca.confirm = ast.id ','left');
		$this->db->where_in("ca.confirm", $array);
		$this->db->where("ca.date BETWEEN '{$start}' AND '{$end}'");
		$runquery = $this->db->get();
		return $runquery;
	}

}