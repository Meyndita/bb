<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Login_Pengasuh extends CI_Controller {
		public function __construct(){
			parent::__construct();
			
			$this->load->model('LoginPengasuh_Model');
			$this->load->library('curl');
   			$this->load->library('session');
    		$this->load->model('Register_Model');
    		$this->load->library('form_validation');
		}
        
		public function index() {
			$data['title'] = "Login | Baby Care";

			$this->load->view('Login/index', $data);
			
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
			$this->load->view('Register/register', $data);
			} else {
				$email = $this->input->post('email', true);

			echo "gagal";
			}
  		}

		public function reg_process() {
			$verification_key = md5(rand());
			$this->API = "http://localhost:8080/RLiterasi/api/Sekolah";
			$data = array(
			'nama_sekolah'         => $this->input->post('nama_sekolah'),
			'npsn'                 => $this->input->post('npsn'),
			'nss'                  => 'null',
			'alamat_sekolah'          => 'null',
			'kode_pos'                => 'null',
			'no_telp'                 => 'null',
			'kelurahan'               => 'null',
			'kecamatan'               => 'null',
			'kabupaten'               => 'null',
			'provinsi'                => 'null',
			'website'                 => 'null',
			'email'                   => $this->input->post('email', true),
			'visi'                    => 'null',
			'misi'                    => 'null',
			'verification_key'        =>  $verification_key
			);
			$update = $this->Register_Model->insert($data);

			if ($update > 0) {

			$resultText = "Verifikasi Email";
			$message = "<p> Halo " . $this->input->post('nama_sekolah') . "</p>
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
				$sekolahData = $this->Regist_model->search_code($verification_key);

				$userrandom = array(
				"username" => "admin_" . $sekolahData->npsn,
				"password" => rand(),
				"is_active" => 'aktif',
				"id_user_role" => 2,
				"id_sekolah" => $sekolahData->id_sekolah,
				'date_created' => time()

				);
				$this->db->insert('pengasuh', $userrandom);
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
				'smtp_pass' => 'babycare2021',
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
				$this->email->from('ensiserver2021@gmail.com', 'Babyacare 2021');
				$this->email->to($sekolahData->email);
				$this->email->cc('ensiserver2021@gmail.com');
				$this->email->subject($resultText);
				$this->email->message($message);
				$this->email->send();

				$this->Register_Model->regist_user($userrandom);

				$data['status'] = '';
				$data['status'] .= '<div style="color:white;">
				<h3 class="title-body" style="color:white;"> EMAIL Sudah diverifikasi,<br>Silahkan anda bisa masuk dengan username dan password yang ada di email <a href="' . base_url() . 'Login_Pengasuh">here</a></h3><br><br>';
				$data['status'] .= "<h3 style='color:white;'>Data Account</h3><p style='color:white;'>username \t : " . $userrandom['username'] . "</p><p style='color:white;'>password \t : " . $userrandom['password'] . "</p></div>";
				} else {
					$data['status'] = ' <h3 class="title-body" style="color:white;">Invalid Link</h1>';
				}
				$this->load->view('login/email_verification', $data, false);
				}
			}
		}
?>