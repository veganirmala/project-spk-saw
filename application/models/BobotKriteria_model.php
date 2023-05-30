<?php

class BobotKriteria_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getBobotKriteria()
    {
        $query = "SELECT * FROM tabel_bobot_kriteria INNER JOIN tabel_tahun_usulan ON
                tabel_bobot_kriteria.id_usulan = tabel_tahun_usulan.id_usulan
                INNER JOIN tabel_jenis_beasiswa ON
                tabel_jenis_beasiswa.id_jenis_beasiswa = tabel_bobot_kriteria.id_jenis_beasiswa
                ORDER BY id_bobot ASC";
        return $this->db->query($query)->result_array();
    }

    public function addBobotKriteria()
    {
        $nim = $this->input->post('nim');
        $id_usulan = $this->input->post('id_usulan');
        $id_jenis_beasiswa = $this->input->post('id_jenis_beasiswa');
        $kriteria_ipk = $this->input->post('kriteria_ipk');
        $kriteria_prestasi = $this->input->post('kriteria_prestasi');
        $kriteria_penghasilan = $this->input->post('kriteria_ipk');
        $data = [
            'nim' => $nim,
            'id_usulan' => $id_usulan,
            'id_jenis_beasiswa' => $id_jenis_beasiswa,
            'kriteria_ipk' => $kriteria_ipk,
            'kriteria_prestasi' => $kriteria_prestasi,
            'kriteria_penghasilan' => $kriteria_penghasilan
        ];
        $this->db->insert('tabel_bobot_kriteria', $data);
    }

    public function getBobotKriteriaById($id)
    {
        $query = "SELECT * FROM tabel_bobot_kriteria INNER JOIN tabel_tahun_usulan ON
        tabel_bobot_kriteria.id_usulan = tabel_tahun_usulan.id_usulan
        INNER JOIN tabel_jenis_beasiswa ON
        tabel_jenis_beasiswa.id_jenis_beasiswa = tabel_bobot_kriteria.id_jenis_beasiswa
        WHERE id_bobot = $id";

        return $this->db->query($query)->row_array();
    }

    public function updateBobotKriteria()
    {
        $id_bobot = $this->input->post('id_bobot');
        $nim = $this->input->post('nim');
        $id_usulan = $this->input->post('id_usulan');
        $id_jenis_beasiswa = $this->input->post('id_jenis_beasiswa');
        $kriteria_ipk = $this->input->post('kriteria_ipk');
        $kriteria_prestasi = $this->input->post('kriteria_prestasi');
        $kriteria_penghasilan = $this->input->post('kriteria_ipk');
        $data = [
            'nim' => $nim,
            'id_usulan' => $id_usulan,
            'id_jenis_beasiswa' => $id_jenis_beasiswa,
            'kriteria_ipk' => $kriteria_ipk,
            'kriteria_prestasi' => $kriteria_prestasi,
            'kriteria_penghasilan' => $kriteria_penghasilan
        ];
        $this->db->where('id_bobot', $id_bobot);
        $this->db->update('tabel_bobot_kriteria', $data);
    }

    public function deleteBobotKriteria($id)
    {
        $this->db->delete('tabel_bobot_kriteria', ['id_bobot' => $id]);
    }
}
