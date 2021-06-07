<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Pengasuh extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('Pengasuh_Model');
			$this->load->library('form_validation');


			// if ($this->session->userdata('level') != "owner") {
			// 	redirect('Login', 'refresh');
			// }
		}

        public function index() {
			
			$this->load->view('Template/headerPengasuh');
			$this->load->view('Pengasuh/index');
			$this->load->view('Template/footer');

		}

        public function Biodata() {
			$id = $this->session->userdata('id');
			// $username = $this->session->userdata('username');
			// $title['title'] = 'Riwayat Pesanan | Point Care Laundry';
			$data['data'] = $this->Pengasuh_Model->getPengasuh();
			// $data['data'] = $this->Admin_Model->searchPelanggan($username);

			$this->load->view('Template/headerPengasuh');			
			$this->load->view('Pengasuh/pengasuh_list', $data);
			$this->load->view('Template/footer');
		}

        public function editPengasuh($id){
			
			$title['title'] = 'Edit Biodata | Pengasuh Baby Care';
			$data['get'] = $this->Pengasuh_Model->getPengasuhId($id);
			
			$this->form_validation->set_rules('telepon', 'Telepon', 'trim|required');
            $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'trim|required');
            $this->form_validation->set_rules('agama', 'Agama', 'trim|required');
			$this->form_validation->set_rules('ketegori', 'Kategori', 'trim|required');
			$this->form_validation->set_rules('foto', 'Foto', 'trim|required');
            $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
            $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'trim|required');
            $this->form_validation->set_rules('status', 'Status', 'trim|required');
			
			if ($this->form_validation->run() == TRUE) {
				$this->Pengasuh_Model->updatePengasuh($id);	
						
				redirect('Pengasuh/Biodata', 'refresh');
			}
			else {
				$this->load->view('Template/headerPengasuh', $title);
				$this->load->view('Pengasuh/pengasuh_biodata', $data);
				$this->load->view('Template/footer');
			}
		}

		public function addPengasuh(){
			$id = $this->session->userdata('id');
			$data['get'] = $this->Pengasuh_Model->getPengasuhId($id);

			$this->form_validation->set_rules('telepon', 'Telepon', 'trim|required');
            $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'trim|required');
            $this->form_validation->set_rules('agama', 'Agama', 'trim|required');
            $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
            $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'trim|required');
            $this->form_validation->set_rules('status', 'Status', 'trim|required');
			
			
			if ($this->form_validation->run() == TRUE) {
				$this->Pengasuh_Model->insertPengasuh($id);
				
				redirect('Pengasuh/Biodata','refresh');
			}
			else {
				$this->load->view('Template/headerPengasuh');
				$this->load->view('Pengasuh/pengasuh_biodata', $data);
				$this->load->view('Template/footer');
			}
		}
    }
?>