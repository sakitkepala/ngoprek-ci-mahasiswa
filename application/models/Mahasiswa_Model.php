<?php

class Mahasiswa_Model extends CI_Model {

  public function getSemuaMahasiswa()
  {
    return $this->db->get('daftar_mahasiswa')->result_array();
  }
}
