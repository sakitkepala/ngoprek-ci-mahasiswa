<?php

class Mahasiswa extends CI_Controller {

  public function __construct()
  {
    parent::__construct();

    $this->load->model('Mahasiswa_Model');
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data['judul_halaman'] = 'Daftar Mahasiswa';
    $data['daftar_mahasiswa'] = $this->Mahasiswa_Model->getSemuaMahasiswa();

    $this->load->view('template/header', $data);
    $this->load->view('mahasiswa/index', $data);
    $this->load->view('template/footer');
  }

  public function tambah()
  {
    $data['judul_halaman'] = 'Tambah Mahasiswa';

    $this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required');
    $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
    $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');

    if ( $this->form_validation->run() == FALSE )
    {
      $this->load->view('template/header', $data);
      $this->load->view('mahasiswa/tambah');
      $this->load->view('template/footer');
    }
    else
    {
      echo 'berhasil tambah data';
    }

  }
}
