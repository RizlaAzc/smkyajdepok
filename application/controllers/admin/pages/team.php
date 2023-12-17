<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class team extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Team');
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
		$title['title'] = "Team - CMS";

        $data['team'] = $this->M_Team->getDataTeam();

		$this->load->view('admin/templates/pages/V_Head', $title);
		$this->load->view('admin/templates/pages/V_Sidebar', $title);
		$this->load->view('admin/templates/pages/V_Navbar', $data);
		$this->load->view('admin/pages/team/V_Team', $data);
		$this->load->view('admin/templates/pages/V_Footer', $year);
	}

    public function edit($id)
	{
		$year['year'] = date('Y');

		$title['profil'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
		$title['title'] = "Edit Team - CMS";

        $data['team_detail'] = $this->M_Team->getDataTeamDetail($id);

		$this->load->view('admin/templates/pages/V_Head', $title);
		$this->load->view('admin/templates/pages/V_Sidebar', $title);
		$this->load->view('admin/templates/pages/V_Navbar');
		$this->load->view('admin/pages/team/V_Edit', $data);
		$this->load->view('admin/templates/pages/V_Footer', $year);
	}



    public function fungsi_tambah()
    {
        $title['profil'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();

        $gambar = $_FILES ['gambar'];
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        

        if ($gambar = '') {
        } else {
            $config['upload_path'] = 'assets/admin/img/pages/team';
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
            'gambar' => $gambar,
            'nama' => $nama,
            'jabatan' => $jabatan
        );

        $this->M_Team->insertDataTeam($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Team added successfully!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function fungsi_edit()
    {
        $title['profil'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $gambar = $_FILES['gambar'];

        if ($gambar = '') {
            $ArrUpdate = array(
                'id' => $id,
                'nama' => $nama,
                'jabatan' => $jabatan
            );
        } else {
            $config['upload_path'] = 'assets/admin/img/pages/team';
            $config['allowed_types'] = 'jpg|png|jpeg';

            $this->load->library('upload');
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar')) {
                $ArrUpdate = array(
                    'id' => $id,
                    'nama' => $nama,
                    'jabatan' => $jabatan
                );
            } else {
                $gambar = $this->upload->data('file_name');
                $ArrUpdate = array(
                    'id' => $id,
                    'nama' => $nama,
                    'jabatan' => $jabatan,
                    'gambar' => $gambar
                );
            }
        }

        $this->M_Team->updateDataTeam($id, $ArrUpdate);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Team changed successfully!</div>');
        redirect(base_url('admin/team'));
    }

    public function fungsi_hapus($id)
    {
        $title['profil'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();

        $this->M_Team->hapusDataTeam($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Team has been successfully deleted!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function excel()
    {
        $baris = 2;
        $no = 1;
        $filename = "Data Team" . '.xlsx';
        $queryAllTeam = $this->M_Team->getDataTeam();

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();
        $object->getProperties()->setCreator("SMK YAJ Depok");
        $object->getProperties()->setLastModifiedBy("SMK YAJ Depok");
        $object->getProperties()->setTitle("Data Team");
        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setCellValue('A1', 'No');
        $object->getActiveSheet()->setCellValue('B1', 'Name');
        $object->getActiveSheet()->setCellValue('C1', 'Position');
        $object->getActiveSheet()->setTitle("Data Team");

        foreach ($queryAllTeam as $datateam) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $datateam->nama);
            $object->getActiveSheet()->setCellValue('C' . $baris, $datateam->jabatan);

            $baris++;
        }

        for ($col = 'A'; $col !== 'C'; $col++) {
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
        $queryAllTeam = $this->M_Team->getDataTeam();
        $DATA['queryAllTeam'] = $queryAllTeam;
        $this->load->library('dompdf_gen');
        $this->load->view('admin/pages/team/pdf', $DATA);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper_size, $orientation);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream('Data Team.pdf', array('Attachment' => 0));
    }
}

