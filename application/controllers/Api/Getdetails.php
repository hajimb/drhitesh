<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Getdetails extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
		$this->load->helper('common');
		$this->load->model('detail_model');
		$this->load->helper('security');
	}	


	
	public function contact(){
		
		$data = array('Response-Status' => FALSE,'Response-Validate' => FALSE, 'Response-Message' => '', 'Response-Data' => array());

		writeToFile($this->input->post('Data'),"contact Request");
		if($this->input->post('Data')){
		 	$postdata = json_decode($this->input->post('Data'),true);
			$client		= (isset($postdata['client']) ? $postdata['client'] : '');
			if($client != "web"){
				$secret_key = (isset($postdata['secret_key']) ?$postdata['secret_key'] : '') ;
				if(VerifySecretKey($secret_key) == false){
					$data['Response-Message']  = 'Invalid Secret Key';
					echo json_encode($data);
					exit();
				}
			}
			$result = $this->detail_model->getcontact();
			if(count($result)>0){
				$data['Response-Status']  	= true;
				$data['Response-Validate'] 	= true;
				$data['Response-Data']  	= $result;
			}else{
				$data['Response-Message']  = 'No record found';
			}
			writeToFile($data,"contact Response");
		}
		echo json_encode($data);
		exit();
	}
	
	public function events(){
		
		$data = array('Response-Status' => FALSE,'Response-Validate' => FALSE, 'Response-Message' => '', 'Response-Data' => array());

		writeToFile($this->input->post('Data'),"contact Request");
		if($this->input->post('Data')){
		 	$postdata = json_decode($this->input->post('Data'),true);
			$client		= (isset($postdata['client']) ? $postdata['client'] : '');
			if($client != "web"){
				$secret_key = (isset($postdata['secret_key']) ?$postdata['secret_key'] : '') ;
				if(VerifySecretKey($secret_key) == false){
					$data['Response-Message']  = 'Invalid Secret Key';
					echo json_encode($data);
					exit();
				}
			}
			$result = $this->detail_model->getevents();
			if(count($result)>0){
				$data['Response-Status']  	= true;
				$data['Response-Validate'] 	= true;
				$data['Response-Data']  	= $result;
			}else{
				$data['Response-Message']  = 'No record found';
			}
			writeToFile($data,"Events Response");
		}
		echo json_encode($data);
		exit();
	}	
	
	public function testimonials(){
		
		$data = array('Response-Status' => FALSE,'Response-Validate' => FALSE, 'Response-Message' => '', 'Response-Data' => array());

		writeToFile($this->input->post('Data'),"contact Request");
		if($this->input->post('Data')){
		 	$postdata = json_decode($this->input->post('Data'),true);
			$client		= (isset($postdata['client']) ? $postdata['client'] : '');
			if($client != "web"){
				$secret_key = (isset($postdata['secret_key']) ?$postdata['secret_key'] : '') ;
				if(VerifySecretKey($secret_key) == false){
					$data['Response-Message']  = 'Invalid Secret Key';
					echo json_encode($data);
					exit();
				}
			}
			$result = $this->detail_model->gettestimonials();
			if(count($result)>0){
				$data['Response-Status']  	= true;
				$data['Response-Validate'] 	= true;
				$data['Response-Data']  	= $result;
			}else{
				$data['Response-Message']  = 'No record found';
			}
			writeToFile($data,"Testimonials Response");
		}
		echo json_encode($data);
		exit();
	}	

	public function questions(){
		
		$data = array('Response-Status' => FALSE,'Response-Validate' => FALSE, 'Response-Message' => '', 'Response-Data' => array());

		writeToFile($this->input->post('Data'),"contact Request");
		if($this->input->post('Data')){
		 	$postdata = json_decode($this->input->post('Data'),true);
			$client		= (isset($postdata['client']) ? $postdata['client'] : '');
			if($client != "web"){
				$secret_key = (isset($postdata['secret_key']) ?$postdata['secret_key'] : '') ;
				if(VerifySecretKey($secret_key) == false){
					$data['Response-Message']  = 'Invalid Secret Key';
					echo json_encode($data);
					exit();
				}
			}
			$q_type = (isset($postdata['question_type']) ? $postdata['question_type'] : 0) ;
			$user_id = (isset($postdata['user_id']) ?$postdata['user_id'] : 0) ;
			$result = $this->detail_model->getquestions($q_type,$user_id);
			if(count($result)>0){
				$data['Response-Status']  	= true;
				$data['Response-Validate'] 	= true;
				$data['Response-Data']  	= $result;
			}else{
				$data['Response-Message']  = 'No record found';
			}
			writeToFile($data,"Questions Response");
		}
		echo json_encode($data);
		exit();
	}

	public function about(){
		$data           = array('Response-Status' => false,'Response-Validate' => false, 'Response-Message' => array());
		$master_contact =  array();
		if($this->input->post('Data')){
	  // print_r($_POST);
			$postdata = json_decode($this->input->post('Data'),true);
			$client		= $postdata['client'];
			if($client != "web"){
				$secret_key = (isset($postdata['secret_key']) ?$postdata['secret_key'] : '') ;
				if(VerifySecretKey($secret_key) == false){
					$data['Response-Message']  = 'Invalid Secret Key';
					echo json_encode($data);
					exit();
				}
			}
			if($postdata['content'] == 'aboutcontent'){
				$html = $this->load->view('website/aboutcontent', '', true);
				$data['Response-Status']   = true;
				$data['Response-Validate'] = true;
			        if($client != "web"){
			        	$css = '<link rel="stylesheet" href="http://sexologist.purnamhealth.com/assets/css/reset.css?time=1510107716" type="text/css" /><link rel="stylesheet" href="http://sexologist.purnamhealth.com/assets/css/style.css?time=1510107716" type="text/css" /><link rel="stylesheet" media="screen" href="http://sexologist.purnamhealth.com/assets/css/responsive-leyouts.css?time=1510107716" type="text/css" /><link href="http://sexologist.purnamhealth.com/assets/css/bootstrap.min.css?time=1510107716" rel="stylesheet">';
			       		$html = $css.$html;
			        }
				$data['Response-Message']  = $html;
			}else if($postdata['content'] == ''){
				$data['Response-Status']   = false;
				$data['Response-Validate'] = true;
				$data['Response-Message']  = "Invalid Request";
			}
			echo json_encode($data);
		}
	}	
	
	public function banner(){
		
		$data = array('Response-Status' => FALSE,'Response-Validate' => FALSE, 'Response-Message' => '', 'Response-Data' => array());

		writeToFile($this->input->post('Data'),"Banner Request");
		if($this->input->post('Data')){
		 	$postdata = json_decode($this->input->post('Data'),true);
			$client		= (isset($postdata['client']) ? $postdata['client'] : '');
			if($client != "web"){
				$secret_key = (isset($postdata['secret_key']) ?$postdata['secret_key'] : '') ;
				if(VerifySecretKey($secret_key) == false){
					$data['Response-Message']  = 'Invalid Secret Key';
					echo json_encode($data);
					exit();
				}
			}
			$result = $this->detail_model->getbanner();
			if(count($result)>0){
				$data['Response-Status']  	= true;
				$data['Response-Validate'] 	= true;
				$data['Response-Data']  	= $result;
			}else{
				$data['Response-Message']  = 'No record found';
			}
			writeToFile($data,"Banner Response");
		}
		echo json_encode($data);
		exit();
	}

	public function marital_status(){
		
		$data = array('Response-Status' => FALSE,'Response-Validate' => FALSE, 'Response-Message' => '', 'Response-Data' => array());

		writeToFile($this->input->post('Data'),"marital_status Request");
		if($this->input->post('Data')){
		 	$postdata = json_decode($this->input->post('Data'),true);
			$client		= (isset($postdata['client']) ? $postdata['client'] : '');
			if($client != "web"){
				$secret_key = (isset($postdata['secret_key']) ?$postdata['secret_key'] : '') ;
				if(VerifySecretKey($secret_key) == false){
					$data['Response-Message']  = 'Invalid Secret Key';
					echo json_encode($data);
					exit();
				}
			}
			$result = $this->detail_model->getmarital_status();
			if(count($result)>0){
				$data['Response-Status']  	= true;
				$data['Response-Validate'] 	= true;
				$data['Response-Data']  	= $result;
			}else{
				$data['Response-Message']  = 'No record found';
			}
			writeToFile($data,"marital_status Response");
		}
		echo json_encode($data);
		exit();
	}	
	
	public function offers(){
		
		$data = array('Response-Status' => FALSE,'Response-Validate' => FALSE, 'Response-Message' => '', 'Response-Data' => array());

		writeToFile($this->input->post('Data'),"Offers Request");
		if($this->input->post('Data')){
		 	$postdata = json_decode($this->input->post('Data'),true);
			$client		= (isset($postdata['client']) ? $postdata['client'] : '');
			if($client != "web"){
				$secret_key = (isset($postdata['secret_key']) ?$postdata['secret_key'] : '') ;
				if(VerifySecretKey($secret_key) == false){
					$data['Response-Message']  = 'Invalid Secret Key';
					echo json_encode($data);
					exit();
				}
			}
			$result = $this->detail_model->getoffers();
			if(count($result)>0){
				$data['Response-Status']  	= true;
				$data['Response-Validate'] 	= true;
				$data['Response-Data']  	= $result;
			}else{
				$data['Response-Message']  = 'No record found';
			}
			writeToFile($data,"Offers Response");
		}
		echo json_encode($data);
		exit();
	}

