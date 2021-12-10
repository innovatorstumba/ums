<?php

class Logout extends CI_Controller
{
    public function __construct()
    {
        //call CodeIgniter's default Constructor
        parent::__construct();

        //load database libray manually
        $this->load->database();

        //load Model
        // $this->load->model('LoginModel');

        //load session library
        //session_start();
        $this->load->library('session');
    }
    function index(){
        $ses = $this->session->userdata('userid');
        if ($ses != ''){
            $this->session->unset_userdata('userid');
            redirect(base_url().'Login');
        } else{
            redirect(base_url().'Login');
        }
    }
}