<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}

	public function index()
	{
		$data['judul'] = 'Mentoring Pelindo I - Login';
		$this->load->view('header', $data);
		$this->load->view('login');
	}

	public function Login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
		);
		$cek = $this->m_login->cek_login("akun", $where);
		if ($cek->num_rows() > 0) {

			$user = $cek->result()[0];

			if ($user->role == 'mentee') {
				$w_nama = array(
					'id_akun' => $user->id_akun,
				);

				$nama = $this->m_login->cek_login("mentee", $w_nama)->result()[0];

				$data_session = array(
					'first_name' => $nama->first_name,
					'id_akun' => $user->id_akun,
					'id_mentee' => $nama->id_mentee,
					'id_group' => $nama->id_group,
					'id_contractAgg' => $nama->id_contractAgg,
					'role' => $user->role,
					'status' => "login"
				);

				$this->session->set_userdata($data_session);

				$this->session->set_flashdata('SuccessLogin', 'Success');
				$this->session->flashdata('SuccessLogin');


				redirect(base_url('login'));
			} else if ($user->role == 'mentor') {
				$w_nama = array(
					'id_akun' => $user->id_akun,
				);

				$nama = $this->m_login->cek_login("mentor", $w_nama)->result()[0];

				// var_dump($nama);

				$data_session = array(
					'first_name' => $nama->first_name,
					'id_akun' => $nama->id_akun,
					'id_mentor' => $nama->id_mentor,
					'id_group' => $nama->id_group,
					'id_contractAgg' => $nama->id_contractAgg,
					'role' => $user->role,
					'status' => "login"
				);

				$this->session->set_userdata($data_session);

				$this->session->set_flashdata('SuccessLogin', 'Success');
				$this->session->flashdata('SuccessLogin');

				// var_dump($nama);

				// redirect(base_url($user->role));
				redirect(base_url('login'));
			} else {
				$this->session->set_flashdata('FailedLogin', 'Failed');
				$this->session->flashdata('FailedLogin');
				redirect(base_url('login'));
			}
		} else {
			$this->session->set_flashdata('FailedLogin', 'Failed');
			$this->session->flashdata('FailedLogin');
			redirect(base_url('login'));
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
