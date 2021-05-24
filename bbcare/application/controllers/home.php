<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('User');
	}

	public function index()
	{
		$title['title'] = "Baby Care";
		$this->load->view('user/header', $title);
		$this->load->view('user/home');
		$this->load->view('user/footer');
	}

	public function Tentang(){
		$title['title'] = "Tentang Baby Care";
		$this->load->view('user/header', $title);
		$this->load->view('user/tentang');
		$this->load->view('user/footer');
	}

	public function Layanan(){
		$title['title'] = "Layanan Baby Care";
		$this->load->view('user/header', $title);
		$this->load->view('user/layanan');
		$this->load->view('user/footer');
	}

	public function Kontak(){
		$title['title'] = "Kontak Baby Care";
		$this->load->view('user/header', $title);
		$this->load->view('user/kontak');
		$this->load->view('user/footer');
	}

	public function Daftar_Pekerja(){
		$title['title'] = "Daftar Pekerja Baby Care";
		$this->load->view('user/header', $title);
		$this->load->view('user/daftarpekerja');
		$this->load->view('user/footer');

	}
}

