<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mahasiswa_model', 'mahasiswa');
  }

  public function index()
  {
    $data['title'] = 'Data Mahasiswa';
    $data['mahasiswa'] = $this->mahasiswa->getAll();


    $this->load->view('templates/header', $data);
    $this->load->view('templates/navbar', $data);
    $this->load->view('pages/mahasiswa/mahasiswa', $data);
    $this->load->view('templates/footer', $data);
  }

  public function detail($id)
  {
    $data['mahasiswa'] = $this->mahasiswa->getMhsById($id);
    $data['title']     = 'Detail Mahasiswa';

    $this->load->view('templates/header', $data);
    $this->load->view('templates/navbar', $data);
    $this->load->view('pages/mahasiswa/detail', $data);
    $this->load->view('templates/footer', $data);
  }

  public function formAdd()
  {
    $data['title'] = 'Tambah Data Mahasiswa';

    $this->form_validation->set_rules('kd_matakuliah', 'kd_matakuliah', 'required');
    $this->form_validation->set_rules('nm_matakuliah', 'nm_matakuliah', 'required');
    $this->form_validation->set_rules('sks', 'sks', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/navbar', $data);
      $this->load->view('pages/mahasiswa/formAdd', $data);
      $this->load->view('templates/footer', $data);
    } else {
      $data = [
        'kd_matakuliah' => $this->input->post('kd_matakuliah'),
        'nm_matakuliah' => $this->input->post('nm_matakuliah'),
        'sks' => $this->input->post('sks'),
      ];
      $this->mahasiswa->insertData($data);
      $this->session->set_flashdata("alerts", 'Data Berhasil Ditambahkan');
      redirect('mahasiswa');
    }
  }
  public function delete($id)
  {
    $this->mahasiswa->deleteData($id);
    $this->session->set_flashdata("alerts", 'Data Berhasil Dihapus');
    redirect('mahasiswa');
  }
}
