<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Akagari extends CI_Controller { 

	public function __construct()
	{
		//call CodeIgniter's default Constructor
		parent::__construct();

		//load database libray manually
		$this->load->database();

		//load Model
		$this->load->model('Mod_Akagari');
		$this->load->model('Mod_Isibo');

		//load session library
		$this->load->library('session');

		$this->load->helper(array('form', 'url'));
	}
	
	public function index(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$ldr_data = $this->Mod_Akagari->akagali($this->session->userdata('umudugudu'));

			$akag = $ldr_data->row();
			$result['data'] = $this->Mod_Akagari->selectPeaple("male", $akag->c_cell_code);
			if (is_array($result['data'])) {
				$result['numberGabo'] = count($result['data']);
			}else {
				$result['numberGabo'] = 0;
			}
			$result['data1'] = $this->Mod_Akagari->selectPeaple("female", $akag->c_cell_code);
			if (is_array($result['data1'])) {
				$result['numberGore'] = count($result['data1']);
			}else {
				$result['numberGore'] = 0;
			}
			$this->load->view('akagari/header');
			$this->load->view('akagari/sidebar');
			$this->load->view('akagari/index',$result);
			$this->load->view('akagari/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function isuku(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/isuku');
		$this->load->view('akagari/footer');
	}
	public function ibyibwe(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/ibyibwe');
		$this->load->view('akagari/footer');
	}
	public function abaturage(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$ldr_data = $this->Mod_Akagari->akagali($this->session->userdata('umudugudu'));

			$akag = $ldr_data->row();
			$result['data'] = $this->Mod_Akagari->abaturage($akag->c_cell_code );
			$this->load->view('akagari/header');
			$this->load->view('akagari/sidebar');
			$this->load->view('akagari/abaturage',$result);
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function abagize_komite(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$ldr_data = $this->Mod_Akagari->akagali($this->session->userdata('umudugudu'));

			$akag = $ldr_data->row();
			$result['akagari'] = $this->Mod_Akagari->abayobozi($akag->c_cell_code, "Akagari");
			$result['umudugudu'] = $this->Mod_Akagari->abayobozi($akag->c_cell_code, "Umudugudu");
			
			$this->load->view('akagari/header');
			$this->load->view('akagari/sidebar');
			$this->load->view('akagari/abagize_komite',$result);
			$this->load->view('akagari/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function abashyitsi(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$ldr_data = $this->Mod_Akagari->akagali($this->session->userdata('umudugudu'));

			$akag = $ldr_data->row();
			$result['data'] = $this->Mod_Akagari->abashyitsi($akag->c_cell_code );
			$this->load->view('akagari/header');
			$this->load->view('akagari/sidebar');
			$this->load->view('akagari/abashyitsi',$result);
			$this->load->view('akagari/footer');
		}else {
				redirect(base_url() . 'Login');
			}
	}
	public function citizen(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/citizen');
	}
	public function umuganda(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {

			$ldr_data = $this->Mod_Akagari->akagali($this->session->userdata('umudugudu'));

			$akag = $ldr_data->row();
			$result['vill'] = $this->Mod_Akagari->imidugudu($akag->c_cell_code );

			if (!$this->input->post('submitt')) {
				$result['data'] = $this->Mod_Akagari->umugandaAll($akag->c_cell_code );
			}else {
				$result['data'] = $this->Mod_Akagari->umugandaOne($this->input->post('umu'));
			}
			$this->load->view('akagari/header');
			$this->load->view('akagari/sidebar');
			$this->load->view('akagari/umuganda',$result);
			$this->load->view('akagari/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function umutekano(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/umutekano');
		$this->load->view('akagari/footer');
	}
	public function invoice(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/invoice');
		$this->load->view('akagari/footer');
	}
	public function ayaleta(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$result['amatangazo'] = $this->Mod_Isibo->amatangazoAll();
			$this->load->view('akagari/header');
			$this->load->view('akagari/sidebar');
			$this->load->view('akagari/ayaleta',$result);
			$this->load->view('akagari/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function soma($id){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$result['amatangazo'] = $this->Mod_Isibo->amatangazoAll();
			$result['data'] = $this->Mod_Isibo->amatangazoOne($id);
			$this->load->view('akagari/header');
			$this->load->view('akagari/sidebar');
			$this->load->view('akagari/somamatangazo',$result);
			$this->load->view('akagari/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function amafoto(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/amafoto');
		$this->load->view('akagari/footer');
	}
	public function amatangazo(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$result['amatangazo'] = $this->Mod_Isibo->amatangazoAll();
			$result['data'] = $this->Mod_Isibo->selectAmatangazo();
			$this->load->view('akagari/header');
			$this->load->view('akagari/sidebar');
			$this->load->view('akagari/amatangazo',$result); 
			$this->load->view('akagari/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function ibyaranzwe(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$result1 = $this->Mod_Isibo->selectForAnn($sessionData);
			$row = $result1->row();
			$isibo = $row->isibo_code;

			$result['amatangazo'] = $this->Mod_Isibo->amatangazoAll();
			$result['data'] = $this->Mod_Isibo->selectIbyaranzwe($isibo);
			$this->load->view('akagari/header');
			$this->load->view('akagari/sidebar');
			$this->load->view('akagari/ibyaranzwe',$result);
			$this->load->view('akagari/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function igikorwa($name){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$ldr_data = $this->Mod_Akagari->akagali($this->session->userdata('umudugudu'));

			$akag = $ldr_data->row();
			$result['data'] = $this->Mod_Akagari->ibikorwa($akag->c_cell_code, $name);

			$this->load->view('akagari/header');
			$this->load->view('akagari/sidebar');
			$this->load->view('akagari/amashuri',$result);
			$this->load->view('akagari/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function ongeramo_umuryango(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/ongeramo_umuryango');
	}
	public function imiryango(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$ldr_data = $this->Mod_Akagari->akagali($this->session->userdata('umudugudu'));

			$akag = $ldr_data->row();
			$result['data'] = $this->Mod_Akagari->selectF($akag->c_cell_code);
			$this->load->view('akagari/header');
			$this->load->view('akagari/sidebar');
			$this->load->view('akagari/imiryango',$result);
			$this->load->view('akagari/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function abagabo($a="male"){	
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {	
			$ldr_data = $this->Mod_Akagari->akagali($this->session->userdata('umudugudu'));

			$akag = $ldr_data->row();
			$result['data'] = $this->Mod_Akagari->selectPeaple($a, $akag->c_cell_code);
			$this->load->view('akagari/header');
			$this->load->view('akagari/sidebar');
			$this->load->view('akagari/abagabo',$result);
			$this->load->view('akagari/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function ibicanwa(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/ibicanwa');
	}
	public function abanyeshuri(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/abanyeshuri');
	}
	public function abakozi(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/abakozi');
	}
	public function kwandika_umuyobozi(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {	
			$ldr_data = $this->Mod_Akagari->akagali($this->session->userdata('umudugudu'));

			$akag = $ldr_data->row();
			$id = $this->input->post('id');
			$result['data'] = $this->Mod_Akagari->imidugudu($akag->c_cell_code);
			$this->load->view('akagari/header');
			$this->load->view('akagari/sidebar');
			$this->load->view('akagari/kwandika_umuyobozi',$result);
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function emeza_umuyobozi(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {	
			$ldr_data = $this->Mod_Akagari->akagali($this->session->userdata('umudugudu'));

			$akag = $ldr_data->row();
			$id = $this->input->post('id');
			$result['data'] = $this->Mod_Akagari->mudugudu($akag->c_cell_code, $id);
			$result['vill'] = $this->input->post('village');
			$this->load->view('akagari/header');
			$this->load->view('akagari/sidebar');
			$this->load->view('akagari/emeza_umuyobozi', $result);
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function emeza_umuyobozi_data(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {	
			$fname = $this->input->post('fname');
			$lname = $this->input->post('lname');
			$nid = $this->input->post('nid');
			$tel = $this->input->post('tel');
			$vill = $this->input->post('vill');
			$uname = $this->input->post('uname');
			$isibo = $this->input->post('isibo');
			$this->Mod_Akagari->mudugudu_save($fname, $lname, $nid, $tel, $vill, $uname, $isibo);
			redirect(base_url() . 'akagari/abagize_komite');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function kongeramo_isibo(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/kongeramo_isibo');
	}
	public function agatanda(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/agatanda');
	}
	public function akarima(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/akarima');
	}
	public function girinka(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/girinka');
	}
	public function abagore($a="female"){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {	
			$ldr_data = $this->Mod_Akagari->akagali($this->session->userdata('umudugudu'));

			$akag = $ldr_data->row();
			$result['data'] = $this->Mod_Akagari->selectPeaple($a, $akag->c_cell_code);
			$this->load->view('akagari/header');
			$this->load->view('akagari/sidebar');
			$this->load->view('akagari/abagore',$result);
			$this->load->view('akagari/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function abana($a="abana"){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {	
			$ldr_data = $this->Mod_Akagari->akagali($this->session->userdata('umudugudu'));

			$akag = $ldr_data->row();
			$result['data'] = $this->Mod_Akagari->abana($akag->c_cell_code);
			$this->load->view('akagari/header');
			$this->load->view('akagari/sidebar');
			$this->load->view('akagari/abana',$result);
			$this->load->view('akagari/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function urubyiruko($a="urubyiruko"){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {	
			$ldr_data = $this->Mod_Akagari->akagali($this->session->userdata('umudugudu'));

			$akag = $ldr_data->row();
			$result['data'] = $this->Mod_Akagari->abana($akag->c_cell_code);
			$this->load->view('akagari/header');
			$this->load->view('akagari/sidebar');
			$this->load->view('akagari/urubyiruko',$result);
			$this->load->view('akagari/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function akagoroba(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/akagoroba');
		$this->load->view('akagari/footer');
	}
	public function chat(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/chat');
		$this->load->view('akagari/footer');
	}
	public function igiceri(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/igiceri');
		$this->load->view('akagari/footer');
	}
	public function imihigo(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/imihigo');
		$this->load->view('akagari/footer');
	}
	public function kureba_umuryango($userId){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$result['family'] = $this->Mod_Isibo->selectFamily1($userId);
			$result['data'] = $this->Mod_Isibo->selectFamilyDetails($userId);
			$this->load->view('akagari/header');
			$this->load->view('akagari/sidebar');
			$this->load->view('akagari/kureba_umuryango',$result);
			$this->load->view('akagari/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function kuzuza_umuganda(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/kuzuza_umuganda');
	}
	public function amaduka(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/amaduka');
		$this->load->view('akagari/footer');
	}
	public function ibikorwaremezo(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$result['data'] = $this->Mod_Isibo->igikorwa($id);
			$result['pic'] = $this->Mod_Isibo->igikorwapic($id);
			$this->load->view('akagari/header');
			$this->load->view('akagari/sidebar');
			$this->load->view('akagari/ibikorwaremezo',$result);
			$this->load->view('akagari/footer');
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function guhindura_umwirondoro(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/guhindura_umwirondoro');
		$this->load->view('akagari/footer');
	}
	public function umwirondoro(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/umwirondoro');
		$this->load->view('akagari/footer');
	}
	public function amashuri(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/amashuri');
		$this->load->view('akagari/footer');
	}
	public function amavuriro(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/amavuriro');
		$this->load->view('akagari/footer');
	}
	public function pharmacy(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/pharmacy');
		$this->load->view('akagari/footer');
	}
	public function restaurent(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/restaurent');
		$this->load->view('akagari/footer');
	}
	public function utubari(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/utubari');
		$this->load->view('akagari/footer');
	}
	public function inganda(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/inganda');
		$this->load->view('akagari/footer');
	}
	public function amasoko(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/amasoko');
		$this->load->view('akagari/footer');
	}
	public function cooperative(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/cooperative');
		$this->load->view('akagari/footer');
	}
	public function salon_de_coiffure(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/salon_de_coiffure');
		$this->load->view('akagari/footer');
	}
	public function amabanki(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/amabanki');
		$this->load->view('akagari/footer');
	}
	public function insengero(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/insengero');
		$this->load->view('akagari/footer');
	}
	public function hoteli(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/hoteli');
		$this->load->view('akagari/footer');
	}
	public function ongeramo_umuyobozi(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/ongeramo_umuyobozi');
		$this->load->view('akagari/footer');
	}
	public function ongeramo_isibo(){
		$this->load->view('akagari/header');
		$this->load->view('akagari/sidebar');
		$this->load->view('akagari/ongeramo_isibo');
		$this->load->view('akagari/footer');
	}

	public function do_upload_ikira(){
        $config['upload_path']          = './assets/uploads/amatangazo/';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 0;
     
        $this->load->library('upload', $config);
     
        if ( ! $this->upload->do_upload('ufile'))
        {
			$sessionData=$this->session->userdata('userid');
			$result = $this->Mod_Isibo->selectForAnn($sessionData);
			$row = $result->row();
			$isibo = $row->isibo_code;
			$owner = $sessionData;
			$title = $this->input->post('title');
			$body = $this->input->post('myTextarea');
			$pic = "";
			$this->Mod_Isibo->itangazo($title, $body, $pic, $isibo, $owner);

			redirect('akagari/ibyaranzwe');
        }
        elseif ($this->upload->do_upload('ufile'))
        {
			$sessionData=$this->session->userdata('userid');
			$result = $this->Mod_Isibo->selectForAnn($sessionData);
			$row = $result->row();
			$isibo = $row->isibo_code;
			$owner = $sessionData;
            $datav = $this->upload->data();
			$title = $this->input->post('title');
			$body = $this->input->post('myTextarea');
			$pic = "assets/uploads/amatangazo/".$datav['file_name'];
			$this->Mod_Isibo->itangazo($title, $body, $pic, $isibo, $owner);

			redirect('akagari/ibyaranzwe');
        }
    }
}
