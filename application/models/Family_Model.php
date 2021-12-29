<?php

class Family_Model extends CI_Model
{
    /*Function to get Current date in UNIX TimeStamp format*/
    function getCurrentUnixDate(){
        date_default_timezone_set('Africa/Kigali');
        $currentDate = strtotime(date('Y-m-d H:i:s'));
        return $currentDate;
    }

    /*Function to Select Village based on Isibo ID*/
    function getVillageByIsibo($isibo_id){
        $this->db->select('*');
        $this->db->from('ums_isibo');
        $this->db->where('isibo_code', $isibo_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0){
            return $query;
        } else{
            return null;
        }
    }

    /*Function to get All Family members of a certain Leader*/
    function getFamilyMembers($leaderID){
        $this->db->select('*');
        $this->db->from('ums_members');
        $this->db->where('mbr_leader_id', $leaderID);
        $query = $this->db->get();
        if ($query->num_rows() > 0){
            return $query;
        } else{
            return null;
        }
    }

    //Function to select Amatangazo in Isibo
    function getAmatangazo($isibo){
        $this->db->select('*');
        $this->db->from('ums_amatangazo');
        $this->db->join('ums_users', 'ama_created_by = usr_id');
        $this->db->join('ums_admin', 'adm_user_id = usr_id');
        $this->db->where('ama_isibo', $isibo);
        $query = $this->db->get();
        if ($query->num_rows() > 0){
            return $query;
        } else{
            return null;
        }
    }

    //Function to save a guest information
    function registerGuest($leader_id, $firstname, $lastname, $phone, $nid, $address,$regDate){
        $data = array(
            'gue_id' => null,
            'gue_ldr_id' => $leader_id,
            'gue_firstname' => $firstname,
            'gue_lastname' => $lastname,
            'gue_phone' => $phone,
            'gue_nid' => $nid,
            'gue_address' => $address,
            'gue_registered_date' => $regDate
        );
        $query = $this->db->insert('ums_guests', $data);
        if ($query){
            return true;
        } else{
            return false;
        }
    }

    //Function to get all guest in a Leader family
    function getGuestsByLeaderId($leader_id){
        $this->db->select('*');
        $this->db->from('ums_guests');
        $this->db->where('gue_ldr_id', $leader_id);
        $this->db->order_by('gue_status asc','gue_registered_date desc');

        $query = $this->db->get('');
        if ($query->num_rows() > 0){
            return $query;
        } else{
            return null;
        }
    }

    //Functunction to declare a guest who has gone
    function dismissGuestById($guest_id, $dismissDate){
        //$query = $this->db->query("UPDATE ums_guests SET gue_status = 'Dismissed' WHERE  = ", $guest_id);
        $data = array('gue_status' => 'Dismissed', 'gue_dismissed_date' => $dismissDate);
        $this->db->where('gue_id', $guest_id);
        $query = $this->db->update('ums_guests', $data);
        if ($query){
            return true;
        } else{
            return false;
        }
    }

    //Function to view umuganda report
    function getUmugandaReport($isibo){
        $isiboData = $this->getVillageByIsibo($isibo);
        if ($isiboData != null){
            $row = $isiboData->row();
            $umudugudu = $row->isibo_village_code;
            $this->db->select('*');
            $this->db->from('ums_umuganda');
            $this->db->where('umg_village', $umudugudu);
            $this->db->order_by('umg_date desc');

            $query = $this->db->get('');
            if ($query->num_rows() > 0){
                return $query;
            } else{
                return null;
            }
        } else{
            return null;
        }
    }

    //Function to select Announcements in Isibo
    function getAnnouncements(){
        $this->db->select('*');
        $this->db->from('ums_announcement');
        $this->db->join('ums_leaders', 'ann_leader_id = ldr_leader_id');
        $query = $this->db->get();
        if ($query->num_rows() > 0){
            return $query;
        } else{
            return null;
        }
    }

    //Function to save Ibyaranzwe / Announcement
    function saveAnnouncement($leader_id, $title,$body, $pic, $regDate){
        $data = array(
            'ann_leader_id' => $leader_id,
            'ann_title' => $title,
            'ann_body' => $body,
            'ann_pic' => $pic,
            'ann_created_date' => $regDate
        );
        $query = $this->db->insert('ums_announcement', $data);
        if ($query){
            return true;
        } else{
            return false;
        }
    }
}