<?php

defined('BASEPATH') or exit('No direct script access allowed');

    class LoginPengasuh_Model extends CI_Model {
        // public function login($username, $password)
        // {
        //     $this->db->select('*');
        //     $this->db->from('user');
        //     $this->db->where('username', $username);
        //     $this->db->where('password', $password);
        //     $this->db->where('id_sekolah', 1);
        //     $this->db->limit(1);
        //     $query = $this->db->get();
        //     if ($query->num_rows() == 1) {
        //         return $query->result();
        //     } else {
        //         return false;
        //     }
        // }

    public function login($username, $password) {
        $this->db->select('*');
        $this->db->from('pengasuh');
        $this->db->where('username', $username);
        $this->db->where('password', password_verify($password,$username['password']));
        // $this->db->join('sekolah', 'sekolah.id_sekolah = user.id_sekolah');
        $this->db->limit(1);
        $query = $this->db->get();
        // print_r($query);
        // exit;
        $data = array($username, $password);
        if ($query->num_rows() == 1) {
            $cek = $this->db->get('pengasuh', $data)->row();
            $data_session = array(
                'id_pengasuh' => $cek->id_pengasuh,
                // 'username' => $cek->username,
                // 'id_sekolah' => $cek->id_sekolah,
                
            );
            $this->session->set_userdata($data_session);
            return $query->result();
        } else {
            return false;
        }
    }
    
    public function get_user($username)
    {

        $this->db->where('username', $username);
        $query = $this->db->get('pengasuh');
        return $query->result();
    }

    public function input_data($data)
    {
        $this->db->insert('login', $data);
        // $this->session->set_flashdata('status', 'Registration success, please wait for verification');
    }
}

/* End of file ModelName.php */
