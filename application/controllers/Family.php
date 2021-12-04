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
    }

	public function akagoroba(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('abashyitsi');
		$this->load->view('footer');
	}

	public function amaduka(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('amaduka');
		$this->load->view('footer');
	}
	public function abashyitsi(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('abashyitsi');
		$this->load->view('footer');
	}
	public function amabanki(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('amabanki');
		$this->load->view('footer');
	}
	public function amashuri(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('amashuri');
		$this->load->view('footer');
	}
	public function amasoko(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('amasoko');
		$this->load->view('footer');
	}
	public function amatangazo(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('amatangazo');
		$this->load->view('footer');
	}
	public function amavuriro(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('amavuriro');
		$this->load->view('footer');
	}
	public function guhiga(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('guhiga');
		$this->load->view('footer');
	}
	public function guhindura_umwirondoro(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('guhindura_umwirondoro');
		$this->load->view('footer');
	}
	public function hoteli(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('hoteli');
		$this->load->view('footer');
	}
	public function ibarura(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('ibarura');
		$this->load->view('footer');
	}
	public function ibyaranzwe(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('ibyaranzwe');
		$this->load->view('footer');
	}
	public function ibyibwe(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('ibyibwe');
		$this->load->view('footer');
	}
	public function igiceri(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('igiceri');
		$this->load->view('footer');
	}
	public function imihigo(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('imihigo');
		$this->load->view('footer');
	}
	public function inganda(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('inganda');
		$this->load->view('footer');
	}
	public function insengero(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('insengero');
		$this->load->view('footer');
	}
	public function isuku(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('isuku');
		$this->load->view('footer');
	}
	public function kuranga(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('kuranga');
		$this->load->view('footer');
	}
	public function kwandika_umushyitsi(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('kwandika_umushyitsi');
		$this->load->view('footer');
	}
	public function my_issues(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('my_issues');
		$this->load->view('footer');
	}
	public function pharmacy(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('pharmacy');
		$this->load->view('footer');
	}
	public function restaurant(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('restaurant');
		$this->load->view('footer');
	}
	public function salon_de_coiffure(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('salon_de_coiffure');
		$this->load->view('footer');
	}
	public function umuganda(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('umuganda');
		$this->load->view('footer');
	}
	public function umuryango(){
        $results = $this->fm->getFamilyMembers(3);
        $data['results'] = $results;

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('umuryango', $data);
		$this->load->view('footer');
	}
	public function umutekano(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('umutekano');
		$this->load->view('footer');
	}
	public function umwirondoro(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('umwirondoro');
		$this->load->view('footer');
	}
	public function utubari(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('utubari');
		$this->load->view('footer');
	}
	public function chat(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('chat');
		$this->load->view('footer');
	}
	public function amafoto(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('amafoto');
		$this->load->view('footer');
	}
	public function invoice(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('invoice');
		$this->load->view('footer');
	}
	public function kwandika_ibyibwe(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('kwandika_ibyibwe');
		$this->load->view('footer');
	}
	public function umuhigo(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('umuhigo');
		$this->load->view('footer');
	}
	public function ibikorwaremezo(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('ibikorwaremezo');
		$this->load->view('footer');
	}
	public function kwishyura(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('kwishyura');
		$this->load->view('footer');
	}
	public function pay(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('pay');
	}
}