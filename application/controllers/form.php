<?php
class form extends CI_controller{
	
	function search(){
		$age = $this->input->post('age');
		$term = $this->input->post('term');
		$inv = $this->input->post('investment');

		$this->load->model("mform");
		$data['search'] = $this->mform->msearch($age, $term, $inv);

		$this->load->view('header');

		$this->load->view('result',$data);

	}
}
?>