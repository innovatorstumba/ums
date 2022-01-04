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

    //Function to save New Transaction
    function saveTransaction($trs_id, $leader_id, $title,$months, $amount, $regDate){
        $data = array(
            'trs_id' => $trs_id,
            'trs_leader_id' => $leader_id,
            'trs_title' => $title,
            'trs_months_count' => $months,
            'trs_amount' => $amount,
            'trs_date' => $regDate
        );
        $query = $this->db->insert('ums_transactions', $data);
        if ($query){
            return true;
        } else{
            return false;
        }
    }

    //Functunction to Update a Transaction Status
    function updateTransaction($trs_id, $status){
        //$query = $this->db->query("UPDATE ums_guests SET gue_status = 'Dismissed' WHERE  = ", $guest_id);
        $data = array('trs_status' => $status);
        $this->db->where('trs_id ', $trs_id);
        $query = $this->db->update('ums_transactions', $data);
        if ($query){
            return true;
        } else{
            return false;
        }
    }

    /*Function to get All Umutekano Payments of a certain Leader*/
    function getUmutekanoByLeaderId($leaderID){
        $this->db->select('*');
        $this->db->from('ums_umutekano');
        $this->db->join('ums_transactions', 'umt_transaction_id = trs_id');
        $this->db->where('umt_leader_id', $leaderID);
        $this->db->order_by('umt_date desc');
        $query = $this->db->get();
        if ($query->num_rows() > 0){
            return $query;
        } else{
            return null;
        }
    }

    //Function to get transaction by transaction ID
    function getTransactionById($transaction){
        $this->db->select('*');
        $this->db->from('ums_transactions');
        $this->db->where('trs_id', $transaction);

        $query = $this->db->get('');
        if ($query->num_rows() > 0){
            return $query;
        } else{
            return null;
        }
    }
    //Function to save a transaction for umutekano
    function umutekanoSaved($leader_id, $trs_id, $year, $pay_month, $months, $regDate){
        $data = array(
            'umt_leader_id' => $leader_id,
            'umt_transaction_id' => $trs_id,
            'umt_year' => $year,
            'umt_pay_month' => $pay_month,
            'umt_months' => $months,
            'umt_date' => $regDate
        );
        $query = $this->db->insert('ums_umutekano', $data);
        if ($query){
            return true;
        } else{
            return false;
        }
    }
    function saveUmutekanoTrans($leader_id, $transaction, $month){
        $regDate = $this->getCurrentUnixDate();
        $month_arr = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
        $query = $this->getUmutekanoByLeaderId($leader_id);
        if ($query != null){
            $transData = $query->row();
        } else{
            $transData = null;
        }

        if ($transData == null){
            $year = date('Y');
            $mons = '';
            if ($month > 1){
                for ($x = 0; $x < $month; $x++){
                    $mons .= $month_arr[$x].',';
                }
                $this->umutekanoSaved($leader_id, $transaction, $year, $month, substr($mons, 0, -1), $regDate);
            }else{
                $mon = 'January';
                $this->umutekanoSaved($leader_id, $transaction, $year, $month, $mon, $regDate);
            }
        } else{
            $mon = $transData->umt_pay_month;
            $year = $transData->umt_year;
            $mons = '';
            if(($mon + $month) > 12){
                $newYear = $year + 1;
                $newMonth = ($mon + $month) - 12;
                $prevMons = '';
                if ($newMonth > 1){
                    for ($y = $mon; $y < ($month-$newMonth); $y++){
                        $prevMons .= $month_arr[$y].',';
                    }
                    for ($x = 0; $x < $newMonth; $x++){
                        $mons .= $month_arr[$x].',';
                    }
                    $this->umutekanoSaved($leader_id, $transaction, $year, 12, substr($prevMons, 0, -1), $regDate);
                    $this->umutekanoSaved($leader_id, $transaction, $newYear, $newMonth, substr($mons, 0, -1), $regDate);
                } else{
                    for ($y = $mon; $y < ($month-$newMonth); $y++){
                        $prevMons .= $month_arr[$y].',';
                    }
                    $monthData = $month_arr[$newMonth];
                    $this->umutekanoSaved($leader_id, $transaction, $year, 12, substr($prevMons, 0, -1), $regDate);
                    $this->umutekanoSaved($leader_id, $transaction, $newYear, $newMonth, $monthData, $regDate);
                }
            } else{
                if ($month > 1){
                    for ($x = $mon; $x < ($mon+$month); $x++){
                        $mons .= $month_arr[$x].',';
                    }
                    $this->umutekanoSaved($leader_id, $transaction, $year, ($mon+$month), substr($mons, 0, -1), $regDate);
                }else{
                    $monthData = $month_arr[($mon+$month)];
                    $this->umutekanoSaved($leader_id, $transaction, $year, ($mon+$month), $monthData, $regDate);
                }
            }
        }
    }

    /*Function to get All Isuku Payments of a certain Leader*/
    function getIsukuByLeaderId($leaderID){
        $this->db->select('*');
        $this->db->from('ums_isuku');
        $this->db->join('ums_transactions', 'isuku_transaction_id = trs_id');
        $this->db->where('isuku_leader_id', $leaderID);
        $this->db->order_by('isuku_date desc');
        $query = $this->db->get();
        if ($query->num_rows() > 0){
            return $query;
        } else{
            return null;
        }
    }
    //Functions to save a transaction for Isuku
    function isukuSaved($leader_id, $trs_id, $year, $pay_month, $months, $regDate){
        $data = array(
            'isuku_leader_id' => $leader_id,
            'isuku_transaction_id' => $trs_id,
            'isuku_year' => $year,
            'isuku_pay_month' => $pay_month,
            'isuku_months' => $months,
            'isuku_date' => $regDate
        );
        $query = $this->db->insert('ums_isuku', $data);
        if ($query){
            return true;
        } else{
            return false;
        }
    }
    function saveIsukuTrans($leader_id, $transaction, $month){
        $regDate = $this->getCurrentUnixDate();
        $month_arr = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
        $query = $this->getIsukuByLeaderId($leader_id);
        if ($query != null){
            $transData = $query->row();
        } else{
            $transData = null;
        }

        if ($transData == null){
            $year = date('Y');
            $mons = '';
            if ($month > 1){
                for ($x = 0; $x < $month; $x++){
                    $mons .= $month_arr[$x].',';
                }
                $this->isukuSaved($leader_id, $transaction, $year, $month, substr($mons, 0, -1), $regDate);
            }else{
                $mon = 'January';
                $this->isukuSaved($leader_id, $transaction, $year, $month, $mon, $regDate);
            }
        } else{
            $mon = $transData->umt_pay_month;
            $year = $transData->umt_year;
            $mons = '';
            if(($mon + $month) > 12){
                $newYear = $year + 1;
                $newMonth = ($mon + $month) - 12;
                $prevMons = '';
                if ($newMonth > 1){
                    for ($y = $mon; $y < ($month-$newMonth); $y++){
                        $prevMons .= $month_arr[$y].',';
                    }
                    for ($x = 0; $x < $newMonth; $x++){
                        $mons .= $month_arr[$x].',';
                    }
                    $this->isukuSaved($leader_id, $transaction, $year, 12, substr($prevMons, 0, -1), $regDate);
                    $this->isukuSaved($leader_id, $transaction, $newYear, $newMonth, substr($mons, 0, -1), $regDate);
                } else{
                    for ($y = $mon; $y < ($month-$newMonth); $y++){
                        $prevMons .= $month_arr[$y].',';
                    }
                    $monthData = $month_arr[$newMonth];
                    $this->isukuSaved($leader_id, $transaction, $year, 12, substr($prevMons, 0, -1), $regDate);
                    $this->isukuSaved($leader_id, $transaction, $newYear, $newMonth, $monthData, $regDate);
                }
            } else{
                if ($month > 1){
                    for ($x = $mon; $x < ($mon+$month); $x++){
                        $mons .= $month_arr[$x].',';
                    }
                    $this->isukuSaved($leader_id, $transaction, $year, ($mon+$month), substr($mons, 0, -1), $regDate);
                }else{
                    $monthData = $month_arr[($mon+$month)];
                    $this->isukuSaved($leader_id, $transaction, $year, ($mon+$month), $monthData, $regDate);
                }
            }
        }
    }

    /*Function to get All Ejo Heza Payments of a certain Leader*/
    function getEjohezaByLeaderId($leaderID){
        $this->db->select('*');
        $this->db->from('ums_ejoheza');
        $this->db->join('ums_transactions', 'ejo_transaction_id = trs_id');
        $this->db->where('ejo_leader_id', $leaderID);
        $this->db->order_by('ejo_date desc');
        $query = $this->db->get();
        if ($query->num_rows() > 0){
            return $query;
        } else{
            return null;
        }
    }
    //Functions to save a transaction for Ejo Heza
    function ejohezaSaved($leader_id, $trs_id, $year, $pay_month, $months, $regDate){
        $data = array(
            'ejo_leader_id' => $leader_id,
            'ejo_transaction_id' => $trs_id,
            'ejo_year' => $year,
            'ejo_pay_month' => $pay_month,
            'ejo_months' => $months,
            'ejo_date' => $regDate
        );
        $query = $this->db->insert('ums_ejoheza', $data);
        if ($query){
            return true;
        } else{
            return false;
        }
    }
    function saveEjohezaTrans($leader_id, $transaction, $month){
        $regDate = $this->getCurrentUnixDate();
        $month_arr = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
        $query = $this->getEjohezaByLeaderId($leader_id);
        if ($query != null){
            $transData = $query->row();
        } else{
            $transData = null;
        }

        if ($transData == null){
            $year = date('Y');
            $mons = '';
            if ($month > 1){
                for ($x = 0; $x < $month; $x++){
                    $mons .= $month_arr[$x].',';
                }
                $this->ejohezaSaved($leader_id, $transaction, $year, $month, substr($mons, 0, -1), $regDate);
            }else{
                $mon = 'January';
                $this->ejohezaSaved($leader_id, $transaction, $year, $month, $mon, $regDate);
            }
        } else{
            $mon = $transData->umt_pay_month;
            $year = $transData->umt_year;
            $mons = '';
            if(($mon + $month) > 12){
                $newYear = $year + 1;
                $newMonth = ($mon + $month) - 12;
                $prevMons = '';
                if ($newMonth > 1){
                    for ($y = $mon; $y < ($month-$newMonth); $y++){
                        $prevMons .= $month_arr[$y].',';
                    }
                    for ($x = 0; $x < $newMonth; $x++){
                        $mons .= $month_arr[$x].',';
                    }
                    $this->ejohezaSaved($leader_id, $transaction, $year, 12, substr($prevMons, 0, -1), $regDate);
                    $this->ejohezaSaved($leader_id, $transaction, $newYear, $newMonth, substr($mons, 0, -1), $regDate);
                } else{
                    for ($y = $mon; $y < ($month-$newMonth); $y++){
                        $prevMons .= $month_arr[$y].',';
                    }
                    $monthData = $month_arr[$newMonth];
                    $this->ejohezaSaved($leader_id, $transaction, $year, 12, substr($prevMons, 0, -1), $regDate);
                    $this->ejohezaSaved($leader_id, $transaction, $newYear, $newMonth, $monthData, $regDate);
                }
            } else{
                if ($month > 1){
                    for ($x = $mon; $x < ($mon+$month); $x++){
                        $mons .= $month_arr[$x].',';
                    }
                    $this->ejohezaSaved($leader_id, $transaction, $year, ($mon+$month), substr($mons, 0, -1), $regDate);
                }else{
                    $monthData = $month_arr[($mon+$month)];
                    $this->ejohezaSaved($leader_id, $transaction, $year, ($mon+$month), $monthData, $regDate);
                }
            }
        }
    }

    /*Function to get All Igiceri Payments of a certain Leader*/
    function getIgiceriByLeaderId($leaderID){
        $this->db->select('*');
        $this->db->from('ums_igiceri');
        $this->db->join('ums_transactions', 'igiceri_transaction_id = trs_id');
        $this->db->where('igiceri_leader_id', $leaderID);
        $this->db->order_by('igiceri_date desc');
        $query = $this->db->get();
        if ($query->num_rows() > 0){
            return $query;
        } else{
            return null;
        }
    }
    //Functions to save a transaction for Ejo Heza
    function igiceriSaved($leader_id, $trs_id, $year, $pay_month, $months, $regDate){
        $data = array(
            'igiceri_leader_id' => $leader_id,
            'igiceri_transaction_id' => $trs_id,
            'igiceri_year' => $year,
            'igiceri_pay_month' => $pay_month,
            'igiceri_months' => $months,
            'igiceri_date' => $regDate
        );
        $query = $this->db->insert('ums_igiceri', $data);
        if ($query){
            return true;
        } else{
            return false;
        }
    }
    function saveIgiceriTrans($leader_id, $transaction, $month){
        $regDate = $this->getCurrentUnixDate();
        $month_arr = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
        $query = $this->getIgiceriByLeaderId($leader_id);
        if ($query != null){
            $transData = $query->row();
        } else{
            $transData = null;
        }

        if ($transData == null){
            $year = date('Y');
            $mons = '';
            if ($month > 1){
                for ($x = 0; $x < $month; $x++){
                    $mons .= $month_arr[$x].',';
                }
                $this->igiceriSaved($leader_id, $transaction, $year, $month, substr($mons, 0, -1), $regDate);
            }else{
                $mon = 'January';
                $this->igiceriSaved($leader_id, $transaction, $year, $month, $mon, $regDate);
            }
        } else{
            $mon = $transData->umt_pay_month;
            $year = $transData->umt_year;
            $mons = '';
            if(($mon + $month) > 12){
                $newYear = $year + 1;
                $newMonth = ($mon + $month) - 12;
                $prevMons = '';
                if ($newMonth > 1){
                    for ($y = $mon; $y < ($month-$newMonth); $y++){
                        $prevMons .= $month_arr[$y].',';
                    }
                    for ($x = 0; $x < $newMonth; $x++){
                        $mons .= $month_arr[$x].',';
                    }
                    $this->igiceriSaved($leader_id, $transaction, $year, 12, substr($prevMons, 0, -1), $regDate);
                    $this->igiceriSaved($leader_id, $transaction, $newYear, $newMonth, substr($mons, 0, -1), $regDate);
                } else{
                    for ($y = $mon; $y < ($month-$newMonth); $y++){
                        $prevMons .= $month_arr[$y].',';
                    }
                    $monthData = $month_arr[$newMonth];
                    $this->igiceriSaved($leader_id, $transaction, $year, 12, substr($prevMons, 0, -1), $regDate);
                    $this->igiceriSaved($leader_id, $transaction, $newYear, $newMonth, $monthData, $regDate);
                }
            } else{
                if ($month > 1){
                    for ($x = $mon; $x < ($mon+$month); $x++){
                        $mons .= $month_arr[$x].',';
                    }
                    $this->igiceriSaved($leader_id, $transaction, $year, ($mon+$month), substr($mons, 0, -1), $regDate);
                }else{
                    $monthData = $month_arr[($mon+$month)];
                    $this->igiceriSaved($leader_id, $transaction, $year, ($mon+$month), $monthData, $regDate);
                }
            }
        }
    }
}