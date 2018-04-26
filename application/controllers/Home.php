<?php
class Home extends CI_controller{
	

	    public function __construct() {
        parent::__construct();
        
        $this->load->model('Policy_model');    
    }

    public function index() {
        $data['types']=$this->uri->segment(4);
        $data['type_list'] = $this->Policy_model->get_all_types();
        $this->loadView('home',$data);
       // $this->loadView('compareForm');
    }

    public function loadView($page_name,$data) {
        $this->load->view('template/header');
        $this->load->view($page_name,$data);
        
            $this->load->view('policy/compareForm');
        
        $this->load->view('template/footer');
    }
}