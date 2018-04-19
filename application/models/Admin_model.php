<?php
class Admin_model extends CI_model{
  public function register_admin($admin){
    $this->db->insert('admin', $admin);
  }

  public function login_admin($email,$pass){
    echo $email;
    echo $pass;
    $this->db->select('*');
    $this->db->from('admin');
    $this->db->where('email',$email);
    $this->db->where('password',$pass);
    if($query=$this->db->get())
    { 
      return $query->row_array();
    }
    else{
      return false;
    }
  }

  public function list_admin($id) {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('id', $id);
        $query = $this->db->get();
        if ($query) {
            return $query->result();
        } else {
            return false;
        }
    }

  public function email_check($email){
    $this->db->select('*');
    $this->db->from('admin');
    $this->db->where('email',$email);
    $query=$this->db->get();
    if($query->num_rows()>0){
      return false;
    }
    else{
      return true;
    }
  }
}
?>