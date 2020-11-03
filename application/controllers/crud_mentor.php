<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Crud_mentor extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_mentoring');
        $this->load->model('m_mentor');
        $this->load->model('m_mentee');
        $this->load->model('m_calendar');
        $this->load->library('form_validation');
        $this->load->helper(array('url', 'download'));
        $this->load->helper(array('form', 'url'));
    }

    //create and save
    public function createMeeting()
    {
        $id_group = $this->session->userdata('id_group');
        $id_mentor = $this->session->userdata('id_mentor');

        $dataMeetings = [
            "id_mentee" => $this->input->post('id_mentee', true),
            "id_mentor" => $id_mentor,
            "nama" => $this->input->post('agenda', true),
            "deskripsi" => $this->input->post('deskripsi', true),
            "tanggal" => $this->input->post('date', true),
            "waktu" => $this->input->post('time', true),
            "status" => "Scheduled"
        ];
        $this->m_mentor->createMeeting($dataMeetings);
        redirect(base_url("mentor/meetings"));
    }

    public function save_posting()
    {
        $id_akun = $this->session->userdata('id_akun');
        $id_group = $this->session->userdata('id_group');
        $mentor = $this->m_mentor->getMentor_akun($id_akun);
        $nama = $mentor[0]->first_name;

        $data = [
            "id_group" => $id_group,
            "id_akun" => $id_akun,
            "nama" => $nama,
            "posting" => $this->input->post('posting')
        ];
        $this->m_mentoring->savePosting($data);
        redirect(base_url("mentor/group_page"));
    }

    public function save_comment($id_grupPost)
    {
        $id_akun = $this->session->userdata('id_akun');
        $id_group = $this->session->userdata('id_group');
        $mentor = $this->m_mentor->getMentor_akun($id_akun);
        $nama = $mentor[0]->first_name;

        $data = [
            "comment" => $this->input->post('comment'),
            "id_akun" => $id_akun,
            "id_group" => $id_group,
            "id_grupPost" => $id_grupPost,
            "nama" => $nama
        ];

        $this->m_mentoring->saveComment($data);
        redirect(base_url("mentor/group_page"));
    }
    //update and edit
    function edit_profile($id_mentor)
    {
        $data = [
            "id_mentor" => $id_mentor,
            "first_name" => $this->input->post('first_name', true),
            "last_name" => $this->input->post('last_name', true),
            "gelar" => $this->input->post('gelar', true),
            "nik" => $this->input->post('nik', true),
            "tempat" => $this->input->post('tempat', true),
            "tgl_lahir" => $this->input->post('tgl_lahir', true),
            "jkelamin" => $this->input->post('jkelamin', true),
            "agama" => $this->input->post('agama', true),
            "jbtakhir" => $this->input->post('jbtakhir', true),
            "alamat" => $this->input->post('alamat', true),
            "nohp" => $this->input->post('nohp', true),
            "email" => $this->input->post('email', true),
            "sosmed" => $this->input->post('sosmed', true),
            "id_akun" => $this->session->userdata('id_akun'),
            "id_group" => $this->session->userdata('id_group')
            // "nipp"=> $this->input->post('nipp',true),
        ];

        $this->m_mentor->edit_profileinfo($id_mentor, $data);
        redirect(base_url("mentor/setting"));
    }

    function edit_dev($id)
    {
        $dev = $this->m_mentoring->get_one_dev($id)[0];
        $id_mentee = $dev->id_mentee;
        $data = [
            "dev_object" =>  $this->input->post('dev_object', true),
            "aktifitas" =>  $this->input->post('aktifitas', true),
            "metode" =>  $this->input->post('metode', true),
            "tgl_selesai" =>  $this->input->post('tgl_selesai', true),
            "kemampuan" =>  $this->input->post('kemampuan', true),
            "keterangan" =>  $this->input->post('keterangan', true),
            "note" =>  $this->input->post('note', true),
        ];
        $this->m_mentoring->edit_dev($id, $data);
        redirect(base_url("mentor/developmentPlan/") . (int)$id_mentee);
    }

    function edit_noncareer($id)
    {
        $id_mentee = $this->m_mentoring->get_id_from_noncareer($id)[0];
        $data = [
            "jangka_waktu" =>  $this->input->post('jangka_waktu', true),
            "expertise" =>  $this->input->post('expertise', true),
            "bidang" =>  $this->input->post('bidang', true)
        ];
        $this->m_mentee->edit_noncareer($id, $data);
        redirect(base_url("mentor/contractAggrement/") . (int)$id_mentee);
    }

    function edit_career($id)
    {
        $id_mentee = $this->m_mentoring->get_id_from_career($id)[0];
        $data = [
            "jangka_waktu" =>  $this->input->post('jangka_waktu', true),
            "posisi" =>  $this->input->post('posisi', true),
            "unit" =>  $this->input->post('unit', true)
        ];

        $this->m_mentee->edit_career($id, $data);
        redirect(base_url("mentor/contractAggrement/") . (int)$id_mentee);
    }

    function done_dev($id)
    {
        $dev = $this->m_mentoring->get_one_dev($id)[0];
        $id_mentee = $dev->id_mentee;
        $data = [
            "status" => 'Done'
        ];
        $this->m_mentoring->edit_dev($id, $data);
        redirect(base_url("mentor/developmentPlan/") . (int)$id_mentee);
    }

    function cancel_dev($id)
    {
        $dev = $this->m_mentoring->get_one_dev($id)[0];
        $id_mentee = $dev->id_mentee;
        $data = [
            "status" => 'Cancelled'
        ];
        $this->m_mentoring->edit_dev($id, $data);
        redirect(base_url("mentor/developmentPlan/") . (int)$id_mentee);
    }

    //delete
    public function delete_dev($id)
    {
        $dev = $this->m_mentoring->get_one_dev($id)[0];
        $id_mentee = $dev->id_mentee;

        $this->m_mentoring->delete_dev($id);
        $this->session->set_flashdata('SuccessDelete', 'Success');
        $this->session->flashdata('SuccessDelete');
        redirect(base_url("mentor/DevelopmentPlan/") . (int)$id_mentee);
    }
    public function delete_career($id)
    {
        $id_mentee = $this->m_mentoring->get_id_from_career($id)[0];
        $this->m_mentoring->delete_career($id);
        $this->session->set_flashdata('SuccessDelete', 'Success');
        $this->session->flashdata('SuccessDelete');

        var_dump($id_mentee);
        redirect(base_url("mentor/contractAggrement/") . (int)$id_mentee);
    }

    public function delete_noncareer($id)
    {
        $id_mentee = $this->m_mentoring->get_id_from_noncareer($id)[0];
        // var_dump($id_mentee);
        $this->m_mentoring->delete_noncareer($id);
        $this->session->set_flashdata('SuccessDelete', 'Success');
        $this->session->flashdata('SuccessDelete');
        redirect(base_url("mentor/contractAggrement/") . (int)$id_mentee);
    }
    //change status
    public function DoneMeeting($id)
    {
        $data = [
            "status" => 'Done'
        ];
        $this->m_mentoring->editMeeting($id, $data);

        redirect(base_url("mentor/meetings"));
    }

    public function CancelledMeeting($id)
    {
        $data = [
            "status" => 'Cancelled'
        ];
        $this->m_mentoring->editMeeting($id, $data);

        redirect(base_url("mentor/meetings"));
    }
}
