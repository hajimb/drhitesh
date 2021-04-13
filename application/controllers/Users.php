<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    private $userid;
    private $patient_id;
    public function __construct()
    {
        parent::__construct();
        
        if ($this->session->userdata('logged_in') != 1 || $this->session->userdata('logintype') != 'normal' )
        redirect(base_url(), 'refresh');

        $this->load->helper(['master','common']);
        $this->load->model([
            'website/setting_model',
            'website/home_model',
            'users/users_model',
            'patient_model'
        ]);
        $this->userid = $this->session->userdata('user_id');
        $this->patient_id = $this->session->userdata('patient_id');
    }
 
    public function account()
    {
        $page_data['heading']    = 'Manage Account';
        $page_data['pagename']   = 'manage-account';
        $page_data['page_title'] = 'Manage Account';
        $page_data['page_meta']  = '';
        $page_data['setting']    = $this->home_model->setting();
        $this->load->view('website/users', $page_data);
    } 

    public function profile()
    {
        $page_data['heading']    = 'Manage Profile';
        $page_data['pagename']   = 'manage-profile';
        $page_data['page_title'] = 'Manage Profile';
        $page_data['marital_status'] = getmaritalstatus();
        $page_data['gender'] = gender();
        $page_data['page_meta']  = '';
        $page_data['setting']    = $this->home_model->setting();
        $page_data['result']     = $this->users_model->getById($this->userid);
        $this->load->view('website/users', $page_data);
    } 

    public function preliminaries()
    {
        $page_data['heading']    = 'Medical History';
        $page_data['pagename']   = 'manage-preliminaries';
        $page_data['page_title'] = 'Manage preliminaries';
        $result                  = $this->patient_model->detail_by_id($this->userid, 'user_id');
        $page_data['result']     = $result;
        $page_data['medical']    = $this->patient_model->patient_medical_by_id($result->id);
        $page_data['lifestyle']  = $this->patient_model->patient_lifestyle_by_id($result->id);
        $page_data['page_meta']  = '';
        $page_data['setting']    = $this->home_model->setting();
        
        $this->load->view('website/users', $page_data);
    } 

    public function consultation()
    {
        $page_data['heading']    = 'Consultation';
        $page_data['pagename']   = 'manage-consultation';
        $page_data['page_title'] = 'Consultation';
        $page_data['consultation']  = $this->patient_model->patient_consultation($this->userid);
        $page_data['page_meta']  = '';
        $page_data['setting']    = $this->home_model->setting();
        $page_data['appfor']     = getappointmentfor($this->userid);
        // $page_data['getfees']    = $this->home_model->getfees($page_data['consultationtype']);
        
        
        $this->load->view('website/users', $page_data);
    } 


    public function payment()
    {
        $page_data['heading']    = 'Payment';
        $page_data['pagename']   = 'manage-payment';
        $page_data['page_title'] = 'Payment';
        $page_data['setting']    = $this->home_model->setting();
        
        $page_data['payment']    = $this->users_model->payment($this->userid);
        $page_data['page_meta']  = '';
        
        $this->load->view('website/users', $page_data);
    } 


    public function reports()
    {
        $page_data['heading']    = 'Reports';
        $page_data['pagename']   = 'manage-report';
        $page_data['page_title'] = 'Reports';
        $page_data['setting']    = $this->home_model->setting();
        $page_data['patient_id']    = $this->patient_id;
        $page_data['userid']    = $this->userid;
        $page_data['page_meta']  = '';
        
        $this->load->view('website/users', $page_data);
    } 

    public function createdropdown($display,$id,$format,$table,$select,$class='',$multiple='',$selected=''){
        $data   = getmaster($id,$format,$table,$select);
        $js     = 'id="'.$display.'"  class='.$class.' '. $multiple;
        return form_dropdown($display,  $data, $selected,$js);
    }

}
