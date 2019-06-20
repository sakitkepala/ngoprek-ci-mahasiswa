<?php

class Beranda extends CI_Controller {

  public function index()
  {
    $data['judul_halaman'] = 'Beranda Mahasiswa';

    $this->load->view('template/header', $data);
    $this->load->view('beranda/index');
    $this->load->view('template/footer');
  }
}
