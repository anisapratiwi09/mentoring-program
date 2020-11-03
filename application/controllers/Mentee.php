<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mentee extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_mentoring');
		$this->load->model('m_mentee');
		$this->load->model('m_calendar');
		$this->load->library('form_validation');
		$this->load->helper(array('url', 'download'));
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$data['judul'] = 'Mentoring Pelindo I - Dashboard';
		$this->load->view('mentee/_partials/header', $data);

		$id_akun = $this->session->userdata('id_akun');
		$data_mentee = $this->m_mentee->get_mentee($id_akun);
		$pertama = $data_mentee[0]->gelar;
		$id_mentee = $data_mentee[0]->id_mentee;
		$data_summary = $this->m_mentee->get_summary($id_mentee);

		$data = $this->m_mentee->getContent();
		$this->load->view('mentee/dashboard', ["data" => $data, "data_profile" => $data_summary]);
	}

	public function profile()
	{
		$data['judul'] = 'Mentoring Pelindo I - Dashboard';
		$this->load->view('mentee/_partials/header', $data);

		$id_akun = $this->session->userdata('id_akun');
		$data_mentee = $this->m_mentee->get_mentee($id_akun);
		$pertama = $data_mentee[0]->gelar;
		if ($pertama == null) {
			$this->session->set_flashdata('message_personal', '<div class="alert alert-danger my-3" role="alert">You must filled personal information form before</div>');
			$this->load->view('mentee/form-view/profile-view', ["dt_mentee" => $data_mentee]);
		} else {
			$id_mentee = $data_mentee[0]->id_mentee;
			$data_summary = $this->m_mentee->get_summary($id_mentee);
			$data_interest = $this->m_mentee->get_interest($id_mentee);
			$data_education = $this->m_mentee->get_education($id_mentee);

			if ($data_summary == null) {
				$this->session->set_flashdata('message_summary', '<div class="alert alert-danger my-3" role="alert">You must filled summary form !!!</div>');
				$this->load->view('mentee/form-view/summary-insert');
			} else if ($data_interest == null) {
				$this->session->set_flashdata('message_interest', '<div class="alert alert-danger my-3" role="alert">You must filled interest form !!!</div>');
				$this->load->view('mentee/form-view/interest-insert');
			} else if ($data_education == null) {
				$this->session->set_flashdata('message_education', '<div class="alert alert-danger my-3" role="alert">You must filled education form !!!</div>');
				$this->load->view('mentee/form-view/education-insert');
			} else {
				$this->load->view('mentee/profile', ['dt_mentee' => $data_mentee, 'dt_summary' => $data_summary, 'dt_interest' => $data_interest, 'dt_edu' => $data_education]);
			}
		}
	}

	public function meetings()
	{
		$data['judul'] = 'Mentoring Pelindo I - Dashboard';
		$this->load->view('mentee/_partials/header', $data);

		$id_mentee = $this->session->userdata('id_mentee');
		$data_meetings = $this->m_mentee->getMeetings($id_mentee);
		$this->load->view('mentee/meetings', ['dt_meetings' => $data_meetings]);
	}

	public function contract_Aggrement()
	{
		$data['judul'] = 'Mentoring Pelindo I - Dashboard';
		$this->load->view('mentee/_partials/header', $data);

		$id_mentee = $this->session->userdata('id_mentee');
		$data = $this->m_mentoring->get_contractAgg($id_mentee);
		$data_goals = $this->m_mentoring->get_goals($id_mentee);
		// var_dump($data_goals);
		$this->load->view('mentee/contract_aggrement/contractAgg-utama', ['dt_goals' => $data_goals]);
	}


	public function CareerGoals()
	{
		$data['judul'] = 'Mentoring Pelindo I - IDP';
		$this->load->view('mentee/_partials/header', $data);

		$id_mentee = $this->session->userdata('id_mentee');
		$career_data = $this->m_mentoring->getCareer($id_mentee);


		$this->load->view('mentee/IDP/career-form', ['career' => $career_data]);
	}

	public function NonCareerGoals()
	{
		$data['judul'] = 'Mentoring Pelindo I - IDP';
		$this->load->view('mentee/_partials/header', $data);

		$id_mentee = $this->session->userdata('id_mentee');
		$noncareer_data = $this->m_mentoring->getNonCareer($id_mentee);
		$this->load->view('mentee/IDP/noncareer-form', ['noncareer' => $noncareer_data]);
	}

	public function DevelopmentPlan()
	{
		$data['judul'] = 'Mentoring Pelindo I - IDP';
		$this->load->view('mentee/_partials/header', $data);

		$id_mentee = $this->session->userdata('id_mentee');
		$data_goals = $this->m_mentoring->get_goals($id_mentee);
		$data_dev = $this->m_mentoring->get_dev($id_mentee);
		$this->load->view('mentee/IDP/developmentplan', ['dt_goals' => $data_goals, 'dt_dev' => $data_dev]);
	}

	public function schedule($year = NULL, $month = NULL)
	{
		$data['judul'] = 'Mentoring Pelindo I - IDP';
		$this->load->view('mentee/_partials/header', $data);

		$data['calendar'] = $this->m_calendar->getcalendar($year, $month);
		// var_dump($data['calendar']);
		$this->load->view('mentee/calendar', $data);
	}

	public function group_page()
	{
		$data['judul'] = 'Mentoring Pelindo I - IDP';
		$this->load->view('mentee/_partials/header', $data);

		$id_akun = $this->session->userdata('id_akun');
		$data_mentee = $this->m_mentee->get_mentee($id_akun);
		$id_group = $data_mentee[0]->id_group;


		$data_posting = $this->m_mentoring->getPosting($id_group);
		$data_comment = $this->m_mentoring->getComment();
		$this->load->view('mentee/grup-page', ['dt_mentee' => $data_mentee, 'dt_posting' => $data_posting, 'dt_komen' => $data_comment]);
	}

	public function setting()
	{
		$data['judul'] = 'Mentoring Pelindo I - IDP';
		$this->load->view('mentee/_partials/header', $data);

		$id_akun = $this->session->userdata('id_akun');
		$data_mentee = $this->m_mentee->get_mentee($id_akun);

		$id_mentee = $data_mentee[0]->id_mentee;
		$data_summary = $this->m_mentee->get_summary($id_mentee);
		// var_dump($data_summary);
		$data_interest = $this->m_mentee->get_interest($id_mentee);
		$data_education = $this->m_mentee->get_education($id_mentee);


		$this->load->view('mentee/setting/setting', ['dt_mentee' => $data_mentee, 'dt_summary' => $data_summary, 'dt_interest' => $data_interest, 'dt_edu' => $data_education]);
	}

	public function form()
	{
		$data['judul'] = 'Mentoring Pelindo I - IDP';
		$this->load->view('mentee/_partials/header', $data);

		$id_mentee = $this->session->userdata('id_mentee');

		$data_form = $this->m_mentoring->getForm();
		$this->load->view('mentee/form/form-utama', ['dt_form' => $data_form]);
	}

	public function message()
	{
		$data['judul'] = 'Mentoring Pelindo I - IDP';
		$this->load->view('mentee/_partials/header', $data);

		$id_mentee = $this->session->userdata('id_mentee');

		$this->load->view('mentee/pesan/pesan-utama');
	}
}
