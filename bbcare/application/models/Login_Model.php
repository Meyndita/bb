<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Login_Model extends CI_Model {
		public function __construct() {
            $this->load->database('baby');
        }

		public function loginShop($username, $password) {
			$this->db->select('user.id_user, user.username, user.password, user.level');
			$this->db->from('user');
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			// $this->db->join('store', 'user.username=store.username');
			$this->db->limit(1);

			// $query = $this->db->get();
			$query = $this->db->get();
			// var_dump($query->result()); die;
			if ($query->num_rows() == 1) {
				return $query->result();
			} else {
				return FALSE;
			}
		}
		
		public function login($username, $password) {
			$this->db->select('*');
			$this->db->from('user');
			$this->db->where('user.username', $username);
			$this->db->where('user.password', $password);
			// $this->db->join('store', 'user.username=store.username');
			$this->db->limit(1);

			// $query = $this->db->get();
			$query = $this->db->get();
			// var_dump($query->result()); die;
			if ($query->num_rows() == 1) {
				return $query->result();
			} else {
				return FALSE;
			}
		}
    }
?>