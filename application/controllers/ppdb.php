<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ppdb extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('model_study');
	}

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
		$data['study'] = $this->model_study->getDataStudy();

		$this->load->view('user/templates/V_Head');
		$this->load->view('user/templates/V_Navbar');
		$this->load->view('user/pages/ppdb/V_Ppdb', $data);
		$this->load->view('user/templates/V_Footer');
	}

}
