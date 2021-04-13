<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

include_once './vendor/autoload.php'; 

use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;



class Paypaltest extends CI_Controller
{
    public $apiContext;
    public $currency;

    function  __construct()
    {
        parent::__construct();
        $this->load->model('payment_model');
        $this->load->helper('common');
        // paypal credentials
        $this->currency = 'USD';
        $this->apiContext = new \PayPal\Rest\ApiContext(
          new \PayPal\Auth\OAuthTokenCredential(
             $this->config->item('client_id'), $this->config->item('secret')
          )
        );

        
    }

    function index(){
        $this->load->view('content/payment_credit_form');
    }


    function create_payment_with_paypal(){
        $date=$this->input->post('adate');
        $feeamount=$this->input->post('feeamount');
        $time=$this->input->post('timing');
        $userid=$this->input->post('userId');
        $appfor= 0;
        $first_name=$this->input->post('first_name');
        $last_name=$this->input->post('last_name');
        $s_first_name=$this->input->post('spouse_first_name') ?? '';
        $s_last_name=$this->input->post('spouse_last_name') ?? '';
        $consulttype=$this->input->post('consult_type');
        $app_type=$this->input->post('app_type');
        $onlineoffline=$this->input->post('consultationtype');
        $consultid=$this->input->post('consultid');
        $items = array(
            'id' => time(),
            'date' => $date,
            'timing' => $time,
            'userid' => $userid,
            'appfor' => $appfor,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'spouse_first_name' => $s_first_name,
            'spouse_last_name' => $s_last_name,
            'app_type'  => $app_type,
            'consulttype' => $consulttype,
            'onlineoffline' => $onlineoffline,
            'consultid' => $consultid,
            'price' => $feeamount,

        );
        
        $this->session->set_userdata('shopping_cart', $items);
        

        $payer = new Payer();
        $payer->setPaymentMethod("paypal");

        $item1 = new Item();
        $item1->setName($onlineoffline.' Consultation Fee')
        ->setCurrency($this->currency)
        ->setQuantity(1)
        ->setSku('432432423') // Similar to `item_number` in Classic API
        ->setPrice($feeamount);
        /*
        $item2 = new Item();
        $item2->setName('Granola bars')
        ->setCurrency($this->currency)
        ->setQuantity(5)
        ->setSku("321321") // Similar to `item_number` in Classic API
        ->setPrice(2);*/

        $itemList = new ItemList();
        $itemList->addItem($item1);
        $details = new Details();
        $details->setShipping(0)
        ->setTax(0)
        ->setSubtotal($feeamount);
        $amount = new Amount();
        $amount->setCurrency($this->currency)
        ->setTotal($feeamount)
        ->setDetails($details);
        $transaction = new Transaction();
        $transaction->setAmount($amount)
        ->setItemList($itemList)
        ->setDescription("Payment description")
        ->setInvoiceNumber(uniqid());
        $baseUrl = base_url().'paypaltest/execute';
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl("$baseUrl/true")
        ->setCancelUrl("$baseUrl/false");
        $payment = new Payment();
        $payment->setIntent("sale")
        ->setPayer($payer)
        ->setRedirectUrls($redirectUrls)
        ->setTransactions(array($transaction));
        $request = clone $payment;
        try {
            $payment->create($this->apiContext);

        } catch (Exception $ex) {
            
        // ResultPrinter::printError("Created Payment Using PayPal. Please visit the URL to Approve.", "Payment", null, $request, $ex);
        exit(1);
        }
        $approvalUrl = $payment->getApprovalLink();
        redirect($approvalUrl);
        // ResultPrinter::printResult("Created Payment Using PayPal. Please visit the URL to Approve.", "Payment", "<a href='$approvalUrl' >$approvalUrl</a>", $request, $payment);
        // echo( "approvalUrl<pre>");
        //  print_r($approvalUrl);
        //  echo( "</pre>payment<pre>");
        //  print_r($payment);
        // return $payment;

    }

   
    public function execute($flag){
        
        if($flag=='true'){
            $paymentId = $_GET['paymentId'];
            $PayerID = $_GET['PayerID'];
            $payment = Payment::get($paymentId, $this->apiContext);
            // echo '<pre> ';
            // print_r($payment);
            // echo 'ID : '.$payment['id'];
            $execution = new PaymentExecution();
            $execution->setPayerId($_GET['PayerID']);
            // $transaction = new Transaction();
            // $amount = new Amount();
            // $details = new Details();

            // $details->setShipping(2.2)
            // ->setTax(1.3)
            // ->setSubtotal(17.50);

            // $amount->setCurrency($this->currency);
            // $amount->setTotal(21);
            // $amount->setDetails($details);
            // $transaction->setAmount($amount);
            // $execution->addTransaction($transaction);
            try {
                $result = $payment->execute($execution, $this->apiContext);
                // echo 'result<br><pre> ';
                // print_r($result);
                try {
                    $payment = Payment::get($paymentId, $this->apiContext);
                    $pinfo = $payment->getPayer();
                    $tinfo = $payment->getTransactions();
                    $patient_master2 = array();
                    $patient_master1 = array();
                    
                    $cart = $this->session->userdata('shopping_cart');
                    if($cart['app_type']=='Couple'){
                        $token      = substr(sha1(rand()), 0, 30);
                        $patient_master2['token']        = $token;
                        $patient_master2['user_id']      = $cart['userid'];
                        $patient_master2['last_name']    = $cart['spouse_last_name'];
                        $patient_master2['first_name']   = $cart['spouse_first_name'];
                    }    
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
                    $clinic_payment['amount']           = $tinfo[0]->amount->total;
                    $clinic_payment['transaction_no']   = $cart['id'];
                    $clinic_payment['transaction_id']   = $payment->getCart();
                    $clinic_payment['invoice_id']       = $tinfo[0]->invoice_number;
                    // $clinic_payment['patient_id']       = $pid;


                    $master_payment['user_id']          = $cart['userid'];
                    $master_payment['order_id']         = $cart['id'];
                    $master_payment['amount']           = $tinfo[0]->amount->total;
                    $master_payment['currency']         = $tinfo[0]->amount->currency;
                    $master_payment['payment_mode']     = 'paypal';
                    $master_payment['quantity']         = 1;
                    $master_payment['tracking_id']      = $payment->getCart();
                    $master_payment['payer_id']         = $PayerID;
                    $master_payment['payer_email']      = $pinfo->payer_info->email;
                    $master_payment['billing_name']     = $pinfo->payer_info->shipping_address->recipient_name;
                    $master_payment['billing_city']     = $pinfo->payer_info->shipping_address->city;
                    $master_payment['billing_state']    = $pinfo->payer_info->shipping_address->state;
                    $master_payment['billing_zip']      = $pinfo->payer_info->shipping_address->postal_code;
                    $master_payment['billing_country']  = $pinfo->payer_info->shipping_address->country_code;
                    $master_payment['billing_email']    = $pinfo->payer_info->email;
                    $master_payment['billing_tel']      = $pinfo->payer_info->phone;

                        
                    $result = $this->payment_model->makepayment($patient_master2,$patient_master1,$master_payment,$clinic_payment,$clinic_appointment);
                    $link = base_url().'online-form/'.base64url_encode($token2);
                    if($result['status']==true){
                        $useremail  = $this->session->userdata('email');
                        $usermobile = $this->session->userdata('contact');
                        $name = $cart['first_name']. ' '. $cart['last_name'];
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
                            $rst1 = sendsms($usermobile,$sms_msg);
                        }
                        redirect($link);
                    }else{
                        echo $result['msg'];
                    }
                     /*echo '<pre>';
                     print_r($cart);
                     echo '</pre>';
                     echo 'appfor : '. $appfor     = $cart['appfor'];
                    echo 'getIntent <b>'.$payment->getIntent();
                    echo ' </b><br/>getCart <b>'.$payment->getCart();
                    echo ' </b><br/>getState <b>'.$payment->getState();
                    echo ' </b><br/>getPayer <b>'.$payment->getPayer();
                    echo ' </b><br/>pinfo <b>'.$pinfo->payer_info->email;
                    echo ' </b><br/>line1 <b>'.$pinfo->payer_info->shipping_address->recipient_name;
                    echo ' </b><br/>Amount <b>'.$tinfo[0]->amount->total;
                    echo ' </b><br/>currency <b>'.$tinfo[0]->amount->currency;
                    echo ' </b><br/>invoice_number <b>'.$tinfo[0]->invoice_number;
                    echo ' </b><br/>payment<br><pre> ';
                    print_r($payment);*/
                } catch (Exception $ex) {
                    echo 'Error 1<br><pre> ';
                    print_r($ex);
                    exit(1);
                }
            } catch (Exception $ex) {
                    echo 'Error 2<br><pre> ';
                    print_r($ex);
                exit(1);
            }
            return $payment;
        } else {
            echo("User Cancelled the Approval");
            exit;
        }
    }

}