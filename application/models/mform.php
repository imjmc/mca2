<?php
class mform extends CI_model{

	function msearch($age, $term, $inv){
		if(isset($search)){
		
		//$this->db->where($age "BETWEEN min_age AND max_age");
		
		//$query = $this->db->get_where('policies', array('min_age'=>$age));
			$query = $this->db->query("SELECT * FROM `policies` WHERE (min_age <= $age AND max_age >=$age ) OR (term = $term) OR (inv_per_year=$inv)");

			var_dump($query);

			//return $query;
		}


	}
}
?>