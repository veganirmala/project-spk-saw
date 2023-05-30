<?php

class JenisBeasiswa_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getJenisBeasiswa()
    {
        $query = "SELECT * FROM tabel_jenis_beasiswa
                ORDER BY id_jenis_beasiswa ASC";

        return $this->db->query($query)->result_array();
    }

    public function getJenisBeasiswaById($id)
    {
        return $this->db->get_where('tabel_jenis_beasiswa', ['id_jenis_beasiswa' => $id])->row_array();
    }

    public function addJenisBeasiswa()
    {
        $jenis_beasiswa = $this->input->post('jenis_beasiswa');
        $data = [
            'jenis_beasiswa' => $jenis_beasiswa
        ];
        $this->db->insert('tabel_jenis_beasiswa', $data);
    }

    public function updateJenisBeasiswa()
    {
       
        $jenis_beasiswa = $this->input->post('jenis_beasiswa');
        $data = [
            'jenis_beasiswa' => $jenis_beasiswa
        ];
        $this->db->where('id_jenis_beasiswa', $this->input->post('id_jenis_beasiswa'));
        $this->db->update('tabel_jenis_beasiswa', $data);
    }

    public function deleteJenisBeasiswa($id)
    {
        $this->db->delete('tabel_jenis_beasiswa', ['id_jenis_beasiswa' => $id]);
    }
}
