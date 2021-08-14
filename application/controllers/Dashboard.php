<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Halaman Utama';
        $this->load->view('templates/header', $data);
        $this->load->view('dashboard/index');
        $this->load->view('templates/footer');
    }
}
