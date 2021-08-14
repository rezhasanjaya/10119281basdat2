<?php

class Penggajian_model extends CI_Model
{
    public function getAllPenggajian()
    {
        return $this->db->get('penggajian')->result_array();
    }

    public function getPenggajianById($id_penggajian)
    {
        return $this->db->get_where('penggajian', ['id_penggajian' => $id_penggajian])->row_array();
    }

    public function getdata_Gaji()
    {
        $query = $this->db->query("SELECT * FROM penggajian ORDER BY id_penggajian ASC");
        return $query->result();
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

    public function getAllGolongan()
    {
        return $this->db->get('lembur')->result_array();
    }

    public function getdata_Golongan()
    {
        $query = $this->db->query("SELECT * FROM golongan ORDER BY id_golongan ASC");
        return $query->result();
    }

    public function tambahPenggajian()
    {
        $data = [
            "id_penggajian" => $this->input->post('id_penggajian', true),
            "id_pegawai" => $this->input->post('id_pegawai', true),
            "tanggal" => $this->input->post('tanggal', true),
            "total_gaji" => $this->input->post('total_gaji', true),
            "upah_lembur" => $this->input->post('upah_lembur', true),
            "potongan" => $this->input->post('potongan', true),
            "jumlah_gaji" => $this->input->post('jumlah_gaji', true)
        ];
        $this->db->insert('penggajian', $data);
    }

    public function getgolonganByIdPegawai($id_golongan)
    {
        return $this->db->get_where('pegawai', ['id_golongan' => $id_golongan])->row_array();
    }

    public function hapusDataPenggajian($id_penggajian)
    {
        $this->db->where('id_penggajian', $id_penggajian);
        $this->db->delete('penggajian');
    }

    public function ubahDataPenggajian()
    {
        $data = [
            "id_penggajian" => $this->input->post('id_penggajian', true),
            "id_pegawai" => $this->input->post('id_pegawai', true),
            "tanggal" => $this->input->post('tanggal', true),
            "total_gaji" => $this->input->post('total_gaji', true),
            "upah_lembur" => $this->input->post('upah_lembur', true),
            "potongan" => $this->input->post('potongan', true),
            "jumlah_gaji" => $this->input->post('jumlah_gaji', true)
        ];
        $this->db->where('id_penggajian',  $this->input->post('id_penggajian'));
        $this->db->update('penggajian', $data);
    }
}
