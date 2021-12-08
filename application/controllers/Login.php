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
                $session_data = array('userid' => $row->user_id);

                $this->session->set_userdata($session_data);
                if ($row->roles_name == "Family"){
                    redirect(base_url());
                } else {
                    redirect(base_url().$row->roles_name);
                }
            } else{
                echo "<script>
                    window.alert('Invalid Username / Password, Try again');
                    window.location = '".base_url()."Login/'
                </script>";
                //redirect(base_url().'Login');
            }
        }

        $this->load->view('login');
    }

    function redirect(){

    }
}