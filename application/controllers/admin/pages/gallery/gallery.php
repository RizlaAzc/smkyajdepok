<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gallery extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Gallery');
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

        $data['pesan'] = $this->M_Contact->getDataContact();

		$title['profil'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
		$title['title'] = "Gallery - CMS";

        $data['gallery'] = $this->M_Gallery->getDataGallery();

		$this->load->view('admin/templates/pages/V_Head', $title);
		$this->load->view('admin/templates/pages/V_Sidebar', $title);
		$this->load->view('admin/templates/pages/V_Navbar', $data);
		$this->load->view('admin/pages/gallery/V_Gallery', $data);
		$this->load->view('admin/templates/pages/V_Footer', $year);
	}

	public function edit($id)
	{
		$year['year'] = date('Y');

		$title['profil'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
		$title['title'] = "Edit Gallery - CMS";

        $data['gallery_detail'] = $this->M_Gallery->getDataGalleryDetail($id);

		$this->load->view('admin/templates/pages/V_Head', $title);
		$this->load->view('admin/templates/pages/V_Sidebar', $title);
		$this->load->view('admin/templates/pages/V_Navbar');
		$this->load->view('admin/pages/gallery/V_EditGallery', $data);
		$this->load->view('admin/templates/pages/V_Footer', $year);
	}

    public function fungsi_tambah()
    {
        $title['profil'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();

        $subjek = $this->input->post('subjek');
        // $deskripsi = $this->input->post('deskripsi');
        $gambar = $_FILES['gambar'];

        if ($gambar = '') {
        } else {
            $config['upload_path'] = 'assets/admin/img/pages/gallery';
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
            // 'deskripsi' => $deskripsi,
            'gambar' => $gambar
        );

        $this->M_Gallery->insertDataGallery($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Gallery added successfully!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function fungsi_edit()
    {
        $title['profil'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $subjek = $this->input->post('subjek');
        $gambar = $_FILES['gambar'];

        if ($gambar = '') {
            $ArrUpdate = array(
                'id' => $id,
                'subjek' => $subjek
            );
        } else {
            $config['upload_path'] = 'assets/admin/img/pages/gallery';
            $config['allowed_types'] = 'jpg|png|jpeg';

            $this->load->library('upload');
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar')) {
                $ArrUpdate = array(
                    'id' => $id,
                    'subjek' => $subjek,                );
            } else {
                $gambar = $this->upload->data('file_name');
                $ArrUpdate = array(
                    'id' => $id,
                    'subjek' => $subjek,
                    'gambar' => $gambar
                );
            }
        }

        $this->M_Gallery->updateDataGallery($id, $ArrUpdate);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Gallery changed successfully!</div>');
        redirect(base_url('admin/gallery'));
    }

    public function fungsi_hapus($id)
    {
        $title['profil'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();

        $this->M_Gallery->hapusDataGallery($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Gallery has been successfully deleted!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function excel()
    {
        $baris = 2;
        $no = 1;
        $filename = "Data Gallery" . '.xlsx';
        $queryAllGallery = $this->M_Gallery->getDataGallery();

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();
        $object->getProperties()->setCreator("SMK YAJ Depok");
        $object->getProperties()->setLastModifiedBy("SMK YAJ Depok");
        $object->getProperties()->setTitle("Data Gallery");
        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setCellValue('A1', 'No');
        $object->getActiveSheet()->setCellValue('B1', 'Subject');
        $object->getActiveSheet()->setTitle("Data Gallery");

        foreach ($queryAllGallery as $datagallery) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $datagallery->subjek);

            $baris++;
        }

        for ($col = 'A'; $col !== 'B'; $col++) {
            $object->getActiveSheet()
                ->getColumnDimension($col)
                ->setAutoSize(true);
        }

        $styleArrayFirstRow = [
            'font' => [
                'bold' => true,
            ]
        ];

        $highestColumn = $object->getActiveSheet()->getHighestColumn();
        $object->getActiveSheet()->getStyle('A1:' . $highestColumn . '1')->applyFromArray($styleArrayFirstRow);

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        $writer = PHPExcel_IOFactory::createwriter($object, 'Excel2007');
        $writer->save('php://output');

        exit;
    }

    public function pdf()
    {
        $queryAllGallery = $this->M_Gallery->getDataGallery();
        $DATA['queryAllGallery'] = $queryAllGallery;
        $this->load->library('dompdf_gen');
        $this->load->view('admin/pages/gallery/pdfgallery', $DATA);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper_size, $orientation);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream('Data Gallery.pdf', array('Attachment' => 0));
    }
}

