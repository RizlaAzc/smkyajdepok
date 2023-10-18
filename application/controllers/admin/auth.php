<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		date_default_timezone_set('Asia/Jakarta');
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
		// agar user tidak bisa masuk ke halaman login sebelum logout
		if ($this->session->userdata('email')) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Logout First!</div>');
			redirect('admin/dashboard');
		}

		$this->goToDefaultPage();

		$title['title'] = "CMS Login";

		$this->load->view('admin/templates/auth/V_Head', $title);
		$this->load->view('admin/auth/V_Login');
		$this->load->view('admin/templates/auth/V_Footer');
	}

	public function goToDefaultPage()
	{
		if ($this->session->userdata('user_id') == 1) {
			redirect('admin/auth');
		}
	}

	public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('login', ['email' => $email])->row_array();

		// jika usernya ada
		if ($user) {

			// jika usernya aktif
			if ($user['is_active'] == 1) {

				// cek password nya
				if (password_verify($password, $user['password'])) {
					$data = [

						'email' => $user['email']
						// 'role_id' => $user['role_id']

					];
					$this->session->set_userdata($data);
					redirect('admin/dashboard');
				} else {

					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">wrong password!</div>');
					redirect('admin/auth');
				}
			} else {

				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">this email has not been activated!</div>');
				redirect('admin/auth');
			}
		} else {

			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">email is not registered!</div>');
			redirect('admin/auth');
		}
	}


	public function register()
	{
		if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Login First!</div>');
            redirect('admin/auth');
        }
		
		$this->form_validation->set_rules('nama', 'nama', 'required|trim');
		$this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|is_unique[login.email]', [
			'is_unique' => 'this email has already registered!'
		]);

		$this->form_validation->set_rules(
			'password1',
			'password',
			'required|trim|min_length[3]|matches[password2]',
			[
				'matches' => 'password dont match!',
				'min_length' => 'password to short!'
			]
		);

		$this->form_validation->set_rules('password2', 'password', 'required|trim|matches[password1]');

		if ($this->form_validation->run() == false) {
			$title['title'] = 'CMS Register';
			$this->load->view('admin/templates/auth/V_Head', $title);
			$this->load->view('admin/auth/V_Register');
			$this->load->view('admin/templates/auth/V_Footer');
		} else {
			// $role_id = $this->input->post('role_id');

			$data = [
				'nama_lengkap' => htmlspecialchars($this->input->post('nama_lengkap', true)),
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'telepon' => htmlspecialchars($this->input->post('telepon', true)),
				'foto' => 'profil.png',
				// 'role_id' => $role_id,
				'date_created' => date('Y-m-d'),
				'is_active' => 1
			];

			$this->db->insert('login', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! Your account has been created!</div>');
			redirect('admin/dashboard');
		}
	}

	public function logout()	
	{
		// $this->session->unset_unserdata('email');
		// $this->session->unset_unserdata('role_id');

		$this->session->sess_destroy();
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">congratulation! Your account has been logout.</div>');
		redirect('admin/auth');
	}


	//      public function forgotpassword ()
	//      {

	//       $this->form_validation->set_rules('email', 'email', 'trim|required', 'valid_email');
	//      	if($this->form_validation->run() == false) {

	//      	$title['title'] = 'forgotpassword - Konekthing Admin';
	//       $this->load->view('header-forms', $title);
	//       $this->load->view('admin/forms/forgotpassword');
	// $this->load->view('footer-forms');


	// } else if($type == 'forgot') {

	// $this->email->subject('reset password');
	// $this->email->message('click this link to reset your password : <a href="' . base_url() . 'forms/reset password?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">reset password</a>');
	// }


	//  } else {

	// $email = $this->input->post('email');
	// $user = $this->db->get_where('login', ['email' => $email, 'is_active' => 1])-> row_array();

	//  if($user) { 

	// 	$token = base64_encode (random_bytes(32));
	// 	$user_token = [
	// 		'email' => $email,
	// 		'token' => $token,
	// 		'date_created' => $time()
	// 	];

	// $this->db->insert('user_token', $user_token);
	// $this->sendemail($token, 'forgot');

	// $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">please check your email to reset your password!</div>');
	// 	redirect ('forms/forgotpassword');

	// } else {

	// $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">email is not registered or activited!</div>');
	// 	redirect ('forms/forgotpassword');


	//       }
	//    } 
	// }



	// public function resetpassword()
	// {
	// 	$email->$this->input->get('email');
	// 	$token->$this->input->get('token');

	// 	$user = $this->user->get_where('user', ['email' => $email])->row_array();

	// 	if ($user) {
	// 		$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

	// 		if ($user_token) {
	// 			$this->session->userdata('reset_email', $email);
	// 			$this->changepassword();
	// 		} else {

	// 			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">reset password failed! wrong token.</div>');
	// 			redirect('forms');
	// 		}
	// 	} else {
	// 		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">reset password failed! wrong email.</div>');
	// 		redirect('forms');
	// 	}
	// }


	// public function changepassword()
	// {

	// 	if (!$this->session->userdata('reset_email')) {
	// 		redirect('forms');
	// 	}

	// 	$this->form_validation->set_rules('password1', 'password', 'trim|required|min_length[3]matches[password2]');
	// 	$this->form_validation->set_rules('password2', 'repeat password', 'trim|required|min_length[3]matches[password1]');

	// 	if ($this->form_validation->run() == false) {
	// 		$title['title'] = 'changepassword - Konekthing Admin';
	// 		$this->load->view('header-forms', $title);
	// 		$this->load->view('admin/forms/changepassword');
	// 		$this->load->view('footer-forms');
	// 	} else {
	// 		$password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
	// 		$email = $this->session->userdata('reset_email');

	// 		$this->db->set('password', $password);
	// 		$this->db->where('email', $email);
	// 		$this->db->update('user');

	// 		$this->session->unset_unserdata('reset_email');

	// 		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">password has been changed 
	// 	! please login.</div>');
	// 		redirect('forms/login');
	// 	}
	// }
}
