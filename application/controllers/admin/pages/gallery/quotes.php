<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class quotes extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Quotes');
        $this->load->model('M_Contact');

        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Login First!</div>');
            redirect('admin/auth');
        }
    }

	public function index()
	{
		$year['year'] = date('Y');

        $data['pesan'] = $this->M_Contact->getDataContact();

		$title['profil'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
		$title['title'] = "Quotes - CMS";

        $data['quotes'] = $this->M_Quotes->getDataQuotes();

		$this->load->view('admin/templates/pages/V_Head', $title);
		$this->load->view('admin/templates/pages/V_Sidebar', $title);
		$this->load->view('admin/templates/pages/V_Navbar', $data);
		$this->load->view('admin/pages/gallery/V_Quotes', $data);
		$this->load->view('admin/templates/pages/V_Footer', $year);
	}

    public function edit($id)
	{
		$year['year'] = date('Y');

		$title['profil'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
		$title['title'] = "Edit Quotes - CMS";

        $data['quotes_detail'] = $this->M_Quotes->getDataQuotesDetail($id);

		$this->load->view('admin/templates/pages/V_Head', $title);
		$this->load->view('admin/templates/pages/V_Sidebar', $title);
		$this->load->view('admin/templates/pages/V_Navbar');
		$this->load->view('admin/pages/gallery/V_EditQuotes', $data);
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

        $this->M_Quotes->insertDataQuotes($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Quotes added successfully!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function fungsi_edit()
    {
        $title['profil'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $quotes = $this->input->post('quotes');
        $gambar = $_FILES ['gambar'];

        if ($gambar = '') {
            $ArrUpdate = array(
                'id' => $id,
                'subjek' => $subjek,
                'deskripsi' => $deskripsi
            );
        } else {
            $config['upload_path'] = 'assets/admin/img/pages/quotes';
            $config['allowed_types'] = 'jpg|png|jpeg';

            $this->load->library('upload');
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar')) {
                $ArrUpdate = array(
                    'id' => $id,
                    'nama' => $nama,
                    'jabatan' => $jabatan,
                    'quotes' => $quotes
                );
            } else {
                $gambar = $this->upload->data('file_name');
                $ArrUpdate = array(
                    'id' => $id,
                    'nama' => $nama,
                    'jabatan' => $jabatan,
                    'quotes' => $quotes,
                    'gambar' => $gambar
                );
            }
        }

        $this->M_Quotes->updateDataQuotes($id, $ArrUpdate);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Quotes changed successfully!</div>');
        redirect(base_url('admin/quotes'));
    }

    public function fungsi_hapus($id)
    {
        $title['profil'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();

        $this->M_Quotes->hapusDataQuotes($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Quotes has been successfully deleted!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function excel()
    {
        $baris = 2;
        $no = 1;
        $filename = "Data Quotes" . '.xlsx';
        $queryAllQuotes = $this->M_Quotes->getDataQuotes();

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();
        $object->getProperties()->setCreator("SMK YAJ Depok");
        $object->getProperties()->setLastModifiedBy("SMK YAJ Depok");
        $object->getProperties()->setTitle("Data Quotes");
        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setCellValue('A1', 'No');
        $object->getActiveSheet()->setCellValue('B1', 'Name');
        $object->getActiveSheet()->setCellValue('C1', 'Position');
        $object->getActiveSheet()->setCellValue('D1', 'Quotes');
        $object->getActiveSheet()->setTitle("Data Quotes");

        foreach ($queryAllQuotes as $dataquotes) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $dataquotes->nama);
            $object->getActiveSheet()->setCellValue('C' . $baris, $dataquotes->jabatan);
            $object->getActiveSheet()->setCellValue('D' . $baris, $dataquotes->quotes);

            $baris++;
        }

        for ($col = 'A'; $col !== 'D'; $col++) {
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
        $queryAllQuotes = $this->M_Quotes->getDataQuotes();
        $DATA['queryAllQuotes'] = $queryAllQuotes;
        $this->load->library('dompdf_gen');
        $this->load->view('admin/pages/gallery/pdfquotes', $DATA);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper_size, $orientation);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream('Data Quotes.pdf', array('Attachment' => 0));
    }
}

