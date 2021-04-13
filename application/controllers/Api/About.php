<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
   public function __construct(){
		parent::__construct();
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
    $this->load->helper('common');
	}

  public function getabout(){
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
          $css = ' <link rel="stylesheet" href="http://sexologist.purnamhealth.com/assets/css/reset.css?time=1510107716" type="text/css" /><link rel="stylesheet" href="http://sexologist.purnamhealth.com/assets/css/style.css?time=1510107716" type="text/css" /><link rel="stylesheet" media="screen" href="http://sexologist.purnamhealth.com/assets/css/responsive-leyouts.css?time=1510107716" type="text/css" /><link href="http://sexologist.purnamhealth.com/assets/css/bootstrap.min.css?time=1510107716" rel="stylesheet">';
          $html = $css.'\n'.$html;
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
}
