<?php

class User extends CI_Controller {

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
      'type'=>'visitor'
    );

    $email_check=$this->Admin_model->email_check($admin['email']);

    if($email_check){
      $this->Admin_model->register_admin($admin);
      $this->session->set_flashdata('success_msg', 'Registered successfully. Now login to your account.');
      redirect('user');
    }
    else{
      $this->session->set_flashdata('error_msg', 'Email already exists. Try logging in instead?');
      redirect('user');
    }
  }

  public function register_view(){
    $data = [];
    $this->loadView('register', $data);
  }
 

  public function loadView($page_name, $data) {
      $this->load->view('template/header');
      $this->load->view('user/' . $page_name, $data);
      $this->load->view('template/footer');
  }
}
?>