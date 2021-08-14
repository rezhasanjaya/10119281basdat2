<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Golongan extends CI_Controller
{
    public function index()
    {
        $this->load->model('Golongan_model', 'golongan');
        $data['golongan'] = $this->golongan->getAllGolongan();
        $data['judul'] = 'Golongan Karyawan';
        $this->load->view('templates/header', $data);
        $this->load->view('golongan/index', $data);
        $this->load->view('templates/footer');
    }
}
