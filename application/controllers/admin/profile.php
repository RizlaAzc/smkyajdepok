<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
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
		$year['year'] = date('Y');

		$title['profil'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
		$title['title'] = "Profile - CMS";

		$this->load->view('admin/templates/pages/V_Head', $title);
		$this->load->view('admin/templates/pages/V_Sidebar', $title);
		$this->load->view('admin/templates/pages/V_Navbar');
		$this->load->view('admin/profile/V_Profile', $title);
		$this->load->view('admin/templates/pages/V_Footer', $year);
	}

	public function edit_profile()
	{
		$year['year'] = date('Y');

		$title['profil'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
		$title['title'] = "Edit Profile - CMS";

		$this->load->view('admin/templates/pages/V_Head', $title);
		$this->load->view('admin/templates/pages/V_Sidebar', $title);
		$this->load->view('admin/templates/pages/V_Navbar');
		$this->load->view('admin/profile/V_Edit', $title);
		$this->load->view('admin/templates/pages/V_Footer', $year);
	}

	public function proses_edit()
	{
		$nama_lengkap = $this->input->post('nama_lengkap');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$telepon = $this->input->post('telepon');
		
		// cek jika ada gambar yang ingin di upload
		$foto = $_FILES['foto'];

		if ($foto = '') {
            $this->db->set('nama_lengkap', $nama_lengkap);
			$this->db->set('nama', $nama);
			$this->db->set('telepon', $telepon);
			// $this->db->set('foto', $foto);
			$this->db->where('email', $email);
			$this->db->update('login');
        } else {
            $config['upload_path'] = 'assets/admin/img/profil';
            $config['allowed_types'] = 'jpg|png|jpeg|svg';

            $this->load->library('upload');
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto')) {
                $this->db->set('nama_lengkap', $nama_lengkap);
				$this->db->set('nama', $nama);
				$this->db->set('telepon', $telepon);
				// $this->db->set('foto', $foto);
				$this->db->where('email', $email);
				$this->db->update('login');
            } else {
                $foto = $this->upload->data('file_name');
                $this->db->set('nama_lengkap', $nama_lengkap);
				$this->db->set('nama', $nama);
				$this->db->set('telepon', $telepon);
				$this->db->set('foto', $foto);
				$this->db->where('email', $email);
				$this->db->update('login');
            }
        }

		// $this->db->set('nama_lengkap', $nama_lengkap);
		// $this->db->set('nama', $nama);
		// $this->db->set('telepon', $telepon);
		// $this->db->set('foto', $foto);
		// $this->db->where('email', $email);
		// $this->db->update('login');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">your profile has been updated!</div>');
		redirect('admin/profile');
	}
}
