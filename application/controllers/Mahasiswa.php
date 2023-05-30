<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //is_logged_in();
        $this->load->model('Mahasiswa_model');
        $this->load->model('Prodi_model');
        $this->load->model('Thusulan_model');
        $this->load->model('User_model');
    }

    //menampilkan data mahasiswa
    public function mahasiswa()
    {
            $data['title'] = "Data Mahasiswa";
            $data['user_email'] = $this->User_model->getEmail();
            $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswa();

            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('mahasiswa/index', $data);
            $this->load->view('template/footer');

    }

    //tambahkan tambah data mahasiswa
    public function mahasiswa_tambah()
    {
            $this->form_validation->set_rules('nim', 'NIM', 'required|numeric|is_unique[tabel_mahasiswa.nim]');
            $this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required');
            $this->form_validation->set_rules('jk_mhs', 'Jenis Kelamin Mahasiswa', 'required');
            $this->form_validation->set_rules('id_prodi', 'Nama Prodi', 'required');
            $this->form_validation->set_rules('email', 'E-mail', 'required');
            $this->form_validation->set_rules('no_telp', 'No HP Mahasiswa', 'required');
            $this->form_validation->set_rules('alamat', 'Alamat Mahasiswa', 'required');
            $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required');
            $this->form_validation->set_rules('pekerjaan_ayah', 'Pekerjaan Ayah', 'required');
            $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required');
            $this->form_validation->set_rules('pekerjaan_ibu', 'Pekerjaan Ibu', 'required');
            $this->form_validation->set_rules('tanggungan', 'Tanggungan Orang Tua', 'required');
            $this->form_validation->set_rules('penghasilan_ortu', 'Penghasilan Orang Tua', 'required');
            $this->form_validation->set_rules('nama_bank', 'Nama BANK', 'required');
            $this->form_validation->set_rules('norek_bank', 'No Rekening BANK', 'required');
            $this->form_validation->set_rules('semester', 'Semester', 'required');
            $this->form_validation->set_rules('id_usulan', 'Tahun Usulan', 'required');

            if ($this->form_validation->run() == false) {
                $data['title'] = "Tambah Data Mahasiswa";
                $data['user_email'] = $this->User_model->getEmail();
                $data['prodi'] = $this->Prodi_model->getProdi();

                $data['thusulan'] = $this->Thusulan_model->getTahunUsulanById();

                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar');
                $this->load->view('mahasiswa/add', $data);
                $this->load->view('template/footer');
            } else {
                $this->Mahasiswa_model->addMahasiswa();
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Mahasiswa Berhasil ditambahkan!</div>');
                redirect('mahasiswa/mahasiswa');
            }
    }

    //edit mahasiswa
    public function mahasiswa_edit($id)
    {
        $this->form_validation->set_rules('nim', 'NIM', 'required');
        $this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required');
        $this->form_validation->set_rules('jk_mhs', 'Jenis Kelamin Mahasiswa', 'required');
        $this->form_validation->set_rules('id_prodi', 'Nama Prodi', 'required');
        $this->form_validation->set_rules('email', 'E-mail', 'required');
        $this->form_validation->set_rules('no_telp', 'No HP Mahasiswa', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat Mahasiswa', 'required');
        $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required');
        $this->form_validation->set_rules('pekerjaan_ayah', 'Pekerjaan Ayah', 'required');
        $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required');
        $this->form_validation->set_rules('pekerjaan_ibu', 'Pekerjaan Ibu', 'required');
        $this->form_validation->set_rules('tanggungan', 'Tanggungan Orang Tua', 'required');
        $this->form_validation->set_rules('penghasilan_ortu', 'Penghasilan Orang Tua', 'required');
        $this->form_validation->set_rules('nama_bank', 'Nama BANK', 'required');
        $this->form_validation->set_rules('norek_bank', 'No Rekening BANK', 'required');
        $this->form_validation->set_rules('semester', 'Semester', 'required');
        $this->form_validation->set_rules('id_usulan', 'Tahun Usulan', 'required');

            if ($this->form_validation->run() == false) {
                $data['title'] = "Edit Data Mahasiswa";
                $data['user_email'] = $this->User_model->getEmail();
                $data['mhs'] = $this->Mahasiswa_model->getMahasiswaById($id);

                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar');
                $this->load->view('mahasiswa/update', $data);
                $this->load->view('template/footer');
            } else {
                $this->Mahasiswa_model->updateMahasiswa();
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Mahasiswa Berhasil diubah!</div>');
                redirect('mahasiswa/mahasiswa');
            }
    }

    //hapus data mahasiswa
    public function mahasiswa_delete($id)
    {
        $this->Mahasiswa_model->deleteMahasiswa($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Mahasiswa Berhasil dihapus!</div>');
        redirect('mahasiswa/mahasiswa');
    }

    //detail data mahasiswa
    public function mahasiswa_view($id)
    {
        $data['title'] = 'Detail Data Mahasiswa';
        $data['user_email'] = $this->User_model->getEmail();
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('mahasiswa/view', $data);
        $this->load->view('template/footer');
    }
}
