
<?php

class Policy_model extends CI_model {

    public function insert_policy($policy) {
        $this->db->insert('policies', $policy);
    }

    public function list_company_policy($id) {
        $this->db->select('*');
        $this->db->from('policies');
        $this->db->where('c_id', $id);
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

}
