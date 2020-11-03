<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
 
	}

	public function index(){
		$data['judul'] = 'Mentoring Pelindo I - Register';
		$this->load->view('header', $data);
		$this->load->view('register');
	}

	public function Register(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("login",$where);
		if($cek->num_rows() > 0){

			$user = $cek->result()[0];

			$this->session->set_flashdata('SuccessLogin','Success');
			$this->session->flashdata('SuccessLogin'); 
 
		}else{
			$this->session->set_flashdata('FailedLogin','Failed');
			$this->session->flashdata('FailedLogin'); 
		}
		// $this->load->view('swal');
		redirect(base_url('admin'));

	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('admin'));
	}
}
