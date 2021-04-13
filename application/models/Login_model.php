<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login_model extends CI_Model {
    
    public function __construct(){
        parent::__construct();
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->load->library('encryption');
    }
	public function login($data,$param1=''){
		//writeToFile($param1,"Login Model - Login - param1");
		if($param1==''){
			$query   = "SELECT * FROM master_admin WHERE username = ?";
			//writeToFile($query,"Login Model - Login - if Query ");
			$runtwo	 = $this->db->query($query, array($data['username']));  	
			$row     = $runtwo->row(); 
	        $numrows = $runtwo->num_rows();
	        if($numrows === 1){
				$rp    = $row->password;
				$dp    = $this->encryption->decrypt($rp);
				if($row->activated){
					if($dp == $data['password']){
							$newdata = array(
								'user_id' 	=> $row->id,
								'logintype'	=> 'admin',
								'user_name' => $row->username,
								'logged_in' => TRUE,
							);
						$this->session->set_userdata($newdata);
						$data2['user_id']    = $row->id;
						$data2['user_type']  = 'admin';
						$data2['ip'] = $this->input->ip_address();
						$this->db->insert("master_log", $data2); 
						$result = array('msg' => 'Successfully Login!','status' => true, 'success' => true,'user_id'=>$row->id);	
					}else{
						$result = array('msg' => 'Incorrect Password!','status' => false, 'success' => true,'user_id'=>0);	
					}
				}else{
					$result = array('msg' => 'User Account Not Activated!','status' => false, 'success' => true,'user_id'=>0);	
				}        
			}else{
				$result = array('msg' => 'No Record Found!','status' => false, 'success' => true,'user_id'=>0);	
			}
		}else{
			$query   = "SELECT * FROM master_user WHERE contact = ? OR email = ?";
			//writeToFile($query,"Login Model - Login - else Query ");
			$runtwo	 = $this->db->query($query, array($data['username'],$data['username']));  	
			$row     = $runtwo->row(); 
	        $numrows = $runtwo->num_rows();
	        if($numrows === 1){
				$rp    = $row->password;
				$dp    = $this->encryption->decrypt($rp);
				if($dp == $data['password']){
					if($row->activated == 1){
							$newdata = array(
								'user_id' 	=> $row->id,
								'logintype'	=> 'normal',
								'email' => $row->email,
								'contact' => $row->contact,
								'first_name' => $row->first_name,
								'middle_name' => $row->middle_name,
								'last_name' => $row->last_name,
								'patient_id' => $row->patient_id,
								'user_name' => $row->name,
								'logged_in' => TRUE,
							);
						$this->session->set_userdata($newdata);
						$data2['user_id']    = $row->id;
						$data2['user_type']  = 'normal';
						$data2['ip'] 		 = $this->input->ip_address();
						$this->db->insert("master_log", $data2); 
						$result = array('msg' => 'Successfully Login!','status' => true, 'success' => true,'user_id'=>$row->id);	
					}else{
						$result = array('msg' => 'User Account Not Activated!','status' => false, 'success' => true,'user_id'=>0);	
						
					}
				}else{
					$result = array('msg' => 'Incorrect Password!','status' => false, 'success' => true,'user_id'=>0);
				}        
			}else{
				$result = array('msg' => 'Invalid Email OR Contact No.','status' => false, 'success' => true,'user_id'=>0);	
			}
		}
		return $result;
    }
	public  function GetUserById($id)
    {
        $query   = "SELECT id as user_id, first_name,last_name,middle_name,email,contact,gender,age,marital_status FROM master_user WHERE id = ? ";
        $runtwo	 = $this->db->query($query, array($id));
        $row     = $runtwo->row();
        $numrows = $runtwo->num_rows();
        if($numrows === 1){
           return $runtwo->row();
        }else{
          return false;
        }
        
    }
}
?>