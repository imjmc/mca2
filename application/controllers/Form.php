<?php
class Form extends CI_controller{
	
	function search(){
		$age = (int)$this->input->post('age');
		$term = (int)$this->input->post('term');
		$inv = (int)$this->input->post('investment');
        $ptype = $this->input->post('policy_type');

		$this->load->model("Form_model");
		$data['search'] = $this->Form_model->msearch($age, $term, $inv, $ptype);

		$this->loadView('policy/result', $data,'policy/compareform');
	}
	public function loadView($page_name,$data,$compareform) {
        $this->load->view('template/header');
        /*
        if($compareform){
           
            $this->load->view('policy/compareForm');
            echo '</div>';
        }
        */
        $this->load->view($page_name,$data);
        $this->load->view('template/footer');
    }
    public function orderreceived(){
    	if( $this->session->userdata('admin_id')){
    	$id = $this->uri->segment('3');
    	$order = array(
            'policy_id' => $id,
            'order_by' =>  $this->session->userdata('admin_id'),
            'date' => date("Y/m/d")
            
        );
        $this->load->model("Form_model");
        $this->Form_model->add_order($order);

    	$data['msg'] = "Received";
    	$this->loadView('policy/thankYouPage',$data,'');
    }
    else
    {
    	$this->session->set_userdata('policy_id',$this->uri->segment('3'));
    		redirect(base_url() . "user");
    }
    }
}
?>