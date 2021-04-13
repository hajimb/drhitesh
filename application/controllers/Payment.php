<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
// require APPPATH.'./vendor/autoload.php';

// Instantiation and passing `true` enables exceptions

class Payment extends CI_Controller {
  
  private $working_key,$access_code,$url,$merchant_id,$userid;
  public function __construct(){
    parent::__construct();
    $this->output->set_header('Cache-Control: no-store,no-cache,must-revalidate,post-check=0, pre-check=0');
    $this->output->set_header('Pragma: no-cache');
    // LIVE
    /**/
    // $this->working_key = WORKING_KEY_LIVE; // live
    // $this->access_code = ACCESS_CODE_LIVE; // Live
    // $this->url         = URL_LIVE; //Live
    /**/
    //TEST 
    
    $this->working_key = WORKING_KEY_TEST; // Test
    $this->access_code = ACCESS_CODE_TEST; // Test
    $this->url         = URL_TEST; //Test
    
    $this->merchant_id = MERCHANTID;
    $this->userid      = $this->session->userdata('user_id');
    $this->load->model('payment_model');
    $this->load->model('website/home_model');
    $this->load->model('user_model');
    $this->load->library('cart');
    $this->load->helper('common');

  }

  public function carttotal(){
        $cart        = $this->cart->contents();
        $gstsubtotal = 0;
        foreach ($cart as $key => $data) {
          $gstsubtotal = $gstsubtotal  + $data['gstsubtotal'];
        }
        $resultarray['carttotal'] = $this->cart->total();
        $resultarray['gsttotal']  = $gstsubtotal;
        $resultarray['nettotal']  = $gstsubtotal + $this->cart->total();
        $resultarray['itemcount'] = count($this->cart->contents());
        return $resultarray;
  }

  public function ccavRequestHandler(){
    // print_r($_POST);
      $data      = array('Status'=> false,'Validate' => false, 'Message' => array(),'Data'=>array());
      $userdata  = $this->user_model->getById($this->userid);
      $calculate = $this->carttotal();
      $gsttotal  = $calculate['gsttotal'];
      $carttotal = $calculate['carttotal'];
      $nettotal  = $gsttotal + $carttotal;
      $quantity  = count($this->cart->contents());
      $letters   = array_merge(range('A','N'),range('P','Z'));
      $order_id  = $letters[(rand(1,count($letters))-1)];
      $order_id .= rand(0,9);
      for($i = 3; $i <= 4; $i++) {
        $order_id .= $letters[(rand(1,count($letters))-1)];
      }
      for($i = 5; $i <= 10; $i++) {
        $order_id .= rand(0,9);
      }
      $page_data['order_id']  = $order_id;
      

      $date=$this->input->post('adate');
        $feeamount=$this->input->post('feeamount');
        $time=$this->input->post('timing');
        $userid=$this->input->post('userId');
        $appfor= 0;
        $consulttype=$this->input->post('consult_type');
        $app_type=$this->input->post('appfor');
        $onlineoffline=$this->input->post('consultationtype');
        $consultid=$this->input->post('consultid');
        $items = array(
            'id' => time(),
            'date' => $date,
            'timing' => $time,
            'userid' => $userid,
            'appfor' => $appfor,
            'first_name' => $userdata->first_name,
            'last_name' => $userdata->last_name,
            'app_type'  => $app_type,
            'consulttype' => $consulttype,
            'onlineoffline' => $onlineoffline,
            'consultid' => $consultid,
            'price' => $feeamount,

        );
        
        $this->session->set_userdata('shopping_cart', $items);
        // print_r($items);

      // $this->form_validation->set_rules('first_name', 'Full Name', 'trim|required');
      $this->form_validation->set_rules('timing', 'Select Appointment Time', 'trim|required');
      $this->form_validation->set_rules('adate', 'Select Appointment Date', 'trim|required');
      $this->form_validation->set_rules('client', 'client', 'trim|required');
      $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
      $this->form_validation->set_message('required', '');
      if($this->form_validation->run()){
            $merchant_data   = '';
            $merchant_data  .= 'merchant_id='.$this->merchant_id;
            $merchant_data  .= '&order_id='.$order_id;
            $merchant_data  .= '&currency=INR';
            $merchant_data  .= '&amount='.$feeamount;
            $merchant_data  .= '&redirect_url='.base_url().'payment/success';
            $merchant_data  .= '&cancel_url='.base_url().'payment/cancel';
            $merchant_data  .= '&language=EN';
            $merchant_data  .= '&billing_name='.$userdata->first_name.' '.$userdata->last_name;
            $merchant_data  .= '&billing_address='.$userdata->address;
            $merchant_data  .= '&billing_state='.$userdata->state;
            $merchant_data  .= '&billing_zip='.$userdata->pincode;
            $merchant_data  .= '&billing_country='.$userdata->country;
            $merchant_data  .= '&billing_tel='.$userdata->contact;
            $merchant_data  .= '&billing_city='.$userdata->city;
            $merchant_data  .= '&billing_email='.$userdata->email;
            $encrypted_data  = $this->encrypt($merchant_data,$this->working_key); // Method for encrypting the data.

            $data['Status']   = true;
            $data['Validate'] = true;
            $data['Data']['encrypted_data'] = $encrypted_data;
            $data['Data']['access_code']    = $this->access_code;
            $data['Data']['url']            = $this->url;
      } else {
            foreach ($this->input->post() as $key => $value) {
                $data['Message'][$key] = form_error($key);
            }
        }
      echo json_encode($data);
  }

