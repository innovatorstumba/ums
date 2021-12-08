<?php

class LoginModel extends CI_Model
{
    function validateLogin($username, $password){
        $this->db->select('ums_users.user_id, ums_users.username, ums_users.password, ums_users.roles_id, ums_roles.roles_id, ums_roles.roles_name');
        $this->db->where('ums_users.username', $username);
        $this->db->where('ums_users.password', $password);
        $this->db->from('ums_users');
        $this->db->join('ums_roles', 'ums_users.roles_id = ums_roles.roles_id');
        $query = $this->db->get('');
        if($query->num_rows() > 0){
            //true
            return $query;
            //return true;
        }else{
            //false
            return false;
        }
    }
    function selectLeaderByUserId($userId){
        
    }
}