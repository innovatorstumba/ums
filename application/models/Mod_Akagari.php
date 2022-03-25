<?php 


class Mod_Akagari extends CI_Model
{
    public function imidugudu($id)
    {
		$this->db->select('*');
		$this->db->from('ums_village');
		$this->db->join('ums_cell','cell_code = c_cell_code ');
		$this->db->where('c_cell_code', $id);
		$query = $this->db->get();
		$query->num_rows();
		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
    }

    public function akagali($id)
    {
		$this->db->select('*');
		$this->db->from('ums_village');
		$this->db->join('ums_cell','cell_code = c_cell_code ');
		$this->db->where('village_code', $id);
		$query = $this->db->get();
		$query->num_rows();
		if ($query->num_rows()>0){
			return $query;
		}
		else{
			return false;
		}
    }

    public function umugandaAll($id)
    {
		$this->db->select('*');
		$this->db->from('ums_umuganda');
		$this->db->join('ums_village','umg_village = village_code ');
		$this->db->join('ums_cell','cell_code = c_cell_code ');
		$this->db->where('c_cell_code', $id);
		$query = $this->db->get();
		$query->num_rows();
		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
    }

    public function umugandaOne($id)
    {
		$this->db->select('*');
		$this->db->from('ums_umuganda');
		$this->db->join('ums_village','umg_village = village_code');
		$this->db->where('village_code', $id);
		$query = $this->db->get();
		$query->num_rows();
		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
    }
	function ibikorwa($id, $cat)
	{
		$this->db->select('*');
		$this->db->from('ums_ibikorwa_doc');
		$this->db->join('ums_village', 'ibi_village=village_code');
		$this->db->join('ums_cell','cell_code = c_cell_code ');
		$this->db->where('c_cell_code', $id);
		$this->db->where('ibi_category', $cat);

		$query = $this->db->get();

		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}
	public function selectF($var)
	{
		$this->db->select('*');
		$this->db->from('ums_leaders');
		$this->db->join('ums_village', 'ldr_village_code=village_code');
		$this->db->join('ums_cell','cell_code = c_cell_code ');
		$this->db->where('c_cell_code', $var);
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

	function abaturage($var)
	{
		$this->db->select('*,TIMESTAMPDIFF (YEAR, ldr_dob, CURDATE()) AS age,TIMESTAMPDIFF (MONTH, ldr_dob, CURDATE()) AS mnth,TIMESTAMPDIFF (DAY, ldr_dob, CURDATE()) AS dy');
		$this->db->from('ums_members');
		$this->db->join('ums_leaders', 'mbr_leader_id=ldr_leader_id');
		$this->db->join('ums_category', 'ldr_category_code=cat_cotegory_code');
		$this->db->join('ums_ubwishingizi', 'mbr_insurance=ubw_id');
		$this->db->join('ums_village', 'ldr_village_code=village_code');
		$this->db->join('ums_cell','cell_code = c_cell_code ');
		$this->db->where('c_cell_code', $var);

		$query = $this->db->get();

		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}
}