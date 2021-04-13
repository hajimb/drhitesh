<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('getsymptoms')){
	 function getsymptoms($id=''){
		$ci=& get_instance();
	    $ci->load->database();
		$return = array();
		$ci->db->select("ms.id, ms.symptoms");
		$ci->db->from("master_symptoms ms");
		$ci->db->where("ms.deleted", 0);
		if($id){

			$ci->db->where("id NOT IN (SELECT symptom_id FROM patient_healing_master WHERE symptom_id = ms.id AND patient_id = $id AND delete_flag=0)");
		}
		
		$query = $ci->db->get();
		$query = $query->result_array();
		if( is_array( $query ) && count( $query ) > 0 ){
			$return[''] = $ci->lang->line('select_symptoms');
			foreach($query as $row){
				$return[$row['id']] = $row['symptoms'];
			}
		}
		return $return;
	}
}
if (!function_exists('getmaritalstatus')){
	 function getmaritalstatus($id='',$format=''){
		$ci=& get_instance();
	    $ci->load->database();
		$return = array();
		$query = $ci->db->query("SELECT * FROM master_maritalstatus");
		$query = $query->result_array();
		if( is_array( $query ) && count( $query ) > 0 ){
			$return[''] = $ci->lang->line('select_state');
			foreach($query as $row){
				$return[$row['id']] = $row['maritalstatus'];
			}
		}
		return $return;
	}
}

if (!function_exists('getmaster')){
	 function getmaster($id='',$format='',$table='',$select='',$byidortext=false){
		$ci=& get_instance();
	    $ci->load->database();
		$return 	= array();
		$where		= '';
		if($id > 0){$where = 'WHERE id = "'.$id.'"';}
		$tablename 	= 'master_'.$table;
		$query 		= $ci->db->query("SELECT * FROM $tablename $where");
		$query 		= $query->result_array();
		if($format == 'html'){
			// echo 'byidortext '.$byidortext;
			if( is_array( $query ) && count( $query ) > 0 ){
				if($select != ''){
					$return[''] = 'Select '.$select;
				}
				foreach($query as $row){
					if($byidortext==false){
						$return[$row['id']] = $row[$table];
					}else{
						$return[$row[$table]] = $row[$table];
					}
				}
			}
		}else{
			foreach($query as $row){
				$return['data'] .= $row[$table];
			}
		}
		return $return;
	}
}