// Get All Main Page Content like Homeopathy, Lifestyle, etc...
	public function getcontent(){
		$data           = array('Response-Status' => false,'Response-Validate' => false, 'Response-Message' => array());
		$master_contact =  array();
		if($this->input->post('Data')){
	  // print_r($_POST);
			$postdata = json_decode($this->input->post('Data'),true);
			$client		= $postdata['client'];
			if($client != "web"){
				$secret_key = (isset($postdata['secret_key']) ?$postdata['secret_key'] : '') ;
				if(VerifySecretKey($secret_key) == false){
					$data['Response-Message']  = 'Invalid Secret Key';
					echo json_encode($data);
					exit();
				}
			}
			if(isset($postdata['content']) ){
				$content = $postdata['content'];
				//if($postdata['content'] == 'aboutcontent'){
					$html = $this->load->view('website/'.$content, '', true);
					$data['Response-Status']   = true;
					$data['Response-Validate'] = true;
				        if($client != "web"){
				        	$css = '<link rel="stylesheet" href="http://sexologist.purnamhealth.com/assets/css/reset.css?time=1510107716" type="text/css" /><link rel="stylesheet" href="http://sexologist.purnamhealth.com/assets/css/style.css?time=1510107716" type="text/css" /><link rel="stylesheet" media="screen" href="http://sexologist.purnamhealth.com/assets/css/responsive-leyouts.css?time=1510107716" type="text/css" /><link href="http://sexologist.purnamhealth.com/assets/css/bootstrap.min.css?time=1510107716" rel="stylesheet">';
				       		$html = $css.$html;
				        }
					$data['Response-Message']  = $html;
				/*}else if($postdata['content'] == ''){
					$data['Response-Status']   = false;
					$data['Response-Validate'] = true;
					$data['Response-Message']  = "Invalid Request";
				}*/
			}else{
				$data['Response-Message']  = "Invalid Request";
			}
			

			echo json_encode($data);
		}
	}		

}