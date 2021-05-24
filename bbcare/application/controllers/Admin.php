<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Admin extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('Admin_Model');

			if ($this->session->userdata('level') != "admin") {
				redirect('Login', 'refresh');
			}
		}

        public function index() {
			// $username = $this->session->userdata('username');

			$this->load->view('Template/headerAdmin');			
			$this->load->view('Admin/index');
			$this->load->view('Template/footer');

		}

		public function Pelanggan() {
			// $id = $this->session->userdata('id_store');
			$username = $this->session->userdata('username');
			// $title['title'] = 'Riwayat Pesanan | Point Care Laundry';
			$data['data'] = $this->Admin_Model->getPelangganId();
			$data['data'] = $this->Admin_Model->searchPelanggan($username);

			$this->load->view('Template/headerAdmin');			
			$this->load->view('Admin/pelanggan', $data);
			$this->load->view('Template/footer');

		}

		public function deletePelanggan($id){
			$this->Admin_Model->deletePelanggan($id);
			
			redirect('Admin/Pelanggan','refresh');
		}
		
		public function editPelanggan($id){
			// $id = $this->session->userdata('id');
			// $title['title'] = 'Edit Daftar Pesanan | Pegawai Point Care Laundry';
			$data['get'] = $this->Admin_Model->getPelanggan($id);
			
			$this->form_validation->set_rules('nama', 'Nama Pelanggan', 'trim|required');
			$this->form_validation->set_rules('telepon', 'Telepon', 'trim|required');
			
			if ($this->form_validation->run() == TRUE) {
				$this->Admin_Model->updatePelanggan($id);	
						
				redirect('Admin/Pelanggan', 'refresh');
			}
			else {
				$this->load->view('Template/headerAdmin');
				$this->load->view('Admin/pelangganEdit', $data);
				$this->load->view('Template/footer');
			}
		}

		public function addPelanggan(){
			// $id = $this->session->userdata('id_store');
			$this->form_validation->set_rules('nama', 'Nama Pelanggan', 'trim|required');
			$this->form_validation->set_rules('telepon', 'No. Telepon', 'trim|required');
			
			if ($this->form_validation->run() == TRUE) {
				$this->Admin_Model->insertPelanggan($id);
				
				redirect('Admin/Pelanggan','refresh');
			}
			else {
				$this->load->view('Template/headerAdmin');
				$this->load->view('Admin/Tambahpelanggan');
				$this->load->view('Template/footer');
			}
		}

		public function addPesanan(){
			// $id = $this->session->userdata('id_store');
			$data['data'] = $this->Admin_Model->getPesananId();
			$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_rules('telp', 'No. Telepon', 'trim|required');
			$this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
			$this->form_validation->set_rules('tgl_pesan', 'Tanggal Pesan', 'trim|required');
			
			if ($this->form_validation->run() == TRUE) {
				$this->Admin_Model->Pesanan($id);
				
				redirect('Admin/Pesanan','refresh');
			}
			else {
				$this->load->view('Template/headerAdmin');
				$this->load->view('Admin/pesanan');
				$this->load->view('Template/footer');
			}
		}
    }
?>