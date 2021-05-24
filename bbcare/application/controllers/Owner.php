<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Owner extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('Owner_Model');

			if ($this->session->userdata('level') != "owner") {
				redirect('Login', 'refresh');
			}
		}

        public function index() {
			
			$this->load->view('Template/headerOwner');
			$this->load->view('Owner/index');
			$this->load->view('Template/footer');

		}

		public function cv() {
			// $id = $this->session->userdata('id');
			// $username = $this->session->userdata('username');
			// $title['title'] = 'Riwayat Pesanan | Point Care Laundry';
			$data['data'] = $this->Owner_Model->getKantor();
			// $data['data'] = $this->Admin_Model->searchPelanggan($username);

			$this->load->view('Template/headerOwner');			
			$this->load->view('Owner/cvlist', $data);
			$this->load->view('Template/footer');

		}

		public function addCV(){
			// $id = $this->session->userdata('id_store');
			$this->form_validation->set_rules('nama', 'Nama Kantor', 'trim|required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
			
			if ($this->form_validation->run() == TRUE) {
				$this->Owner_Model->insertCV($id);
				
				redirect('Owner/cv','refresh');
			}
			else {
				$this->load->view('Template/headerOwner');
				$this->load->view('Owner/tambahCV');
				$this->load->view('Template/footer');
			}
		}

		public function DetailCV($id) {
			// $id = $this->session->userdata('id');
			$title['title'] = 'Detail CV | Baby care';
			$data['detail'] = $this->Owner_Model->getKantorId($id);
			// $data['data'] = $this->Owner_Model->getKantor();
			// $data['data'] = $this->Admin_Model->searchPelanggan($username);

			// var_dump($id);
			// die();

			$this->load->view('Template/headerOwner');			
			$this->load->view('Owner/cvdetail', $data);
			$this->load->view('Template/footer');

		}

    }
?>