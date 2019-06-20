<?php

class Mahasiswa extends CI_Controller {

  public function __construct()
  {
    parent::__construct();

    $this->load->model('Mahasiswa_Model');
  }

  public function index()
  {
    $data['judul_halaman'] = 'Daftar Mahasiswa';
    $data['daftar_mahasiswa'] = $this->Mahasiswa_Model->getSemuaMahasiswa();

    $this->load->view('template/header', $data);
    $this->load->view('mahasiswa/index', $data);
    $this->load->view('template/footer');
  }
}
