<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Express_checkout extends CI_Controller
{
	function __construct(){
		parent::__construct();
		// Load PayPal library config
		$this->config->load('paypal');
		$this->load->helper('common');

		$config = array(
			'Sandbox' => $this->config->item('Sandbox'),            // Sandbox / testing mode option.
			'APIUsername' => $this->config->item('APIUsername'),    // PayPal API username of the API caller
			'APIPassword' => $this->config->item('APIPassword'),    // PayPal API password of the API caller
			'APISignature' => $this->config->item('APISignature'),    // PayPal API signature of the API caller
			'APISubject' => '',                                    // PayPal API subject (email address of 3rd party user that has granted API permission for your app)
			'APIVersion' => $this->config->item('APIVersion'),        // API version you'd like to use for your call.  You can set a default version in the class and leave this blank if you want.
			'DeviceID' => $this->config->item('DeviceID'),
			'ApplicationID' => $this->config->item('ApplicationID'),
			'DeveloperEmailAccount' => $this->config->item('DeveloperEmailAccount')
		);

		// Show Errors
		if ($config['Sandbox']) {
			error_reporting(E_ALL);
			ini_set('display_errors', '1');
		}

		// Load PayPal library
		$this->load->library('paypal/paypal_pro', $config);
	}

	/**
	 * Cart Review page
	 */
	function index(){
		$this->session->unset_userdata('PayPalResult');
		$this->session->unset_userdata('shopping_cart');
		$cart['shopping_cart']['grand_total'] = number_format($cart['shopping_cart']['subtotal'] + $cart['shopping_cart']['shipping'] + $cart['shopping_cart']['handling'] + $cart['shopping_cart']['tax'], 2);
		$this->load->vars('cart', $cart);
		$this->session->set_userdata('shopping_cart', $cart);
		$this->load->view('website/paypal/index', $cart);
	}

	/**
	 * SetExpressCheckout
	 */
	function SetExpressCheckout($date='',$time='',$userid='',$appfor='',$first_name='',$last_name='',$consulttype='',$onlineoffline='',$consultid='')
	{
		// Clear PayPalResult from session userdata
		$this->session->unset_userdata('PayPalResult');

		// Get cart data from session userdata
		$items[0] = array(
			'id' => time(),
			'date' => $date,
			'timing' => $time,
			'userid' => $userid,
			'appfor' => $appfor,
			'first_name' => $first_name,
			'last_name' => $last_name,
			'consulttype' => $consulttype,
			'onlineoffline' => $onlineoffline,
			'consultid' => $consultid,
			'price' => '150',
		);
		// // Example Data - cart variable with items included
		$cart['shopping_cart'] = array(
			'items' => $items,
			'subtotal' => 150,
			'shipping' => 0,
			'handling' => 0,
			'tax' => 0,
		);
		$cart['shopping_cart']['grand_total'] = number_format($cart['shopping_cart']['subtotal'] + 
												$cart['shopping_cart']['shipping'] + 
												$cart['shopping_cart']['handling'] + 
												$cart['shopping_cart']['tax'], 2);
		$this->session->set_userdata('shopping_cart', $cart);
		$cart = $this->session->userdata('shopping_cart');
		
		$SECFields = array(
			'maxamt' 				=> round($cart['shopping_cart']['grand_total'] * 2,2),
			'returnurl' 			=> site_url('paypal/express_checkout/GetExpressCheckoutDetails'), 
			'cancelurl' 			=> site_url('paypal/express_checkout/OrderCancelled'), 	
			'hdrimg' 				=> 'http://sexologist.purnamhealth.com/assets/img/logo1.png', 	
			'logoimg' 				=> 'http://sexologist.purnamhealth.com/assets/img/logo1.png', 
			'brandname' 			=> 'PURNAM HEALTH CENTER', 	
			'customerservicenumber' => '+91 986 903 5111',
		);

		
		$Payments = array();
		$Payment = array(
			'amt' => $cart['shopping_cart']['grand_total'], 	
			//'PAYMENTREQUEST_0_AMT' => $cart['shopping_cart']['grand_total'], 	
		);

		
		array_push($Payments, $Payment);

		/**
		 * Now we gather all of the arrays above into a single array.
		 */
		$PayPalRequestData = array(
			'SECFields' => $SECFields,
			'Payments' => $Payments,
		);

		/**
		 * Here we are making the call to the SetExpressCheckout function in the library,
		 * and we're passing in our $PayPalRequestData that we just set above.
		 */
		$PayPalResult = $this->paypal_pro->SetExpressCheckout($PayPalRequestData);

		/**
		 * Now we'll check for any errors returned by PayPal, and if we get an error,
		 * we'll save the error details to a session and redirect the user to an
		 * error page to display it accordingly.
		 *
		 * If all goes well, we save our token in a session variable so that it's
		 * readily available for us later, and then redirect the user to PayPal
		 * using the REDIRECTURL returned by the SetExpressCheckout() function.
		 */
		if(!$this->paypal_pro->APICallSuccessful($PayPalResult['ACK']))
		{
			$errors = array('Errors'=>$PayPalResult['ERRORS']);

			// Load errors to variable
			$this->load->vars('errors', $errors);

			$this->load->view('website/paypal/paypal_error');
		}
		else
		{
			// Successful call.

			// Set PayPalResult into session userdata (so we can grab data from it later on a 'payment complete' page)
			$this->session->set_userdata('PayPalResult', $PayPalResult);

			// In most cases you would automatically redirect to the returned 'RedirectURL' by using: redirect($PayPalResult['REDIRECTURL'],'Location');
			// Move to PayPal checkout
			redirect($PayPalResult['REDIRECTURL'], 'Location');
		}
	}

	/**
	 * GetExpressCheckoutDetails
	 */
	function GetExpressCheckoutDetails()
	{
		// Get cart data from session userdata
		$cart = $this->session->userdata('shopping_cart');

		// Get PayPal data from session userdata
		$SetExpressCheckoutPayPalResult = $this->session->userdata('PayPalResult');
		$PayPal_Token = $SetExpressCheckoutPayPalResult['TOKEN'];

		/**
		 * Now we pass the PayPal token that we saved to a session variable
		 * in the SetExpressCheckout.php file into the GetExpressCheckoutDetails
		 * request.
		 */
		$PayPalResult = $this->paypal_pro->GetExpressCheckoutDetails($PayPal_Token);
		// print_r($PayPalResult);
		/**
		 * Now we'll check for any errors returned by PayPal, and if we get an error,
		 * we'll save the error details to a session and redirect the user to an
		 * error page to display it accordingly.
		 *
		 * If the call is successful, we'll save some data we might want to use
		 * later into session variables.
		 */
		if(!$this->paypal_pro->APICallSuccessful($PayPalResult['ACK']))
		{
			$errors = array('Errors'=>$PayPalResult['ERRORS']);

			// Load errors to variable
			$this->load->vars('errors', $errors);

			$this->load->view('website/paypal/paypal_error');
		}
		else
		{
			// Successful call.

			/**
			 * Here we'll pull out data from the PayPal response.
			 * Refer to the PayPal API Reference for all of the variables available
			 * in $PayPalResult['variablename']
			 *
			 * https://developer.paypal.com/docs/classic/api/merchant/GetExpressCheckoutDetails_API_Operation_NVP/
			 *
			 * Again, Express Checkout allows for parallel payments, so what we're doing here
			 * is usually the library to parse out the individual payments using the GetPayments()
			 * method so that we can easily access the data.
			 *
			 * We only have a single payment here, which will be the case with most checkouts,
			 * but we will still loop through the $Payments array returned by the library
			 * to grab our data accordingly.
			 */
			$cart['paypal_payer_id'] = isset($PayPalResult['PAYERID']) ? $PayPalResult['PAYERID'] : '';
			$cart['phone_number'] = isset($PayPalResult['PHONENUM']) ? $PayPalResult['PHONENUM'] : '';
			$cart['email'] = isset($PayPalResult['EMAIL']) ? $PayPalResult['EMAIL'] : '';
			$cart['first_name'] = isset($PayPalResult['FIRSTNAME']) ? $PayPalResult['FIRSTNAME'] : '';
			$cart['last_name'] = isset($PayPalResult['LASTNAME']) ? $PayPalResult['LASTNAME'] : '';

			foreach($PayPalResult['PAYMENTS'] as $payment) {
				$cart['shipping_name'] = isset($payment['SHIPTONAME']) ? $payment['SHIPTONAME'] : '';
				$cart['shipping_street'] = isset($payment['SHIPTOSTREET']) ? $payment['SHIPTOSTREET'] : '';
				$cart['shipping_city'] = isset($payment['SHIPTOCITY']) ? $payment['SHIPTOCITY'] : '';
				$cart['shipping_state'] = isset($payment['SHIPTOSTATE']) ? $payment['SHIPTOSTATE'] : '';
				$cart['shipping_zip'] = isset($payment['SHIPTOZIP']) ? $payment['SHIPTOZIP'] : '';
				$cart['shipping_country_code'] = isset($payment['SHIPTOCOUNTRYCODE']) ? $payment['SHIPTOCOUNTRYCODE'] : '';
				$cart['shipping_country_name'] = isset($payment['SHIPTOCOUNTRYNAME']) ? $payment['SHIPTOCOUNTRYNAME'] : '';
			}

			/**
			 * At this point, we now have the buyer's shipping address available in our app.
			 * We could now run the data through a shipping calculator to retrieve rate
			 * information for this particular order.
			 *
			 * This would also be the time to calculate any sales tax you may need to
			 * add to the order, as well as handling fees.
			 *
			 * We're going to set static values for these things in our static
			 * shopping cart, and then re-calculate our grand total.
			 */
			

			$cart['shopping_cart']['grand_total'] = number_format(
				$cart['shopping_cart']['subtotal']
				+ $cart['shopping_cart']['shipping']
				+ $cart['shopping_cart']['handling']
				+ $cart['shopping_cart']['tax'],2);

			/**
			 * Now we will redirect the user to a final review
			 * page so they can see the shipping/handling/tax
			 * that has been added to the order.
			 */
			// Set example cart data into session
			$this->session->set_userdata('shopping_cart', $cart);

			// Load example cart data to variable
			$this->load->vars('cart', $cart);

			// Example - Load Review Page
			$this->DoExpressCheckoutPayment();
			// $this->load->view('website/paypal/review', $cart);
			 // $this->load->view('website/paypal/express_checkout/DoExpressCheckoutPayment', $cart);
		}
	}

	/**
	 * DoExpressCheckoutPayment
	 */
	function DoExpressCheckoutPayment()
	{
		// echo 'DoExpressCheckoutPayment';
		/**
		 * Now we'll setup the request params for the final call in the Express Checkout flow.
		 * This is very similar to SetExpressCheckout except that now we can include values
		 * for the shipping, handling, and tax amounts, as well as the buyer's name and
		 * shipping address that we obtained in the GetExpressCheckoutDetails step.
		 *
		 * If this information is not included in this final call, it will not be
		 * available in PayPal's transaction details data.
		 *
		 * Once again, the template for DoExpressCheckoutPayment provides
		 * many more params that are available, but we've stripped everything
		 * we are not using in this basic demo out.
		 */
			$cart = $this->session->userdata('shopping_cart');


		// Get PayPal data from session userdata
		$SetExpressCheckoutPayPalResult = $this->session->userdata('PayPalResult');
		$PayPal_Token = $SetExpressCheckoutPayPalResult['TOKEN'];

	
		$PayPalResult = $this->paypal_pro->GetExpressCheckoutDetails($PayPal_Token);
		// print_r($PayPalResult);
		if(!$this->paypal_pro->APICallSuccessful($PayPalResult['ACK']))
		{
			// echo 'if';
			$errors = array('Errors'=>$PayPalResult['ERRORS']);

			// Load errors to variable
			$this->load->vars('errors', $errors);

			$this->load->view('website/paypal/paypal_error');
		}
		else
		{
			// echo 'else';
			$cart['paypal_payer_id'] = isset($PayPalResult['PAYERID']) ? $PayPalResult['PAYERID'] : '';
			$cart['phone_number'] = isset($PayPalResult['PHONENUM']) ? $PayPalResult['PHONENUM'] : '';
			$cart['email'] = isset($PayPalResult['EMAIL']) ? $PayPalResult['EMAIL'] : '';
			$cart['first_name'] = isset($PayPalResult['FIRSTNAME']) ? $PayPalResult['FIRSTNAME'] : '';
			$cart['last_name'] = isset($PayPalResult['LASTNAME']) ? $PayPalResult['LASTNAME'] : '';

			foreach($PayPalResult['PAYMENTS'] as $payment) {
				$cart['shipping_name'] = isset($payment['SHIPTONAME']) ? $payment['SHIPTONAME'] : '';
				$cart['shipping_street'] = isset($payment['SHIPTOSTREET']) ? $payment['SHIPTOSTREET'] : '';
				$cart['shipping_city'] = isset($payment['SHIPTOCITY']) ? $payment['SHIPTOCITY'] : '';
				$cart['shipping_state'] = isset($payment['SHIPTOSTATE']) ? $payment['SHIPTOSTATE'] : '';
				$cart['shipping_zip'] = isset($payment['SHIPTOZIP']) ? $payment['SHIPTOZIP'] : '';
				$cart['shipping_country_code'] = isset($payment['SHIPTOCOUNTRYCODE']) ? $payment['SHIPTOCOUNTRYCODE'] : '';
				$cart['shipping_country_name'] = isset($payment['SHIPTOCOUNTRYNAME']) ? $payment['SHIPTOCOUNTRYNAME'] : '';
			}


			

			$cart['shopping_cart']['grand_total'] = number_format(
				$cart['shopping_cart']['subtotal']
				+ $cart['shopping_cart']['shipping']
				+ $cart['shopping_cart']['handling']
				+ $cart['shopping_cart']['tax'],2);

			$this->session->set_userdata('shopping_cart', $cart);

			
		}
		
		
		// Get cart data from session userdata
		$SetExpressCheckoutPayPalResult = $this->session->userdata('PayPalResult');
		$PayPal_Token 					= $SetExpressCheckoutPayPalResult['TOKEN'];

		$DECPFields = array(
			'token' => $PayPal_Token, 								
			'payerid' => $cart['paypal_payer_id'], 							
		);

		/**
		 * Just like with SetExpressCheckout, we need to gather our $Payment
		 * data to pass into our $Payments array.  This time we can include
		 * the shipping, handling, tax, and shipping address details that we
		 * now have.
		 */
		$Payments = array();
		$Payment = array(
			'amt' => number_format($cart['shopping_cart']['grand_total'],2), 	    // Required.  The total cost of the transaction to the customer.  If shipping cost and tax charges are known, include them in this value.  If not, this value should be the current sub-total of the order.
			//'PAYMENTREQUEST_0_AMT' => number_format($cart['shopping_cart']['grand_total'],2), 	    // Required.  The total cost of the transaction to the customer.  If shipping cost and tax charges are known, include them in this value.  If not, this value should be the current sub-total of the order.
			'itemamt' => number_format($cart['shopping_cart']['subtotal'],2),       // Subtotal of items only.
			'currencycode' => 'USD', 					                                // A three-character currency code.  Default is USD.
			'shippingamt' => number_format($cart['shopping_cart']['shipping'],2), 	// Total shipping costs for this order.  If you specify SHIPPINGAMT you mut also specify a value for ITEMAMT.
			'handlingamt' => number_format($cart['shopping_cart']['handling'],2), 	// Total handling costs for this order.  If you specify HANDLINGAMT you mut also specify a value for ITEMAMT.
			'taxamt' => number_format($cart['shopping_cart']['tax'],2), 			// Required if you specify itemized L_TAXAMT fields.  Sum of all tax items in this order.
			'shiptoname' => $cart['shipping_name'], 					            // Required if shipping is included.  Person's name associated with this address.  32 char max.
			'shiptostreet' => $cart['shipping_street'], 					        // Required if shipping is included.  First street address.  100 char max.
			'shiptocity' => $cart['shipping_city'], 					            // Required if shipping is included.  Name of city.  40 char max.
			'shiptostate' => $cart['shipping_state'], 					            // Required if shipping is included.  Name of state or province.  40 char max.
			'shiptozip' => $cart['shipping_zip'], 						            // Required if shipping is included.  Postal code of shipping address.  20 char max.
			'shiptocountrycode' => $cart['shipping_country_code'], 				    // Required if shipping is included.  Country code of shipping address.  2 char max.
			'shiptophonenum' => $cart['phone_number'],  				            // Phone number for shipping address.  20 char max.
			'paymentaction' => 'Sale', 					                                // How you want to obtain the payment.  When implementing parallel payments, this field is required and must be set to Order.
			//'PAYMENTREQUEST_0_PAYMENTACTION' => 'Sale', 					                                // How you want to obtain the payment.  When implementing parallel payments, this field is required and must be set to Order.
		);

		/**
		 * Here we push our single $Payment into our $Payments array.
		 */
		array_push($Payments, $Payment);

		/**
		 * Now we gather all of the arrays above into a single array.
		 */
		$PayPalRequestData = array(
			'DECPFields' => $DECPFields,
			'Payments' => $Payments,
		);

		/**
		 * Here we are making the call to the DoExpressCheckoutPayment function in the library,
		 * and we're passing in our $PayPalRequestData that we just set above.
		 */
		$PayPalResult = $this->paypal_pro->DoExpressCheckoutPayment($PayPalRequestData);

		/**
		 * Now we'll check for any errors returned by PayPal, and if we get an error,
		 * we'll save the error details to a session and redirect the user to an
		 * error page to display it accordingly.
		 *
		 * If the call is successful, we'll save some data we might want to use
		 * later into session variables, and then redirect to our final
		 * thank you / receipt page.
		 */
		if(!$this->paypal_pro->APICallSuccessful($PayPalResult['ACK']))
		{
			$errors = array('Errors'=>$PayPalResult['ERRORS']);

			// Load errors to variable
			$this->load->vars('errors', $errors);

			$this->load->view('website/paypal/paypal_error');
		}
		else
		{
			// Successful call.
			/**
			 * Once again, since Express Checkout allows for multiple payments in a single transaction,
			 * the DoExpressCheckoutPayment response is setup to provide data for each potential payment.
			 * As such, we need to loop through all the payment info in the response.
			 *
			 * The library helps us do this using the GetExpressCheckoutPaymentInfo() method.  We'll
			 * load our $payments_info using that method, and then loop through the results to pull
			 * out our details for the transaction.
			 *
			 * Again, in this case we are you only working with a single payment, but we'll still
			 * loop through the results accordingly.
			 *
			 * Here, we're only pulling out the PayPal transaction ID and fee amount, but you may
			 * refer to the API reference for all the additional parameters you have available at
			 * this point.
			 *
			 * https://developer.paypal.com/docs/classic/api/merchant/DoExpressCheckoutPayment_API_Operation_NVP/
			 */
			// echo '<pre>';
			// print_r($_SESSION);
			// echo '</pre>';
			// echo '<pre>';
			// print_r($PayPalResult);
			// echo '</pre>';
			foreach($PayPalResult['PAYMENTS'] as $payment)
			{
				$cart['paypal_transaction_id'] = isset($payment['TRANSACTIONID']) ? $payment['TRANSACTIONID'] : '';
				$cart['paypal_fee'] = isset($payment['FEEAMT']) ? $payment['FEEAMT'] : '';
			}

			// Set example cart data into session
			$this->session->set_userdata('shopping_cart', $cart);

			// Successful Order
			 $this->OrderComplete();
		}
	}

	/**
	 * Order Complete - Pay Return Url
	 */
	function OrderComplete(){
		$this->load->model('payment_model');
		
		// Get cart from session userdata
		$cart = $this->session->userdata('shopping_cart');
		// echo '<pre>';
		// print_r($cart);
		// echo '</pre>';
		// echo '<hr>';

		// 1st clinic_appointment
		// 2nd clinic_payment
		$patient_id = 0;
		$appfor 	= $cart['shopping_cart']['items'][0]['appfor'];
		// $user_name  = '';
		$token	= substr(sha1(rand()), 0, 30);
		// if(!is_numeric($appfor)){
			
       		$patient_master['token']	    = $token;
			$patient_master['user_id'] 		= $cart['shopping_cart']['items'][0]['userid'];
			$patient_master['last_name'] 	= $cart['shopping_cart']['items'][0]['last_name'];
			$patient_master['first_name'] 	= $cart['shopping_cart']['items'][0]['first_name'];
			
			$patient_master['patient_id'] 	= $appfor;			
			$insert 						= $this->db->insert('patient_master',$patient_master);
			$pid 			 = $this->db->insert_id();
			$pad 		     = str_pad($pid, 5, "0", STR_PAD_LEFT);
            $user_name 		 = strtoupper($appfor.$pad);
			$updata['patient_id'] = $user_name;
			$this->db->where('id',$pid);
			$this->db->update('patient_master',$updata);
		// }else{
			// $pid = $appfor;
		// }


		$clinic_appointment['user_id'] 		= $cart['shopping_cart']['items'][0]['userid'];
		$clinic_appointment['patient_id'] 	= $pid;
		$clinic_appointment['start_time'] 	= $cart['shopping_cart']['items'][0]['timing'];
		$clinic_appointment['end_time'] 	= date("H:i", strtotime('+30 minutes', strtotime($cart['shopping_cart']['items'][0]['timing'])));		
		$clinic_appointment['date'] 		= str_replace( '_', '-', $cart['shopping_cart']['items'][0]['date']);
		$clinic_appointment['consulttype'] 	= urldecode($cart['shopping_cart']['items'][0]['consulttype']);
		$clinic_appointment['consultid'] 	= $cart['shopping_cart']['items'][0]['consultid'];
		$clinic_appointment['onlineoffline'] 	= $cart['shopping_cart']['items'][0]['onlineoffline'];

		$clinic_payment['user_id'] 			= $cart['shopping_cart']['items'][0]['userid'];
		$clinic_payment['amount'] 			= $cart['shopping_cart']['items'][0]['price'];
		$clinic_payment['transaction_no'] 	= $cart['shopping_cart']['items'][0]['id'];
		$clinic_payment['transaction_id'] 	= $cart['paypal_transaction_id'];
		$clinic_payment['invoice_id'] 		= $cart['paypal_transaction_id'];
		$clinic_payment['patient_id'] 		= $pid;


		$master_payment['user_id'] 			= $cart['shopping_cart']['items'][0]['userid'];
		$master_payment['order_id'] 		= $cart['shopping_cart']['items'][0]['id'];
		$master_payment['amount'] 			= $cart['shopping_cart']['items'][0]['price'];
		$master_payment['currency'] 		= $cart['shopping_cart']['items'][0]['price'];
		$master_payment['payment_mode'] 	= 'paypal';
		$master_payment['quantity']  		= 1;
		$master_payment['tracking_id']		= $cart['paypal_transaction_id'];
		$master_payment['payer_id'] 		= $cart['paypal_payer_id'];
		$master_payment['payer_email']  	= $cart['email'];
		$master_payment['billing_name'] 	= $cart['shipping_name'];
		$master_payment['billing_city'] 	= $cart['shipping_city'];
		$master_payment['billing_state']	= $cart['shipping_state'];
		$master_payment['billing_zip']  	= $cart['shipping_zip'];
		$master_payment['billing_country']	= $cart['shipping_country_name'];
		$master_payment['billing_email']  	= $cart['email'];
		$master_payment['billing_tel']    	= $cart['phone_number'];

			
		$result = $this->payment_model->makepayment($master_payment,$clinic_payment,$clinic_appointment);
		
		
		if(empty($cart)) {
			redirect('paypal');
		}else{
			if(!is_numeric($appfor)){
				redirect('online-form/'.base64url_encode($token));	
			}else{
				$this->load->view('website/thankyou');
			}
		}

	}

	/**
	 * Order Cancelled - Pay Cancel Url
	 */
	function OrderCancelled(){
		$this->session->unset_userdata('PayPalResult');
		$this->session->unset_userdata('shopping_cart');
		$this->load->view('website/paypal/order_cancelled');
	}

}