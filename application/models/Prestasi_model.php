<?php

class Prestasi_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getPrestasi()
    {
        $query = "SELECT * FROM tabel_data_prestasi INNER JOIN tabel_tahun_usulan
                ON tabel_tahun_usulan.id_usulan = tabel_data_prestasi.id_usulan
                INNER JOIN tabel_mahasiswa ON tabel_mahasiswa.nim = tabel_data_prestasi.nim
                INNER JOIN tabel_jenis_prestasi ON tabel_jenis_prestasi.id_jenis_prestasi = tabel_data_prestasi.id_jenis_prestasi
                INNER JOIN tabel_jenis_beasiswa ON tabel_jenis_beasiswa.id_jenis_beasiswa = tabel_data_prestasi.id_jenis_beasiswa 
                ORDER BY tabel_mahasiswa.nim ASC";
        return $this->db->query($query)->result_array();
    }

    public function getPrestasiById($id)
    {
        $query = "SELECT * FROM tabel_data_prestasi INNER JOIN tabel_tahun_usulan
        ON tabel_tahun_usulan.id_usulan = tabel_data_prestasi.id_usulan
        INNER JOIN tabel_mahasiswa ON tabel_mahasiswa.nim = tabel_data_prestasi.nim
        INNER JOIN tabel_jenis_prestasi ON tabel_jenis_prestasi.id_jenis_prestasi = tabel_data_prestasi.id_jenis_prestasi
                INNER JOIN tabel_jenis_beasiswa ON tabel_jenis_beasiswa.id_jenis_beasiswa = tabel_data_prestasi.id_jenis_beasiswa 
               WHERE id_data_prestasi = $id";
        return $this->db->query($query)->row_array();
    }


    public function addPrestasi()
    {
        $nim = $this->input->post('nim');
        $id_jenis_prestasi = $this->input->post('id_jenis_prestasi');
        $skor = $this->input->post('skor');
        $id_usulan = $this->input->post('id_usulan');
        $id_jenis_beasiswa = $this->input->post('id_jenis_beasiswa');
        $data = [
            'nim' => $nim,
            'id_jenis_prestasi' => $id_jenis_prestasi,
            'skor' => $skor,
            'id_usulan' => $id_usulan,
            'id_jenis_beasiswa' => $id_jenis_beasiswa
        ];
        $this->db->insert('tabel_data_prestasi', $data);
    }

    public function updatePrestasi()
    {
        $id_data_prestasi = $this->input->post('id_data_prestasi', true);
        $nim = $this->input->post('nim');
        $id_jenis_prestasi = $this->input->post('id_jenis_prestasi');
        $skor = $this->input->post('skor');
        $id_usulan = $this->input->post('id_usulan');
        $id_jenis_beasiswa = $this->input->post('id_jenis_beasiswa');
        $data = [
            'nim' => $nim,
            'id_jenis_prestasi' => $id_jenis_prestasi,
            'skor' => $skor,
            'id_usulan' => $id_usulan,
            'id_jenis_beasiswa' => $id_jenis_beasiswa
        ];
        $this->db->where('id_data_prestasi', $id_data_prestasi);
        $this->db->update('tabel_data_prestasi', $data);
    }

    public function deletePrestasi($id)
    {
        $this->db->delete('tabel_data_prestasi', ['id_data_prestasi' => $id]);
    }

    public function hitungPrestasi()
    {
        $query = $this->db->get('tabel_data_prestasi');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
}
