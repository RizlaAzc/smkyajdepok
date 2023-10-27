<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class team extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_Team');
		$this->load->model('M_Gallery');
	}

	
	public function index()
	{
        $data['gallery'] = $this->M_Gallery->getDataGallery();
		$data['team'] = $this->M_Team->getDataTeam();
        $title['title'] = " Team - SMK YAJ Depok";
        $this->load->view('user/templates/V_Head', $title);
		$this->load->view('user/templates/V_Navbar');
        $this->load->view('user/pages/team/V_Team_detail', $data);
		$this->load->view('user/templates/V_Footer', $data);
	}
}
