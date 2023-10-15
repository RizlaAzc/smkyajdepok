<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class info extends CI_Controller {

	
	public function index()
	{
		$this->load->view('user/templates/V_Head');
		$this->load->view('user/templates/V_Navbar');
		$this->load->view('user/pages/info/V_InfoDetail');
		$this->load->view('user/templates/V_Footer');
	}

	public function pengumuman()
	{
		$this->load->view('user/templates/V_Head');
		$this->load->view('user/templates/V_Navbar');
		$this->load->view('user/pages/info/V_pengumuman_Detail');
		$this->load->view('user/templates/V_Footer');
	}

	public function berita()
	{
		$this->load->view('user/templates/V_Head');
		$this->load->view('user/templates/V_Navbar');
		$this->load->view('user/pages/info/V_berita_Detail');
		$this->load->view('user/templates/V_Footer');
	}

	
}
