<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Password extends CI_Controller {
	public function __construct(){
        parent::__construct();
				$this->load->helper(['security','common']);
        $this->load->model([
            'website/section_model',
            'website/home_model',
            'website/setting_model',
            'password_model'
        ]);
    }


	public function forgot(){
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
    		$email	 		    = $postdata['email'];
        	$this->form_validation->set_data($postdata);
  			$this->form_validation->set_rules('email', 'Email', 'trim|xss_clean|valid_email|required');
    		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    		$this->form_validation->set_message('required', 'Enter %s');

    		if($this->form_validation->run()) {

					$clean 		= $this->security->xss_clean($email);
					$userInfo = $this->password_model->getUserInfoByEmail($clean);
					if(!$userInfo){
						$data['Response-Validate'] = true;
						$data['Response-Message']  = "No Email Registered";
					}else{

						$config    = Array(
							'protocol' => 'sendmail',
							'smtp_host' => 'sexologist.purnamhealth.com',
							'smtp_port' => 25,
							'smtp_user' => 'do-not-reply@sexologist.purnamhealth.com',
							'smtp_pass' => 'yPm4yu3B=ieR',
							'smtp_timeout' => '4',
							'charset'   => 'iso-8859-1'
						);
						$this->load->library('email', $config);
						$this->email->set_newline("\r\n");
						 $this->email->set_mailtype("html");

						$token 		= $this->password_model->insertToken($userInfo->id);
						$qstring 	= $this->base64url_encode($token);
						$url 		= site_url() . 'password/reset_password/token/' . $qstring;

						//$link 		= '<a href="' . $url . '">' . $url . '</a>';
						//$message = '';
						//$message .= '<strong>A password reset has been requested for this email account</strong><br>';
						//$message .= '<strong>Please click:</strong> ' . $link;

						$master_contact['name'] = $userInfo->name;
						$master_contact['url']  = $url;
						$body = $this->load->view('website/resetlink',$master_contact,TRUE);

						//$this->email->set_header('MIME-Version', '1.0; charset=utf-8');
						//$this->email->set_header('Content-type', 'text/html');
						$this->email->from('do-not-reply@sexologist.purnamhealth.com', 'Purnam Health Center');
						$this->email->to($email);
						$this->email->subject('Reset Password Link ');
						//$body = $message;
						$this->email->message($body);

						if($this->email->send()){
							$data['Response-Status']   = true;
							$data['Response-Validate'] = true;
							$data['Response-Message']  = "Success";
						}else{
							$data['Response-Status']   = false;
							$data['Response-Validate'] = true;
							$data['Response-Message']  =  $this->email->print_debugger();
						}
					}

    		}else{
    			foreach ($postdata as $key => $value) {
    				$data['Response-Message'][$key] = form_error($key);
    				//$data['Response-Message']['f'] = validation_errors();
    			}
    		}
    		echo json_encode($data);
      }
	}
	public function resetpassword(){
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
    		$password	= $postdata['password'];
    		$token	 	= $this->base64url_decode($postdata['token']);

        $this->form_validation->set_data($postdata);
				$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('confirmpassword', 'Password Confirmation', 'required|matches[password]'); ;
    		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    		$this->form_validation->set_message('required', 'Enter %s');

    		if($this->form_validation->run()) {

					$cleanToken = $this->security->xss_clean($token);
					$password 	= $this->security->xss_clean($password);
					$user_info  = $this->password_model->isTokenValid($cleanToken);
					if(!$user_info){
						$data['Response-Validate'] = true;
						$data['Response-Message']  = "Token is invalid or expired";
					}else{
						    $this->load->library('encryption');
                $cleanPost['password'] = $this->encryption->encrypt($password);
                $cleanPost['user_id'] = $user_info->id;
								$result = $this->password_model->updatePassword($cleanPost);
			    			//print_r($result);exit();
			    			if($result['status']==true){
			    				$data['Response-Status']   = $result['status'];
			    				$data['Response-Validate'] = true;
			    				$data['Response-Message']  = $result['msg'];
			    			}else{
			    				$data['Response-Status']   = $result['status'];
			    				$data['Response-Validate'] = true;
			    				$data['Response-Message']  = $result['msg'];

			    			}
					}

    		}else{
    			foreach ($postdata as $key => $value) {
    				$data['Response-Message'][$key] = form_error($key);
    				//$data['Response-Message']['f'] = validation_errors();
    			}
    		}
    		echo json_encode($data);
      }
	}

	public function base64url_encode($data) {
      return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
    }
    public function base64url_decode($data) {
      return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));
    }

}
