<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ppdb extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Contact');
		$this->load->model('M_Ppdb');
		// date_default_timezone_set('Asia/Jakarta');

		if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Login First!</div>');
            redirect('admin/auth');
        }
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
		$data['pesan'] = $this->M_Contact->getDataContact();
		$data['ppdb'] = $this->M_Ppdb->getDataPpdb();

		$year['year'] = date('Y');

		$title['profil'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
		$title['title'] = "Form PPDB - CMS";

		$this->load->view('admin/templates/pages/V_Head', $title);
		$this->load->view('admin/templates/pages/V_Sidebar', $title);
		$this->load->view('admin/templates/pages/V_Navbar', $data);
		$this->load->view('admin/Ppdb/V_Ppdb');
		$this->load->view('admin/templates/pages/V_Footer', $year);
	}

	public function detail($nisn)
	{
		$data['pesan'] = $this->M_Contact->getDataContact();
		$data['ppdb'] = $this->M_Ppdb->getDataPpdbDetail($nisn);

		$year['year'] = date('Y');

		$title['profil'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
		$title['title'] = "Form PPDB - CMS";

		$this->load->view('admin/templates/pages/V_Head', $title);
		$this->load->view('admin/templates/pages/V_Sidebar', $title);
		$this->load->view('admin/templates/pages/V_Navbar', $data);
		$this->load->view('admin/Ppdb/V_Ppdb_Detail', $data);
		$this->load->view('admin/templates/pages/V_Footer', $year);
	}

	public function fungsi_hapus($nisn)
    {
        $title['profil'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();

        $this->M_Ppdb->hapusDataPpdb($nisn);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Form PPDB has been successfully deleted!</div>');
        redirect('admin/ppdb');
    }
}
