<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class quotes extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_quotes');

        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Login First!</div>');
            redirect('admin/auth');
        }
    }

	public function index()
	{
		$year['year'] = date('Y');

		$title['profil'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
		$title['title'] = "Quotes - CMS";

        $data['quotes'] = $this->model_quotes->getDataquotes();

		$this->load->view('admin/templates/pages/V_Head', $title);
		$this->load->view('admin/templates/pages/V_Sidebar', $title);
		$this->load->view('admin/templates/pages/V_Navbar');
		$this->load->view('admin/pages/about/V_quotes', $data);
		$this->load->view('admin/templates/pages/V_Footer', $year);
	}



    public function fungsi_tambah()
    {
        $title['profil'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();


        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $quotes = $this->input->post('quotes');
        $gambar = $_FILES ['gambar'];
        

        if ($gambar = '') {
        } else {
            $config['upload_path'] = 'assets/admin/img/pages/quotes';
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
            
            'nama' => $nama,
            'jabatan' => $jabatan,
            'quotes' => $quotes,
            'gambar' => $gambar
        );

        $this->model_quotes->insertDataquotes($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Quotes added successfully!</div>');
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

    //     $this->model_carousel->updateDataCarousel($id, $ArrUpdate);
    //     $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"Carousel changed successfully!</div>');
    //     redirect(base_url('carousel'));
    // }

    public function fungsi_hapus($id)
    {
        $title['profil'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();

        $this->model_quotes->hapusDataquotes($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Quotes has been successfully deleted!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }
}
