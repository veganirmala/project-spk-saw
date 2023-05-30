<?php

class Prodi_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getProdi()
    {
        $query = "SELECT * FROM tabel_prodi
                INNER JOIN tabel_jurusan ON
                tabel_prodi.id_jurusan = tabel_jurusan.id_jurusan
                ORDER BY id_prodi ASC";

        return $this->db->query($query)->result_array();
    }

    public function addProdi()
    {
        $nama_prodi = $this->input->post('nama_prodi');
        $jenjang = $this->input->post('jenjang');
        $id_jurusan = $this->input->post('id_jurusan');
        $data = [
            'nama_prodi' => $nama_prodi,
            'jenjang' => $jenjang,
            'id_jurusan' => $id_jurusan
        ];

        $this->db->insert('tabel_prodi', $data);
    }

    public function getProdiById($id)
    {
        $query = "SELECT * FROM tabel_prodi
        INNER JOIN tabel_jurusan
        ON tabel_jurusan.id_jurusan = tabel_prodi.id_jurusan
        WHERE id_prodi = $id";

        return $this->db->query($query)->row_array();
    }

    public function updateProdi()
    {
        $id_prodi = $this->input->post('id_prodi');
        $nama_prodi = $this->input->post('nama_prodi');
        $jenjang = $this->input->post('jenjang');
        $id_jurusan = $this->input->post('id_jurusan');
        $data = [
            'nama_prodi' => $nama_prodi,
            'jenjang' => $jenjang,
            'id_jurusan' => $id_jurusan
        ];

        $this->db->where('id_prodi', $id_prodi);
        $this->db->update('tabel_prodi', $data);
    }


    public function deleteProdi($id)
    {
        $this->db->delete('tabel_prodi', ['id_prodi' => $id]);
    }
}
