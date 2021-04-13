<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Modal extends CI_Controller {
	public function __construct(){
        parent::__construct();
		/*cache control*/
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->load->model('website/home_model');
    }

	public function popup($param1 = '' , $param2 = '', $param3 = '', $param4 = '', $param5 = '', $param6 = '', $param7 = '', $param8 = '', $param9 = ''){	 
        $page_data=array();
		if($param1=='modal'){
	   		$page_data['result'] = $this->db->query('SELECT * FROM master_content WHERE id="'.$param2.'"')->row();
		}else if($param1=='confirmation'){
			$page_data['appdate'] 	 = str_replace('_', '-', $param2);
			$page_data['timing'] 	 = $param3;
			$page_data['appfor'] 	 = $param4;
			$page_data['first_name'] = $param5;
			$page_data['userid'] 	 = $this->session->userdata('user_id');

			$userid 	 = $this->session->userdata('user_id');
			$appdate 	 = str_replace('_', '-', $param2);
			$timing 	 = $param3;
			$appfor 	 = $param4;
			$first_name  = $param5;
			$last_name   = $param6;
			$consultationtype   = $param7;
			$onlineoffline   = $param8;
			$consultationID   = $param9;
			
			// $page_data['first_name'] = $param5;
			
			// $page_data['url'] =site_url('paypal/express_checkout/SetExpressCheckout/').'/'.$appdate.'/'.$timing.'/'.$userid.'/'.$appfor.'/'.$first_name.'/'.$last_name.'/'.$consultationtype.'/'.$onlineoffline.'/'.$consultationID;
			$page_data['url'] =site_url('paypal/express_checkout/SetExpressCheckout/').'/'.$appdate.'/'.$timing.'/'.$userid.'/'.$appfor.'/'.$first_name.'/'.$last_name.'/'.$consultationtype.'/'.$onlineoffline.'/'.$consultationID;
		}
        $this->load->view('website/modal/'.$param1,$page_data);
	}

	public function apppopup($modalname ,$title ,$apptype){	 
		$page_data               = array();
		$page_data['apptype'] 	 = $apptype;
		$this->load->view('website/modal/'.$modalname, $page_data);
	}

	public function appointment($modalname ,$title ,$apptype){	 
		$page_data               		= array();
		$page_data['consultationtype'] 	= $apptype;
		$page_data['getfees']    		= $this->home_model->getfees($apptype);

		$this->load->view('website/modal/'.$modalname, $page_data);
	}	

	public function delete($id,$tablename,$title){
        $page_data['id']      = $id;
        $page_data['table']   = $tablename;
        $page_data['message'] = urldecode($title);
        $this->load->view('admin/modal/modal_delete', $page_data,FALSE);
	}

	public function followup($appid){	 
		$page_data          = array();
		$page_data['appid'] = $appid;
		$this->load->view('website/modal/followup', $page_data);
	}

}