<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('getuseridBypatient')) {
    function getuseridBypatient($id){
        $ci=& get_instance();
        $ci->load->database();
        $return= array();
        $query = $ci->db->query("SELECT user_id FROM patient_master WHERE id = ".$id);
        $data = $query->num_rows();
       	if($data > 0){
       		$row = $query->row();
       		return $row->user_id;
       	}
        return 0;
    }
}
if (!function_exists('getstatus')) {
    function getstatus($param1=''){
        $ci=& get_instance();
        $ci->load->database();
        $return= array();
        $query = $ci->db->query("SELECT id,status FROM master_appointmentstatus");
        $query = $query->result_array();
        if (is_array($query) && count($query) > 0) {
            $return[''] = 'Select Status';
            foreach ($query as $row) {
                $return[$row['id']] = $row['status'];
            }
        }
        return $return;
    }
}

if (!function_exists('getcategory')) {
    function getcategory($param1=''){
        $ci=& get_instance();
        $ci->load->database();
        $return= array();
        $query = $ci->db->query("SELECT id,category FROM master_category");
        $query = $query->result_array();
        if (is_array($query) && count($query) > 0) {
            $return[''] = 'Select Category';
            foreach ($query as $row) {
                $return[$row['id']] = ucwords(strtolower($row['category']));
            }
        }
        return $return;
    }
}

if (!function_exists('getmaritalstatus')) {
    function getmaritalstatus($param1=''){
        $ci=& get_instance();
        $ci->load->database();
        $return= array();
        $query = $ci->db->query("SELECT id, maritalstatus FROM master_maritalstatus");
        $query = $query->result_array();
        if (is_array($query) && count($query) > 0) {
            $return[''] = 'Select Marital Status';
            foreach ($query as $row) {
                $return[$row['id']] = ucwords(strtolower($row['maritalstatus']));
            }
        }
        return $return;
    }
}
if (!function_exists('gender')) {
    function gender($param1=''){
        $ci=& get_instance();
        $ci->load->database();
        $return= array();
        $query = $ci->db->query("SELECT id, gender FROM master_gender");
        $query = $query->result_array();
        if (is_array($query) && count($query) > 0) {
            $return[''] = 'Select Gender';
            foreach ($query as $row) {
                $return[$row['id']] = ucwords(strtolower($row['gender']));
            }
        }
        return $return;
    }
}

if (!function_exists('gettag')){
    function gettag($param1=''){
        $ci=& get_instance();
        $ci->load->database();
        $return = array();
        $query = $ci->db->query("SELECT id,tag FROM master_tag");
        $query = $query->result_array();
        if (is_array($query) && count($query) > 0) {
            $return[''] = 'Select Tag';
            foreach ($query as $row) {
                $return[$row['id']] = $row['tag'];
            }
        }
        return $return;
    }
}


if (!function_exists('base64url_encode')){
	function base64url_encode($data){
        return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
    }
}
if (!function_exists('base64url_decode')){
    function base64url_decode($data){
        return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));
    }
}
if (!function_exists('getpatientid')){
    function getpatientid($token){
       $ci =& get_instance();
	    $ci->load->database();
		$return = array();
		return $query = $ci->db->query("SELECT id,first_name,last_name,patient_id FROM `patient_master`  WHERE token = '".$token."'")->row();
    }
}

if (!function_exists('getappointmentfor')){
	 function getappointmentfor($userid=''){
	 	//$userid = 1;
		$ci =& get_instance();
	    $ci->load->database();
		$return = array();
		$query = $ci->db->query("SELECT id, CONCAT_WS(' ',pm.first_name, pm.middle_name, pm.last_name) AS fullname FROM `patient_master` pm WHERE user_id = '".$userid."'");
		$query = $query->result_array();
		if( is_array( $query ) && count( $query ) > 0 ){
			$return[''] = 'Select Appointment For';
			foreach($query as $row){
				$return[$row['id']] = $row['fullname'];
			}
			$return['0'] = 'New Patient';
		}else{
			$return[''] = 'Select Appointment For';
			$return['0'] = 'New Patient';
		}
		return $return;
	}
}
if (!function_exists('getcontent')){
	 function getcontent($param1=''){
		$ci=& get_instance();
	    $ci->load->database();
		$return = array();
		$query = $ci->db->query("SELECT * FROM master_content WHERE category = '".$param1."'");
		$query = $query->result_array();
		return $query;
	}
}
if (!function_exists('detectDevice')){
 function detectDevice(){
		$userAgent 	  = $_SERVER["HTTP_USER_AGENT"];
		$devicesTypes = array(
	        "computer" => array("msie 10", "msie 9", "msie 8", "windows.*firefox", "windows.*chrome", "x11.*chrome", "x11.*firefox", "macintosh.*chrome", "macintosh.*firefox", "opera"),
	        "tablet"   => array("tablet", "android", "ipad", "tablet.*firefox"),
	        "mobile"   => array("mobile ", "android.*mobile", "iphone", "ipod", "opera mobi", "opera mini"),
	        "bot"      => array("googlebot", "mediapartners-google", "adsbot-google", "duckduckbot", "msnbot", "bingbot", "ask", "facebook", "yahoo", "addthis")
	    );
	 	foreach($devicesTypes as $deviceType => $devices) {           
	        foreach($devices as $device) {
	            if(preg_match("/" . $device . "/i", $userAgent)) {
	                $deviceName = $deviceType;
	            }
	        }
	    }
 	   return ucfirst($deviceName);
 	}
 }
