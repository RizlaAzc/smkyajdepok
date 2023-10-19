<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gallery extends CI_Controller {

	
	public function index()
	{
        $title['title'] = " Gallery SMK YAJ Depok";
        $this->load->view('user/templates/V_Head', $title);
		$this->load->view('user/templates/V_Navbar');
        $this->load->view('user/pages/gallery/V_Gallery_detail');
		$this->load->view('user/templates/V_Footer');
	}
}
