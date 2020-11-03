<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        $this->load->model('m_admin');

        if ($this->session->userdata("role") != "admin") {
            redirect("admin");
        }
    }

    public function index()
    {
        $data['judul'] = 'Mentoring Pelindo I - Admin';
        $this->load->view('admin/_partials/header', $data);

        $group = $this->m_admin->all_group();
        $mentor = $this->m_admin->all_mentor();
        $mentee = $this->m_admin->all_mentee();
        $sdm = $this->m_admin->all_sdm();
        $postingan = $this->m_admin->all_postingan();
        $form = $this->m_admin->all_form();
        $data = [
            $jmlh_group = count($group),
            $jmlh_mentor = count($mentor),
            $jmlh_mentee = count($mentee),
            $jmlh_sdm = count($sdm),
            $jmlh_postingan = count($postingan),
            $jmlh_form = count($form)
        ];

        $this->load->view('admin/dashboard/dashboard-utama', ['data' => $data]);
    }

    // public function activity()
    // {
    //     $data['judul'] = 'Mentoring Pelindo I - Admin Activity';
    //     $this->load->view('admin/headeradm', $data);
    //     $this->load->view('admin/activity');
    // }

    public function mentor()
    {
        $data['judul'] = 'Mentoring Pelindo I - Admin Mentor';
        $this->load->view('admin/_partials/header', $data);

        $mentor = $this->m_admin->all_mentor();
        $this->load->view('admin/users/mentor', ['data' => $mentor]);
    }

    public function mentee()
    {
        $data['judul'] = 'Mentoring Pelindo I - Admin Mentor';
        $this->load->view('admin/_partials/header', $data);

        $mentee = $this->m_admin->all_mentee();
        $this->load->view('admin/users/mentee', ['data' => $mentee]);
    }

    public function sdm()
    {
        $data['judul'] = 'Mentoring Pelindo I - Admin Mentor';
        $this->load->view('admin/_partials/header', $data);

        $sdm = $this->m_admin->all_sdm();
        $this->load->view('admin/users/sdm', ['data' => $sdm]);
    }

    public function group()
    {
        $data['judul'] = 'Mentoring Pelindo I - Admin Mentor';
        $this->load->view('admin/_partials/header', $data);

        $group = $this->m_admin->all_group();
        $this->load->view('admin/groups/group', ['data' => $group]);
    }

    public function post()
    {
        $data['judul'] = 'Mentoring Pelindo I - Admin Post';
        $this->load->view('admin/headeradm', $data);
        $dummy_post = $this->m_admin->view_post();
        $this->load->view('admin/post', ['data' => $dummy_post]);
    }

    public function form()
    {
        $data['judul'] = 'Mentoring Pelindo I - Admin Form';
        $this->load->view('admin/headeradm', $data);
        $dummy_form = $this->m_admin->view_form();
        $this->load->view('admin/form', ['data' => $dummy_form]);
    }


    public function detailGroup()
    {
        $data['judul'] = 'Mentoring Pelindo I - Admin Detail Group';
        $this->load->view('admin/headeradm', $data);
        $this->load->view('admin/groupdetail');
    }

    public function detailMentor($id_mentor)
    {
        $data['judul'] = 'Mentoring Pelindo I - Admin Detail Mentor';
        $this->load->view('admin/headeradm', $data);
        $detment = $this->m_admin->view_detailmentor($id_mentor);
        $this->load->view('admin/mentordetail', ['data' => $detment]);
    }

    public function detailMentee($id_mentee)
    {
        $data['judul'] = 'Mentoring Pelindo I - Admin Detail Mentee';
        $this->load->view('admin/headeradm', $data);
        $detmte = $this->m_admin->view_detailmentee($id_mentee);
        $this->load->view('admin/menteedetail', ['data' => $detmte]);
    }

    public function detailSdm($id_sdm)
    {
        $data['judul'] = 'Mentoring Pelindo I - Admin Detail SDM';
        $this->load->view('admin/headeradm', $data);
        $detsdm = $this->m_admin->view_detailsdm($id_sdm);
        $this->load->view('admin/sdmdetail', ['data' => $detsdm]);
    }

    public function deleteGroup($id_group)
    {
        $this->m_admin->delete_group($id_group);
        redirect('DashboardAdmin/group');
    }

    public function addGroup()
    {
        redirect('DashboardAdmin/group');
    }

    public function updateGroup()
    {
        redirect('DashboardAdmin/group');
    }

    public function addPost()
    {
        redirect('DashboardAdmin/post');
    }

    public function deletePost($id_post)
    {
        $this->m_admin->delete_post($id_post);
        redirect('DashboardAdmin/post');
    }

    public function updatePost()
    {
        redirect('DashboardAdmin/post');
    }

    public function addSdm()
    {
        redirect('DashboardAdmin/sdm');
    }

    public function deleteSdm($id_sdm)
    {
        $this->m_admin->delete_sdm($id_sdm);
        redirect('DashboardAdmin/sdm');
    }

    public function updateSdm()
    {
        redirect('DashboardAdmin/sdm');
    }

    public function addMentor()
    {
        redirect('DashboardAdmin/mentor');
    }

    public function deleteMentor($id_mentor)
    {
        $this->m_admin->delete_mentor($id_mentor);
        redirect('DashboardAdmin/mentor');
    }

    public function updateMentor()
    {
        redirect('DashboardAdmin/mentor');
    }

    public function addMentee()
    {
        redirect('DashboardAdmin/mentee');
    }

    public function deleteMentee($id_mentee)
    {
        $this->m_admin->delete_mentee($id_mentee);
        redirect('DashboardAdmin/mentee');
    }

    public function updateMentee()
    {
        redirect('DashboardAdmin/mentee');
    }

    public function addForm()
    {
        redirect('DashboardAdmin/form');
    }

    public function deleteForm($id_form)
    {
        $this->m_admin->delete_form($id_form);
        redirect('DashboardAdmin/form');
    }

    public function updateForm()
    {
        redirect('DashboardAdmin/form');
    }


    public  function profile($id_admin)
    {
        $data['judul'] = 'Mentoring Pelindo I - Admin Profile';
        $this->load->view('admin/headeradm', $data);
        $profile = $this->m_admin->view_profile($id_admin);
        // var_dump($profile);
        $this->load->view('admin/profileadm', ['data' => $profile]);
    }

    public function changePassword()
    {
        $id = $this->input->post('id', true);
        $old_password = $this->input->post('pass1', true);
        $this->form_validation->set_rules('pass2', 'Password', 'required');
        $this->form_validation->set_rules('pass3', 'Password Confirmation', 'required|matches[pass2]');
        if ($this->form_validation->run() == FALSE) {
            //$this->form_validation->set_message('pass', 'New password do not matches');
            //$this->session->set_flashdata('error', validation_errors());
            echo "PASSWORD BARUNYA GA SAMA(pass2 != pass3)";
            redirect(base_url('DashboardSDM/Profile/') . $id);
        }
        $validasi = $this->m_sdm->validasiPassword($id, $old_password);
        if ($validasi == -1) {
            echo "PASSWORD LAMA GA SESUAI";
            redirect(base_url('DashboardSDM/Profile/') . $id);
        }
        $data = [
            "password" => md5($this->input->post('pass2', true))

        ];
        $this->m_sdm->update_password($validasi, $data);
        echo "PASSWORD SUKSES TERGANTI";
        redirect(base_url('DashboardSDM/Profile/') . $id_sdm);
    }
}
