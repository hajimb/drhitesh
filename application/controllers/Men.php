<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Men extends CI_Controller {	
	 public function __construct(){
        parent::__construct();
        
        $this->load->model([
            'website/section_model',
            'website/home_model',
            'website/setting_model'
        ]); 
        $this->load->helper('common');
    } 
 
    public function index(){

        $data['title'] = "Website Setting"; 
        #-----------Setting-------------# 
        $data['setting'] = $this->home_model->setting();
        // redirect if website status is disabled
        if ($data['setting']->status == 0) 
            redirect(base_url('login'));
        #-----------Section-------------# 
        $sections = $this->home_model->sections();
        if(!empty($sections)):
            foreach ($sections as $section) {
                $dataSection[$section->name] = [
                    'name'            => $section->name,
                    'title'           => $section->title,
                    'description'     => $section->description,
                    'featured_image'  => $section->featured_image,
                ];
            }
        endif; 
        $data['section'] = $dataSection;

        #----------Section Item---------# 
        $items = $this->home_model->items();

        if(!empty($items)):
            $sl = 0;
            foreach ($items as $item) {
                $dataItem[$item->name][$sl++] = [
                    'id'          => $item->id,
                    'name'        => $item->name,
                    'title'       => $item->title,
                    'description' => $item->description,
                    'icon_image'  => $item->icon_image,
                    'position'    => $item->position,
                    'status'      => $item->status,
                    'counter'     => $item->counter,
                    'date'        => $item->date
                ];
            }
        endif;
        $data['content']    = getcontent('Men'); 
        $data['items']    = $dataItem; 
        $data['pagename'] = 'men'; 

        
        $this->load->view('website/main',$data);
    }
 
	
	
}
