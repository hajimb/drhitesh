<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consult extends CI_Controller {
	public function __construct(){
		parent::__construct();
		/*cache control*/
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
		$this->load->model([
            'website/section_model',
            'website/home_model',
            'website/setting_model'
        ]);
        $this->load->model('consult_model');
        $this->load->helper('common');
	}

	public function index(){
	    $page_data['heading']    = 'Sexologist';
	    $page_data['pagename']   = 'consult';
	    $page_data['page_title'] = 'consultation | Sexologist';
	    $page_data['page_meta']  = '';
	    $page_data['setting'] 	 = $this->home_model->setting();
		$this->load->view('website/main', $page_data);
	}

	public function online(){
	    $page_data['consultationtype']  = 'online';
	    $page_data['heading']    		= 'Sexologist';
	    $page_data['pagename']   		= 'consult-online';
	    $page_data['page_title'] 		= 'Consult Online | Sexologist';
	    $page_data['appfor']     		= getappointmentfor($this->session->userdata('user_id'));
	    $page_data['setting']    		= $this->home_model->setting();
	    $page_data['getfees']    		= $this->home_model->getfees($page_data['consultationtype']);
		$this->load->view('website/main', $page_data);
	}

	public function personally(){
		 // print_r($_SESSION);
	    $page_data['consultationtype']  = 'personally';
	    $page_data['heading']    		= 'Sexologist';
	    $page_data['pagename']   		= 'consult-personally';
	    $page_data['page_title'] 		= 'Consult Personally | Sexologist';
	    $page_data['page_meta']  		= '';
	    $page_data['setting']    		= $this->home_model->setting();
	    $page_data['getfees']    		= $this->home_model->getfees($page_data['consultationtype']);
		$this->load->view('website/main', $page_data);
	}

	public function getconsultlist($param1 = '') {
        $results = $this->consult_model->getconsultlist($param1);
        // print $this->db->last_query();
        $data 	 = array();
		$no 	 = 0;
        foreach ($results  as $r) {
        	
			$no++;
			$ctype='';
			$cmode='';
			if($r['onlineoffline']=='online'){
				$ctype = '<span class="label label-success">Online</span>';
				if($r['consulttype']!=''){
					$cmode ='<span >'.$r['consulttype'].' ('.$r['consultid'].')</span>';
				}
			}else if($r['onlineoffline']=='personally'){
				$ctype = '<span class="label label-primary">Personally</span>';
			}
			$row    = array();
			$row[]  = $no;
			$name   = ucwords(strtolower($r['first_name'])).' '.ucwords(strtolower($r['middle_name'])).' '.ucwords(strtolower($r['last_name']));
			// $row[] = '<div class="btn-group">
   //                <button type="button" class="btn btn-info btn-xs dropdown-toggle" data-toggle="dropdown">Action
   //                  <span class="caret"></span>
   //                  <span class="sr-only">Toggle Dropdown</span>
   //                </button><ul class="dropdown-menu" role="menu">
   //                  <li><a href="javascript:void(0)" class="GetDetail" data-id="'.$r['patient_id'].'">View Pateint Detail</a></li>
   //                  <li><a href="javascript:void(0)" class="edit" data-id="'.$r['id'].'">Edit</a></li>
   //                  <li><a href="javascript:void(0)" class="confirm" data-id="'.$r['id'].'">Confirm</a></li>
   //                </ul></div>';
			$row[]  = '<a href="'.base_url().'patient/detail/'.$r['id'].'">'.$name.'</a>';
			$row[]  = DateTime::createFromFormat('Y-m-d', $r['date'])->format('d/m/Y') ." ".date("H:i", strtotime($r['start_time'])).' - '.date("H:i", strtotime($r['end_time']));
			// $row[]  = DateTime::createFromFormat('Y-m-d H:i:s', $r['added_time'])->format('d/M/Y');
			//$row[]  = date("H:i", strtotime($r['start_time'])).' - '.$r['end_time'];
			// $row[]  = $r['consulttype'];
			// $row[]  = $r['consultid'];
			$row[]  = $r['confirm'];
			$row[]  = $ctype;
			$row[]	= $cmode;
			// $row[]  = '<a class="btn btn-info GetDetail" data-id="'.$r['id'].'" href="javascript:void(0)"> Edit</a> <a class="btn btn-danger delete" data-id="'.$r['id'].'" href="javascript:void(0)" data-modal="confirmation"> Delete</a>';	
			$data[] = $row;
        }
        echo json_encode(array('data' => $data));
    }
}