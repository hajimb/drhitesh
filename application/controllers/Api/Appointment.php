<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment extends CI_Controller {
   public function __construct(){
		parent::__construct();
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
    $this->load->helper('common');
    $this->load->helper('security');
    $this->load->model(['appointment_model','user_model']);
	}

  public function getslot($param1='',$param2=''){
    // echo str_replace("_","-",$param1);
		$data           = array('Response-Status' => false,'Response-Validate' => false, 'Response-Message' => array(), 'Response-Data' => '');
		$master_contact =  array();
    $client='';
    if($this->input->post('Data')){
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
    }
        
        if( $param1==''){
          $date = $postdata['datein'];
        }
        else{
          $date =  str_replace("_","-",$param1);
        }

        $datetime = DateTime::createFromFormat('Y-m-d', $date);
        $currentdate = DateTime::createFromFormat('Y-m-d H:i:s', date('Y-m-d H:i:s'));
        $currentday = strtoupper($datetime->format('D'));
        $result= $this->appointment_model->getslot($date,$currentday);
        // print_r($result);
        $slotarray=array();
        $holidayarray=array();
        $appointmentarray=array();
        $timing = $result['timing'];
        $t_rows = $result['t_rows'];
        $h_rows = $result['h_rows'];
        $holiday = $result['holiday'];
        if($t_rows > 0){
           $closed      = $timing[0]['closed'];
           $start_time  = $timing[0]['start_time'];
           $end_time    = $timing[0]['end_time'];
           $lunch_start = $timing[0]['lunch_start'];
           $lunch_end   = $timing[0]['lunch_end'];
           $time_slot   = $timing[0]['time_slot'];
        }
        if($h_rows>0){
          foreach($holiday as $data1){
            $h_starttime = $data1['start_time'];
            $h_endtime   = $data1['end_time'];

            $htime = range(strtotime($h_starttime),strtotime($h_endtime),$time_slot * 60);
            array_pop($htime);
            $holidayarray = array_merge($holidayarray,$htime);
          }

        }
        $appointment = $result['appointment'];
        $a_rows = $result['a_rows'];

        if($a_rows>0){
          foreach($appointment as $data1){
            $a_starttime = $data1['start_time'];
            $a_endtime   = $data1['end_time'];

            $atime = range(strtotime($a_starttime),strtotime($a_endtime),$time_slot * 60);
            $appointmentarray = array_merge($appointmentarray,$atime);
            array_pop($appointmentarray);
          }

        }
        
        $breaktime = range(strtotime($lunch_start),strtotime($lunch_end),$time_slot * 60);
        array_pop($breaktime);

        if($closed==0){
          $range = range(strtotime($start_time),strtotime($end_time),$time_slot * 60);
          foreach ($range as $time){
            if( !in_array($time, $breaktime) && (!in_array($time, $holidayarray)) && (!in_array($time, $appointmentarray))){
              if( !( $datetime->format('Y-m-d') == $currentdate->format('Y-m-d') &&  $time < strtotime($currentdate->format('H:i')) ) ){
                  array_push($slotarray,date("H:i",$time));
              }
            }
          }
          array_pop($slotarray);
        }
        if($client == "web"){
          $return = '<div class="time-picker"><div class="time-list-container"><div class="time-list">';
          if(count($slotarray)>0){
           foreach ($slotarray as $data1){
            $return .= '<div class="time-list-item" data-cdate="'.$date.'" data-timing="'.$data1.'"><div aria-checked="false" class="uiButton private-button private-selectable-box private-button--block time-picker-btn" tabindex="0" style=""><div class="private-selectable-box__inner"><span style="color: rgb(46, 130, 140);">'.$data1.'</span></div></div></div>';
           }
          }else{
            $return .= '<p class="text-center"><b>All Slots are booked</b></p>';
          }
          $return .= '</div></div></div>';
          $data['Response-Data']      = $return;
          $data['Response-Status']    = true;
          $data['Response-Validate']  = true;
          echo json_encode($data);
        }else if($client == "app"){
          echo json_encode($data);
        }else if($param2 == "self"){
          return $slotarray;
        }else if($param2 == "admin"){
          $opt ='';
          $opt .='<option value=" ">Select Time Slot</option>';
          foreach ($slotarray as $key => $value) {
            $opt .='<option value="'.$value.'">'.$value.'</option>';
          }
          $data['Response-Data']      = $opt;
          $data['Response-Status']    = true;
          $data['Response-Validate']  = true;
          echo json_encode($data);
        }
	}

  public function getdetail($id){
    $data = array('Response-Status' => false,'Response-Validate' => false, 'Response-Message' => array());
    $page_data['result']= $this->appointment_model->getPateintdetailByID($id);
    $this->load->view('admin/modal/modal_patientdetail', $page_data);
  }

  public function update($id){
    $data = array('Response-Status' => false,'Response-Validate' => false, 'Response-Message' => array());
    $result= $this->appointment_model->getAppByID($id);
    $page_data['result']= $result;
    $page_data['status']= getstatus();
    $page_data['slotdata']= $this->getslot($result->date,'self');
    $this->load->view('admin/modal/modal_appdetail', $page_data);
  }

  public function confirmBooking(){
    // Request 

    /*
      [consult_type] => Whatsapp Chat
      [consultid] => 3333
      [feeamount] => 
      [first_name] => Mufaddal
      [last_name] => Haji
      [timing] => 10:30
      [userId] => 3
      [adate] => 2020-12-15
      [datein] => 2020-12-15
      [consultationtype] => Online
      [client] => web
    */
      // print_r($_POST);
      $data  = array('status' => false, 'validate' => false, 'message' => array());
      $consultationtype = $this->input->post('consultationtype');

      $this->form_validation->set_rules('timing', 'Select Appointment Slot', 'trim|xss_clean|required');
      $this->form_validation->set_rules('userId', 'User Id Missing', 'trim|xss_clean|required');
      $this->form_validation->set_rules('adate', 'Appointment Date', 'trim|xss_clean|required');
      $this->form_validation->set_rules('consultationtype', 'Consultation Type', 'trim|xss_clean|required');
      if($consultationtype == 'Online'){
        $this->form_validation->set_rules('consult_type', 'Select Consult Type', 'trim|xss_clean|required');
        $this->form_validation->set_rules('consultid', 'Enter Consult Id', 'trim|xss_clean|required');
      }
      $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
      $this->form_validation->set_message('required', ' %s');

      if($this->form_validation->run()) {
        $userid = $this->input->post('userId');
        $clinic_appointment['user_id']      = $userid;
        $clinic_appointment['start_time']   = $this->input->post('timing');
        $clinic_appointment['end_time']     = date("H:i", strtotime('+30 minutes', strtotime($this->input->post('timing'))));
        $clinic_appointment['date']         = str_replace( '_', '-', $this->input->post('datein'));
        $clinic_appointment['consulttype']  = $this->input->post('consult_type');
        $clinic_appointment['consultid']    = $this->input->post('consultid');
        $clinic_appointment['onlineoffline']= $this->input->post('consultationtype');
        $clinic_appointment['followup']     = 1;
        $result = $this->appointment_model->bookAppointment($clinic_appointment, $userid);
        // send mail
        if($result==true){
          // $sendmail = $this->sendmail($id,$status,$clinic_app);
          $data['status']   = true;
          $data['validate'] = true;
          $data['message']  = "Appointment Successfully Book Wait For Approval!!!";
        }else{
          $data['status']   = false;
          $data['validate'] = true;
          $data['message']  = "Error On Booking Appointment!!!";
        }
      }else{
        foreach ($_POST as $key => $value) {
          $data['message'][$key] = form_error($key);
          // $data['message']['f'] = validation_errors();
        }
      }
      echo json_encode($data);
  }

  public function edit(){
    // print_r($_POST);exit();
    // echo $this->input->post('status');
    $data       = array('Response-Status' => false,'Response-Validate' => false, 'Response-Message' => array());
  
    $clinic_app = array();
    
    // slottime=12%3A30&changedate=2018-07-20&status=1&apptime=10%3A30&id=1
        $this->form_validation->set_rules('status', 'Status', 'trim|xss_clean|required');
        $this->form_validation->set_rules('apptime', 'Appointment Time', 'trim|xss_clean|required');
        $this->form_validation->set_rules('changedate', 'Appointment Date', 'trim|xss_clean|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
        $this->form_validation->set_message('required', 'Enter %s');

        if($this->form_validation->run()) {  
          $time       = strtotime($this->input->post('apptime'));
          $endTime    = date("H:i", strtotime('+30 minutes', $time));
          $status                   = $this->input->post('status');
          $clinic_app['confirm']    = $status;
          $clinic_app['start_time'] = $this->input->post('apptime');
          $clinic_app['end_time']   = $endTime;
          $clinic_app['date']       = $this->input->post('changedate');
          $id                       = $this->input->post('id');
          $result = $this->appointment_model->edit($clinic_app,$id);
          // send mail
          if($result==true){
            // $sendmail = $this->sendmail($id, $status, $clinic_app);
            $data['Response-Status']   = true;
            $data['Response-Validate'] = true;
            $data['Response-Message']  = "Appointment Detail Successfully Updated!!!";
          }else{
            $data['Response-Status']   = false;
            $data['Response-Validate'] = true;
            $data['Response-Message']  = "Error On Updating Appointment Detail!!!";
          }
        }else{
          foreach ($_POST as $key => $value) {
            $data['Response-Status']   = true;
            $data['Response-Validate'] = false;
            $data['Response-Message'][$key] = form_error($key);
          }
            // $data['Response-Message']['f'] = validation_errors();
        }
        echo json_encode($data);
  }

 public function sendmail($id, $status, $clinic_app){
    $userdetail   = $this->user_model->getuserdetailFromappointment($id);
    $statusdetail = $this->user_model->getstatus($status);
    $rows = count($userdetail);
    if($rows>0){
        $name   = $userdetail->first_name.' '.$userdetail->middle_name.' '.$userdetail->last_name;
        $useremail  = $this->session->userdata('email');
        $usermobile = $this->session->userdata('contact');
        $appstatus  = $statusdetail->status;
        $appdate    = $clinic_app['date'];
        $apptime    = $clinic_app['start_time'].' to '.$clinic_app['end_time'];
        $apptype    = $userdetail->onlineoffline;
        if($appstatus=="Confirm" || $appstatus=="Postponded"){
          if($apptype=="online"){
            $appmsg = "Please be ready 15 minutes prior to the apppintment time.";
          }else{
            $appmsg = "Please be present at the clinic 15 minutes prior to the apppintment time.";
          }
        }else if($appstatus=="Cancel"){
            $appmsg = "Consultation Fees If paid will be refunded in your account within 7 - 10 working days.";
        }
        if($useremail!=''){
          $msg = $this->config->item('email_appointment_status');
          $msg = str_replace("{#name}", $name, $msg);
          $msg = str_replace("{#appdate}", $appdate, $msg);
          $msg = str_replace("{#apptime}", $apptime, $msg);
          $msg = str_replace("{#appstatus}", $appstatus, $msg);
          $msg = str_replace("{#apptype}", $apptype, $msg);
          $msg = str_replace("{#appmsg}", $appmsg, $msg);
          $data['msg'] = $msg;
          $body = $this->load->view('email/email', $data, true);
          $rst = sendemail($useremail,'Appointment '.$appstatus, $body);
        }
        if($usermobile!=''){
          $sms_msg = $this->config->item('sms_appointment_status');
          $sms_msg = str_replace("{#name}", $name, $sms_msg);
          $sms_msg = str_replace("{#appdate}", $appdate, $sms_msg);
          $sms_msg = str_replace("{#apptime}", $apptime, $sms_msg);
          $sms_msg = str_replace("{#appstatus}", $appstatus, $sms_msg);
          $sms_msg = str_replace("{#apptype}", $apptype, $sms_msg);
          $sms_msg = str_replace("{#appmsg}", $appmsg, $sms_msg);
          $rst1 = sendsms($usermobile,$sms_msg);
        }
        return $rst;
    }
 }

  public function confirm(){
    $data = array('Response-Status' => false,'Response-Validate' => false, 'Response-Message' => array());
    $id   = $this->input->post('id');
    $result= $this->appointment_model->ConfirmByID($id);

    if($result>0){
        $data['Response-Status']   = true;
        $data['Response-Validate'] = true;
        $data['Response-Message']  = "Appointment Confirm";
      }else{
        $data['Response-Status']   = false;
        $data['Response-Validate'] = true;
        $data['Response-Message']  = "Error On Confirm";
      }
   echo json_encode($data);
  }


  public function getlist() {
    $results = $this->appointment_model->read();
    $data    = array();
    $no    = 0;
    foreach ($results  as $r) {
      $ctype='';
      if($r->onlineoffline=='online'){
        $ctype = '<span class="label label-success">Online</span>';
        if($r->consulttype!=''){
          $ctype .='<br><span class="label label-black">'.$r->consulttype.' ('.$r->consultid.')</span>';
        }
      }else if($r->onlineoffline=='personally'){
        $ctype = '<span class="label label-primary">Personally</span>';
      }

      $no++;
      $row    = array();
      $row[]  = $r->patientid;
      $row[]  = '<a href="'.base_url().'patient/detail/'.$r->patient_id.'/'.$r->followup.'">'.ucwords(strtolower($r->first_name.' '.$r->middle_name.' '.$r->last_name)).'</a>';
      $row[]  = DateTime::createFromFormat('Y-m-d', $r->date)->format('d/m/Y') ." ".date("H:i", strtotime($r->start_time)).' - '.date("H:i", strtotime($r->end_time));
      $row[]  = $ctype;
      $row[]  = $r->emailaddress;
      $row[]  = '+'.$r->country_code.' '.$r->mobile;
      $row[]  = $r->status;
     /* $row[] = '<div class="btn-group">
                   <!--button type="button" class="btn btn-info">Action</button-->
                  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button><ul class="dropdown-menu" role="menu">
                    <li><a href="'.base_url().'patient/detail/'.$r->id.'">View Pateint Detail</a></li>
                  </ul></div>';*/
      $data[] = $row;
        }
        echo json_encode(array('data' => $data));
    }

    public function addfollowup(){

      $data  = array('status' => false, 'validate' => false, 'message' => array());

      $this->form_validation->set_rules('followup', 'Select Appointment Slot', 'trim|xss_clean|required');
      $this->form_validation->set_rules('appid', 'User Id Missing', 'trim|xss_clean|required');
      $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
      $this->form_validation->set_message('required', ' %s');

      if($this->form_validation->run()) {
        $master_followup['app_id']  = $this->input->post('appid');
        $master_followup['followup']= $this->input->post('followup');
        $master_followup['ftype']   = $this->input->post('ftype');
        $result = $this->appointment_model->addfollowup($master_followup);
        // send mail
        if($result==true){
          $data['status']   = true;
          $data['validate'] = true;
          $data['message']  = "Followup Successfully Added!!!";
        }else{
          $data['status']   = false;
          $data['validate'] = true;
          $data['message']  = "Error On Submitting Followup!!!";
        }
      }else{
        foreach ($_POST as $key => $value) {
          $data['message'][$key] = form_error($key);
          $data['message']['f'] = validation_errors();
        }
      }
      echo json_encode($data);
    }

    public function getconsultlistCalendar() {
        $this->load->model('consult_model','consult');
        $start = $this->input->get("start");
        $end = $this->input->get("end");

        $startdt = new DateTime('now'); // setup a local datetime
        $startdt->setTimestamp($start); // Set the date based on timestamp
        $format = $startdt->format('Y-m-d');

        $enddt = new DateTime('now'); // setup a local datetime
        $enddt->setTimestamp($end); // Set the date based on timestamp
        $format2 = $enddt->format('Y-m-d');
        $events = $this->consult->consultlistCalendar($format, $format2);
        // print $this->db->last_query();
        $data_events = array();

        foreach($events->result() as $r) { 

            $data_events[] = array(
                "id" => $r->id,
                "title" => $r->onlineoffline.' '.$r->start_time.' to '.$r->end_time,
                "start_time" => $r->start_time,
                "end_time" => $r->end_time,
                "consulttype" => $r->consulttype,
                "start" => $r->date,
                "end" => $r->date,
            );
        }

        echo json_encode(array("events" => $data_events));
        exit();
    
    }
}
