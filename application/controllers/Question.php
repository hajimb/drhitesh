<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Question extends CI_Controller {	
	public function __construct(){
		parent::__construct();
		/*cache control*/
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
		
		$this->load->helper('security');
		$this->load->model('question_model');
	}

	public function index(){
	    $page_data['heading']    = 'Sexologist';
	    $page_data['pagename']   = 'ask-question';
	    $page_data['page_title'] = 'Sexologist | Dr. Hitesh Shah - Sexologist in Mumbai';
	    $page_data['page_meta']  = '';
		$this->load->view('front/home', $page_data);
	}
	public function answer($param1){
	    $page_data['heading']    = 'Sexologist Answer';
	    $page_data['pagename']   = 'answer';
	    $page_data['page_title'] = 'Sexologist | Dr. Hitesh Shah - Sexologist in Mumbai';
	    $page_data['result'] 	 = $this->question_model->getQuestionById($param1);
	    $page_data['page_meta']  = '';
		$this->load->view('admin/home', $page_data);
	}
	public function qlist(){
	    $page_data['heading']    = 'Sexologist Question Lists';
	    $page_data['pagename']   = 'questions';
	    $page_data['page_title'] = 'Sexologist | Dr. Hitesh Shah - Sexologist in Mumbai';
	    $page_data['page_meta']  = '';
		$this->load->view('admin/home', $page_data);
	}

	public function newquestion(){
		$this->load->library('encryption');
		$data = array('Response-Status' => false,'Response-Validate' => false, 'Response-Message' => array());
		$master_contact =  array();
		$id = $this->input->post('id');
		//print_r($_POST);exit();
		$master_user['name'] 			= $this->input->post('full_name');
		$master_user['email'] 	 		= $this->input->post('email');
		$master_user['contact']   		= $this->input->post('mobile');
		$master_user['gender'] 			= $this->input->post('gender');
		$master_user['age'] 	 		= $this->input->post('age');
		$master_user['marital_status'] 	= $this->input->post('marital_status');
		$master_user['ip'] 				= $this->input->ip_address();
		$master_user['password']		= $this->encryption->encrypt($this->input->post('mobile'));
		$master_question['ispublic'] 	= $this->input->post('ispublic');
		$master_question['question'] 	= $this->input->post('question');

		if($id ==0){	
			$this->form_validation->set_rules('full_name', 'Full Name', 'trim|xss_clean|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|xss_clean|valid_email|required|is_unique[master_user.email]');
			$this->form_validation->set_message('is_unique', 'This email is already taken');
			$this->form_validation->set_rules('mobile', 'Contact Number', 'trim|xss_clean|required|callback_checkmobile|is_unique[master_user.contact]');
			$this->form_validation->set_message('is_unique', 'This number is already taken');
			$this->form_validation->set_rules('gender', 'gender', 'trim|xss_clean|required');
			$this->form_validation->set_rules('age', 'Age', 'trim|xss_clean|required');
			$this->form_validation->set_rules('marital_status', 'Marital Status', 'trim|xss_clean|required');
			$this->form_validation->set_rules('ispublic', 'Ispublic', 'trim|xss_clean|required');
			$this->form_validation->set_rules('question', 'question', 'trim|xss_clean|required');		
		}else{
			$this->form_validation->set_rules('question', 'question', 'trim|xss_clean|required|htmlspecialchars');
			$this->form_validation->set_rules('ispublic', 'Ispublic', 'trim|xss_clean|required');
		}
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
		$this->form_validation->set_message('required', 'Enter %s');

		if($this->form_validation->run()) {
			$result = $this->question_model->newquestion($master_user,$master_question,$id);
			//print_r($result);exit();
			if($result['status']==true){
				$data['Response-Status']   = $result['status'];
				$data['Response-Validate'] = true;
				$data['Response-Message']  = $result['msg'];
					/*$config    = Array(        
						'protocol' => 'sendmail',
						'smtp_host' => 'mail.sexologist.info',
						'smtp_port' => 25,
						'smtp_user' => 'test@sexologist.info',
						'smtp_pass' => '123456',
						'smtp_timeout' => '4',
						'mailtype'  => 'html', 
						'charset'   => 'iso-8859-1'
					);
					$this->load->library('email', $config);
					$this->email->set_newline("\r\n");
					$this->email->from('test@sexologist.info', $master_user['name']);
					$this->email->to('smarshad86@gmail.com'); 
					$this->email->subject('New Registeration '.$master_user['name']); 
					$body = $this->load->view('front/newregisteration',$master_contact,TRUE);
					$this->email->message($body);   
					$this->email->set_header('MIME-Version', '1.0; charset=utf-8');
					$this->email->set_header('Content-type', 'text/html');
					
					if($this->email->send()){
						$data['Response-Status']   = $result['status'];
						$data['Response-Validate'] = true;
						$data['Response-Message']  = $result['msg'];			
					}else{
						$data['Response-Status']   = $result['status'];
						$data['Response-Validate'] = true;
						$data['Response-Message']  =  $this->email->print_debugger();
					}*/
			}else{
				$data['Response-Status']   = $result['status'];
				$data['Response-Validate'] = true;
				$data['Response-Message']  = $result['msg'];	
			}
		}
		else{
			foreach ($this->input->post() as $key => $value) {
				$data['Response-Message'][$key] = form_error($key);
				//$data['Response-Message']['f'] = validation_errors();
			}
		}
		echo json_encode($data);
	}
	public function answering(){
		$data = array('Response-Status' => false,'Response-Validate' => false, 'Response-Message' => array());
		$id = $this->input->post('id');
		$master_question['answer']   = $this->input->post('answer_text');
		$master_question['approved'] =1;
		$this->form_validation->set_rules('answer_text', 'Answer', 'trim|xss_clean|required|htmlspecialchars');		
		$this->form_validation->set_error_delimiters('<span>', '</span>');
		$this->form_validation->set_message('required', 'Enter %s');

		if($this->form_validation->run()) {
			$result = $this->question_model->answering($master_question,$id);
			if($result['status']==true){
				$data['Response-Status']   = $result['status'];
				$data['Response-Validate'] = true;
				$data['Response-Message']  = $result['msg'];
					/*$config    = Array(        
						'protocol' => 'sendmail',
						'smtp_host' => 'mail.sexologist.info',
						'smtp_port' => 25,
						'smtp_user' => 'test@sexologist.info',
						'smtp_pass' => '123456',
						'smtp_timeout' => '4',
						'mailtype'  => 'html', 
						'charset'   => 'iso-8859-1'
					);
					$this->load->library('email', $config);
					$this->email->set_newline("\r\n");
					$this->email->from('test@sexologist.info', $master_user['name']);
					$this->email->to('smarshad86@gmail.com'); 
					$this->email->subject('New Registeration '.$master_user['name']); 
					$body = $this->load->view('front/newregisteration',$master_contact,TRUE);
					$this->email->message($body);   
					$this->email->set_header('MIME-Version', '1.0; charset=utf-8');
					$this->email->set_header('Content-type', 'text/html');
					
					if($this->email->send()){
						$data['Response-Status']   = $result['status'];
						$data['Response-Validate'] = true;
						$data['Response-Message']  = $result['msg'];			
					}else{
						$data['Response-Status']   = $result['status'];
						$data['Response-Validate'] = true;
						$data['Response-Message']  =  $this->email->print_debugger();
					}*/
			}else{
				$data['Response-Status']   = $result['status'];
				$data['Response-Validate'] = true;
				$data['Response-Message']  = $result['msg'];	
			}
		}
		else{
			foreach ($this->input->post() as $key => $value) {
				$data['Response-Message'][$key] = form_error($key);
			}
		}
		echo json_encode($data);
	}

	public function checkmobile($str){
	    if (1 !== preg_match("/^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/", $str)){
	        $this->form_validation->set_message('checkmobile', 'The %s field is not valid!');
	        return FALSE;
	    }
	    else{
	        return TRUE;
	    }
	}

	public function getquestionlist($param1 = '') {
        $results = $this->question_model->getquestionlist($param1);
        $data 	 = array();
		$no 	 = 0;
        foreach ($results  as $r) {
        	$id = $r['id'];
			$no++;
			$row    = array();
			$row[]  = ucwords(strtolower($r['name']));
			$row[]  = substr(htmlspecialchars_decode($r['question']), 0, 50);
			$row[]  = $r['ispublic'];
			if($r['answer']!= NULL){
				$row[]  = '<a class="btn btn-success" href="'.base_url().'question/answer/'.$id.'"> Answer</a> <a class="btn btn-info view" data-id="'.$id.'" href="javascript:void(0)" data-modal="view_answer"> View</a> <a class="btn btn-danger delete" data-id="'.$id.'" href="javascript:void(0)"  data-title="question" data-module="question" data-modal="confirmation"> Delete</a>';
			}
			else{
				$row[]  = '<a class="btn btn-success" href="'.base_url().'question/answer/'.$id.'"> Answer</a> <a class="btn btn-danger delete" data-id="'.$id.'" href="javascript:void(0)" data-title="question" data-module="question" data-modal="confirmation"> Delete</a>';	
			}
			
			$data[] = $row;
        }
        echo json_encode(array('data' => $data));
    }
    public function getQuestion(){
		$data = array('Response-Status' => false,'Response-Validate' => false, 'Response-Message' => array());
        $page =  $_GET['page'];
        $result = '';
        $userid = 0;
        if(null !== $this->session->userdata('user_id') ){
        	$userid = $this->session->userdata('user_id');
        }
        $questions = $this->question_model->getquestionlist('all', $page, 'Public', $userid);
        // print($this->db->last_query());
        // print_r($questions);
        foreach($questions as $question){
        	if($question['anonymous'] == 0){
        		$name = $question['name'];
        	}else{
        		$name = 'Anonymous';
        	}
        	//$php_timestamp_date = date("d F Y H:i:s", $question['added_date']);
            $result .='<h3 class="text-left">'.htmlspecialchars_decode($question['question']).'</h3>';
            $result .='<p class="lead"> Asked by <a>'.$name.'</a></p>';
            $result .='<p><span class="glyphicon glyphicon-time"></span> on '.date_format(date_create($question['added_date']),"F j, Y  h:i A").'</p>';
            $result .=htmlspecialchars_decode($question['answer']);
            //$result .='<a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>';
            $result .= "<hr>";
        }
        $data['Response-Status']   = true;
		$data['Response-Validate'] = true;
		$data['Response-Message']  = $result;
        echo json_encode($data);
    }
    

}