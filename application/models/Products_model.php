<?php
/**
* 
*/
class Products_model extends CI_model{
	
	public function listProducts(){
		
		// $this->db->select('*');
		// $this->db->from('policies');
		// $this->db->join('companies', "companies.id = policies.company_id");
		$this->db->select('policies.name AS policies_name,
                          companies.name AS companies_name, policies.id, policies.inv_per_year, policies.term, policies.expected_return');
        $this->db->from('policies');
        $this->db->join('companies', 'companies.id = policies.company_id');
		$query = $this->db->get();
        if ($query) {
            return $query->result();
        } else {
            return false;
        }
	}
}
?>