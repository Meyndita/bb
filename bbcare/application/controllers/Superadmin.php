<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Superadmin extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('Superadmin_Model');

			if ($this->session->userdata('level') != "superadmin") {
				redirect('Login', 'refresh');
			}
		}

        public function index() {
			// $username = $this->session->userdata('username');

			$this->load->view('template/headerSuperadmin');			
			$this->load->view('Superadmin/index');
			$this->load->view('template/footer');

		}

		public function account() {
			$username = $this->session->userdata('username');
			$title['title'] = 'Profil Superadmin | Baby Care';
			$data['profile'] = $this->Superadmin_Model->getUserByUsername($username);
			$data['kantor'] = $this->Superadmin_Model->getKantor($username);

			$this->form_validation->set_rules('fullname', 'Fullname', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
			
			if ($this->form_validation->run() == TRUE) {
				$this->Superadmin_Model->editAkun($username);
				redirect('Superadmin/account','refresh');
			} else {
				$this->load->view('Template/headerSuperadmin', $title);
				$this->load->view('Superadmin/userprofile', $data);
				$this->load->view('Template/footer');
			}
		}

		public function user() {
			$id = $this->session->userdata('id_kantor');
			$title['title'] = 'Daftar User | Baby Care';
			$data['hasilSuperadmin'] = $this->Superadmin_Model->getUser("superadmin", $id);
			$data['hasilAdmin'] = $this->Superadmin_Model->getUser("admin", $id);
			// $data['hasilManager'] = $this->Owner_Model->getUser("manager", $id);

			$this->load->view('template/headerSuperadmin', $title);
			$this->load->view('Superadmin/userlist', $data);
			$this->load->view('template/footer');
		}
    }
?>