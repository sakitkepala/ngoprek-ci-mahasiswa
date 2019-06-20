<?php

class Mahasiswa_Model extends CI_Model {

  public function getSemuaMahasiswa()
  {
    return $this->db->get('daftar_mahasiswa')->result_array();
  }

  public function tambahDataMahasiswa()
  {
    $data = [
      "nama" => $this->input->post('nama', true),
      "nim" => $this->input->post('nim', true),
      "jurusan" => $this->input->post('jurusan', true),
      "email" => $this->input->post('email', true)
    ];

    $this->db->insert('daftar_mahasiswa', $data);
  }
}
