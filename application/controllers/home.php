<?php
class home extends CI_controller{
	public function index(){
		$this->load->view("header");
		$this->load->view("home");

	}
}