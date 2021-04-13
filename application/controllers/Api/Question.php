<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Question extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
    $this->load->helper(['common','security']);
		$this->load->model([
        'website/section_model',
        'website/home_model',
        'website/setting_model',
        'question_model'
    ]);
    $this->load->library('encryption');
	}

	public function index(){
      $page_data['setting'] = $this->home_model->setting();
      $page_data['heading']    = 'Sexologist Register';
      $page_data['pagename']   = 'register';
      $page_data['page_title'] = 'Sexologist :: Register';
      $page_data['page_meta']  = '';
      $this->load->view('website/main', $page_data);
	}

  public function newquestion(){
      // print_r($_POST);
    $status = true;
    $data = array('Response-Status' => false,'Response-Validate' => false, 'Response-Message' => array());
    $master_contact =  array();
    if($this->input->post('Data')){
      $postdata = json_decode($this->input->post('Data'),true);
      $client		= $postdata['client'];
        if($client != "web"){
          $secret_key = (isset($postdata['secret_key']) ? $postdata['secret_key'] : '') ;
          if(VerifySecretKey($secret_key) == false){
            $data['Response-Message']  = 'Invalid Secret Key';
            echo json_encode($data);
            exit();
          }
        }
          $id 						= (isset($postdata['user_id']) ? $postdata['user_id'] :-1);
      //  print_r($postdata);exit();
        

        $this->form_validation->set_data($postdata);
        if($id == 0){
          $this->form_validation->set_rules('full_name', 'Full Name', 'trim|xss_clean|required');
          // $this->form_validation->set_rules('email', 'Email', 'trim|xss_clean|valid_email|required');
          $this->form_validation->set_rules('email', 'Email', 'trim|xss_clean|valid_email|is_unique[master_user.email]|required');
          $this->form_validation->set_message('is_unique', 'This email is already taken');
          // $this->form_validation->set_rules('mobile', 'Contact Number', 'trim|xss_clean|required|callback_checkmobile');
          $this->form_validation->set_rules('gender', 'gender', 'trim|xss_clean|required');
          $this->form_validation->set_rules('age', 'Age', 'trim|xss_clean|required');
          $this->form_validation->set_rules('marital_status', 'Marital Status', 'trim|xss_clean|required');
          $this->form_validation->set_rules('ispublic', 'Ispublics', 'trim|xss_clean|required');
          $this->form_validation->set_rules('question', 'question', 'trim|xss_clean|required|htmlspecialchars');
        }else{
          $this->form_validation->set_rules('ispublic', 'Ispublic', 'trim|xss_clean|required');
          $this->form_validation->set_rules('question', 'question', 'trim|xss_clean|required|htmlspecialchars');
        }
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
        $this->form_validation->set_message('required', 'Enter %s');

        if($this->form_validation->run()) {

          if($id == 0){
            $master_user['name']            = $postdata['full_name'];
            $master_user['email']           = $postdata['email'];
            $master_user['contact']         = $postdata['mobile'];
            $master_user['gender']          = $postdata['gender'];
            $master_user['age']             = $postdata['age'];
            $master_user['marital_status']  = $postdata['marital_status'];
            $master_user['password']        = $this->encryption->encrypt($postdata['mobile']);
          }else if($id == -1){
            $data['Response-Message']  = 'Invalid User';
            echo json_encode($data);
            exit();
          }
        $ispublic                       = $postdata['ispublic'];
        $master_question['ispublic']    = $ispublic;
        $master_question['question']    = $postdata['question'];
        $master_question['anonymous']   = $postdata['anonymous'] ?? 0;

        if($ispublic == 'Private'){
          $status = false;

        }else{
          $status = true;
        }

          $master_user['ip']              = $this->input->ip_address();
          $result = $this->question_model->newquestion($master_user,$master_question,$id,$client);
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
              $this->email->to('smarshad86@gmail.com'];
              $this->email->subject('New Registeration '.$master_user['name']);
              $body = $this->load->view('front/newregisteration',$master_contact,TRUE);
              $this->email->message($body);
              $this->email->set_header('MIME-Version', '1.0; charset=utf-8'];
              $this->email->set_header('Content-type', 'text/html'];

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
          foreach ($postdata as $key => $value) {
            $data['Response-Message'][$key] = form_error($key);
            //$data['Response-Message']['f'] = validation_errors();
          }
        }}
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

  
}
