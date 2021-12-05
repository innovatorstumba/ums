<?php


class Mod_Umudugudu extends CI_Model
{

	function selectAbaturage(){
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
	function selectAdmin(){
		$this->db->select('*');
		$this->db->from('ums_admin');
		$query = $this->db->get();
		$query->num_rows();
		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}
	function viewAdmin($id){
		$this->db->select('*');
		$this->db->from('ums_admin');
		$this->db->where('admin_id',$id);
		$query = $this->db->get();
		$query->num_rows();
		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}
	function insertAdmin($firstname, $lastname, $nid, $phone){
		$data = array(
			'admin_id' =>null,
			'firstname' => $firstname,
			'lastname' => $lastname,
			'nid' => $nid,
			'phone' => $phone,
			'village_code'=>1,
			'user_id' =>1
		);

		$this->db->insert('ums_admin', $data);
	}
	function updateAdmin($firstname, $lastname, $nid, $phone, $id){
		$data = array(
			'firstname' => $firstname,
			'lastname' => $lastname,
			'nid' => $nid,
			'phone' => $phone
		);
		$this->db->where('admin_id', $id);

		$this->db->update('ums_admin', $data);
		
		
	}

}
