<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class carousel extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Carousel');
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
		$year['year'] = date('Y');

		$title['profil'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
		$title['title'] = "Carousel - CMS";

        $data['pesan'] = $this->M_Contact->getDataContact();

        $data['carousel'] = $this->M_Carousel->getDataCarousel();

		$this->load->view('admin/templates/pages/V_Head', $title);
		$this->load->view('admin/templates/pages/V_Sidebar', $title);
		$this->load->view('admin/templates/pages/V_Navbar', $data);
		$this->load->view('admin/pages/carousel/V_Carousel', $data);
		$this->load->view('admin/templates/pages/V_Footer', $year);
	}

	// public function edit()
	// {
	// 	if (!$this->session->userdata('email')) {
    //         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Login First!</div>');
    //         redirect('admin/auth');
    //     }

	// 	$year['year'] = date('Y');

	// 	$title['profil'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
	// 	$title['title'] = "Carousel Edit - CMS";

    //     $data['carousel_detail'] = $this->M_Carousel->getDataCarouselDetail();

	// 	$this->load->view('admin/templates/pages/V_Head', $title);
	// 	$this->load->view('admin/templates/pages/V_Sidebar', $title);
	// 	$this->load->view('admin/templates/pages/V_Navbar');
	// 	$this->load->view('admin/pages/carousel/V_Edit', $data);
	// 	$this->load->view('admin/templates/pages/V_Footer', $year);
	// }

    public function fungsi_tambah()
    {
        $title['profil'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();

        $subjek = $this->input->post('subjek');
        $deskripsi = $this->input->post('deskripsi');
        $gambar = $_FILES['gambar'];

        if ($gambar = '') {
        } else {
            $config['upload_path'] = 'assets/admin/img/pages/carousel';
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

        $this->M_Carousel->insertDataCarousel($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Carousel added successfully!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    // public function fungsi_edit()
    // {
    //     $title['profil'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
    //     $id = $this->input->post('id');
    //     $subjek = $this->input->post('subjek');
    //     $deskripsi = $this->input->post('deskripsi');
    //     $gambar = $_FILES['gambar'];

    //     if ($gambar = '') {
    //         $ArrUpdate = array(
    //             'id' => $id,
    //             'subjek' => $subjek,
    //             'deskripsi' => $deskripsi
    //         );
    //     } else {
    //         $config['upload_path'] = 'assets/admin/img/pages/carousel';
    //         $config['allowed_types'] = 'jpg|png|jpeg';

    //         $this->load->library('upload');
    //         $this->upload->initialize($config);
    //         if (!$this->upload->do_upload('gambar')) {
    //             $ArrUpdate = array(
    //                 'id' => $id,
    //                 'subjek' => $subjek,
    //                 'deskripsi' => $deskripsi
    //             );
    //         } else {
    //             $gambar = $this->upload->data('file_name');
    //             $ArrUpdate = array(
    //                 'id' => $id,
    //                 'subjek' => $subjek,
    //                 'deskripsi' => $deskripsi,
    //                 'gambar' => $gambar
    //             );
    //         }
    //     }

    //     $this->M_Carousel->updateDataCarousel($id, $ArrUpdate);
    //     $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"Carousel changed successfully!</div>');
    //     redirect(base_url('carousel'));
    // }

    public function fungsi_hapus($id)
    {
        $title['profil'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();

        $this->M_Carousel->hapusDataCarousel($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Carousel has been successfully deleted!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }
}

