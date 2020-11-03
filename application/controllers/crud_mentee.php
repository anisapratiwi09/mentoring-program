<?php

defined('BASEPATH') or exit('No direct script access allowed');

class crud_mentee extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_mentoring');
        $this->load->model('m_mentee');
        $this->load->library('form_validation');
        $this->load->helper(array('url', 'download'));
        $this->load->helper(array('form', 'url'));
    }

    //download file
    public function download_contractAgg()
    {
        force_download('assets/dokumen/form-contract.pdf', NULL);
    }

    //upload file

    public function upload_contractAgg()
    {
        $config['upload_path']          = './assets/dokumen/';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 100;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('berkas')) {
            $error = array('error' => $this->upload->display_errors());
            // var_dump($error);
            redirect(base_url("mentee/contract_Aggrement", $error));
        } else {
            $data = array('upload_data' => $this->upload->data());
            // redirect(base_url("mentee/contract_Aggrement_done", $data));
        }
    }

    //save
    public function save_summary()
    {
        $id_mentee = $this->session->userdata('id_mentee');
        $data_2 = [
            "keahlian" => $this->input->post('keahlian', true),
            "value" => $this->input->post('value', true),
            "tagline" => $this->input->post('tagline', true),
            "dream" => $this->input->post('dream', true),
            "id_mentee" => $id_mentee
        ];

        $this->m_mentee->create_summary($data_2);
        redirect(base_url("mentee/profile"));
    }

    public function save_interest()
    {
        $id_mentee = $this->session->userdata('id_mentee');

        $data = [
            "interest" => $this->input->post('interest', true),
            "jbtn_tujuan" => $this->input->post("jbtn_tujuan", true),
            "id_mentee" => $id_mentee
        ];

        $this->m_mentee->create_interest($data);
        redirect(base_url("mentee/profile"));
    }

    public function save_edu()
    {
        $id_mentee = $this->session->userdata('id_mentee');
        $data = [
            "jenjang" => $this->input->post('jenjang', true),
            "jurusan" => $this->input->post("jurusan", true),
            "univ" => $this->input->post("univ", true),
            "thn_lulus" => $this->input->post("thn_lulus", true),
            "id_mentee" => $id_mentee
        ];

        $this->m_mentee->create_education($data);
        redirect(base_url("mentee/profile"));
    }

    public function save_posting()
    {
        $id_akun = $this->session->userdata('id_akun');
        $id_group = $this->session->userdata('id_group');
        $mentee = $this->m_mentee->get_mentee($id_akun);
        $nama = $mentee[0]->first_name;

        $data = [
            "id_group" => $id_group,
            "id_akun" => $id_akun,
            "nama" => $nama,
            "posting" => $this->input->post('posting')
        ];
        $this->m_mentoring->savePosting($data);
        redirect(base_url("mentee/group_page"));
    }

    public function save_comment($id_grupPost)
    {
        $id_akun = $this->session->userdata('id_akun');
        $id_group = $this->session->userdata('id_group');
        $mentee = $this->m_mentee->get_mentee($id_akun);
        $nama = $mentee[0]->first_name;

        $data = [
            "comment" => $this->input->post('comment'),
            "id_akun" => $id_akun,
            "id_group" => $id_group,
            "id_grupPost" => $id_grupPost,
            "nama" => $nama
        ];

        $this->m_mentoring->saveComment($data);
        redirect(base_url("mentee/group_page"));
    }

    // public function save_multicareer()
    // {
    //     $posisi = $_POST['posisi'];
    //     $unit = $_POST['unit'];
    //     $jangka_waktu = $_POST['jangka_waktu'];

    //     var_dump($posisi);
    //     $index = 0;
    // }

    //create
    public function create_career()
    {
        $id_mentee = $this->session->userdata('id_mentee');
        $data = [
            "posisi" =>  $this->input->post('posisi', true),
            "unit" =>  $this->input->post('unit', true),
            "jangka_waktu" =>  $this->input->post('jangka_waktu', true),
            "id_mentee" => $id_mentee
        ];
        $this->m_mentoring->create_career($data);
        redirect(base_url("mentee/CareerGoals"));
    }
    public function create_noncareer()
    {
        $id_mentee = $this->session->userdata('id_mentee');
        $data = [
            "expertise" =>  $this->input->post('expertise', true),
            "bidang" =>  $this->input->post('bidang', true),
            "jangka_waktu" =>  $this->input->post('jangka_waktu', true),
            "id_mentee" => $id_mentee
        ];
        // var_dump($data);
        $this->m_mentoring->create_noncareer($data);
        redirect(base_url("mentee/NonCareerGoals"));
    }

    public function create_goals()
    {
        $id_mentee = $this->session->userdata('id_mentee');
        $data = [
            "list_goals" =>  $this->input->post('list_goals', true),
            "id_mentee" => $id_mentee
        ];
        // var_dump($data);
        $this->m_mentoring->create_goals($data);
        redirect(base_url("mentee/contract_Aggrement"));
    }

    public function create_dev()
    {
        $id_mentee = $this->session->userdata('id_mentee');
        $data = [
            "dev_object" =>  $this->input->post('dev_object', true),
            "aktifitas" =>  $this->input->post('aktifitas', true),
            "metode" =>  $this->input->post('metode', true),
            "tgl_selesai" =>  $this->input->post('tgl_selesai', true),
            "kemampuan" =>  $this->input->post('kemampuan', true),
            "keterangan" =>  $this->input->post('keterangan', true),
            "id_goals" =>  $this->input->post('id_goals', true),
            "status" => 'Scheduled',
            "id_mentee" => $id_mentee
        ];
        // var_dump($data);
        $this->m_mentoring->create_dev($data);
        redirect(base_url("mentee/DevelopmentPlan"));
    }




    //update or edit
    function edit_profileinfo($id_mentee)
    {
        // $this->form_validation->set_rules('first_name', 'first_name', 'required');

        $data = [
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
            "sosmed" => $this->input->post('sosmed', true)
            // "nipp"=> $this->input->post('nipp',true),
        ];

        $this->m_mentee->edit_profileinfo($id_mentee, $data);
        redirect(base_url("mentee/setting"));
    }

    function edit_profile($id_mentee)
    {
        // $this->form_validation->set_rules('first_name', 'first_name', 'required|trim');
        // $this->form_validation->set_rules('last_name', 'last_name', 'required|trim');
        $this->form_validation->set_rules('nik', 'Nik', 'required|trim');

        if ($this->form_validation->run() == false) {
            // echo 'salah';
            redirect(base_url("mentee/profile"));
        } else {
            $data = [
                "first_name" => $this->input->post('first_name', true),
                "last_name" => $this->input->post('last_name', true),
                "nik" => $this->input->post('nik', true),
                "gelar" => $this->input->post('gelar', true),
                "tempat" => $this->input->post('tempat', true),
                "tgl_lahir" => $this->input->post('tgl_lahir', true),
                "jkelamin" => $this->input->post('jkelamin', true),
                "agama" => $this->input->post('agama', true),
                "jbtakhir" => $this->input->post('jbtakhir', true),
                "alamat" => $this->input->post('alamat', true),
                "nohp" => $this->input->post('nohp', true),
                "email" => $this->input->post('email', true),
                "sosmed" => $this->input->post('sosmed', true)
                // "nipp"=> $this->input->post('nipp',true),
            ];
            echo 'oke bos';
            // $this->m_mentee->edit_profileinfo($id_mentee, $data);
            // redirect(base_url("mentee/profile"));
        }
    }
    function edit_edu($id_edu)
    {
        $id_mentee = $this->session->userdata('id_mentee');
        $data = [
            "jenjang" => $this->input->post('jenjang', true),
            "jurusan" => $this->input->post("jurusan", true),
            "univ" => $this->input->post("univ", true),
            "thn_lulus" => $this->input->post("thn_lulus", true),
            "id_mentee" => $id_mentee
        ];
        $this->m_mentee->edit_edu($id_edu, $data);
        redirect(base_url("mentee/setting"));
    }

    function editcareer($id)
    {
        $id_mentee = $this->session->userdata('id_mentee');
        $data = [
            "posisi" =>  $this->input->post('posisi', true),
            "unit" =>  $this->input->post('unit', true),
            "jangka_waktu" =>  $this->input->post('jangka_waktu', true),
            "id_mentee" => $id_mentee
        ];

        $this->m_mentee->edit_career($id, $data);
        redirect(base_url("mentee/CareerGoals"));
    }

    function edit_goals($id_goals)
    {
        $id_mentee = $this->session->userdata('id_mentee');
        $data = [
            "list_goals" =>  $this->input->post('list_goals', true)
            // "id_mentee" => $id_mentee
        ];

        $this->m_mentee->edit_goals($id_goals, $data);
        redirect(base_url("mentee/contract_Aggrement"));
    }

    function edit_noncareer($id)
    {
        $data = [
            "expertise" =>  $this->input->post('expertise', true),
            "bidang" =>  $this->input->post('bidang', true)
        ];

        $this->m_mentee->edit_noncareer($id, $data);
        redirect(base_url("mentee/NonCareerGoals"));
    }

    function edit_career($id)
    {
        $data = [
            "posisi" =>  $this->input->post('posisi', true),
            "unit" =>  $this->input->post('unit', true)
        ];

        $this->m_mentee->edit_career($id, $data);
        redirect(base_url("mentee/CareerGoals"));
    }
    function edit_dev($id)
    {
        $data = [
            "dev_object" =>  $this->input->post('dev_object', true),
            "aktifitas" =>  $this->input->post('aktifitas', true),
            "metode" =>  $this->input->post('metode', true),
            "tgl_selesai" =>  $this->input->post('tgl_selesai', true),
            "kemampuan" =>  $this->input->post('kemampuan', true),
            "keterangan" =>  $this->input->post('keterangan', true),
            "id_goals" =>  $this->input->post('id_goals', true),
        ];
        $this->m_mentoring->edit_dev($id, $data);
        redirect(base_url("mentee/DevelopmentPlan"));
    }
    //cara danil --------------------------------------
    public function changePassword()
    {
        $id = $this->session->userdata('id_akun');
        $old_password = $this->input->post('pass1', true);
        $this->form_validation->set_rules('pass1', 'Old Password', 'required|trim');
        $this->form_validation->set_rules('pass2', 'New Password', 'required|trim|min_length[3]|matches[pass3]');
        $this->form_validation->set_rules('pass3', 'Password Confirmation', 'required|trim|min_length[3]|matches[pass2]');

        if ($this->form_validation->run() == FALSE) {
            redirect(base_url("mentee/setting"));
        }
        $validasi = $this->Public_model->validasiPassword($id, $old_password);
        if ($validasi == -1) {
            $this->session->set_flashdata('FailedChangePass', 'Failed');
            $this->session->flashdata('FailedChangePass');
            redirect(base_url("mentee/setting"));
        }
        $data = [
            "password" => md5($this->input->post('pass2', true))

        ];
        $this->Public_model->update_password($validasi, $data);
        $this->session->set_flashdata('SuccessChangePass', 'Success');
        $this->session->flashdata('SuccessChangePass');
        redirect(base_url('mentor/profile'));
    }

    // delete 
    public function delete_goals($id_goals)
    {
        $this->m_mentoring->delete_goals($id_goals);
        $this->session->set_flashdata('SuccessDelete', 'Success');
        $this->session->flashdata('SuccessDelete');
        redirect(base_url("mentee/contract_Aggrement"));
    }

    public function delete_career($id)
    {
        $this->m_mentoring->delete_career($id);
        $this->session->set_flashdata('SuccessDelete', 'Success');
        $this->session->flashdata('SuccessDelete');
        redirect(base_url("mentee/CareerGoals"));
    }
    public function delete_noncareer($id)
    {
        $this->m_mentoring->delete_noncareer($id);
        $this->session->set_flashdata('SuccessDelete', 'Success');
        $this->session->flashdata('SuccessDelete');
        redirect(base_url("mentee/NonCareerGoals"));
    }
    public function delete_dev($id)
    {
        $this->m_mentoring->delete_dev($id);
        $this->session->set_flashdata('SuccessDelete', 'Success');
        $this->session->flashdata('SuccessDelete');
        redirect(base_url("mentee/DevelopmentPlan"));
    }
}
