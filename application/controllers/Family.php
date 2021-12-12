<?php


class Family extends CI_Controller {
    public function __construct()
    {
        //call CodeIgniter's default Constructor
        parent::__construct();

        //load database libray manually
        $this->load->database();

        //load Model
        $this->load->model('fm');

        //load session library
        //session_start();
        $this->load->library('session');
    }
	
	public function akagoroba(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('abashyitsi');
			$this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}

	public function amaduka(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('amaduka');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function abashyitsi(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('abashyitsi');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function amabanki(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('amabanki');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function amashuri(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('amashuri');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function amasoko(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('amasoko');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function amatangazo(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('amatangazo');
		$this->load->view('footer');
	}
	public function amavuriro(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('amavuriro');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function guhiga(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('guhiga');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function guhindura_umwirondoro(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('guhindura_umwirondoro');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function hoteli(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('hoteli');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function ibarura(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('ibarura');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function ibyaranzwe(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('ibyaranzwe');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function ibyibwe(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('ibyibwe');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function igiceri(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('igiceri');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function imihigo(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('imihigo');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function inganda(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('inganda');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function insengero(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('insengero');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function isuku(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('isuku');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function kuranga(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('kuranga');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function kwandika_umushyitsi(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('kwandika_umushyitsi');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function my_issues(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('my_issues');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function pharmacy(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('pharmacy');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function restaurant(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('restaurant');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function salon_de_coiffure(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('salon_de_coiffure');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function umuganda(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('umuganda');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function umuryango(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $results = $this->fm->getFamilyMembers(3);
            $data['results'] = $results;

            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('umuryango', $data);
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function umutekano(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('umutekano');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function umwirondoro(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('umwirondoro');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function utubari(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('utubari');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function chat(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('chat');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function amafoto(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('amafoto');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function invoice(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('invoice');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function kwandika_ibyibwe(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('kwandika_ibyibwe');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function umuhigo(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('umuhigo');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function ibikorwaremezo(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('ibikorwaremezo');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function kwishyura(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('kwishyura');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
	public function pay(){
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('pay');
            $this->load->view('footer');
        }else {
            redirect(base_url() . 'Login');
        }
	}
}