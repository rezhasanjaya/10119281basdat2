<?php

class Pegawai_model extends CI_Model
{
    public function getAllPegawai()
    {
        return $this->db->get('pegawai')->result_array();
    }

    public function getPegawaiById($id_pegawai)
    {
        return $this->db->get_where('pegawai', ['id_pegawai' => $id_pegawai])->row_array();
    }

    public function getdata_Pegawai()
    {
        $query = $this->db->query("SELECT * FROM pegawai ORDER BY id_pegawai ASC");
        return $query->result();
    }

    public function cariDataPegawai()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('id_pegawai', $keyword);
        $this->db->or_like('nama_pegawai', $keyword);
        $this->db->or_like('tempat_lahir', $keyword);
        $this->db->or_like('tanggal_lahir', $keyword);
        $this->db->or_like('no_telepon', $keyword);
        return $this->db->get('pegawai')->result_array();
    }

    public function tambahDataPegawai()
    {
        $data = [
            "id_pegawai" => $this->input->post('id_pegawai', true),
            "nama_pegawai" => $this->input->post('nama_pegawai', true),
            "tempat_lahir" => $this->input->post('tempat_lahir', true),
            "tanggal_lahir" => $this->input->post('tanggal_lahir', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "id_golongan" => $this->input->post('id_golongan', true),
            "no_telepon" => $this->input->post('no_telepon', true)
        ];
        $this->db->insert('pegawai', $data);
    }

    public function hapusDataBarang($id_pegawai)
    {
        $this->db->where('id_pegawai', $id_pegawai);
        $this->db->delete('pegawai');
    }

    public function ubahDataPegawai()
    {
        $data = [
            "id_pegawai" => $this->input->post('id_pegawai', true),
            "nama_pegawai" => $this->input->post('nama_pegawai', true),
            "tempat_lahir" => $this->input->post('tempat_lahir', true),
            "tanggal_lahir" => $this->input->post('tanggal_lahir', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "id_golongan" => $this->input->post('id_golongan', true),
            "no_telepon" => $this->input->post('no_telepon', true)
        ];
        $this->db->where('id_pegawai',  $this->input->post('id_pegawai'));
        $this->db->update('pegawai', $data);
    }

    public function getGolonganById($id_golongan)
    {
        return $this->db->get_where('golongan', ['id_golongan' => $id_golongan])->row_array();
    }

    public function getdata_Golongan()
    {
        $query = $this->db->query("SELECT * FROM golongan ORDER BY id_golongan ASC");
        return $query->result();
    }

    public function getPegawaiLk()
    {
        $keyword = 'Pria';
        $this->db->or_like('jenis_kelamin', $keyword);
        return $this->db->get('pegawai')->result_array();
    }

    public function getPegawaiWn()
    {
        $keyword = 'wanita';
        $this->db->or_like('jenis_kelamin', $keyword);
        return $this->db->get('pegawai')->result_array();
    }
}
