<?php
/**
* 
*/
class Products extends CI_controller{

	public function __construct() {
        parent::__construct();
        $this->load->model('Products_model');    
    }
	
	public function listProducts(){

		$data['products'] = $this->Products_model->listProducts();
        $this->loadView('products', $data);
		# code...
	}

	public function loadView($page_name, $data) {
        $this->load->view('template/header');
        $this->load->view($page_name, $data);
        $this->load->view('template/footer');
    }
}

?>