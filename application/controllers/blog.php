<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class blog extends CI_Controller {

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
		$this->load->view('user/templates/V_Head');
		$this->load->view('user/templates/V_Navbar');
		$this->load->view('user/pages/blogs/V_BlogPage');
		$this->load->view('user/templates/V_Footer');
	}

	public function detail()
	{
		$this->load->view('user/templates/V_Head');
		$this->load->view('user/templates/V_Navbar');
		$this->load->view('user/pages/blogs/V_BlogDetails');
		$this->load->view('user/templates/V_Footer');
	}
}
