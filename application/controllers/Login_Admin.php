<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login_Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }

    public function index()
    {
        $data['judul'] = 'Mentoring Pelindo I - Login Admin';
        $this->load->view('admin/login/header', $data);
        $this->load->view('admin/login/view_login_admin');
    }

    public function loginAdmin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $role = 'admin';
        $where = array(
            'username' => $username,
            'password' => md5($password)
        );
        $cek = $this->m_login->cek_login("akun", $where);
        if ($cek->num_rows() > 0) {

            $user = $cek->result()[0];

            if ($user->role == $role) {
                $w_nama = array(
                    'id_akun' => $user->id_akun,
                );

                $nama = $this->m_login->cek_login("admin", $w_nama)->result()[0];

                $data_session = array(
                    'id_admin' => $nama->id_admin,
                    'nama' => $nama->nama,
                    'role' => $user->role,
                    'status' => "login"
                );

                $this->session->set_userdata($data_session);

                $this->session->set_flashdata('SuccessLogin', 'Success');
                $this->session->flashdata('SuccessLogin');

                redirect(base_url('Login_Admin'));
            } else {
                $this->session->set_flashdata('FailedLogin', 'Failed');
                $this->session->flashdata('FailedLogin');
                redirect(base_url('Login_Admin'));
            }
        } else {
            $this->session->set_flashdata('FailedLogin', 'Failed');
            $this->session->flashdata('FailedLogin');
            redirect(base_url('Login_Admin'));
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('Login_Admin'));
    }
}
