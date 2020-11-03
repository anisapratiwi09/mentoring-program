<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct(){
		parent::__construct();		
		
 
	}

	public function index(){
		$data['judul'] = 'Mentoring Pelindo I - Landing Page';
		$this->load->view('dashboard',$data);
	}

}
