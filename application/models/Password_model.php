<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Password_model extends CI_Model {

    public function __construct(){
        parent::__construct();
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->load->library('encryption');
    }
    public function getUserInfoByEmail($email)   {
       $q = $this->db->get_where('master_user', array('email' => $email), 1);
       if($this->db->affected_rows() > 0){
           $row = $q->row();
           return $row;
       }else{
           return false;
       }
   }
    public function insertToken($user_id)
      {
          $token = substr(sha1(rand()), 0, 30);
          $date = date('Y-m-d');

          $string = array(
                  'token'=> $token,
                  'user_id'=>$user_id,
                  'created'=>$date
              );
          $query = $this->db->insert_string('master_token',$string);
          $this->db->query($query);
          return $token . $user_id;

      }

      public function isTokenValid($token)
      {
         $tkn = substr($token,0,30);
         $uid = substr($token,30);

          $q = $this->db->get_where('master_token', array(
              'token' => $tkn,
              'user_id' => $uid), 1);

          if($this->db->affected_rows() > 0){
              $row = $q->row();

              $created    = $row->created;
              $createdTS  = strtotime($created);
              $today      = date('Y-m-d');
              $todayTS    = strtotime($today);

              if($createdTS != $todayTS){
                  return false;
              }

              $user_info = $this->getUserInfo($row->user_id);
              return $user_info;

          }else{
              return false;
          }

      }
      public function updatePassword($post)
    {
        $this->db->where('id', $post['user_id']);
        $this->db->update('master_user', array('password' => $post['password']));
        $success = $this->db->affected_rows();

        if(!$success){
            $result = array("status" => false,"success" => true,"msg" => "Error While Reset Password");
        }else{
          $result = array("status" => true,"success" => true,"msg" => "Password Successfully Reset");
        }
        return $result;
    }
    public  function getUserInfo($id)
    {
        $q = $this->db->get_where('master_user', array('id' => $id), 1);
        if($this->db->affected_rows() > 0){
            $row = $q->row();
            return $row;
        }else{
            error_log('no user found getUserInfo('.$id.')');
            return false;
        }
    }

}
?>