  public function cancel(){
    $this->aborted();
  }

public function success(){
    $master_payment  = $master_user = array();
    $encResponse     = $_POST["encResp"];
    $rcvdString      = $this->decrypt($encResponse,$this->working_key);
    $userid          = $this->userid;

   
    $order_status    = "";
    $order_id        = "";
    $tracking_id     = "";
    $bank_ref_no     = "";
    $payment_mode    = "";
    $card_name       = "";
    $status_code     = "";
    $status_message  = "";
    $amount          = "";
    $billing_name    = "";
    $billing_tel     = "";
    $billing_address = "";
    $billing_city    = "";
    $billing_zip     = "";
    $billing_email   = "";
    $failure_message = "";
    $delivery_name   = "";
    $delivery_address= "";
    $delivery_city   = "";
    $delivery_state  = "";
    $delivery_zip    = "";
    $delivery_country= "";
    $delivery_tel    = "";
    $merchant_param1 = "";
    $merchant_param2 = "";
    $merchant_param3 = "";
    $merchant_param4 = "";
    $merchant_param5 = "";
    $vault           = "";
    $offer_type      = "";
    $offer_code      = "";
    $discount_value  = "";
    $mer_amount      = "";
    $eci_value       = "";
    $retry           = "";
    $response_code   = "";
    $billing_notes   = "";
    $trans_date      = "";
    $bin_country     = "";
    $decryptValues   = explode('&', $rcvdString);
    // echo '<pre>';
    // print_r($decryptValues);
    $dataSize        = sizeof($decryptValues);
    for($i = 0; $i < $dataSize; $i++){
        $information = explode('=',$decryptValues[$i]);
        if($i==0)   $order_id        = $information[1];
        if($i==1)   $tracking_id     = $information[1];
        if($i==2)   $bank_ref_no     = $information[1];
        if($i==3)   $order_status    = $information[1];
        if($i==4)   $failure_message = $information[1];
        if($i==5)   $payment_mode    = $information[1];
        if($i==6)   $card_name       = $information[1];
        if($i==7)   $status_code     = $information[1];
        if($i==8)   $status_message  = $information[1];
        if($i==9)   $currency        = $information[1];
        if($i==10)  $amount          = $information[1];
        if($i==11)  $billing_name    = $information[1];
        if($i==12)  $billing_address = $information[1];
        if($i==13)  $billing_city    = $information[1];
        if($i==14)  $billing_state   = $information[1];
        if($i==15)  $billing_zip     = $information[1];
        if($i==16)  $billing_country = $information[1];
        if($i==17)  $billing_tel     = $information[1];
        if($i==18)  $billing_email   = $information[1];
        if($i==19)  $delivery_name   = $information[1];
        if($i==20)  $delivery_address= $information[1];
        if($i==21)  $delivery_city   = $information[1];
        if($i==22)  $delivery_state  = $information[1];
        if($i==23)  $delivery_zip    = $information[1];
        if($i==24)  $delivery_country= $information[1];
        if($i==25)  $delivery_tel    = $information[1];
        if($i==26)  $merchant_param1 = $information[1];
        if($i==27)  $merchant_param2 = $information[1];
        if($i==28)  $merchant_param3 = $information[1];
        if($i==29)  $merchant_param4 = $information[1];
        if($i==30)  $merchant_param5 = $information[1];
        if($i==31)  $vault           = $information[1];
        if($i==32)  $offer_type      = $information[1];
        if($i==33)  $offer_code      = $information[1];
        if($i==34)  $discount_value  = $information[1];
        if($i==35)  $mer_amount      = $information[1];
        if($i==36)  $eci_value       = $information[1];
        if($i==37)  $retry           = $information[1];
        if($i==38)  $response_code   = $information[1];
        if($i==39)  $billing_notes   = $information[1];
        if($i==40)  $trans_date      = $information[1];
        if($i==41)  $bin_country     = $information[1];
    }

    $cart = $this->session->userdata('shopping_cart');
    $master_payment['order_id']         = $cart['id'];
    $master_payment['tracking_id']      = $tracking_id;
    $master_payment['bank_ref_no']      = $bank_ref_no;
    $master_payment['order_status']     = $order_status;
    $master_payment['failure_message']  = $failure_message;
    $master_payment['payment_mode']     = $payment_mode;
    $master_payment['card_name']        = $card_name;
    $master_payment['status_code']      = $status_code;
    $master_payment['status_message']   = $status_message;
    $master_payment['currency']         = $currency;
    $master_payment['amount']           = $amount;
    $master_payment['billing_name']     = $billing_name;
    $master_payment['billing_city']     = $billing_city;
    $master_payment['billing_state']    = $billing_state;
    $master_payment['billing_zip']      = $billing_zip;
    $master_payment['billing_country']  = $billing_country;
    $master_payment['billing_email']    = $billing_email;
    $master_payment['billing_tel']      = $billing_tel;
    $master_payment['billing_address']  = $billing_address;
    $master_payment['billing_notes']    = $billing_notes;
    $master_payment['payment_type']     = 'CCAvenue';
    $master_payment['merchant_param1']  = $merchant_param1;
    $master_payment['merchant_param2']  = $merchant_param2;
    $master_payment['merchant_param3']  = $merchant_param3;
    $master_payment['merchant_param4']  = $merchant_param4;
    $master_payment['merchant_param5']  = $merchant_param5;
    $master_payment['user_id']          = $cart['userid'];
    $master_payment['payer_id']         = $userid;
    $master_payment['payer_email']      = $billing_email;
    $master_payment['quantity']         = count($this->session->userdata('shopping_cart'));
    if($order_status === "Success"){
      // $master_user['emailid']             = $billing_email;
      // $master_user['mobile']              = $billing_tel;
      $master_user['address']             = $billing_address;
      $master_user['city']                = $billing_city;
      $master_user['state']               = $billing_state;
      $master_user['pincode']             = $billing_zip;
      $master_user['country']          = $billing_country;
      // $master_user['ip_address']          = $this->input->ip_address();
     
      $invoice_data                       = $this->carttotal();
      $master_invoice['user_id']          = $userid;
      $master_invoice['order_id']         = $order_id;
      $master_invoice['carttotal']        = $invoice_data['carttotal'];
      $master_invoice['gsttotal']         = $invoice_data['gsttotal'];
      $master_invoice['no_of_items']      = $invoice_data['itemcount'];
      $master_invoice['nettotal']         = $invoice_data['nettotal'];
      $master_invoice['ip_address']       = $this->input->ip_address();
      $master_invoice['date']             = date('Y-m-d');
      

        
        
        $token2      = substr(sha1(rand()), 0, 30);
        $patient_master1['token']        = $token2;
        $patient_master1['user_id']      = $cart['userid'];
        $patient_master1['last_name']    = $cart['last_name'];
        $patient_master1['first_name']   = $cart['first_name'];
        

        $clinic_appointment['user_id']      = $cart['userid'];
        // $clinic_appointment['patient_id']   = $pid;
        $clinic_appointment['start_time']   = $cart['timing'];
        $clinic_appointment['app_type']     = $cart['app_type'];
        $clinic_appointment['end_time']     = date("H:i", strtotime('+30 minutes', strtotime($cart['timing'])));       
        $clinic_appointment['date']         = str_replace( '_', '-', $cart['date']);
        $clinic_appointment['consulttype']  = urldecode($cart['consulttype']);
        $clinic_appointment['consultid']    = $cart['consultid'];
        $clinic_appointment['onlineoffline']= $cart['onlineoffline'];

        $clinic_payment['user_id']          = $cart['userid'];
        $clinic_payment['amount']           = $amount;
        $clinic_payment['transaction_no']   = $cart['id'];
        $clinic_payment['transaction_id']   = $tracking_id;
        $clinic_payment['invoice_id']       = $order_id;
        // $clinic_payment['patient_id']       = $pid;

        $result = $this->payment_model->makepayment($patient_master1,$master_payment,$clinic_payment,$clinic_appointment,$master_user,$userid);
        $link = base_url().'online-form/'.base64url_encode($token2);
        if($result['status']==true){

            $useremail  = $this->session->userdata('email');
            $usermobile = $this->session->userdata('contact');
            $name       = $cart['first_name']. ' '. $cart['last_name'];
            if($useremail!=''){
                $msg = $this->config->item('email_appointment_set');
                $msg = str_replace("{#name}", $name, $msg);
                $msg = str_replace("{#appdate}", $cart['date'], $msg);
                $msg = str_replace("{#apptime}", $cart['timing'], $msg);
                $msg = str_replace("{#apptype}", $cart['onlineoffline'], $msg);
                $msg = str_replace("{#link}", $link, $msg);
                $data['msg'] = $msg;
                $body = $this->load->view('email/email', $data, true);
                $rst = sendemail($useremail,'Appointment Set ', $body);
            }
            if($usermobile!=''){
                $sms_msg = $this->config->item('sms_appointment_set');
                $sms_msg = str_replace("{#name}", $name, $sms_msg);
                $sms_msg = str_replace("{#appdate}", $cart['date'], $sms_msg);
                $sms_msg = str_replace("{#apptime}", $cart['timing'], $sms_msg);
                $sms_msg = str_replace("{#apptype}", $cart['onlineoffline'], $sms_msg);
                $sms_msg = str_replace("{#link}", $link, $sms_msg);
                // $rst1 = sendsms($usermobile,$sms_msg);
            }
            if($result['flag']==true){
                redirect($link);
            }else{
                $this->thankyou($master_payment);
            }
        }else{
            echo $result['msg'];
        }

      /*$user_data  = $this->payment_model->adddetail($master_payment,$master_invoice);

      $dat        = "<table cellspacing=4 cellpadding=4>";
        for($i = 0; $i < $dataSize; $i++){
            $information = explode('=',$decryptValues[$i]);
            $dat .= '<tr><td>'.$information[0].'</td><td>'.$information[1].'</td></tr>';
       }
       $dat .= "</table>";
       $page_data['dat'] = $dat;
       $this->thankyou($master_payment,$user_data['success']);*/
    }else if($order_status === "Aborted"){
      $this->aborted();
      // echo "<br>Thank you for shopping with us.We will keep you posted regarding the status of your order through e-mail";
    }else if($order_status === "Failure"){
      $this->failure($master_payment);
    }

}

public function thankyou($data, $type='appointment'){
    $this->cart->destroy();
    $this->session->unset_userdata('shopping_cart');
    $page_data['setting']    = $this->home_model->setting();
    $page_data['heading']    = 'Sexologist';
    $page_data['pagename']   = 'thankyou';
    $page_data['page_title'] = 'Thankyou | Sexologist';
    $page_data['data']       = $data;
    $this->load->view('website/main', $page_data);
}

public function failure($data){
    $this->cart->destroy();
    $this->session->unset_userdata('shopping_cart');
    $page_data['setting']    = $this->home_model->setting();
    $page_data['heading']    = 'Sexologist';
    $page_data['pagename']   = 'failure';
    $page_data['page_title'] = 'failure | Sexologist';
    $page_data['data']       = $data;
    $this->load->view('website/main', $page_data);
}

public function aborted(){
    $this->cart->destroy();
    $this->session->unset_userdata('shopping_cart');
    $page_data['setting']    = $this->home_model->setting();
    $page_data['heading']    = 'Sexologist';
    $page_data['pagename']   = 'aborted';
    $page_data['page_title'] = 'aborted | Sexologist';
    $this->load->view('website/main', $page_data);

}

