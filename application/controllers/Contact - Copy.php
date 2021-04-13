<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function __construct(){
		parent::__construct();
		/*cache control*/
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
		$this->load->helper('security');
		$this->load->model('contact_model');
	}

	public function newcontact(){
		$data 	 = array('Response-Status' => false,'Response-Validate' => false, 'Response-Message' => array());
		
		$master_contact =  array();
	
		$master_contact['full_name'] 	= $this->input->post('full_name');
		$master_contact['email'] 	 	= $this->input->post('email');
		$master_contact['subject']   	= $this->input->post('subject');
		$master_contact['contact_type'] = $this->input->post('contact_type');
		$master_contact['message'] 	 	= $this->input->post('message');

		$this->form_validation->set_rules('full_name', 'Full Name', 'trim|xss_clean|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|xss_clean|valid_email|required');
		$this->form_validation->set_rules('subject', 'Subject', 'trim|xss_clean|required');
		$this->form_validation->set_rules('message', 'Message', 'trim|xss_clean|required');
		
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
		$this->form_validation->set_message('required', 'Enter %s');

		if($this->form_validation->run()) {
			$result = $this->contact_model->newcontact($master_contact);
			if($result['status']==true){
					$config    = Array(        
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
					$this->email->from('test@sexologist.info', $master_contact['contact_type']);
					$this->email->to('smarshad86@gmail.com'); 
					$this->email->subject('New Registeration '.$master_contact['contact_type']); 
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
					}
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
	
}