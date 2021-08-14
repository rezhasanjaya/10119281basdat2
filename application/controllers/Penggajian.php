<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penggajian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penggajian_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->load->model('Penggajian_model', 'gaji');
        $data['penggajian'] = $this->gaji->getAllPenggajian();
        $data['judul'] = 'Penggajian Pegawai';
        $this->load->view('templates/header', $data);
        $this->load->view('penggajian/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {

        $this->load->model('Penggajian_model', 'gaji');
        $data['gaji'] = $this->gaji->getAllPenggajian();
        $getdata = $this->gaji->getdata_Pegawai();
        $getdata2 = $this->gaji->getdata_Golongan();
        $data['datapeg'] = $getdata;
        $data['datagol'] = $getdata2;
        $data['judul'] = 'Penggajian Pegawai';
        $this->form_validation->set_rules('id_penggajian', 'ID Penggajian', 'required');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('penggajian/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Penggajian_model->tambahPenggajian();
            $this->session->set_flashdata('flash', 'Dibuat');
            redirect('penggajian');
        }
    }

    public function hapus($id_penggajian)
    {
        $this->load->model('Penggajian_model', 'gaji');
        $this->gaji->hapusDataPenggajian($id_penggajian);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('penggajian');
    }

    public function ubah($id_penggajian)
    {
        $data['judul'] = 'Ubah Penggajian Pegawai';
        $data['penggajian'] = $this->Penggajian_model->getPenggajianById($id_penggajian);
        $getdata = $this->Penggajian_model->getdata_Pegawai();
        $data['datapeg'] = $getdata;
        $this->form_validation->set_rules('id_pegawai', 'ID Pegawai', 'required');
        $this->form_validation->set_rules('nama_pegawai', 'Nama Pegawai', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('penggajian/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Penggajian_model->ubahDataPenggajian();
            $this->session->set_flashdata('flash', 'Data Diubah');
            redirect('penggajian');
        }
    }
}
