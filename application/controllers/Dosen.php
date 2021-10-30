<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dosen_model', 'dosen');
    }

    public function index()
    {
        $data['title'] = 'Data Dosen';
        $data['dosen'] = $this->dosen->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('pages/dosen/dosen', $data);
        $this->load->view('templates/footer', $data);
    }

    public function detail($id)
    {
        $data['dosen'] = $this->dosen->getDsnById($id);
        $data['title']     = 'Detail Dosen';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('pages/dosen/detailDosen', $data);
        $this->load->view('templates/footer', $data);
    }

    public function formAdd()
    {
        $data['title'] = 'Tambah Data Dosen';

        $this->form_validation->set_rules('nidn', 'nidn', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('jabatan', 'jabatan', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('pages/dosen/formAddDosen', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'nidn' => $this->input->post('nidn'),
                'nama' => $this->input->post('nama'),
                'jabatan' => $this->input->post('jabatan'),
            ];
            $this->dosen->insertData($data);
            $this->session->set_flashdata("alerts", 'Data Berhasil Ditambahkan');
            redirect('dosen');
        }
    }
    public function delete($id)
    {
        $this->dosen->deleteData($id);
        $this->session->set_flashdata("alerts", 'Data Berhasil Dihapus');
        redirect('dosen');
    }
}
