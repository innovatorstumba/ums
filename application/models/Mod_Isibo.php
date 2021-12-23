<?php


class Mod_Isibo extends CI_Model
{
	function registerHeader($fn, $ln, $dob, $id,$sex,$ubu, $isano, $insur, $phone, $houseNumber, $uname, $password, $email="none"){
		$data1 = array(
			'usr_id' =>null,
			'usr_username' => $uname,
			'usr_password' => $password,
			'usr_roles_id' => 2
		);

		$this->db->insert('ums_users', $data1);

		$last_id = $this->db->insert_id();
		$data = array(
			'ldr_leader_id' =>null,
			'ldr_firstname' => $fn,
			'ldr_lastname' => $ln,
			'ldr_phone' => $phone,
			'ldr_email'=>$email,
			'ldr_gender' =>$sex,
			'ldr_dob' => $dob,
			'ldr_nid' => $id,
			'ldr_profile' => null,
			'ldr_village_code'=>2,
			'ldr_insurance'=>$insur,
			'ldr_used_id'=>$last_id,
			'ldr_category_code' => $ubu
		);

		$this->db->insert('ums_leaders', $data);
	}

	function registerMember($fname, $lname, $tel, $nid,$email,$dob, $isano, $sex, $id,$ins){

		$data = array(
			'mbr_member_id' =>null,
			'mbr_firstname' => $fname,
			'mbr_lastname' => $lname,
			'mbr_phone' => $tel,
			'mbr_nid'=>$nid,
			'mbr_email' =>$email,
			'mbr_dob' => $dob,
			'mbr_insurance' => $ins,
			'mbr_relationship' => $isano,
			'mbr_gender' => $sex,
			'mbr_leader_id'=>$id
		);

		$this->db->insert('ums_members', $data);
	}

	function selectCategory(){
		$this->db->select('*');
		$this->db->from('ums_category');
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
		$this->db->from('ums_ubwishingizi');
		$query = $this->db->get();
		$query->num_rows();
		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}

	function selectFamily(){
		$this->db->select('*');
		$this->db->from('ums_leaders');
		$query = $this->db->get();
		$query->num_rows();
		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}

	function selectFamily1($id){
		$this->db->select('*');
		$this->db->from('ums_leaders');
		$this->db->where('ldr_leader_id', $id);
		$query = $this->db->get();
		$query->num_rows();
		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}

	function selectFamilyDetails($id){
		$this->db->select('*');
		$this->db->from('ums_members');
		$this->db->join('ums_leaders', 'mbr_leader_id = ldr_leader_id');
		$this->db->join('ums_ubwishingizi', 'mbr_insurance = ubw_id');
		$this->db->where('mbr_leader_id', $id);
		$query = $this->db->get();
		$query->num_rows();
		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}

	function selectPeaple($id){
		$this->db->select('*');
		$this->db->from('ums_leaders');
		$this->db->where('ldr_gender', $id);
		$query = $this->db->get();

		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}

	function selectYouth(){
		$this->db->select('*,TIMESTAMPDIFF (YEAR, ldr_dob, CURDATE()) AS age');
		$this->db->from('ums_leaders');
		$query = $this->db->get();

		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}

	function selectForAnn($id=12){
		$this->db->select('*');
		$this->db->from('ums_admin');
		$this->db->join('ums_users', 'adm_user_id=usr_id');
		$this->db->join('ums_isibo', 'usr_isibo=isibo_code');
		$this->db->where('usr_id', $id);

		$query = $this->db->get();

		if ($query->num_rows()>0){
			return $query;
		}
		else{
			return false;
		}
	}

	function abaturage()
	{
		$this->db->select('*,TIMESTAMPDIFF (YEAR, ldr_dob, CURDATE()) AS age,TIMESTAMPDIFF (MONTH, ldr_dob, CURDATE()) AS mnth,TIMESTAMPDIFF (DAY, ldr_dob, CURDATE()) AS dy');
		$this->db->from('ums_leaders');
		$this->db->join('ums_category', 'ldr_category_code=cat_cotegory_code');
		$this->db->join('ums_ubwishingizi', 'ldr_insurance=ubw_id');

		$query = $this->db->get();

		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}

	function itangazo($t, $b, $p, $isibo, $owner){
		$data1 = array(
			'ama_id' =>null,
			'ama_title' => $t,
			'ama_desc' => $b,
			'ama_file' => $p,
			'ama_category' => "ayaleta",
			'ama_isibo' => $isibo,
			'ama_created_by' => $owner,
			'ama_created_on' => gmdate("l jFY h:i:s A")
		);

		$this->db->insert('ums_amatangazo', $data1);
	}

	function selectIbyaranzwe($id){
		$this->db->select('*');
		$this->db->from('ums_amatangazo');
		$this->db->join('ums_users', 'ama_created_by=usr_id');
		$this->db->join('ums_isibo', 'ama_isibo =isibo_code');
		$this->db->where('isibo_code', $id);
		$query = $this->db->get();

		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}

}
