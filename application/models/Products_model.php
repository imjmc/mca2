<?php
/**
* 
*/
class Products_model extends CI_model{
	
	public function listProducts(){
		
		$this->db->select('*');
		$this->db->from('policies');
		$query = $this->db->get();
        if ($query) {
            return $query->result();
        } else {
            return false;
        }
	}
}
?>