<?php

class Mahasiswa_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getMahasiswa()
    {
        $query = "SELECT * FROM tabel_mahasiswa 
        INNER JOIN tabel_prodi ON tabel_prodi.id_prodi = tabel_mahasiswa.id_prodi
        INNER JOIN tabel_tahun_usulan ON tabel_tahun_usulan.id_usulan = tabel_mahasiswa.id_usulan
        ORDER BY nim ASC";

        return $this->db->query($query)->result_array();
    }

    public function getMahasiswaById($id)
    {
        $query = "SELECT * FROM tabel_mahasiswa
        INNER JOIN tabel_prodi ON tabel_prodi.id_prodi = tabel_mahasiswa.id_prodi
        INNER JOIN tabel_tahun_usulan ON tabel_tahun_usulan.id_usulan = tabel_mahasiswa.id_usulan
        WHERE nim = $id";

        return $this->db->query($query)->row_array();
    }

    public function addMahasiswa()
    {
        $nim = $this->input->post('nim', true);
        $nama = $this->input->post('nama', true);
        $jk_mhs = $this->input->post('jk_mhs', true);
        $id_prodi = $this->input->post('id_prodi', true);
        $email = $this->input->post('email', true);
        $no_telp = $this->input->post('no_telp', true);
        $alamat = $this->input->post('alamat', true);
        $nama_ayah = $this->input->post('nama_ayah', true);
        $pekerjaan_ayah = $this->input->post('pekerjaan_ayah', true);
        $nama_ibu = $this->input->post('nama_ibu', true);
        $pekerjaan_ibu = $this->input->post('pekerjaan_ibu', true);
        $tanggungan = $this->input->post('tanggungan', true);
        $penghasilan_ortu = $this->input->post('penghasilan_ortu');
        $penghasilan = str_replace("Rp", "", $penghasilan_ortu);
        $nama_bank = $this->input->post('nama_bank', true);
        $norek_bank = $this->input->post('norek_bank', true);
        $semester = $this->input->post('semester', true);
        $id_usulan = $this->input->post('id_usulan', true);
        $data = [
            'nim' => $nim,
            'nama' => $nama,
            'jk_mhs' => $jk_mhs,
            'id_prodi' => $id_prodi,
            'email' => $email,
            'no_telp' => $no_telp,
            'alamat' => $alamat,
            'nama_ayah' => $nama_ayah,
            'pekerjaan_ayah' => $pekerjaan_ayah,
            'nama_ibu' => $nama_ibu,
            'pekerjaan_ibu' => $pekerjaan_ibu,
            'tanggungan' => $tanggungan,
            'penghasilan_ortu' => str_replace(".", "", $penghasilan),
            'nama_bank' => $nama_bank,
            'norek_bank' => $norek_bank,
            'semester' => $semester,
            'id_usulan' => $id_usulan
        ];
        $this->db->insert('tabel_mahasiswa', $data);
    }

    public function updateMahasiswa()
    {
        $nim = $this->input->post('nim', true);
        $nama = $this->input->post('nama', true);
        $jk_mhs = $this->input->post('jk_mhs', true);
        $id_prodi = $this->input->post('id_prodi', true);
        $email = $this->input->post('email', true);
        $no_telp = $this->input->post('no_telp', true);
        $alamat = $this->input->post('alamat', true);
        $nama_ayah = $this->input->post('nama_ayah', true);
        $pekerjaan_ayah = $this->input->post('pekerjaan_ayah', true);
        $nama_ibu = $this->input->post('nama_ibu', true);
        $pekerjaan_ibu = $this->input->post('pekerjaan_ibu', true);
        $tanggungan = $this->input->post('tanggungan', true);
        $penghasilan_ortu = $this->input->post('penghasilan_ortu');
        $penghasilan = str_replace("Rp", "", $penghasilan_ortu);
        $nama_bank = $this->input->post('nama_bank', true);
        $norek_bank = $this->input->post('norek_bank', true);
        $semester = $this->input->post('semester', true);
        $id_usulan = $this->input->post('id_usulan', true);
        $data = [
            'nim' => $nim,
            'nama' => $nama,
            'jk_mhs' => $jk_mhs,
            'id_prodi' => $id_prodi,
            'email' => $email,
            'no_telp' => $no_telp,
            'alamat' => $alamat,
            'nama_ayah' => $nama_ayah,
            'pekerjaan_ayah' => $pekerjaan_ayah,
            'nama_ibu' => $nama_ibu,
            'pekerjaan_ibu' => $pekerjaan_ibu,
            'tanggungan' => $tanggungan,
            'penghasilan_ortu' => str_replace(".", "", $penghasilan),
            'nama_bank' => $nama_bank,
            'norek_bank' => $norek_bank,
            'semester' => $semester,
            'id_usulan' => $id_usulan
        ];
        $this->db->where('nim', $nim);
        $this->db->update('tabel_mahasiswa', $data);
    }

    public function deleteMahasiswa($id)
    {
        $this->db->delete('tabel_mahasiswa', ['nim' => $id]);
    }

    public function hitungMahasiswa()
    {
        $query = $this->db->get('tabel_mahasiswa');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
}