    public function sendmail($cart=''){
        try {
            $settings = array(); 
            $settings['messagebody']    = $this->load->view('website/email/invoice',$cart,TRUE);
             
            $settings['to_email']       = $cart['userdetail']->email;
            // $data['pagename']           = 'register';
            $settings['subject']        = 'AlAnwar Payment Invoice';
            $msg_send                   = SendUserEmail($settings);    

            $settings1 = array();

            $settings1['from_email']     = "no-reply@alanwarjewellery.co"; 
            $settings1['from_name']      = "Al-Anwar Jewellery"; 
            $settings1['to_email']       = 'sales@alanwarjewellery.co';
            $settings1['subject']        = 'New Invoice Created';
            $settings1['messagebody']    = $settings['messagebody'];
            $msg_send                   = SendUserEmail($settings1);    
            return true;

        } catch (Exception $e) {
            // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            return false;
        }
    }

    public function isemailexists($id){
        $this->load->model('user_model');
        $email = $this->input->post('email_id');
        $result =$this->user_model->isemailexists($id,$email);
        echo json_encode($result);
    }

    public function ismobileexists($id){
        $this->load->model('user_model');
        $mobile = $this->input->post('mobile');
        $result =$this->user_model->ismobileexists($id,$mobile);
        echo json_encode($result);
    }

