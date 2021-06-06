<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Pelanggan_Model extends CI_Model {
        
        public function getPelanggan(){
            return ($this->db->get('customer')->result_array());
        }

        public function getPelangganId($id){
            return $this->db->where('id', $id)->get('customer')->row();
        }

    }
?>