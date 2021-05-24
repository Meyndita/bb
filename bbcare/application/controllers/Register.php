<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Register extends CI_Controller {
		public function __construct() {
			parent::__construct();
			// $this->load->model('Register_Model');
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

        public function regis_pengasuh()
        {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('nama_pengasuh', 'nama_pengasuh', 'required|trim');
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email sudah digunakan !',
            'required' => 'Email tidak boleh kosong !',
            'valid_email' => "Email tidak valid !"
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password tidak sama !',
            'required' => 'Password tidak boleh kosong !',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            // $data['sekolah'] = json_decode($this->curl->simple_get($this->API));
            $data['title'] = 'Baby Care | Registrasi';
            $this->load->view('Login_Pengasuh', $data);
        } else {
            $email = $this->input->post('email', true);
            $username = $this->input->post('username', true);
            // $id_sekolah = $this->input->post('id_sekolah', true);
            $data = [
                'nama_pengasuh' => 'null',
                'nik' => 'null',
                'email' => htmlspecialchars($email),
                'foto' => 'default.png',
                'username' => htmlspecialchars($username),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'agama' => 'null',
                'alamat' => 'null',
                'kategori' => 'null',
                'no_telp' => 'null',
                'tgl_lahir' => 'null',
                'pendidikan' => 'null',
                'status' => 'null',
                'date_created' =>  time()
            ];
            $token = base64_encode(random_bytes(32));
            $pengasuh_token = [
                'email' => $email,
                'token' => $token,
                'username' => $username,
                'date_created' => time()

            ];
            $this->db->insert('pengasuh', $data);
            $this->db->insert('pengasuh_token', $pengasuh_token);
            $this->_sendEmail($token, 'verify');

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Congratulation!</strong> You account has been created, Please Activate your account.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('Login_Pengasuh');
        }
    }

    private function _sendEmail($token, $type)
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'ensiserver2021@gmail.com',
            'smtp_pass' => 'babycare2021',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n",
        ];

        $this->load->library('email', $config);
        $this->email->initialize($config);
        $this->email->from('ensiserver2021@gmail.com', 'Babycare 2021');
        $this->email->to($this->input->post('email'));

        if ($type  == 'verify') {
            $this->email->subject('Account verification');
            $this->email->message('Click this link to verify your account : <a href="'
                . base_url() . 'Register/verify?email=' . $this->input->post('email') .
                '&token=' . urlencode($token) . '">Active</a>');
        } else if ($type == 'forgot') {
            $this->email->subject('Reset Password');
            $this->email->message('Click this link to reset your password : <a href="'
                . base_url() . 'Register/resetPassword?email=' . $this->input->post('email') .
                '&token=' . urlencode($token) . '">Reset Password</a>');
        }
        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die();
        }
    }

    public function verify()
    {
        $email = $this->input->get('email');
        $token =  $this->input->get('token');

        $user = $this->db->get_where('pengasuh', ['email' => $email])->row_array();
        if ($user) {
            $pengasuh_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
            if ($pengasuh_token) {
                if (time() - $user['date_created'] < (60 * 60 * 24)) {
                    // $this->db->set('is_active', 1);
                    $this->db->where('email', $email);
                    $this->db->update('pengasuh');
                    $this->db->delete('pengasuh_token', ['email' => $email]);

                    $this->session->set_flashdata(
                        'message',
                        '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Congratulation!</strong> ' . $email . ' has been activated please login!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>'
                    );
                    redirect('Login_Pengasuh');
                } else {
                    $this->db->delete('pengasuh', ['email' => $email]);
                    $this->db->delete('pengasuh_token', ['email' => $email]);
                    $this->session->set_flashdata(
                        'message',
                        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                       Token Expired!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                    );
                    redirect('Login_Pengasuh');
                }
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Account activation failed! Token Invalid!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
                );
                redirect('Login_Pengasuh');
            }
        } else {

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Account activation failed! Wrong Email!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>'
            );
            redirect('Login_Pengasuh');
        }
    }
    }
?>