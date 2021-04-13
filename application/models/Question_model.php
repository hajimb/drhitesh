<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Question_model extends CI_Model {



	public function __construct(){

		parent::__construct();

	}

	public function answering($master_question,$id){

		$this->db->where('id',$id);

		$this->db->update('master_question',$master_question);

		if($this->db->affected_rows()>0){

	 	   $result = array("status" => true,"success" => true,"msg" => "Answer Succefully Submittred");

		}else{

			$result = array("status" => false,"success" => true,"msg" => "Error While Questioning");

		}

		return $result;

	}



	public function newquestion($master_user, $master_question, $user_id, $client){

		if($user_id == 0){
        
			$this->db->trans_begin();

			$isuserexist = $this->isuserexist($master_user);

			if($isuserexist==0){

				$insert		 = $this->db->insert('master_user',$master_user);

				$user_id 	 = $this->db->insert_id();

				$master_question['user_id'] = $user_id;

				$config    = Array(
					'protocol' => 'sendmail',
					'smtp_host' => 'sexologist.purnamhealth.com',
					'smtp_port' => 25,
					'smtp_user' => 'do-not-reply@sexologist.purnamhealth.com',
					'smtp_pass' => 'yPm4yu3B=ieR',
					'smtp_timeout' => '4',
					'charset'   => 'iso-8859-1'
				);
				$this->load->library('email', $config);
				$this->email->set_newline("\r\n");
				$this->email->set_mailtype("html");

				$body = $this->load->view('website/password',$master_user,TRUE);

				//$this->email->set_header('MIME-Version', '1.0; charset=utf-8');
				//$this->email->set_header('Content-type', 'text/html');
				$this->email->from('do-not-reply@sexologist.purnamhealth.com', 'Purnam Health Center');
				$this->email->to($master_user['email']);
				$this->email->subject('Login Detail Of Purnam Health Center');
				//$body = $message;
				$this->email->message($body);

				if($this->email->send()){
					$data['Response-Status']   = true;
					$data['Response-Validate'] = true;
					$data['Response-Message']  = "Success";
					$result = array("status" => true,"success" => true,"msg" => 'Successfully registered','user_id'=>0);
				}else{
					
					$result = array("status" => false,"success" => false,"msg" => $this->email->print_debugger(), 'user_id'=>0);
				}


			}else{

				$master_question['user_id'] = $isuserexist;

			}

			$affrows = $this->db->affected_rows();

			if($affrows == 1){

				$insert = $this->db->insert('master_question',$master_question);

				if ($this->db->trans_status() === FALSE){

				    $this->db->trans_rollback();

				    $result = array("status" => false,"success" => true,"msg" => "Roll back Error",'user_id'=>0);

				}

				else{

				    $this->db->trans_commit();

				    $result = array("status" => true,"success" => true,"msg" => "Question Successfully Submitted",'user_id'=>$user_id);

						if($client == "web"){

              			$newdata = array(

								'user_id' 	=> $user_id,

								'logintype'	=> 'normal',

								'user_name' => $master_user['name'],

								'logged_in' => TRUE,

							);

  						$this->session->set_userdata($newdata);

  						$data2['user_id']    = $result['user_id'];

  						$data2['user_type']  = 'normal';

  						$data2['ip'] 		     = $this->input->ip_address();

  						$this->db->insert("master_log", $data2);

            }

				}

			}else{

				$result = array("status" => false,"success" => true,"msg" => "Error While Submitting Question",'user_id'=>0);

			}

		}else{

			$master_question['user_id'] = $user_id;

			$insert = $this->db->insert('master_question',$master_question);



			$affected_rows = $this->db->affected_rows();

			if($affected_rows==1){

				$result = array("status" => true,"success" => true,"msg" => "Question Successfully Submitted");

			}else{

				$result = array("status" => false,"success" => true,"msg" => "Error While Submitting Question");

			}

		}

		return $result;

	}



	public function isuserexist($master_user){



		$where = array('name' => $master_user['name'],'contact' => $master_user['contact'],'email' => $master_user['email']);

		$query =$this->db->where($where)->from("master_user")->count_all_results();

		/*$this->db->select('id');

		$this->db->from('master_user');

		$this->db->where($where);

		$query = $this->db->get();*/

		return $query;

	}



	public function getuserId($master_user){

		$where = array('name' => $master_user['name'],'contact' => $master_user['contact'],'email' => $master_user['email']);

		$this->db->select('id');

		$this->db->from('master_user');

		$this->db->where($where);

		$query = $this->db->row();

		return $query->id;

	}

	public function getQuestionById($param1){



		$sql = "SELECT mu.name,mu.age,mu.marital_status,mq.question,mq.id,mq.ispublic ,mq.answer FROM master_user mu, master_question mq WHERE mq.user_id = mu.id AND mq.id = ?";

		$runquery = $this->db->query($sql,array($param1))->row();

		return $runquery;

	}

	public function getquestionlist($param1,$page='',$param2='',$user_id=''){

		if($param2==''){

			if($param1 == 'all'){

				$sql = "SELECT mq.id, mq.anonymous, mu.name,mq.question,mq.ispublic,mq.answer, mq.added_date FROM master_user mu, master_question mq WHERE mq.user_id = mu.id AND mq.deleted = 0";

			}else if($param1 == 'answered'){

				$sql = "SELECT mq.id, mq.anonymous, mu.name,mq.question,mq.ispublic,mq.answer, mq.added_date FROM master_user mu, master_question mq WHERE mq.user_id = mu.id AND mq.deleted = 0 AND mq.answer is NOT NULL";

			}else if($param1 == 'unanswered'){

				$sql = "SELECT mq.id, mq.anonymous, mu.name,mq.question,mq.ispublic ,mq.answer, mq.added_date FROM master_user mu, master_question mq WHERE mq.user_id = mu.id AND mq.deleted = 0 AND mq.answer is NULL";

			}

		}else{

			$offset = 10 * $page;
			$limit 	= 10;
			if($user_id == 0){

				$sql = "SELECT mq.id,mq.anonymous,mu.name,mq.question,mq.answer,mq.ispublic,mq.added_date FROM master_user mu, master_question mq WHERE mq.user_id = mu.id AND mq.deleted = 0 AND mq.approved = 1 AND mq.answer IS NOT NULL AND mq.ispublic = 'Public' ORDER BY  mq.added_date DESC LIMIT $offset, $limit ";			
			}else{

				$sql = "SELECT mq.id,mq.anonymous,mu.name,mq.question,mq.answer,mq.ispublic,mq.added_date FROM master_user mu, master_question mq WHERE mq.user_id = mu.id AND mq.deleted = 0 AND mq.approved = 1 AND mq.answer IS NOT NULL AND mq.user_id = ".$user_id." ORDER BY mq.ispublic, mq.added_date DESC LIMIT $offset, $limit ";
			}
		}



		$runquery = $this->db->query($sql)->result_array();

		return $runquery;

	}

	 public function getCountry($page){

        $offset = 10*$page;

        $limit = 10;

        $sql = "select * from countries limit $offset ,$limit";

        $result = $this->db->query($sql)->result();

        return $result;

    }



}

