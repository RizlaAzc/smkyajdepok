<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gallery extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_Gallery');
	}
	
	public function index()
	{
		$data['gallery'] = $this->M_Gallery->getDataGallery();
        $title['title'] = " Gallery - SMK YAJ Depok";
        $this->load->view('user/templates/V_Head', $title);
		$this->load->view('user/templates/V_Navbar');
        $this->load->view('user/pages/gallery/V_Gallery_detail', $data);
		$this->load->view('user/templates/V_Footer');
	}
}
