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

 

  public function loadView($page_name, $data) {
      $this->load->view('template/header');
      $this->load->view('user/' . $page_name, $data);
      $this->load->view('template/footer');
  }
}
?>