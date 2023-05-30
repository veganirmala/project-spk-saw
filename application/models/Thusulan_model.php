<?php

class Thusulan_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getUsulan()
    {
        $query = "SELECT * FROM tabel_tahun_usulan 
        INNER JOIN tabel_jenis_beasiswa ON tabel_jenis_beasiswa.id_jenis_beasiswa = tabel_tahun_usulan.id_jenis_beasiswa
        ORDER BY tahun ASC";

        return $this->db->query($query)->result_array();
    }

    public function getUsulanById($id)
    {
        $query = "SELECT * FROM tabel_tahun_usulan 
        INNER JOIN tabel_jenis_beasiswa ON tabel_jenis_beasiswa.id_jenis_beasiswa = tabel_tahun_usulan.id_jenis_beasiswa
        WHERE id_usulan = $id";

        return $this->db->query($query)->row_array();
    }

    public function getTahunUsulanById()
    {
        $this->db->select('*');
        $this->db->from('tabel_tahun_usulan');
        return $this->db->get()->result_array();
    }

    public function addUsulan()
    {
        $id_jenis_beasiswa = $this->input->post('id_jenis_beasiswa');
        $tahun = $this->input->post('tahun');
        $kuota = $this->input->post('kuota');
        $data = [
            'id_jenis_beasiswa' => $id_jenis_beasiswa,
            'tahun' => $tahun,
            'kuota' => $kuota,
        ];
        $this->db->insert('tabel_tahun_usulan', $data);
    }

    public function updateUsulan()
    {
        $id_usulan = $this->input->post('id_usulan');
        $id_jenis_beasiswa = $this->input->post('id_jenis_beasiswa');
        $tahun = $this->input->post('tahun');
        $kuota = $this->input->post('kuota');
        $data = [
            'id_jenis_beasiswa' => $id_jenis_beasiswa,
            'tahun' => $tahun,
            'kuota' => $kuota,
        ];
        $this->db->where('id_usulan', $id_usulan);
        $this->db->update('tabel_tahun_usulan', $data);
    }

    public function deleteUsulan($id)
    {
        $this->db->delete('tabel_tahun_usulan', ['id_usulan' => $id]);
    }
}
