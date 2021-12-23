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
        $sessionData=$this->session->userdata('userid');
        if($sessionData!="") {
            $results = $this->fm->getAmatangazo($this->session->userdata('isibo'));
            if ($results != null){
                $data['selected'] = $results->result();
                $this->load->view('header');
                $this->load->view('sidebar');
                $this->load->view('amatangazo', $data);
                $this->load->view('footer');
            } else{
                $data['selected'] = null;
                $this->load->view('header');
                $this->load->view('sidebar');
                $this->load->view('amatangazo', $data);
                $this->load->view('footer');
            }
        }else {
            redirect(base_url() . 'Login');
        }
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
	public function payUmutekano(){
		
		if ($this->input->post('pay')){
			$amezi = $this->input->post('amezi');
		}
		$amount =intval($amezi)*2000;
		$email = "audasang2018@gmail.com";
		if ($this->input->post('nber')){
			$amount =$this->input->post('amt');
			$request = [
				'tx_ref' => time(),
				'amount' => $amount,
				'currency' => 'RWF',
				'payment_options' => 'mobilemoneyrwanda',
				'redirect_url' => 'http://localhost/ums/process.php',
				'customer' => [
					'email' => $email,
					'name' => 'sanga'
				],
				'meta' => [
					'price' => $amount
				],
				'customizations' => [
					'title' => 'Ishyura umutekano',
					'description' => 'UMS',
					'logo'=> 'http://localhost/pay/sano.png'
				]
			];
		
			//* Ca;; f;iterwave emdpoint
			$curl = curl_init();
		
			curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://api.flutterwave.com/v3/payments',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => json_encode($request),
			CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer FLWSECK-083ae3b8d5dfb256278a72490903c75e-X',
				'Content-Type: application/json'
			),
			));
		
			$response = curl_exec($curl);
		
			curl_close($curl);
			
			$res = json_decode($response);
			if($res->status == 'success')
			{
				$link = $res->data->link;
				header('Location: '.$link);
			}
			else
			{
				echo 'We can not process your payment';
			}
		}
		$result['data']=$amount;
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('pay',$result);		
	}

	public function payIsuku(){
		
		if ($this->input->post('pay')){
			$amezi = $this->input->post('amezi');
		}
		$amount =intval($amezi)*3000;
		$email = "audasang2018@gmail.com";
		if ($this->input->post('nber')){
			$amount =$this->input->post('amt');
			$request = [
				'tx_ref' => time(),
				'amount' => $amount,
				'currency' => 'RWF',
				'payment_options' => 'mobilemoneyrwanda',
				'redirect_url' => 'http://localhost/ums/process.php',
				'customer' => [
					'email' => $email,
					'name' => 'sanga'
				],
				'meta' => [
					'price' => $amount
				],
				'customizations' => [
					'title' => 'Ishyura isuku',
					'description' => 'UMS',
					'logo'=> 'http://localhost/pay/sano.png'
				]
			];
		
			//* Ca;; f;iterwave emdpoint
			$curl = curl_init();
		
			curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://api.flutterwave.com/v3/payments',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => json_encode($request),
			CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer FLWSECK-083ae3b8d5dfb256278a72490903c75e-X',
				'Content-Type: application/json'
			),
			));
		
			$response = curl_exec($curl);
		
			curl_close($curl);
			
			$res = json_decode($response);
			if($res->status == 'success')
			{
				$link = $res->data->link;
				header('Location: '.$link);
			}
			else
			{
				echo 'We can not process your payment';
			}
		}
		$result['data']=$amount;
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('pay',$result);		
	}
}