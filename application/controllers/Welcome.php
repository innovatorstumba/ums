<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->helper(array('form', 'url'));
			$this->load->model('upload_model');
	}

    public function index()
    {
        $this->load->view('upload',array('error' => ' ' ));
    }

    public function do_upload(){
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100000;
     
        $this->load->library('upload', $config);
     
        if ( ! $this->upload->do_upload('ufile'))
        {
                $error = array('error' => $this->upload->display_errors());
     
                $this->load->view('fileupload/upload', $error);
        }
        else
        {
            //upload files to server and insert into database
        }
    }
}