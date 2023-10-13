<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$title['title'] = "SMK YAJ Depok";
		$this->load->view('user/templates/V_Head', $title);
		$this->load->view('user/templates/V_Navbar');
		$this->load->view('user/pages/V_Home');
		$this->load->view('user/pages/V_About');
		$this->load->view('user/pages/V_Services');
		$this->load->view('user/pages/V_Team');
		$this->load->view('user/pages/V_Reviews');
		$this->load->view('user/pages/V_Portfolio');
		$this->load->view('user/pages/V_Pricing');
		$this->load->view('user/pages/V_Testimonials');
		// $this->load->view('user/pages/V_Blog');
		$this->load->view('user/pages/V_Suscribe');
		$this->load->view('user/pages/V_Contact');
		$this->load->view('user/templates/V_Footer');
	}
}
