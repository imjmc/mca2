<?php
class Admin extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Admin_model');
  }

  public function index()
  {
    $data['types'] = 'Admin';
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
      redirect('admin');
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

    if($data['id'])
    {
      $this->session->set_userdata('admin_id',$data['id']);

      if($data['type']=='admin'){
        redirect(base_url() . 'Admin/view_orders');
      }
      if( $this->session->userdata('policy_id')){
        redirect(base_url() . 'Form/orderreceived/' . $this->session->userdata('policy_id') , 'refresh');
      }
      else
      {
      redirect(base_url() , 'refresh');
    }
    }
    else{
      
      $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
      if($data['type']=='admin'){
        redirect(base_url() . 'Admin', 'refresh');
      }else{
        redirect(base_url() . 'User', 'refresh');
      }

    }
  }

  public function view_orders(){

        if (!$this->session->userdata('admin_id')) {
            redirect(base_url().'Admin', 'refresh');
        }

        $data['order_details'] = $this->Admin_model->list_orders();
        $this->loadView('vieworder', $data);
  }
  public function profile() {
        $data['admin_id'] = $this->session->userdata('admin_id');
        if (!$this->session->userdata('admin_id')) {
            redirect(base_url().'Admin', 'refresh');
        }

        $data['admin_details'] = $this->Admin_model->list_admin($data['admin_id']);
        $this->loadView('detail', $data);
    }


  public function admin_logout(){
    $this->session->sess_destroy();
    redirect(base_url(), 'refresh');
  }

  public function loadView($page_name, $data) {
      $this->load->view('template/header');
      $this->load->view('user/' . $page_name, $data);
      $this->load->view('template/footer');
  }
}
?>