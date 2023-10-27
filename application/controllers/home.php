<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('M_Carousel');
		$this->load->model('M_About');
		$this->load->model('M_Study');
		$this->load->model('M_Team');
		$this->load->model('M_Gallery');
		$this->load->model('M_Quotes');
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
		$data['carousel'] = $this->M_Carousel->getDataCarousel();
		$data['about'] = $this->M_About->getDataAbout();
		$data['study'] = $this->M_Study->getDataStudy();
		$data['team'] = $this->M_Team->getDataTeam();
		$data['gallery'] = $this->M_Gallery->getDataGallery();
		// $data['gallery'] = $this->db->query("SELECT * from gallery ORDER BY id DESC")->result();
		// $jumlah = $this->db->query("SELECT * from gallery ORDER BY id DESC")->num_rows();
		// $data['jumlah'] = $jumlah;
		// $total = $jumlah - 6;
		// $data['total'] = $total;
		$data['quotes'] = $this->M_Quotes->getDataQuotes();
		
		$title['title'] = "SMK YAJ Depok";
		$this->load->view('user/templates/V_Head', $title);
		$this->load->view('user/templates/V_Navbar');
		$this->load->view('user/pages/V_Home', $data);
		$this->load->view('user/pages/V_About', $data);
		$this->load->view('user/pages/V_Visi-Misi-Motto');
		$this->load->view('user/pages/V_Team', $data);
		$this->load->view('user/pages/V_Reviews');
		$this->load->view('user/pages/V_Gallery', $data);
		$this->load->view('user/pages/V_Quotes', $data);
		$this->load->view('user/pages/V_Suscribe');
		$this->load->view('user/pages/V_Contact');
		$this->load->view('user/templates/V_Footer', $data);
	}
}
