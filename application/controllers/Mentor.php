<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mentor extends CI_Controller
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

    public function index()
    {
        $data['judul'] = 'Mentoring Pelindo I - Dashboard';
        $this->load->view('mentor/_partials/header', $data);

        $data = $this->m_mentor->getContent();
        $this->load->view('mentor/dashboard/dashboard', ["data" => $data]);
    }

    public function profile()
    {
        $data['judul'] = 'Mentoring Pelindo I - Dashboard';
        $this->load->view('mentor/_partials/header', $data);

        $id_mentor = $this->session->userdata('id_mentor');
        $data = $this->m_mentor->getMentor($id_mentor);
        $this->load->view('mentor/profile/profile-utama', ["dt_mentor" => $data]);
    }

    public function mymentee()
    {
        $data['judul'] = 'Mentoring Pelindo I - Dashboard';
        $this->load->view('mentor/_partials/header', $data);

        $id_group = $this->session->userdata('id_group');
        $mentee = $this->m_mentoring->getMentee_group($id_group);
        // $grup = $this->Public_model->nama_group($id_group);

        $this->load->view('mentor/my mentee/mymentee-utama', ['data' => $mentee]);
    }

    public function profileMentee($id_mentee)
    {
        $data['judul'] = 'Mentoring Pelindo I - Dashboard';
        $this->load->view('mentor/_partials/header', $data);

        $data_mentee = $this->m_mentee->get_mentee_id($id_mentee);
        $data_summary = $this->m_mentee->get_summary($id_mentee);
        $data_interest = $this->m_mentee->get_interest($id_mentee);
        $data_education = $this->m_mentee->get_education($id_mentee);
        $this->load->view('mentor/my mentee/profilementee', ['dt_mentee' => $data_mentee, 'dt_summary' => $data_summary, 'dt_interest' => $data_interest, 'dt_edu' => $data_education]);
    }

    public function contractAggrement($id_mentee)
    {
        $data['judul'] = 'Mentoring Pelindo I - Dashboard';
        $this->load->view('mentor/_partials/header', $data);

        $data = $this->m_mentoring->get_contractAgg($id_mentee);
        $data_mentee = $this->m_mentee->get_mentee_id($id_mentee);
        $career_data = $this->m_mentoring->getCareer($id_mentee);
        $noncareer_data = $this->m_mentoring->getNonCareer($id_mentee);

        $this->load->view('mentor/my mentee/contractAgg', ['dt_mentee' => $data_mentee, 'career' => $career_data, 'noncareer' => $noncareer_data]);
    }

    public function developmentPlan($id_mentee)
    {
        $data['judul'] = 'Mentoring Pelindo I - Dashboard';
        $this->load->view('mentor/_partials/header', $data);

        $data = $this->m_mentoring->get_contractAgg($id_mentee);
        $data_mentee = $this->m_mentee->get_mentee_id($id_mentee);
        $data_goals = $this->m_mentoring->get_goals($id_mentee);
        $data_dev = $this->m_mentoring->get_dev($id_mentee);
        $this->load->view('mentor/my mentee/developmentPlan', ['dt_mentee' => $data_mentee, 'dt_goals' => $data_goals, 'dt_dev' => $data_dev]);
    }

    public function meetings()
    {
        $data['judul'] = 'Mentoring Pelindo I - Dashboard';
        $this->load->view('mentor/_partials/header', $data);

        $id_mentor = $this->session->userdata('id_mentor');
        $id_group = $this->session->userdata('id_group');
        $data_meetings = $this->m_mentor->getMeetings($id_mentor);
        $dataMentees = $this->m_mentoring->getMentee_group($id_group);

        for ($i = 0; $i < count($data_meetings); $i++) {
            $namaMentee[$i] = $this->m_mentee->get_mentee_id($data_meetings[$i]->id_mentee);
        }

        $this->load->view('mentor/meeting/meeting-utama', ['dt_meetings' => $data_meetings, 'dataMentees' => $dataMentees, 'namaMentee' => $namaMentee]);
    }

    public function group_page()
    {
        $data['judul'] = 'Mentoring Pelindo I - IDP';
        $this->load->view('mentor/_partials/header', $data);

        $id_mentor = $this->session->userdata('id_mentor');
        $data_mentor = $this->m_mentor->getMentor($id_mentor);
        $id_group = $data_mentor[0]->id_group;


        $data_posting = $this->m_mentoring->getPosting($id_group);
        $data_comment = $this->m_mentoring->getComment();
        $this->load->view('mentor/grup/grup-utama', ['dt_mentor' => $data_mentor, 'dt_posting' => $data_posting, 'dt_komen' => $data_comment]);
    }

    public function form()
    {
        $data['judul'] = 'Mentoring Pelindo I - IDP';
        $this->load->view('mentor/_partials/header', $data);

        $id_mentor = $this->session->userdata('id_mentor');

        $data_form = $this->m_mentoring->getForm();
        $this->load->view('mentor/form/form-utama', ['dt_form' => $data_form]);
    }

    public function setting()
    {
        $data['judul'] = 'Mentoring Pelindo I - IDP';
        $this->load->view('mentor/_partials/header', $data);

        $id_mentor = $this->session->userdata('id_mentor');
        $data = $this->m_mentor->getMentor($id_mentor);
        $this->load->view('mentor/setting/setting-utama', ['dt_mentor' => $data]);
    }
}
