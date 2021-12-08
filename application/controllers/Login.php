<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        //call CodeIgniter's default Constructor
        parent::__construct();
        //load database libray manually
        $this->load->database();
        //load Model
        $this->load->model('login');
    }

    function index(){
        if($this->input->post('username') != "" && $this->input->post('password') != "")
        {
            $uname=$this->input->post('username');
            $pass=$this->input->post('password');
            $results = $this->login->validateLogin($uname, $pass);
            if ($results){
                $row = $results->row();
                if ($row->roles_name == "Family"){
                    //Family Leader Session Data
                    $ldr_data = $this->login->selectLeaderByUserId($row->usr_id);
                    $leader_data = $ldr_data->row();
                    $ldr_session_data = array('userid' => $row->usr_id, 'leader_id' => $leader_data->ldr_leader_id, 'firstname' => $leader_data->ldr_firstname, 'lastname' => $leader_data->ldr_lastname);
                    $this->session->set_userdata($ldr_session_data);
                    redirect(base_url());
                } else {
                    //Admin Users Session Data
                    $adm_data = $this->login->selectAdminByUserId($row->usr_id);
                    $admin_data = $adm_data->row();
                    $adm_session_data = array('userid' => $row->usr_id, 'admin_id' => $admin_data->adm_id, 'firstname' => $admin_data->adm_firstname, 'lastname' => $admin_data->adm_lastname);
                    $this->session->set_userdata($adm_session_data);
                    redirect(base_url().$row->roles_name);
                }
            } else{
                echo "<script>
                    window.alert('Invalid Username / Password, Try again');
                    window.location = '".base_url()."Login/'
                </script>";
            }
        }
        $this->load->view('login');
    }
    function redirect(){
    }
}