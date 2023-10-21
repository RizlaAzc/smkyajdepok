<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class about extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_about');

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
		$title['title'] = "About - CMS";

        $data['about'] = $this->model_about->getDataAbout();

		$this->load->view('admin/templates/pages/V_Head', $title);
		$this->load->view('admin/templates/pages/V_Sidebar', $title);
		$this->load->view('admin/templates/pages/V_Navbar');
		$this->load->view('admin/pages/about/V_About', $data);
		$this->load->view('admin/templates/pages/V_Footer', $year);
	}

	public function edit($id)
	{
		$year['year'] = date('Y');

		$title['profil'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
		$title['title'] = "About Edit - CMS";

        $data['about_detail'] = $this->model_about->getDataAboutDetail($id);

		$this->load->view('admin/templates/pages/V_Head', $title);
		$this->load->view('admin/templates/pages/V_Sidebar', $title);
		$this->load->view('admin/templates/pages/V_Navbar');
		$this->load->view('admin/pages/about/V_Edit', $data);
		$this->load->view('admin/templates/pages/V_Footer', $year);
	}

    public function fungsi_tambah()
    {
        $title['profil'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();

        $subjek = $this->input->post('subjek');
        $deskripsi = $this->input->post('deskripsi');
        $gambar = $_FILES['gambar'];

        if ($gambar = '') {
        } else {
            $config['upload_path'] = 'assets/admin/img/pages/about';
            $config['allowed_types'] = 'jpg|png|jpeg';

            $this->load->library('upload');
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Upload Gagal";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }

        $ArrInsert = array(
            'subjek' => $subjek,
            'deskripsi' => $deskripsi,
            'gambar' => $gambar
        );

        $this->model_about->insertDataAbout($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">About added successfully!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function fungsi_edit()
    {
        $title['profil'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $subjek = $this->input->post('subjek');
        $deskripsi = $this->input->post('deskripsi');
        $gambar = $_FILES['gambar'];

        if ($gambar = '') {
            $ArrUpdate = array(
                'id' => $id,
                'subjek' => $subjek,
                'deskripsi' => $deskripsi
            );
        } else {
            $config['upload_path'] = 'assets/admin/img/pages/about';
            $config['allowed_types'] = 'jpg|png|jpeg';

            $this->load->library('upload');
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar')) {
                $ArrUpdate = array(
                    'id' => $id,
                    'subjek' => $subjek,
                    'deskripsi' => $deskripsi
                );
            } else {
                $gambar = $this->upload->data('file_name');
                $ArrUpdate = array(
                    'id' => $id,
                    'subjek' => $subjek,
                    'deskripsi' => $deskripsi,
                    'gambar' => $gambar
                );
            }
        }

        $this->model_about->updateDataAbout($id, $ArrUpdate);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"About changed successfully!</div>');
        redirect(base_url('admin/pages/about/about'));
    }

    public function fungsi_hapus($id)
    {
        $title['profil'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();

        $this->model_about->hapusDataAbout($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">About has been successfully deleted!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }
}

