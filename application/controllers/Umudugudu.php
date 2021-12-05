<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Umudugudu extends CI_Controller {
	public function __construct()
	{
		//call CodeIgniter's default Constructor
		parent::__construct();

		//load database libray manually
		$this->load->database();

		//load Model
		$this->load->model('Mod_Umudugudu');
	}
	public function index(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/index');
		$this->load->view('umudugudu/footer');
	}

	public function abashyitsi(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/abashyitsi');
		$this->load->view('umudugudu/footer');
	}
	public function ibyibwe(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/ibyibwe');
		$this->load->view('umudugudu/footer');
	}
	public function abaturage(){
		$result['abaturage'] = $this->Mod_Umudugudu->selectAbaturage();
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/abaturage', $result);
	
	}
	public function citizen(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/citizen');
	}
	public function umuganda(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/umuganda');
		$this->load->view('umudugudu/footer');
	}
	public function umutekano(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/umutekano');
		$this->load->view('umudugudu/footer');
	}
	public function invoice(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/invoice');
		$this->load->view('umudugudu/footer');
	}
	public function ayaleta(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/ayaleta');
		$this->load->view('umudugudu/footer');
	}
	public function amafoto(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/amafoto');
		$this->load->view('umudugudu/footer');
	}
	public function amatangazo(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/amatangazo');
		$this->load->view('umudugudu/footer');
	}
	public function ibyaranzwe(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/ibyaranzwe');
		$this->load->view('umudugudu/footer');
	}
	public function ongeramo_umuryango(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/ongeramo_umuryango');
	}
	public function imiryango(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/imiryango');
		$this->load->view('umudugudu/footer');
	}
	public function abagabo(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/abagabo');
		$this->load->view('umudugudu/footer');
	}
	public function urubyiruko(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/urubyiruko');
		$this->load->view('umudugudu/footer');
	}
	public function ibicanwa(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/ibicanwa');
	}
	public function abanyeshuri(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/abanyeshuri');
	}
	public function abakozi(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/abakozi');
	}
	public function kwandika_umuyobozi(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/kwandika_umuyobozi');
		if ($this->input->post('submit')){
			$firstname = $this->input->post('firstname');
			$lastname = $this->input->post('lastname');
			$nid = $this->input->post('nid');
			$phone = $this->input->post('phone');
			$this->Mod_Umudugudu->insertAdmin($firstname, $lastname, $nid, $phone);

			redirect('umudugudu/abagize_komite');
		}
	}
	public function kongeramo_isibo(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/kongeramo_isibo');
	}
	public function agatanda(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/agatanda');
	}
	public function akarima(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/akarima');
	}
	public function abana(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/abana');
		$this->load->view('umudugudu/footer');
	}
	public function girinka(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/girinka');
	}
	public function abagore(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/abagore');
		$this->load->view('umudugudu/footer');
	}
	public function akagoroba(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/akagoroba');
		$this->load->view('umudugudu/footer');
	}
	public function chat(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/chat');
		$this->load->view('umudugudu/footer');
	}
	public function igiceri(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/igiceri');
		$this->load->view('umudugudu/footer');
	}
	public function imihigo(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/imihigo');
		$this->load->view('umudugudu/footer');
	}
	public function kureba_umuryango(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/kureba_umuryango');
		$this->load->view('umudugudu/footer');
	}
	public function kuzuza_umuganda(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/kuzuza_umuganda');
	}
	public function amaduka(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/amaduka');
		$this->load->view('umudugudu/footer');
	}
	public function ibikorwaremezo(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/ibikorwaremezo');
		$this->load->view('umudugudu/footer');
	}
	public function guhindura_umwirondoro(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/guhindura_umwirondoro');
		$this->load->view('umudugudu/footer');
	}
	public function umwirondoro(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/umwirondoro');
		$this->load->view('umudugudu/footer');
	}
	public function amashuri(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/amashuri');
		$this->load->view('umudugudu/footer');
	}
	public function amavuriro(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/amavuriro');
		$this->load->view('umudugudu/footer');
	}
	public function pharmacy(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/pharmacy');
		$this->load->view('umudugudu/footer');
	}
	public function restaurent(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/restaurent');
		$this->load->view('umudugudu/footer');
	}
	public function utubari(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/utubari');
		$this->load->view('umudugudu/footer');
	}
	public function inganda(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/inganda');
		$this->load->view('umudugudu/footer');
	}
	public function amasoko(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/amasoko');
		$this->load->view('umudugudu/footer');
	}
	public function cooperative(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/cooperative');
		$this->load->view('umudugudu/footer');
	}
	public function salon_de_coiffure(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/salon_de_coiffure');
		$this->load->view('umudugudu/footer');
	}
	public function amabanki(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/amabanki');
		$this->load->view('umudugudu/footer');
	}
	public function insengero(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/insengero');
		$this->load->view('umudugudu/footer');
	}
	public function hoteli(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/hoteli');
		$this->load->view('umudugudu/footer');
	}
	public function edit_umuyobozi($id){
		$result['admin'] = $this->Mod_Umudugudu->viewAdmin($id);
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/edit_umuyobozi',$result);
		$this->load->view('umudugudu/footer');
		if ($this->input->post('update')){
			$firstname = $this->input->post('firstname');
			$lastname = $this->input->post('lastname');
			$nid = $this->input->post('nid');
			$phone = $this->input->post('phone');
			
			$this->Mod_Umudugudu->updateAdmin($firstname, $lastname, $nid, $phone, $id);

			redirect('umudugudu/abagize_komite');
		}
	}
	public function abagize_komite(){
		$result['admin'] = $this->Mod_Umudugudu->selectAdmin();
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/abagize_komite', $result);
		$this->load->view('umudugudu/footer');
	}
	public function ongeramo_umuyobozi(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/ongeramo_umuyobozi');
		$this->load->view('umudugudu/footer');
	}
	public function ongeramo_isibo(){
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/ongeramo_isibo');
		$this->load->view('umudugudu/footer');
	}
}
