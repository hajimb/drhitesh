<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
		$this->load->model(['common_model']);
		$this->load->helper('security');
	}

	
 	public function delete(){
        // print_r($_POST);
        $data = array('Status'=> false,'Validate' => false, 'Message' => array());
        $this->form_validation->set_rules('id', 'Send Id', 'trim|xss_clean|required|numeric');
        $this->form_validation->set_rules('module', 'Send Module', 'trim|xss_clean|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
        $this->form_validation->set_message('required', ' %s');

        if ($this->form_validation->run()) {
            $id     = $this->input->post('id');
            $module = $this->input->post('module');
            $result = $this->common_model->delete($id,$module);
            $data['Status']   = $result['status'];
            $data['Validate'] = true;
            $data['Message']  = $result['msg'];
        } else {
            foreach ($this->input->post() as $key => $value) {
                $data['Message'][$key] = form_error($key);
            }
        }
        echo json_encode($data);
    }
}
