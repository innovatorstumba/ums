<?php

class Family_Model extends CI_Model
{
    function getFamilyMembers($leaderID){
        $this->db->select('*');
        $this->db->from('ums_members');
        $this->db->where('mbr_leader_id', $leaderID);
        $query = $this->db->get();
        if ($query->num_rows() > 0){
            return $query;
        } else{
            return false;
        }
    }
}