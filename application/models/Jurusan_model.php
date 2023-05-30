<?php

class Jurusan_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getJurusan()
    {
        $query = "SELECT * FROM tabel_jurusan
                ORDER BY id_jurusan ASC";
        return $this->db->query($query)->result_array();
    }

    public function addJurusan()
    {
        $nama_jurusan = $this->input->post('nama_jurusan');
        $data = [
            'nama_jurusan' => $nama_jurusan
        ];
        $this->db->insert('tabel_jurusan', $data);
    }

    public function getJurusanById($id)
    {
        $query = "SELECT * FROM tabel_jurusan
        WHERE id_jurusan = $id";

        return $this->db->query($query)->row_array();
    }

    public function updateJurusan()
    {
        $id_jurusan = $this->input->post('id_jurusan');
        $nama_jurusan = $this->input->post('nama_jurusan');

        $data = [
            'nama_jurusan' => $nama_jurusan,
        ];
        $this->db->where('id_jurusan', $id_jurusan);
        $this->db->update('tabel_jurusan', $data);
    }

    public function deleteJurusan($id)
    {
        $this->db->delete('tabel_jurusan', ['id_jurusan' => $id]);
    }
}
