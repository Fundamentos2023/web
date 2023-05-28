<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		//$this->load->view('header');...esto permitira que se cargue primero el menu.
		$this->load->view('header');
		$this->load->view('welcome_message');
		//echo "saludos a todos desde el controlador ";
		//$this->load->view('contenidoPrincipal');...esto permitira que se cargue segundo el contenido.
		$this->load->view('contenidoPrincipal');
		//$this->load->view('footer');...esto permitira que se cargue tercero el footer.
		$this->load->view('footer');
	}
}
