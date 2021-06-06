<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Login extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('Login_Model');
			$this->load->model('Regist_model');
			$this->load->model('RegistPengasuh_Model');
			$this->load->library('form_validation');

			
		}
        
		public function index() {
			$data['title'] = "Login | Baby Care";

			$this->load->view('Login/index', $data);
			
		}

		public function process() {
			$username = htmlspecialchars($this->input->post('username'));
			$password = htmlspecialchars($this->input->post('password'));

			$cek = $this->Login_Model->login($username, $password);
			if ($cek) {
				foreach ($cek as $ck);

				$this->session->set_userdata('username', $ck->username);
				$this->session->set_userdata('level', $ck->level);
				
				if ($this->session->userdata('level') == "superadmin") {
					$tes = $this->Login_Model->loginShop($username, $password);
					if($tes){
						foreach ($tes as $ts);
						$this->session->set_userdata('username', $tes[0]->username);
						// $this->session->set_userdata('foto', $tes[0]->foto);					
					}
					redirect('Superadmin','refresh');
				} else if ($this->session->userdata('level') == "admin") {
					$this->session->set_userdata('username', $cek[0]->username);
					// $this->session->set_userdata('foto', $cek[0]->foto);
					redirect('Admin','refresh');
				} 
				else if ($this->session->userdata('level') == "owner") {
					$this->session->set_userdata('username', $cek[0]->username);
					// $this->session->set_userdata('foto', $cek[0]->foto);
					// $this->session->set_userdata('id_store', $ck->id);
					redirect('Owner','refresh');
				} 
				else if ($this->session->userdata('level') == "pengasuh") {
					$this->session->set_userdata('username', $cek[0]->username);
					// $this->session->set_userdata('foto', $cek[0]->foto);
					// $this->session->set_userdata('id_store', $ck->id);
					redirect('Pengasuh','refresh');
				} 
				else if ($this->session->userdata('level') == "pelanggan") {
					$this->session->set_userdata('username', $cek[0]->username);
					// $this->session->set_userdata('foto', $cek[0]->foto);
					// $this->session->set_userdata('id_store', $ck->id);
					redirect('Pengasuh','refresh');
				} 
				// else if ($this->session->userdata('level') == "pencuci") {
				// 	$this->session->set_userdata('username', $cek[0]->username);
				// 	$this->session->set_userdata('foto', $cek[0]->foto);
				// 	$this->session->set_userdata('id_store', $ck->id);
				// 	redirect('Pencuci','refresh');
				//  } 
			} else {
				redirect('Login', 'refresh');
			}
		}


		public function reg()
		{
		  $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
			'is_unique' => 'Email sudah digunakan !',
			'required' => 'Email tidak boleh kosong !',
			'valid_email' => "Email tidak valid !"
		  ]);
		  // $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
		  //     'matches' => 'Konfirmasi Password tidak sama !',
		  //     'required' => 'Password tidak boleh kosong !',
		  //     'min_length' => 'Password terlalu pendek!'
		  // ]);
		  // $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
	  
		  if ($this->form_validation->run() == false) {
			$data['title'] = 'registrasi';
			$this->load->view('login/regist', $data);
		  } else {
			$email = $this->input->post('email', true);
	  
			echo "gagal";
		  }
		}
	  
		public function reg_process()
		{
		  $verification_key = md5(rand());
		  $data = array(
			'nama'            => $this->input->post('nama'),
			'username'        => $this->input->post('username'),
			'alamat'          => 'null',
			'telepon'         => 'null',
			'kelurahan'       => 'null',
			'kecamatan'       => 'null',
			'kota'            => 'null',
			'email'           => $this->input->post('email', true),
			'visi'            => 'null',
			'misi'            => 'null',
			'deskripsi'       => 'null',
			'verification_key'=>  $verification_key
		  );
		  $update = $this->Regist_model->insert($data);
		//   print_r($update);
		//   exit;
		  
		  if ($update > 0) {
			  
			  $resultText = "Verifikasi Email";
			  $message = "<p> Halo " . $this->input->post('nama') . "</p>
			  <p>Terimakasih sudah melakukan registrasi, <br> untuk tahap selanjutnya silahkan klik <a href='" . base_url() . "login/verify_email/" . $verification_key . "'>link</a>. untuk melakukan registrasi akun dan mendapatkan username dan password akun anda</p>
			  <p><a href='" . base_url() . "login/verify_email/" . $verification_key . "'>" . base_url() . "login/verify_email/" . $verification_key . "</a></p>
			  <p>Terimakasih,</p>";
			  
			  $config = [
				  'protocol' => 'smtp',
				  'smtp_ssl' => 'auto',
				  'smtp_host' => 'smtp.googlemail.com',
				  'smtp_user' => 'ensiserver2021@gmail.com',
				  'smtp_pass' => 'literasi2021',
				  'smtp_port' => 465,
				  'smtp_crypto' => 'ssl',
				  'mailtype' => 'html',
				  'smtp_timeout' => '4',
				  'charset' => 'iso-8859-1',
				  'wordwrap' => TRUE
				];
				
				$this->load->library('email', $config);
				$this->email->initialize($config);
				$this->email->set_newline("\r\n");
				$this->email->from('ensiserver2021@gmail.com', 'Literasi 2021');
				$this->email->to($this->input->post('email'));
				$this->email->cc('ensiserver2021@gmail.com');
				$this->email->subject($resultText);
				$this->email->message($message);
				
				if ($data = $this->email->send()) {
					$berhasil = array('status' => 'Selamat registrasi anda sedang kami proses,<br> cek email anda');
					$this->load->view('login/status', $berhasil);
				} else {
					$berhasil = array('status' => 'Registrasi gagal, harap coba lagi');
					$this->load->view('login/status', $berhasil);
				}
			}
		}
		
		function verify_email()
		{
			if ($this->uri->segment(3)) {
				$verification_key = $this->uri->segment(3);
				if ($this->Regist_model->verify_email($verification_key)) {
					$kantorData = $this->Regist_model->search_code($verification_key);
					
			  $userrandom = array(
				  "username" => "admin_" . $kantorData->username,
				  "password" => rand(),
				"is_active" =>'aktif',
				"level" =>'admin',
				"id" => $kantorData->id,
				'date_created' => time(),
	  
			  );
			  $this->db->insert('user', $userrandom);
			  $resultText = "Registrasi berhasil";
			  $message = "<p>Username dan password sementara untuk admin</p>
			  <br>
			  <p>username \t\t\t :" . $userrandom['username'] . "</p>
			  <p>password \t\t\t :" . $userrandom['password'] . "</p>
			  <br>
			  <p><strong>Harap segera melengkapi data pengguna anda</strong></p>
			  <p>Registrasi sudah berhasil, tahap selanjutnya silahkan klik <a href='" . base_url() . "login/'>link</a></p>
			  <p>Terimakasih</p>";
	  
			  $config = [
				'protocol' => 'smtp',
				'smtp_ssl' => 'auto',
				'smtp_host' => 'smtp.googlemail.com',
				'smtp_user' => 'ensiserver2021@gmail.com',
				'smtp_pass' => 'literasi2021',
				'smtp_port' => 465,
				'smtp_crypto' => 'ssl',
				'mailtype' => 'html',
				'smtp_timeout' => '4',
				'charset' => 'iso-8859-1',
				'wordwrap' => TRUE
			  ];
	  
			  $this->load->library('email', $config);
			  $this->email->initialize($config);
			  $this->email->set_newline("\r\n");
			  $this->email->from('ensiserver2021@gmail.com', 'Literasi 2021');
			  $this->email->to($kantorData->email);
			  $this->email->cc('ensiserver2021@gmail.com');
			  $this->email->subject($resultText);
			  $this->email->message($message);
			  $this->email->send();
	  
			  $this->Regist_model->regist_user($userrandom);
	  
			  $data['status'] = '';
			  $data['status'] .= '<div style="color:black;">
			  <h3 class="title-body" style="color:black;"> EMAIL Sudah diverifikasi,<br>Silahkan anda bisa masuk dengan username dan password yang ada di email <a href="' . base_url() . 'Login">here</a></h3><br><br>';
			  $data['status'] .= "<h3 style='color:black;'>Data Account</h3><p style='color:black;'>username \t : " . $userrandom['username'] . "</p><p style='color:black;'>password \t : " . $userrandom['password'] . "</p></div>";
			} else {
			  $data['status'] = ' <h3 class="title-body" style="color:black;">Invalid Link</h1>';
			}
			print_r($data);
			exit;
			$this->load->view('login/email_verification', $data, false);
		  }
		}
	  
		
		public function logout() {
			$this->session->sess_destroy();
			redirect('Login', 'refresh');
		}
    }
?>