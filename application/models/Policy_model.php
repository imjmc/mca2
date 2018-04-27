
<?php

class Policy_model extends CI_model {

    public function insert_policy($policy) {
        $this->db->insert('policies', $policy);
    }

    public function list_company_policy($id) {
        $this->db->select('*');
        $this->db->from('policies');
        $this->db->where('company_id', $id);
        $query = $this->db->get();
        if ($query) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function name_check($name) {
        $this->db->select('*');
        $this->db->from('policies');
        $this->db->where('name', $name);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return false;
        } else {
            return true;
        }
    }

    public function get_all_types(){
        $this->db->select('*');
        $this->db->from('policy_type');
       
        $query = $this->db->get();
        if ($query) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function get_policy($id){
        $this->db->select('*');
        $this->db->from('policies');
        $this->db->where('id',$id);
        $query = $this->db->get();
        if ($query) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function update_policy($policy,$id) {
        $this->db->where('id',$id);
        $this->db->update('policies', $policy);
        return true;     
    }

    public function deletePolicy($id){
        $this->db->where('id',$id);
        $this->db->delete('policies');
        return true;

    }

    public function get_policy_by_type($id){
        // $this->db->select('*');
        // $this->db->from('policies');
        // $this->db->where('policy_type_id',$id);


        $this->db->select('policies.name AS policies_name,
                          companies.name AS companies_name, companies.logo as logo, policies.id, policies.inv_per_year, policies.term, policies.expected_return', 'policies.policy_type_id', );
        $this->db->from('policies');
        $this->db->join('companies', 'companies.id = policies.company_id');
        $this->db->where('policy_type_id',$id);


        $query = $this->db->get();
        if ($query) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function get_type($id){
        $this->db->select('*');
        $this->db->from('policy_type');
        $this->db->where('id',$id);
        $query = $this->db->get();
        if ($query) {
            return $query->result();
        } else {
            return false;
        }
    }

}
