<?php

class Company extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Company_model');    
    }

    public function index() {
        $data = [];
        if($this->session->userdata('company_id')){
            redirect(base_url() . 'policy/policy_list');
        }
        else
        {
            $this->loadView('login', $data);
        
        }
    }

    public function register_company() {

        $company = array(
            'name' => $this->input->post('company_name'),
            'address' => $this->input->post('company_address'),
            'phone' => $this->input->post('company_phone'),
            'fax' => $this->input->post('company_fax'),
            'email' => $this->input->post('company_email'),
            'password' => md5($this->input->post('company_password')),
            'url' => $this->input->post('company_url'),
            'logo' => $this->input->post('company_logo')

        );

        //Image upload starts
        /*

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);
        */


        $email_check = $this->Company_model->email_check($company['company_email']);

        if ($email_check) {
            $this->Company_model->register_company($company);
            $this->session->set_flashdata('success_msg', 'Registered successfully. Now login to your account.');
            redirect('company');
        } else {

            $this->session->set_flashdata('error_msg', 'Error occured, Try again.');
            redirect('company');
        }
    }

    public function register_view() {
        $data = [];
        $this->loadView('register', $data);
    }

    function login_company() {
        $company_login = array(
            'company_email' => $this->input->post('company_email'),
            'company_password' => md5($this->input->post('company_password'))
        );
        $data = $this->Company_model->login_company($company_login['company_email'], $company_login['company_password']);
        if ($data) {
            $this->session->set_userdata('company_id', $data['id']);
            // redirect(base_url() . 'policy/policy_list', 'refresh');
            redirect(base_url() . 'company/dashboard', 'refresh');

        } else {
            $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
           redirect(base_url() . 'company', 'refresh');
        }
    }

    public function dashboard(){
        $data['company_id'] = $this->session->userdata('company_id');
        if (!$this->session->userdata('company_id')) {
            redirect(base_url().'company', 'refresh');
        }

        $data = [];
        $this->loadView('dashboard', $data);
    }

    public function company_profile() {
        $data['company_id'] = $this->session->userdata('company_id');
        if (!$this->session->userdata('company_id')) {
            redirect(base_url().'admin', 'refresh');
        }

        $data['company_details'] = $this->Company_model->list_company($data['company_id']);
        $this->loadView('company_profile', $data);
    }

    public function company_list() {
        if (!$this->session->userdata('admin_id')) {
            redirect(base_url().'admin', 'refresh');
        }

        $data['companies'] = $this->Company_model->list_all_company();
        $this->loadView('list', $data);
    }

    public function company_logout() {
        $this->session->sess_destroy();
        redirect(base_url(), 'refresh');
    }

    public function loadView($page_name, $data) {
        $this->load->view('template/header');
        $this->load->view('company/' . $page_name, $data);
        $this->load->view('template/footer');
    }

}

?>