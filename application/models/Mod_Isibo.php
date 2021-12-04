<?php


class Mod_Isibo extends CI_Model
{
	function insert($fn, $ln, $dob, $id,$sex,$ubu, $isano, $insur, $phone, $houseNumber, $uname, $password, $email="none"){
		$data = array(
			'leader_id' =>null,
			'firstname' => $fname,
			'lastname' => $lname,
			'phone' => $phone,
			'email'=>$dept,
			'gender' =>null,
			'dob' => $fname,
			'nid' => $lname,
			'profile' => $regno,
			'vilage_code'=>$dept,
			'used_id' =>null,
			'category' => $fname
		);

		$this->db->insert('leaders', $data);
	}

	function selectCategory(){
		$this->db->select('*');
		$this->db->from('category');
		$query = $this->db->get();
		$query->num_rows();
		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}

	function selectInsurance(){
		$this->db->select('*');
		$this->db->from('ubwishingizi');
		$query = $this->db->get();
		$query->num_rows();
		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}
}
