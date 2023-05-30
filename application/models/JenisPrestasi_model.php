<?php

class JenisPrestasi_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getJenisPrestasi()
    {
        $query = "SELECT * FROM tabel_jenis_prestasi
                ORDER BY id_jenis_prestasi ASC";

        return $this->db->query($query)->result_array();
    }

    public function getJenisPrestasiById($id)
    {
        return $this->db->get_where('tabel_jenis_prestasi', ['id_jenis_prestasi' => $id])->row_array();
    }

    public function addJenisPrestasi()
    {
        $nama = $this->input->post('nama');
        $jenis = $this->input->post('jenis');
        $tingkat = $this->input->post('tingkat');
        $nilai = $this->input->post('nilai');
        $data = [
            'nama' => $nama,
            'jenis' => $jenis,
            'tingkat' => $tingkat,
            'nilai' => $nilai
        ];
        $this->db->insert('tabel_jenis_prestasi', $data);
    }

    public function updateJenisPrestasi()
    {
       
        $id_jenis_prestasi = $this->input->post('id_jenis_prestasi');
        $nama = $this->input->post('nama');
        $jenis = $this->input->post('jenis');
        $tingkat = $this->input->post('tingkat');
        $nilai = $this->input->post('nilai');
        $data = [
            'nama' => $nama,
            'jenis' => $jenis,
            'tingkat' => $tingkat,
            'nilai' => $nilai
        ];
        $this->db->where('id_jenis_prestasi', $id_jenis_prestasi);
        $this->db->update('tabel_jenis_prestasi', $data);
    }

    public function deleteJenisPrestasi($id)
    {
        $this->db->delete('tabel_jenis_prestasi', ['id_jenis_prestasi' => $id]);
    }
}
