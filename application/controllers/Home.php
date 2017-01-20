<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index(){
		$this->load->view('head_view');
		$this->load->view('header_view');
		$this->load->view('home_view');
		$this->load->view('footer_view');
	}

	public function inscripcion(){
		$this->load->view('head_view');
		$this->load->view('header_view');
		$this->load->view('inscripcion_view');
		$this->load->view('footer_view');
	}

	public function testimonio(){
		$this->load->view('head_view');
		$this->load->view('header_view');
		$this->load->view('testimonio_view');
		$this->load->view('footer_view');
	}

	public function universidad(){
		$this->load->view('head_view');
		$this->load->view('header_view');
		$this->load->view('universidad_view');
		$this->load->view('footer_view');
	}

	public function pregunta(){
		$this->load->view('head_view');
		$this->load->view('header_view');
		$this->load->view('pregunta_view');
		$this->load->view('footer_view');
	}

	public function equipo(){
		$this->load->view('head_view');
		$this->load->view('header_view');
		$this->load->view('equipo_view');
		$this->load->view('footer_view');
	}

	public function belgorod(){
		$this->load->view('head_view');
		$this->load->view('header_view');
		$this->load->view('ciudad/belgorod_view');
		$this->load->view('footer_view');
	}

	public function ekaterinburgo(){
		$this->load->view('head_view');
		$this->load->view('header_view');
		$this->load->view('ciudad/ekaterinburgo_view');
		$this->load->view('footer_view');
	}

	public function kazan(){
		$this->load->view('head_view');
		$this->load->view('header_view');
		$this->load->view('ciudad/kazan_view');
		$this->load->view('footer_view');
	}

	public function moscu(){
		$this->load->view('head_view');
		$this->load->view('header_view');
		$this->load->view('ciudad/moscu_view');
		$this->load->view('footer_view');
	}

	public function nizhny(){
		$this->load->view('head_view');
		$this->load->view('header_view');
		$this->load->view('ciudad/nizhny_view');
		$this->load->view('footer_view');
	}

	public function novosibirsk(){
		$this->load->view('head_view');
		$this->load->view('header_view');
		$this->load->view('ciudad/novosibirsk_view');
		$this->load->view('footer_view');
	}

	public function rostov(){
		$this->load->view('head_view');
		$this->load->view('header_view');
		$this->load->view('ciudad/rostov_view');
		$this->load->view('footer_view');
	}

	public function sanPetersburgo(){
		$this->load->view('head_view');
		$this->load->view('header_view');
		$this->load->view('ciudad/sanPetersburgo_view');
		$this->load->view('footer_view');
	}

	public function samara(){
		$this->load->view('head_view');
		$this->load->view('header_view');
		$this->load->view('ciudad/samara_view');
		$this->load->view('footer_view');
	}

	public function saratov(){
		$this->load->view('head_view');
		$this->load->view('header_view');
		$this->load->view('ciudad/saratov_view');
		$this->load->view('footer_view');
	}

	public function sochi(){
		$this->load->view('head_view');
		$this->load->view('header_view');
		$this->load->view('ciudad/sochi_view');
		$this->load->view('footer_view');
	}

	public function vladimir(){
		$this->load->view('head_view');
		$this->load->view('header_view');
		$this->load->view('ciudad/vladimir_view');
		$this->load->view('footer_view');
	}

	public function vladivostok(){
		$this->load->view('head_view');
		$this->load->view('header_view');
		$this->load->view('ciudad/vladivostok_view');
		$this->load->view('footer_view');
	}

	public function volgogrado(){
		$this->load->view('head_view');
		$this->load->view('header_view');
		$this->load->view('ciudad/volgogrado_view');
		$this->load->view('footer_view');
	}

	public function ufa(){
		$this->load->view('head_view');
		$this->load->view('header_view');
		$this->load->view('ciudad/ufa_view');
		$this->load->view('footer_view');
	}

}
