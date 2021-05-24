<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Owner_Model extends CI_Model {

        public function getKantor(){
            return ($this->db->get('kantor')->result_array());

            return  $this->db->get_where('kantor', array('id' => $id))->result_array();

            // var_dump($this->db->get_where('kantor', array('id' => $id))->result_array());

            // var_dump($this->db->get('kantor')->result_array());
            // die();
        }

        public function getKantorId($id) {
            return $this->db->where('id', $id)->get('kantor')->result_array();

            // var_dump($this->db->where('id', $id)->get('kantor')->row());
            // die();
        }
        public function insertCV($id) {
            if ($this->input->post('submit')) {
                $array = array(
                    "id"=>$this->input->post('id', TRUE),
                    "nama"=>$this->input->post('nama', TRUE),
                    "alamat"=>$this->input->post('alamat', TRUE),
                    // "id_store"=>$id
                );
                }
                $this->db->insert('kantor', $array);
            }
    }
?>