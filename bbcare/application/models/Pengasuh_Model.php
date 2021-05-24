<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Pengasuh_Model extends CI_Model {
        
        public function getPengasuh(){
            return ($this->db->get('pengasuh')->result_array());
        }

        public function getPengasuhId($id){
            return $this->db->where('id', $id)->get('pengasuh')->row();
        }

        public function updatePengasuh($id){
            $post = $this->input->post();
            $this->telepon = $post['telepon'];
            $this->tgl_lahir = $post['tgl_lahir'];
            $this->agama = $post['agama'];
            $this->alamat = $post['alamat'];
            $this->pendidikan = $post['pendidikan'];
            $this->status = $post['status'];

            $this->db->where('id', $id)->update('pengasuh', $this);
            
            if ($this->db->affected_rows() > 0) {
                return TRUE;
            } else {
                return FALSE;
            }
        }

        public function insertPengasuh($id) {
            if ($this->input->post('submit')) {
            $array = array(
                // "id"=>$this->input->post('id', TRUE),
                // "nama_pengasuh"=>$this->input->post('nama_pengasuh', TRUE),
                // "telepon"=>$this->input->post('telepon', TRUE),
                "telepon"=>$this->input->post('telepon', TRUE),
                "tgl_lahir"=>$this->input->post('tgl_lahir', TRUE),
                "agama"=>$this->input->post('agama', TRUE),
                "alamat"=>$this->input->post('alamat', TRUE),
                "pendidikan"=>$this->input->post('pendidikan', TRUE),
                "status"=>$this->input->post('status', TRUE),
                // "id_store"=>$id
            );
            }
            $this->db->insert('pengasuh', $array);
        }

    }
?>