<?php

class LoginModel extends CI_Model
{
    function validateLogin($username, $password){
        $this->db->select('ums_users.usr_id,ums_users.usr_isibo, ums_users.usr_username, ums_users.usr_password, ums_users.usr_roles_id, ums_roles.roles_id, ums_roles.roles_name');
        $this->db->where('ums_users.usr_username', $username);
        $this->db->where('ums_users.usr_password', $password);
        $this->db->from('ums_users');
        $this->db->join('ums_roles', 'ums_users.usr_roles_id = ums_roles.roles_id');
        $query = $this->db->get('');
        if($query->num_rows() > 0){
            //true
            return $query;
        }else{
            //false
            return null;
        }
    }
    //Get leader data based on user ID
    function selectLeaderByUserId($userId){
        $this->db->select('*');
        $this->db->where('ldr_used_id', $userId);
        $this->db->from('ums_leaders');
        $query = $this->db->get('');
        if ($query->num_rows() > 0){
            //true
            return $query;
        } else{
            //false
            return null;
        }
    }

    //Get Admin data based on user ID
    function selectAdminByUserId($userId){
        $this->db->select('*');
        $this->db->where('adm_user_id', $userId);
        $this->db->from('ums_admin');
        $query = $this->db->get('');
        if ($query->num_rows() > 0){
            //true
            return $query;
        } else{
            //false
            return null;
        }
    }
}