if (!function_exists('VerifySecretKey')){
	function VerifySecretKey($key)
	{
		if (empty($key)) {
			return false;
		}
		if($key == "NqA4hMgC0VdS0CgcjMtC0aeHQ9oMd0vS"){
			return true;
		}else{
			return false;
		}
	}
}


if (!function_exists('writeToFile')){
	function writeToFile($str,$flname = "No Name"){
	 	date_default_timezone_set('UTC');
		$dataString = "Filename : " .$flname.  " Time : ";
		$dataString .=	date('Y-m-d H:i:s');
		$dataString .= "\n";
		if(is_array($str)){$str = json_encode($str);}
		$dataString .= $str;
		$dataString .= "\n\n";
		$filename= "logfile.txt";
		$fWrite = fopen($filename,"a");
		$wrote = fwrite($fWrite, $dataString);
		fclose($fWrite);
	
	}
}

if(!function_exists('sendemail')){
	function sendemail($to,$subject,$body,$bcc='',$attachments='',$from='info@sexologist.purnamhealth.com',$from_name='Sexologist @ Purnam Health'){
		$data = array();
		

		$ci =& get_instance();
		$ci->load->library('email'); 
		$config              = array();
		$config['useragent'] = "CodeIgniter";
		$config['mailpath']  = "/usr/bin/sendmail"; // or "/usr/sbin/sendmail"
		$config['protocol']  = "smtp";
		$config['smtp_host'] = "sexologist.purnamhealth.com";
		$config['smtp_port'] = "25";
		$config['smtp_user'] = "info@sexologist.purnamhealth.com";
		$config['smtp_pass'] = "FiiWu73U7Mln";
		$config['mailtype']  = 'html';
		$config['charset']   = 'utf-8';
		$config['newline']   = "\r\n";
		$config['crlf']      = "\r\n";
		$config['bcc_batch_mode'] = TRUE;
		$ci->email->initialize($config);
		$ci->email->from($from, $from_name);
		$ci->email->to($to);
		$ci->email->bcc($bcc);
		$ci->email->subject($subject);
		$ci->email->message($body);
		$tst = $ci->email->send();
		if($tst ==true){
		$data = array('Response-Status' => true,'Response-Message' => 'Email Sent');
		}else{
		$data = array('Response-Status' => false,'Response-Message' => $ci->email->print_debugger());
		}
		return $data;
	}
}

if(!function_exists('sendsms')){
	function sendsms($mobile,$message){
		$username	= "purnam";
		$password	= "express";
		$mobileno	= $mobile;
		$senderid	= "PURNAM";
		$cdm		  = "alert";
		$message	= $message;
		$flash		= "flas";
		$message	= urlencode($message);
		http://www.nooranisms.org/gosms.aspx?user=purnam&pass=express&msg=hello&mobs=9820686479&sender=purnam
		$baseurl  	= "http://www.nooranisms.org/gosms.aspx";
		$url	    = $baseurl."?user=".$username."&pass=".$password."&msg=".$message."&mobs=".$mobileno."&sender=".$senderid;
		$string   	= file_get_contents ($url);
		if($string != ""){
			return array('status'=>1,'msg'=>'SMS SUCCESSFULLY SENT!');
		}else{
			return array('status'=>0,'msg'=>'ERROR ON SMS SENT!');
		}
	}
}