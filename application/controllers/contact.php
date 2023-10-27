<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contact extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Contact');
		date_default_timezone_set('Asia/Jakarta');

    }
	
	public function fungsi_tambah()
    {
        
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $subjek = $this->input->post('subjek');
        $pesan = $this->input->post('pesan');
        $date = date('Y-m-d H:i:s');

        $ArrInsert = array(
            'nama' => $nama,
            'email' => $email,
            'subjek' => $subjek,
            'pesan' => $pesan,
            'date' => $date
            
        );

        $this->M_Contact->insertDataContact($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil Mengirim Pesan!</div>');
        redirect(base_url('home/#contact'));
    }}
