<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Pelanggan extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('Pelanggan_Model');

			// if ($this->session->userdata('level') != "pelanggan") {
			// 	redirect('Login', 'refresh');
			// }
		}

        public function index() {
			// $username = $this->session->userdata('username');

			$this->load->view('template/headerPelanggan');			
			$this->load->view('Pelanggan/index');
			$this->load->view('template/footer');

		}
	}
?>