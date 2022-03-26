<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
    {
        //call CodeIgniter's default Constructor
        parent::__construct();

        //load session library
        //session_start();
        $this->load->library('session');
    }

	public function index()
	{
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('index');
            $this->load->view('footer');
        }else {
            redirect(base_url().'Login');
        }
	}
	
}
