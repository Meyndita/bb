<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){

		parent::__construct();
		$this->load->model('User');
	}
	
	public function index()
	{
		$data['title'] = 'Baby Care';
		$this->load->view('User/header');
		$this->load->view('User/home', $data);
		$this->load->view('User/footer');
	}

}
