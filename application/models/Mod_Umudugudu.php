<?php


class Mod_Umudugudu extends CI_Model
{

<<<<<<< HEAD
	function abaturage()
	{
		$this->db->select('*,TIMESTAMPDIFF (YEAR, ldr_dob, CURDATE()) AS age,TIMESTAMPDIFF (MONTH, ldr_dob, CURDATE()) AS mnth,TIMESTAMPDIFF (DAY, ldr_dob, CURDATE()) AS dy');
		$this->db->from('ums_leaders');
		$this->db->join('ums_category', 'ldr_category_code=cat_cotegory_code');

		$query = $this->db->get();

=======
	function selectAbaturage(){
		$this->db->select('*');
		$this->db->from('ums_leaders');
		$query = $this->db->get();
		$query->num_rows();
>>>>>>> dceaa1f0c723483ac99b4d0317bf874a4b63388f
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
<<<<<<< HEAD
	function selectUmuganda(){
		$this->db->select('*');
		$this->db->from('ums_umuganda');
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
		$this->db->where('adm_id',$id);
=======
	function viewAdmin($id){
		$this->db->select('*');
		$this->db->from('ums_admin');
		$this->db->where('admin_id',$id);
>>>>>>> dceaa1f0c723483ac99b4d0317bf874a4b63388f
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
<<<<<<< HEAD
		$data1 = array(
			'usr_id' =>null,
			'usr_username' => $nid,
			'usr_password' => 123,
			'usr_roles_id' => 3
		);

		$this->db->insert('ums_users', $data1);

		$last_id = $this->db->insert_id();
		$data = array(
			'adm_id' =>null,
			'adm_firstname' => $firstname,
			'adm_lastname' => $lastname,
			'adm_nid' => $nid,
			'adm_phone' => $phone,
			'adm_village_code'=>1,
			'adm_user_id' =>$last_id
=======
		$data = array(
			'admin_id' =>null,
			'firstname' => $firstname,
			'lastname' => $lastname,
			'nid' => $nid,
			'phone' => $phone,
			'village_code'=>1,
			'user_id' =>1
>>>>>>> dceaa1f0c723483ac99b4d0317bf874a4b63388f
		);

		$this->db->insert('ums_admin', $data);
	}
<<<<<<< HEAD
	function insertIsibo($isibo_name, $isibo_code){
		$data = array(
			'isibo_code' =>$isibo_code,
			'isibo_name' => $isibo_name,
			'isibo_village_code' => 1
		);

		$this->db->insert('ums_isibo', $data);
	}
	function insertUmuganda($title, $description,$itariki, $abitabiriye, $abagore, $abagabo, $urubyiruko, $agaciro){
		$data = array(
			'umg_id' =>null,
			'umg_title' => $title,
			'umg_description' => $description,
			'umg_date' => $itariki,
			'umg_participant' => $abitabiriye,
			'umg_abagore' => $abagore,
			'umg_abagabo' => $abagabo,
			'umg_urubyiruko' => $urubyiruko,
			'umg_agaciro' => $agaciro,
			'umg_amafoto' => 1,
			'umg_village' => 1,
		);

		$this->db->insert('ums_umuganda', $data);
	}
	function updateAdmin($firstname, $lastname, $nid, $phone, $id){
		$data = array(
			'adm_firstname' => $firstname,
			'adm_lastname' => $lastname,
			'adm_nid' => $nid,
			'adm_phone' => $phone
		);
		$this->db->where('adm_id', $id);
=======
	function updateAdmin($firstname, $lastname, $nid, $phone, $id){
		$data = array(
			'firstname' => $firstname,
			'lastname' => $lastname,
			'nid' => $nid,
			'phone' => $phone
		);
		$this->db->where('admin_id', $id);
>>>>>>> dceaa1f0c723483ac99b4d0317bf874a4b63388f

		$this->db->update('ums_admin', $data);
		
		
	}
<<<<<<< HEAD
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
			'ldr_used_id'=>$last_id,
			'ldr_category_code' => $ubu
		);

		$this->db->insert('ums_leaders', $data);
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

	function selectPeople($id){
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
=======
>>>>>>> dceaa1f0c723483ac99b4d0317bf874a4b63388f

}
