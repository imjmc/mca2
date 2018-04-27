<?php
class Form_model extends CI_model{

	function msearch($age, $term, $inv, $ptype){
		if($age && $term && $inv && $ptype){
		
		//$this->db->where($age "BETWEEN min_age AND max_age");
		//$query = $this->db->get_where('policies', array('min_age'=>$age));
			/*

			$sql="SELECT * FROM `policies` WHERE  ";

			if($age){
				$sql .=" OR (min_age <= $age AND max_age >=$age )  ";
			}

			if($term){
				$sql.=" OR (term like $term) ";
			}

			if($inv){
				$sql .=" OR (inv_per_year like $inv) ";
			}
			if($ptype=="All") {
				$sql = " 1 = 1"
			}
			else
			{
				$sql .= " OR (policy_type_id = $ptype)";
			}
			*/
			if($ptype==0){
				$sql="SELECT policies.id,policies.name,policies.inv_per_year, policies.expected_return, policies.term, companies.name as cname FROM policies inner join companies on policies.company_id = companies.id WHERE (min_age >= $age AND max_age <=$age ) or (term = $term) or (inv_per_year = $inv) ";
			}
			else
			{
			$sql="SELECT policies.id,policies.name,policies.inv_per_year, policies.expected_return, policies.term, companies.name as cname FROM policies inner join companies on policies.company_id = companies.id WHERE ((min_age >= $age AND max_age <=$age ) or (term = $term) or (inv_per_year = $inv)) and (policy_type_id = $ptype)";
		}

		}else{

			$sql="SELECT policies.id,policies.name,policies.inv_per_year, policies.expected_return, policies.term, companies.name as cname FROM policies inner join companies on policies.company_id = companies.id  ";
		}
			$query = $this->db->query($sql);
			//echo $this->db->last_query();exit;
			return $query;



	}
	function add_order($order){
		 $this->db->insert('orders', $order);
	}
}
?>