  //*********** Padding Function *********************

    private function encrypt($plainText,$key){
        $encryptionMethod = "AES-128-CBC";
        $secretKey        = $this->hextobin(md5($key));
        $initVector       = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
        $encryptedText    = openssl_encrypt($plainText, $encryptionMethod, $secretKey, OPENSSL_RAW_DATA, $initVector);
        return bin2hex($encryptedText);
    }

  private function decrypt($encryptedText,$key){
    $encryptionMethod   = "AES-128-CBC";
    $secretKey    =  $this->hextobin(md5($key));
    $initVector     =  pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
    $encryptedText    =  $this->hextobin($encryptedText);
    $decryptedText    =  openssl_decrypt($encryptedText, $encryptionMethod, $secretKey, OPENSSL_RAW_DATA, $initVector);
    return $decryptedText;
  }
  private function hextobin($hexString){ 
    $length = strlen($hexString); 
    $binString="";   
    $count=0; 
    while($count<$length){       
      $subString =substr($hexString,$count,2);           
      $packedString = pack("H*",$subString); 
      if ($count==0){
        $binString=$packedString;
      } 
      else {
        $binString.=$packedString;
      } 
      $count+=2; 
    } 
    return $binString; 
  }



  public function payQuestion(){
       // print_r($_POST);exit();

      $data      = array('Status'=> false,'Validate' => false, 'Message' => array(),'Data'=>array());
      
        // print_r($items);

      // $this->form_validation->set_rules('first_name', 'Full Name', 'trim|required');
      $this->form_validation->set_rules('question', 'Enter Question', 'trim|required');
      $this->form_validation->set_rules('ispublic', 'Select Public/Private', 'trim|required');
      $this->form_validation->set_rules('client', 'client', 'trim|required');
      $this->form_validation->set_rules('user_id', 'User ID', 'trim|required');
      $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
      $this->form_validation->set_message('required', '');
        if($this->form_validation->run()){
            $userid    = $this->input->post('user_id');
            $userdata  = $this->user_model->getById($userid);
            $letters   = array_merge(range('A','N'),range('P','Z'));
            $order_id  = $letters[(rand(1,count($letters))-1)];
            $order_id .= rand(0,9);
            for($i = 3; $i <= 4; $i++) {
                $order_id .= $letters[(rand(1,count($letters))-1)];
            }
            for($i = 5; $i <= 10; $i++) {
                $order_id .= rand(0,9);
            }
            $page_data['order_id']  = $order_id;
            $feeamount = QUESTION_FEES;
            $anonymous = $this->input->post('anonymous') ?? 0;

            $param5 = $this->input->post('user_id').','.$order_id;
            // $items = array(
            //     'id' => time(),
            //     'userid' => $userid,
            //     'first_name' => $userdata->first_name ,
            //     'last_name' => $userdata->last_name,
            //     'question' => $this->input->post('question'),
            //     'ispublic' => $this->input->post('ispublic'),
            //     'anonymous' => $this->input->post('anonymous') ?? 0,
            //     'price' => $feeamount,
            // );

       
            $merchant_data   = '';
            $merchant_data  .= 'merchant_id='.$this->merchant_id;
            $merchant_data  .= '&order_id='.$order_id;
            $merchant_data  .= '&currency=INR';
            $merchant_data  .= '&amount='.$feeamount;
            $merchant_data  .= '&redirect_url='.base_url().'payment/successQuestion';
            $merchant_data  .= '&cancel_url='.base_url().'payment/cancel';
            $merchant_data  .= '&language=EN';
            $merchant_data  .= '&billing_name='.$userdata->first_name.' '.$userdata->last_name;
            $merchant_data  .= '&billing_address='.$userdata->address;
            $merchant_data  .= '&billing_state='.$userdata->state;
            $merchant_data  .= '&billing_zip='.$userdata->pincode;
            $merchant_data  .= '&billing_country='.$userdata->country;
            $merchant_data  .= '&billing_tel='.$userdata->contact;
            $merchant_data  .= '&billing_city='.$userdata->city;
            $merchant_data  .= '&billing_email='.$userdata->email;
            $merchant_data  .= '&merchant_param2='.$this->input->post('question');
            $merchant_data  .= '&merchant_param3='.$this->input->post('ispublic');
            $merchant_data  .= '&merchant_param4='.$this->input->post('anonymous');
            $merchant_data  .= '&merchant_param5='.$param5;
            $encrypted_data  = $this->encrypt($merchant_data, $this->working_key); // Method for encrypting the data.

            $data['Status']   = true;
            $data['Validate'] = true;
            $data['Data']['encrypted_data'] = $encrypted_data;
            $data['Data']['access_code']    = $this->access_code;
            $data['Data']['url']            = $this->url;
      } else {
            foreach ($this->input->post() as $key => $value) {
                $data['Message'][$key] = form_error($key);
            }
        }
      echo json_encode($data);
  }


public function successQuestion(){
    $master_payment  = $master_user = array();
    $encResponse     = $_POST["encResp"];
    $rcvdString      = $this->decrypt($encResponse,$this->working_key);
    // print_r($rcvdString);
    // print_r($_SESSION);
    //     exit;
    $userid          = $this->userid;
    $order_status    = "";
    $order_id        = "";
    $tracking_id     = "";
    $bank_ref_no     = "";
    $payment_mode    = "";
    $card_name       = "";
    $status_code     = "";
    $status_message  = "";
    $amount          = "";
    $billing_name    = "";
    $billing_tel     = "";
    $billing_address = "";
    $billing_city    = "";
    $billing_zip     = "";
    $billing_email   = "";
    $failure_message = "";
    $delivery_name   = "";
    $delivery_address= "";
    $delivery_city   = "";
    $delivery_state  = "";
    $delivery_zip    = "";
    $delivery_country= "";
    $delivery_tel    = "";
    $merchant_param1 = "";
    $merchant_param2 = "";
    $merchant_param3 = "";
    $merchant_param4 = "";
    $merchant_param5 = "";
    $vault           = "";
    $offer_type      = "";
    $offer_code      = "";
    $discount_value  = "";
    $mer_amount      = "";
    $eci_value       = "";
    $retry           = "";
    $response_code   = "";
    $billing_notes   = "";
    $trans_date      = "";
    $bin_country     = "";
    $decryptValues   = explode('&', $rcvdString);
   
    $dataSize        = sizeof($decryptValues);
    for($i = 0; $i < $dataSize; $i++){
        $information = explode('=',$decryptValues[$i]);
        if($i==0)   $order_id        = $information[1];
        if($i==1)   $tracking_id     = $information[1];
        if($i==2)   $bank_ref_no     = $information[1];
        if($i==3)   $order_status    = $information[1];
        if($i==4)   $failure_message = $information[1];
        if($i==5)   $payment_mode    = $information[1];
        if($i==6)   $card_name       = $information[1];
        if($i==7)   $status_code     = $information[1];
        if($i==8)   $status_message  = $information[1];
        if($i==9)   $currency        = $information[1];
        if($i==10)  $amount          = $information[1];
        if($i==11)  $billing_name    = $information[1];
        if($i==12)  $billing_address = $information[1];
        if($i==13)  $billing_city    = $information[1];
        if($i==14)  $billing_state   = $information[1];
        if($i==15)  $billing_zip     = $information[1];
        if($i==16)  $billing_country = $information[1];
        if($i==17)  $billing_tel     = $information[1];
        if($i==18)  $billing_email   = $information[1];
        if($i==19)  $delivery_name   = $information[1];
        if($i==20)  $delivery_address= $information[1];
        if($i==21)  $delivery_city   = $information[1];
        if($i==22)  $delivery_state  = $information[1];
        if($i==23)  $delivery_zip    = $information[1];
        if($i==24)  $delivery_country= $information[1];
        if($i==25)  $delivery_tel    = $information[1];
        if($i==26)  $merchant_param1 = $information[1];
        if($i==27)  $merchant_param2 = $information[1];
        if($i==28)  $merchant_param3 = $information[1];
        if($i==29)  $merchant_param4 = $information[1];
        if($i==30)  $merchant_param5 = $information[1];
        if($i==31)  $vault           = $information[1];
        if($i==32)  $offer_type      = $information[1];
        if($i==33)  $offer_code      = $information[1];
        if($i==34)  $discount_value  = $information[1];
        if($i==35)  $mer_amount      = $information[1];
        if($i==36)  $eci_value       = $information[1];
        if($i==37)  $retry           = $information[1];
        if($i==38)  $response_code   = $information[1];
        if($i==39)  $billing_notes   = $information[1];
        if($i==40)  $trans_date      = $information[1];
        if($i==41)  $bin_country     = $information[1];
    }

    $explode = explode(',', $merchant_param5);
    
    $master_payment['order_id']         = $explode[1];
    $master_payment['tracking_id']      = $tracking_id;
    $master_payment['bank_ref_no']      = $bank_ref_no;
    $master_payment['order_status']     = $order_status;
    $master_payment['failure_message']  = $failure_message;
    $master_payment['payment_mode']     = $payment_mode;
    $master_payment['card_name']        = $card_name;
    $master_payment['status_code']      = $status_code;
    $master_payment['status_message']   = $status_message;
    $master_payment['currency']         = $currency;
    $master_payment['amount']           = $amount;
    $master_payment['payfor']           = 'question';
    $master_payment['billing_name']     = $billing_name;
    $master_payment['billing_city']     = $billing_city;
    $master_payment['billing_state']    = $billing_state;
    $master_payment['billing_zip']      = $billing_zip;
    $master_payment['billing_country']  = $billing_country;
    $master_payment['billing_email']    = $billing_email;
    $master_payment['billing_tel']      = $billing_tel;
    $master_payment['billing_address']  = $billing_address;
    $master_payment['billing_notes']    = $billing_notes;
    $master_payment['payment_type']     = 'CCAvenue';
    $master_payment['merchant_param1']  = $merchant_param1;
    $master_payment['merchant_param2']  = $merchant_param2;
    $master_payment['merchant_param3']  = $merchant_param3;
    $master_payment['merchant_param4']  = $merchant_param4;
    $master_payment['merchant_param5']  = $merchant_param5;
    $master_payment['user_id']          = $explode[0];
    $master_payment['payer_id']         = $userid;
    $master_payment['payer_email']      = $billing_email;
    $master_payment['quantity']         = 1;
    if($order_status === "Success"){
        $master_user['address']          = $billing_address;
        $master_user['city']             = $billing_city;
        $master_user['state']            = $billing_state;
        $master_user['pincode']          = $billing_zip;
        $master_user['country']          = $billing_country;

        $master_question['question']   = $merchant_param2;
        $master_question['ispublic']   = $merchant_param3;
        $master_question['anonymous']  = $merchant_param4;
        $master_question['user_id']    = $explode[0];
        // $master_question['user_id']    = $explode[0];

        $result = $this->payment_model->makeQuestionpayment($master_payment,$master_question);

        if($result['status'] == true){

            $useremail  = $this->session->userdata('email');
            $usermobile = $this->session->userdata('contact');
            $name       = 'first_name last_name';
            
            $this->thankyou($master_payment,'question');
            
        }else{
            echo $result['msg'];
        }

    }else if($order_status === "Aborted"){
        $this->aborted();
    }else if($order_status === "Failure"){
        $this->failure($master_payment);
    }
}
}