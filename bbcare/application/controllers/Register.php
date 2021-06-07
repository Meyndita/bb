<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Register extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('RegistPengasuh_Model');
            $this->load->library('form_validation');

			// if ($this->session->userdata('level') != "owner") {
			// 	redirect('Login', 'refresh');
			// }
		}

        public function Register() {
			
			// $this->load->view('Template/headerPengasuh');
			$this->load->view('Register/register_pengasuh');
			// $this->load->view('Template/footer');
	
		}

		public function process()
        {
            $this->form_validation->set_rules('nik', 'Nik', 'trim|required');
		    $this->form_validation->set_rules('nama_pengasuh', 'Nama', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required');

                    
                if ($this->form_validation->run() == TRUE) {
                    $this->Register_Model->proses();
                    redirect('Pengasuh/Biodata');
                }
                else {
                    redirect('Register/register_pengasuh', 'refresh');
                }
        }
		
		private function UploadImage() {
            
            $config['upload_path'] = './uploads/user';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size']  = '8192';
            $config['overwrite'] = true;
            
            $this->load->library('upload', $config);
            
            if ($this->upload->do_upload('foto')){
                return $this->upload->data("file_name");
            }
            return "default.png";
        }

        public function Login() {
			
			// $this->load->view('Template/headerPengasuh');
			$this->load->view('Register/login');
			// $this->load->view('Template/footer');
	
		}

        public function reg_pengasuh()
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
			$this->load->view('login/regist_pengasuh', $data);
		  } else {
			$email = $this->input->post('email', true);
			$id = $this->input->post('id', true);

	  
			echo "gagal";
		  }
		}

		public function reg_process_pengasuh()
		{
		  $verification_key = md5(rand());
		  $data = array(
			'nama_pengasuh'			=> $this->input->post('nama_pengasuh'),
			'alamat'				=> 'null',
			'telepon'				=> 'null',
			'email'					=> $this->input->post('email', true),
			'kategori'				=> 'null',
			'nik'					=> $this->input->post('nik'),
			'foto'					=> 'null',
			'tgl_lahir'				=> 'null',
			'agama'					=> 'null',
			'status'				=> 'null',
			'pendidikan'			=> 'null',
			'verification_key'      =>  $verification_key
		  );
		  $update = $this->RegistPengasuh_Model->insert($data);
			//   print_r($update);
			//   exit;
		  
		  if ($update > 0) {
			  
			  $resultText = "Verifikasi Email";
			  $message = "<p> Halo " . $this->input->post('nama_pengasuh') . "</p>
			  <p>Terimakasih sudah melakukan registrasi, <br> untuk tahap selanjutnya silahkan klik <a href='" . base_url() . "Register/verify_email_pengasuh/" . $verification_key . "'>link</a>. untuk melakukan registrasi akun dan mendapatkan username dan password akun anda</p>
			  <p><a href='" . base_url() . "Register/verify_email_pengasuh/" . $verification_key . "'>" . base_url() . "Register/verify_email_pengasuh/" . $verification_key . "</a></p>
			  <p>Terimakasih,</p>";
			  
			  $config = [
				  'protocol' 		=> 'smtp',
				  'smtp_ssl' 		=> 'auto',
				  'smtp_host' 		=> 'smtp.googlemail.com',
				  'smtp_user' 		=> 'ensiserver2021@gmail.com',
				  'smtp_pass' 		=> 'literasi2021',
				  'smtp_port' 		=> 465,
				  'smtp_crypto' 	=> 'ssl',
				  'mailtype' 		=> 'html',
				  'smtp_timeout' 	=> '4',
				  'charset' 		=> 'iso-8859-1',
				  'wordwrap' 		=> TRUE
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

		function verify_email_pengasuh()
		{
				if ($this->uri->segment(3)) {
					$verification_key = $this->uri->segment(3);
					if ($this->RegistPengasuh_Model->verify_email($verification_key)) {
						$pengasuhData = $this->RegistPengasuh_Model->search_code($verification_key);
						
				  $userrandom = array(
					  "username" => "pengasuh_" . $pengasuhData->nama_pengasuh,
					  "password" => rand(),
					"is_active" =>'aktif',
					"level" =>'pengasuh',
					"id_pengasuh" => $pengasuhData->id,
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
				  $this->email->to($pengasuhData->email);
				  $this->email->cc('ensiserver2021@gmail.com');
				  $this->email->subject($resultText);
				  $this->email->message($message);
				  $this->email->send();
		  
				  $this->RegistPengasuh_Model->regist_user($userrandom);
		  
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

    }
?>