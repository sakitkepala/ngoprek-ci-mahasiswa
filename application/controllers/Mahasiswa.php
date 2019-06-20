<?php

class Mahasiswa extends CI_Controller {

  public function index()
  {
    $data['judul_halaman'] = 'Daftar Mahasiswa';
    
    $this->load->view('template/header', $data);
    $this->load->view('mahasiswa/index');
    $this->load->view('template/footer');
  }
}
