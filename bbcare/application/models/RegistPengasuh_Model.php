<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');

class RegistPengasuh_Model extends CI_Model {


  function insert($data)
  {
    $this->db->insert('pengasuh', $data);
    return $this->db->insert_id();
  }

  public function search_code($code)
  {
    $this->db->where('verification_key', $code);
    return $this->db->get('pengasuh')->row();
  }

  function verify_email($key)
  {
    $this->db->where('verification_key', $key);
    $this->db->where('is_email_verified', 'no');

    $query = $this->db->get('pengasuh');
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
  public function regist_user($data)
  {
    $this->db->insert('user', $data);
  }
}