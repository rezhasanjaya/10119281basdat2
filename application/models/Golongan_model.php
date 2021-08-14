<?php

class Golongan_model extends CI_Model
{
    public function getAllGolongan()
    {
        return $this->db->get('golongan')->result_array();
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
}
