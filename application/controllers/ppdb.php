<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ppdb extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('model_study');
		$this->load->model('model_ppdb');
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
		$data['study'] = $this->model_study->getDataStudy();
		$title['title'] = " PPDB SMK YAJ";
		$this->load->view('user/templates/V_Head', $title);
		$this->load->view('user/templates/V_Navbar');
		$this->load->view('user/pages/ppdb/V_Ppdb', $data);
		$this->load->view('user/templates/V_Footer');
	}

	public function ppdb()
    {
        $jalurpendaftaran = $this->input->post('jalurpendaftaran');
        $pilihan1 = $this->input->post('pilihan1');
		$pilihan2 = $this->input->post('pilihan2');
        $asalsekolah = $this->input->post('asalsekolah');
        $nisn = $this->input->post('nisn');
		$namalengkap = $this->input->post('namalengkap');
		$tempatlahir = $this->input->post('tempatlahir');
		$tanggallahir = $this->input->post('tanggallahir');
		$jeniskelamin = $this->input->post('jeniskelamin');
		$agama = $this->input->post('agama');
		$statusanak = $this->input->post('statusanak');
		$anakke = $this->input->post('anakke');
		$alamat = $this->input->post('alamat');
		$telephone = $this->input->post('telephone');
		$email = $this->input->post('email');
		$photo = $_FILES['photo'];

        if ($photo = '') {
        } else {
            $config['upload_path'] = 'assets/user/img/ppdb';
            $config['allowed_types'] = 'jpg';

            $this->load->library('upload');
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('photo')) {
                echo "Upload Gagal";
            } else {
                $photo = $this->upload->data('file_name');
            }
        }

		$namaayah = $this->input->post('namaayah');
		$namaibu = $this->input->post('namaibu');
		$alamatortu = $this->input->post('alamatortu');	
		$telephoneortu = $this->input->post('telephoneortu');
		$pekerjaanayah = $this->input->post('pekerjaanayah');
		$pekerjaanibu = $this->input->post('pekerjaanibu');
		$namawali = $this->input->post('namawali');
		$alamatwali = $this->input->post('alamatwali');
		$telephonewali = $this->input->post('telephonewali');
		$pekerjaanwali = $this->input->post('pekerjaanwali');


        $ArrInsert = array(
            'jalurpendaftaran' => $jalurpendaftaran,
			'pilihan1' => $pilihan1,
			'pilihan2' => $pilihan2,
			'asalsekolah' => $asalsekolah,
			'nisn' => $nisn,
			'namalengkap' => $namalengkap,
			'tempatlahir' => $tempatlahir,
			'tanggallahir' => $tanggallahir,
			'jeniskelamin' => $jeniskelamin,
			'agama' => $agama,
			'statusanak' => $statusanak,
			'anakke' => $anakke,
			'alamat' => $alamat,
			'telephone' => $telephone,
            'email' => $email,
			'photo' => $photo,
            'namaayah' => $namaayah,
            'namaibu' => $namaibu,
			'alamatortu' => $alamatortu,
			'telephoneortu' => $telephoneortu,
			'pekerjaanayah' => $pekerjaanayah,
			'pekerjaanibu' => $pekerjaanibu,
			'namawali' => $namawali,
			'alamatwali' => $alamatwali,
			'telephonewali' => $telephonewali,
			'pekerjaanwali' => $pekerjaanwali
            
        );

        $this->model_ppdb->insertDataPpdb($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Formulir Berhasil di Simpan!</div>');
        redirect(base_url('ppdb'));
    }
}
