<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pegawai_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->load->model('Pegawai_model', 'pegawai');
        $data['pegawai'] = $this->pegawai->getAllPegawai();
        $data['judul'] = 'Pengelolaan Pegawai';
        if ($this->input->post('keyword')) {
            $data['pegawai'] = $this->pegawai->cariDataPegawai();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('pegawai/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {

        $this->load->model('Pegawai_model', 'pegawai');
        $data['pegawai'] = $this->pegawai->getAllPegawai();
        $getdata = $this->pegawai->getdata_Golongan();
        $data['datagol'] = $getdata;
        $data['judul'] = 'Tambah Pegawai';
        $this->form_validation->set_rules('id_pegawai', 'ID Pegawai', 'required');
        $this->form_validation->set_rules('nama_pegawai', 'Nama Pegawai', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('pegawai/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->pegawai->tambahDataPegawai();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('pegawai');
        }
    }

    public function hapus($id_pegawai)
    {
        $this->Pegawai_model->hapusDataBarang($id_pegawai);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('pegawai');
    }

    public function ubah($id_pegawai)
    {
        $data['judul'] = 'Ubah Data Pegawai';
        $data['pegawai'] = $this->Pegawai_model->getPegawaiById($id_pegawai);
        $getdata = $this->Pegawai_model->getdata_Golongan();
        $data['datagol'] = $getdata;
        $this->form_validation->set_rules('id_pegawai', 'ID Pegawai', 'required');
        $this->form_validation->set_rules('nama_pegawai', 'Nama Pegawai', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('pegawai/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Pegawai_model->ubahDataPegawai();
            $this->session->set_flashdata('flash', 'Data Diubah');
            redirect('pegawai');
        }
    }

    public function tampil_laki()
    {
        $this->load->model('Pegawai_model', 'pegawai');
        $data['pegawailk'] = $this->pegawai->getPegawaiLk();
        $data['judul'] = 'Pengelolaan Pegawai';
        if ($this->input->post('keyword')) {
            $data['pegawai'] = $this->pegawai->cariDataPegawai();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('pegawai/tampillaki', $data);
        $this->load->view('templates/footer');
    }

    public function tampil_wanita()
    {
        $this->load->model('Pegawai_model', 'pegawai');
        $data['pegawaiwn'] = $this->pegawai->getPegawaiWn();
        $data['judul'] = 'Pengelolaan Pegawai';
        if ($this->input->post('keyword')) {
            $data['pegawai'] = $this->pegawai->cariDataPegawai();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('pegawai/tampilwnt', $data);
        $this->load->view('templates/footer');
    }
}
