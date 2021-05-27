<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Admin_Model extends CI_Model {

        public function getPelangganId(){
            return ($this->db->get('pelanggan')->result_array());
            // var_dump($this->db->get('pelanggan'));
            // die();
            // var_dump($this->db->where('id', $id)->get('pelanggan')->row());
            // die;
        }

        public function deletePelanggan($id) {
            $this->db->where('id', $id)->delete('pelanggan');
        }

        public function getPelanggan($id){
            return $this->db->where('id', $id)->get('pelanggan')->row();
        }

        public function updatePelanggan($id){
            $post = $this->input->post();
            $this->nama = $post['nama'];
            $this->telepon = $post['telepon'];

            $this->db->where('id', $id)->update('pelanggan', $this);
            
            if ($this->db->affected_rows() > 0) {
                return TRUE;
            } else {
                return FALSE;
            }
        }

        public function insertPelanggan($id) {
            if ($this->input->post('submit')) {
            $array = array(
                "id"=>$this->input->post('id', TRUE),
                "nama"=>$this->input->post('nama', TRUE),
                "telepon"=>$this->input->post('telepon', TRUE),
                // "id_store"=>$id
            );
            }
            $this->db->insert('pelanggan', $array);
        }

        public function searchPelanggan($username = null) {
            $input = $this->input->post('keyword');
            $this->db->select('p.*');
            $this->db->from('pelanggan as p');
            $this->db->or_like('nama', $input);
            // $this->db->where('id_store', $id);
            return $this->db->get()->result_array();    
        }

        public function Pesanan($id) {
            if ($this->input->post('submit')) {
                $array = array(
                    "id_pesan"=>$this->input->post('id_pesan', TRUE),
                    "nama"=>$this->input->post('nama', TRUE),
                    "email"=>$this->input->post('email', TRUE),
                    "kategori"=>$this->input->post('kategori', TRUE),
                    "telp"=>$this->input->post('telp', TRUE),
                    "tgl_pesan"=>$this->input->post('tgl_pesan', TRUE),
                    "pesan"=>$this->input->post('pesan', TRUE),
                    // "id_store"=>$id
                );
                }
                $this->db->insert('pesanan', $array);
        }

        public function getPesananId(){
            return ($this->db->get('pesanan')->result_array());
            // var_dump($this->db->get('pelanggan'));
            // die();
            // var_dump($this->db->where('id', $id)->get('pelanggan')->row());
            // die;
        }

        public function getKantor(){
            return ($this->db->get('kantor')->result_array());
            // var_dump($this->db->get('pelanggan'));
            // die();
            // var_dump($this->db->where('id', $id)->get('pelanggan')->row());
            // die;
        }

        public function getKantorId($id){
            return $this->db->where('id', $id)->get('kantor')->row();
        }

        public function insertKantor($id) {
            if ($this->input->post('submit')) {
            $array = array(
                "alamat"=>$this->input->post('alamat', TRUE),
                "telepon"=>$this->input->post('telepon', TRUE),
                "kelurahan"=>$this->input->post('kelurahan', TRUE),
                "kecamatan"=>$this->input->post('kecamatan', TRUE),
                "kota"=>$this->input->post('kota', TRUE),
                "visi"=>$this->input->post('visi', TRUE),
                "misi"=>$this->input->post('misi', TRUE),
                "deskripsi"=>$this->input->post('deskripsi', TRUE),
                // "id_store"=>$id
            );
            }
            $this->db->insert('kantor', $array);
        }
        
    }
?>