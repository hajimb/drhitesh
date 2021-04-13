<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller']      = 'home'; 
//$route['login']                   = 'dashboard';
$route['logout']                  = 'dashboard/logout';

$route['slider/(:num)']           = 'home/slider/$1';
$route['slider/(:num)/(:any)']    = 'home/slider/$1';

$route['details/(:num)']          = 'home/details/$1';
$route['details/(:num)/(:any)']   = 'home/details/$1'; 

$route['patient_info/(:any)']     = 'website/patient/profile/$1';
$route['appointment_info/(:any)'] = 'website/appointment/preview/$1';

$route['forgot-password']   	  = "Password/index";
$route['consult-online']   		  = "Consult/online";
$route['pricing-policy']   		  = "Pricingpolicy";
$route['privacy-policy']   		  = "Privacypolicy";
$route['refund-policy']   		  = "Refundpolicy";
$route['terms-conditions']        = "Termscondition";
$route['consult']   		  	  = "Consult/index";
$route['premarriage-counselling'] = "Marriage/PremarriageCounselling";
$route['consult-personally']   	  = "Consult/personally";
$route['ask-sexologist']   		  = "Sexologist/askquestion";
$route['online-form']   		  = "Online";
$route['online-form/(:any)']   	  = "Online/index/$1";
$route['case-study/create']   	  = "Casestudy/create";
$route['case-study']   	  		  = "Casestudy/index";
$route['physical-examination'] 	  = "Physicalexamination/index";
$route['manage-account'] 	  	  = "users/account";
$route['user-profile'] 	  	      = "users/profile";
$route['medical-history'] 	  	  = "users/preliminaries";
$route['consultation'] 	  	      = "users/consultation";
$route['users-payment'] 	  	  = "users/payment";

$route['404_override']            = 'Custom';
$route['translate_uri_dashes']    = FALSE;
