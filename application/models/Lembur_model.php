<?php

class Lembur_model extends CI_Model
{
    public function getAllLembur()
    {
        return $this->db->get('lembur')->result_array();
    }

    public function getLemburById($id_lembur)
    {
        return $this->db->get_where('lembur', ['id_lembur' => $id_lembur])->row_array();
    }

    public function getdata_Lembur()
    {
        $query = $this->db->query("SELECT * FROM lembur ORDER BY id_lembur ASC");
        return $query->result();
    }

    public function getAllPegawai()
    {
        return $this->db->get('lembur')->result_array();
    }

    public function getdata_Pegawai()
    {
        $query = $this->db->query("SELECT * FROM pegawai ORDER BY id_pegawai ASC");
        return $query->result();
    }

    public function tambahDataLembur()
    {
        $data = [
            "id_lembur" => $this->input->post('id_lembur', true),
            "id_pegawai" => $this->input->post('id_pegawai', true),
            "tanggal_lembur" => $this->input->post('tanggal_lembur', true),
            "jumlah_jam" => $this->input->post('jumlah_jam', true)
        ];
        $this->db->insert('lembur', $data);
    }

    public function hapusDataLembur($id_lembur)
    {
        $this->db->where('id_lembur', $id_lembur);
        $this->db->delete('lembur');
    }
}
