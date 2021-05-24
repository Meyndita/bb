<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Superadmin_Model extends CI_Model {

        public function getUserByUsername($username) {
            return $this->db->where('username', $username)->get('user')->row();
        }

        public function getKantor($username) {
            return $this->db->where('username', $username)->get('kantor')->row();
        }

        //edit akun
        public function editAkun($username) {
            $post = $this->input->post();
            if (!empty($post['password'])) {
                $this->password = $post['password'];
            } else {
                $this->password = $post['old_password'];
            }
            $this->nama_lengkap = $post['fullname'];
            $this->email = $post['email'];
            $this->alamat = $post['alamat'];

            if (!empty($_FILES['foto']['name'])) {
                $this->foto = $this->UploadImage();
            } else {
                $this->foto = $post['foto_lama'];
            }
            $this->db->where('username', $username)->update('user', $this);
            if ($this->db->affected_rows() > 0) {
                return TRUE;
            } else {
                return FALSE;
            }
        }

        //fungsi upload gambar
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

        public function getUser($level, $id){
            if ($level == "superadmin") {
                $this->db->select('u.*');
                $this->db->from('user u');
                $this->db->where('u.level', $level);
                $this->db->where_in('u.id', $id);
                return $this->db->get()->result_array();
            }
            // if ($level == "pencuci") {
            //     $sql = "SELECT 
            //     u.*, 
            //     (SELECT 
            //         COUNT(IF(p.status='in progress','in progress',NULL))
            //     FROM pesanan as p WHERE p.username = u.username
            //     ) progress,
            //     (SELECT 
            //         COUNT(IF(p.status='finished','finished',NULL))
            //     FROM pesanan as p WHERE p.username = u.username
            //     ) finished
            // FROM user as u 
            // WHERE 
            //     u.level = '$level' AND 
            //     u.id = '$id';
            //         ";
            //     $result = $this->db->query($sql);
            //     return $result->result_array();

            // } else if ($level == "pegawai") {
            //     $this->db->select('u.*, COUNT(lp.username) transaksi, SUM(lp.total) total');
            //     $this->db->from('user u');
            //     $this->db->join('laporan_transaksi lp', 'lp.username = u.username', 'left');
            //     $this->db->where('u.level', $level);
            //     $this->db->where_in('u.id', $id);
            //     $this->db->group_by('lp.username');
            //     return $this->db->get()->result_array();

            // } 
            else if ($level == "admin") {
                $this->db->select('u.*');
                $this->db->from('user u');
                $this->db->join('kantor idk', 'idk.id = u.id');
                $this->db->where('u.level', $level);
                $this->db->where_in('u.id', $id);
                return $this->db->get()->result_array();
            }
        }
        
    }
?>