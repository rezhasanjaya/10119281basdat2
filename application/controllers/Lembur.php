<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lembur extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('lembur_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->load->model('Lembur_model', 'lembur');
        $data['lembur'] = $this->lembur->getAllLembur();
        $data['judul'] = 'Daftar Lembur';
        $this->load->view('templates/header', $data);
        $this->load->view('lembur/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {

        $this->load->model('Lembur_model', 'lembur');
        $data['pegawai'] = $this->lembur->getAllPegawai();
        $getdata = $this->lembur->getdata_Pegawai();
        $data['datapeg'] = $getdata;
        $data['judul'] = 'Buat Jadwal Lembur';
        $this->form_validation->set_rules('id_lembur', 'ID Lembur', 'required');
        $this->form_validation->set_rules('id_pegawai', 'Nama Pegawai', 'required');
        $this->form_validation->set_rules('tanggal_lembur', 'Tanggal Lembur', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('lembur/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->lembur->tambahDataLembur();
            $this->session->set_flashdata('flash', 'Dibuat');
            redirect('lembur');
        }
    }

    public function hapus($id_lembur)
    {
        $this->load->model('Lembur_model', 'lembur');
        $this->lembur->hapusDataLembur($id_lembur);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('lembur');
    }
}
