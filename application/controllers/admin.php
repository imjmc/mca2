<?php

class Admin extends CI_Controller {

  public function __construct(){
    parent::__construct();
  	$this->load->helper('url');
  	$this->load->model('Admin_model');
  }

  public function index()
  {
    $data = [];
    $this->loadView('login', $data);
  }

  public function register(){
    $admin=array(
      'email'=>$this->input->post('email'),
      'password'=>md5($this->input->post('password')),
    );

    $email_check=$this->Admin_model->email_check($admin['email']);

    if($email_check){
      $this->Admin_model->register_admin($admin);
      $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
      redirect('admin/login');
    }
    else{
      $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
      redirect('admin');
    }
  }

  public function register_view(){
    $data = [];
    $this->loadView('register', $data);
  }

  function detail(){
    $admin_login=array(
      'email'=>$this->input->post('email'),
      'password'=>md5($this->input->post('password'))
    );
    $data=$this->Admin_model->login_admin($admin_login['email'],$admin_login['password']);

    if($data)
    {
      $this->session->set_userdata('admin_id',$data['id']);
      redirect(base_url() . 'company/list', 'refresh');
    }
    else{
      $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
      redirect(base_url() . 'admin/login', 'refresh');

    }
  }

  public function profile() {
        $data['admin_id'] = $this->session->userdata('admin_id');
        if (!$this->session->userdata('admin_id')) {
            redirect(base_url().'admin', 'refresh');
        }

        $data['admin_details'] = $this->Admin_model->list_admin($data['admin_id']);
        $this->loadView('detail', $data);
    }


  public function admin_logout(){
    $this->session->sess_destroy();
    redirect(base_url().'admin', 'refresh');
  }

  public function loadView($page_name, $data) {
      $this->load->view('home/template/header');
      $this->load->view('admin/' . $page_name, $data);
      $this->load->view('home/template/footer');
  }
}
?>