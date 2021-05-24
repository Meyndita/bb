<?php
    defined('BASEPATH') OR exit('No Script Direcet Access Allowed');

    class Register_Model extends CI_Model {

        //public function getUserByUsername($username) {
        //  return $this->db->where('username', $username)->get('user')->row();
//        }

 
	    // public function proses() {   
        //     $pengasuh = [
        //         "nik" => $this->input->post('nik', true),
        //         "nama_pengasuh" => $this->input->post('nama_pengasuh', true),
        //         "email" => $this->input->post('email', true)
        //     ];
        //     $this->db->insert('pengasuh', $pengasuh);

            // $store = [
            //     "nama" => $this->input->post('nama', true),
            //     "username" => $this->input->post('username', true)
            // ];
            // $this->db->insert('store', $store);
        
        // }

        public function insert($data)
        {
            $this->db->insert('kantor', $data);
            return $this->db->insert_id();
        }

        public function search_code($code)
        {
            $this->db->where('verification_key', $code);
            return $this->db->get('kantor')->row();
        }

        function verify_email($key)
        {
            $this->db->where('verification_key', $key);
            $this->db->where('is_email_verified', 'no');

            $query = $this->db->get('kantor');
            if ($query->num_rows() > 0) {
                $data = array(
                    'is_email_verified' => 'yes'
            );

            $this->db->where('verification_key', $key);
            $this->db->update('kantor', $data);
            return true;
                } else {
                return false;
                }
        }

        public function regist_user($data) {
            $this->db->insert('user', $data);
        }
    }
?>