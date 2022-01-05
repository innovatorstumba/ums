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
		$this->load->model('fm');
		$this->load->model('Mod_Umudugudu');
		$this->load->library('session');
	}
	public function index(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/index');
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}

	public function abashyitsi(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/abashyitsi');
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function ibyibwe(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/ibyibwe');
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function abaturage(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$result['data'] = $this->Mod_Umudugudu->abaturage();
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/abaturage', $result);
	}else {
		redirect(base_url() . 'Login');
	}
	
	}
	public function citizen(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/citizen');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function umuganda(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$result['data'] = $this->Mod_Umudugudu->selectUmuganda();
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/umuganda', $result);
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function umutekano(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/umutekano');
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function invoice(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/invoice');
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function ayaleta(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/ayaleta');
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function amafoto(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/amafoto');
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function amatangazo(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/amatangazo');
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function ibyaranzwe(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/ibyaranzwe');
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function ongeramo_umuryango(){
		$sessionData=$this->session->userdata('userid');
		if($sessionData!="") {
			$result['data'] = $this->Mod_Umudugudu->selectCategory();
			$result['insurance'] = $this->Mod_Umudugudu->selectInsurance();
			$this->load->view('umudugudu/header');
			$this->load->view('umudugudu/sidebar');
			$this->load->view('umudugudu/ongeramo_umuryango',$result);
			if ($this->input->post('save')){
				$fname = $this->input->post('fname');
				$lname = $this->input->post('lname');
				$BOD = $this->input->post('birthday');
				$id = $this->input->post('id');
				$sex = $this->input->post('sex');
				$ubudehe = $this->input->post('ubudehe');
				$isano = $this->input->post('isano');
				$insurance = $this->input->post('insurance');
				$phone = $this->input->post('tel');
				$houseNumber = $this->input->post('houseNumber');
				$uname = $this->input->post('uname');
				$password = $this->input->post('password');
				$email = $this->input->post('email');
				$this->Mod_Umudugudu->registerHeader($fname, $lname, $BOD, $id,$sex,$ubudehe, $isano, $insurance, $phone, $houseNumber, $uname, $password, $email);

				redirect('Umudugudu/index');
			}
		}else {
			redirect(base_url() . 'Login');
		}
	}
	public function imiryango(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$result['data'] = $this->Mod_Umudugudu->selectFamily();
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/imiryango', $result);
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function abagabo($a="male"){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$result['data'] = $this->Mod_Umudugudu->selectPeople($a);
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/abagabo', $result);
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function urubyiruko(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$result['data'] = $this->Mod_Umudugudu->selectYouth();
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/urubyiruko', $result);
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function ibicanwa(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/ibicanwa');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function abanyeshuri(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/abanyeshuri');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function abakozi(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/abakozi');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function kwandika_umuyobozi(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/kwandika_umuyobozi');
		if ($this->input->post('send')){
			$firstname = $this->input->post('firstname');
			$lastname = $this->input->post('lastname');
			$nid = $this->input->post('nid');
			$phone = $this->input->post('phone');
			$this->Mod_Umudugudu->insertAdmin($firstname, $lastname, $nid, $phone);

			redirect('umudugudu/abagize_komite');
		}
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function kongeramo_isibo(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/kongeramo_isibo');
		if ($this->input->post('send')){
			$isibo_name = $this->input->post('isibo_name');
			$isibo_code = $this->input->post('isibo_code');
			$this->Mod_Umudugudu->insertIsibo($isibo_name, $isibo_code);

			redirect('umudugudu/index');
		}
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function kuzuza_umuganda($userId){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$result['data'] = $this->Mod_LoginModel->selectAdminByUserId($userId);
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/kuzuza_umuganda',$result);
		if ($this->input->post('send')){
			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$itariki = $this->input->post('itariki');
			$abitabiriye = $this->input->post('abitabiriye');
			$abagore = $this->input->post('abagore');
			$abagabo = $this->input->post('abagabo');
			$urubyiruko = $this->input->post('urubyiruko');
			$agaciro = $this->input->post('agaciro');
			$this->Mod_Umudugudu->insertUmuganda($title, $description,$itariki, $abitabiriye, $abagore, $abagabo, $urubyiruko, $agaciro);

			redirect('umudugudu/index');
		}
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function agatanda(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/agatanda');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function akarima(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/akarima');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function abana(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$result['data'] = $this->Mod_Umudugudu->selectYouth();
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/abana', $result);
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function girinka(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/girinka');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function abagore($a='female'){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$result['data'] = $this->Mod_Umudugudu->selectPeople($a);
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/abagore', $result);
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function akagoroba(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/akagoroba');
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function chat(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/chat');
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function igiceri(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/igiceri');
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function imihigo(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/imihigo');
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function kureba_umuryango($userId){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$result['family'] = $this->Mod_Umudugudu->selectFamily1($userId);
		$result['data'] = $this->Mod_Umudugudu->selectFamilyDetails($userId);
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/kureba_umuryango', $result);
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}

	public function amaduka(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/amaduka');
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function ibikorwaremezo(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/ibikorwaremezo');
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function guhindura_umwirondoro(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/guhindura_umwirondoro');
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function umwirondoro(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/umwirondoro');
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function amashuri(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/amashuri');
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function amavuriro(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/amavuriro');
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function pharmacy(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/pharmacy');
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function restaurent(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/restaurent');
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function utubari(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/utubari');
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function inganda(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/inganda');
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function amasoko(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/amasoko');
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function cooperative(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/cooperative');
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function salon_de_coiffure(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/salon_de_coiffure');
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function amabanki(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/amabanki');
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function insengero(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/insengero');
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function hoteli(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/hoteli');
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function edit_umuyobozi($id){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
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
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function abagize_komite(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$result['admin'] = $this->Mod_Umudugudu->selectAdmin();
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/abagize_komite', $result);
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function ongeramo_umuyobozi(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/ongeramo_umuyobozi');
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}
	public function ongeramo_isibo(){
		$sessionData=$this->session->userdata('userid');
	if($sessionData!="") {
		$this->load->view('umudugudu/header');
		$this->load->view('umudugudu/sidebar');
		$this->load->view('umudugudu/ongeramo_isibo');
		$this->load->view('umudugudu/footer');
	}else {
		redirect(base_url() . 'Login');
	}
	}
}
