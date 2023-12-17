<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class message extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Contact');

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
		$data['jumlah_pesan'] = $this->db->query('SELECT id from pesan')->num_rows();
		// $data['ppdb'] = $this->M_Ppdb->getDataPpdb();

		$year['year'] = date('Y');

		$title['profil'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
		$title['title'] = "Message - CMS";

		$this->load->view('admin/templates/pages/V_Head', $title);
		$this->load->view('admin/templates/pages/V_Sidebar', $title);
		$this->load->view('admin/templates/pages/V_Navbar', $data);
		$this->load->view('admin/message/V_Message', $data);
		$this->load->view('admin/templates/pages/V_Footer', $year);
	}

	public function detail($id)
	{
		$data['pesan_detail'] = $this->M_Contact->getDataContactDetail($id);
		$data['pesan'] = $this->M_Contact->getDataContact();

		$year['year'] = date('Y');

		$title['profil'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
		$title['title'] = "Message - CMS";

		$this->load->view('admin/templates/pages/V_Head', $title);
		$this->load->view('admin/templates/pages/V_Sidebar', $title);
		$this->load->view('admin/templates/pages/V_Navbar', $data);
		$this->load->view('admin/message/V_Message_Detail', $data);
		$this->load->view('admin/templates/pages/V_Footer', $year);
	}

	public function fungsi_hapus($id)
    {
        $title['profil'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();

        $this->M_Contact->hapusDataContact($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Message has been successfully deleted!</div>');
        redirect('admin/message');
    }
}
