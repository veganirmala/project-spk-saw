<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JenisBeasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //is_logged_in();
        #load library dan helper yang dibutuhkan
        $this->load->library('form_validation');
        $this->load->model('JenisBeasiswa_model');
        $this->load->model('User_model');
    }

    //menampilkan seluruh data dari tabel jenisbeasiswa
    public function jenisbeasiswa()
    {
        $data['title'] = "Data Jenis Beasiswa";
        $data['user_email'] = $this->User_model->getEmail();
        $data['jenisbeasiswa'] = $this->JenisBeasiswa_model->getJenisBeasiswa();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('JenisBeasiswa/index', $data);
        $this->load->view('template/footer');
    }

    //tambahkan data jenisbeasiswa
    public function jenisbeasiswa_tambah()
    {
        $this->form_validation->set_rules('jenis_beasiswa', 'Jenis Beasiswa', 'required');

         if ($this->form_validation->run() == false) {
             $data['title'] = "Tambah Data Jenis Beasiswa";
             $data['user_email'] = $this->User_model->getEmail();
             $this->load->view('template/header', $data);
             $this->load->view('template/sidebar');
             $this->load->view('JenisBeasiswa/add', $data);
             $this->load->view('template/footer');
         } else {
            $this->JenisBeasiswa_model->addJenisBeasiswa();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Jenis Beasiswa Berhasil ditambahkan!</div>');
            redirect('jenisbeasiswa/jenisbeasiswa');
         }
    }

    //edit data jenisbeasiswa
    public function jenisbeasiswa_edit($id)
    {
        $this->form_validation->set_rules('jenis_beasiswa', 'Jenis Beasiswa', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Edit Data Jenis Beasiswa";
            $data['user_email'] = $this->User_model->getEmail();
            $data['jenisbeasiswa'] = $this->JenisBeasiswa_model->getJenisBeasiswaById($id);

            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('JenisBeasiswa/update', $data);
            $this->load->view('template/footer');
        } else {
            $this->JenisBeasiswa_model->updateJenisBeasiswa();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Jenis Beasiswa Berhasil diubah!</div>');
            redirect('jenisbeasiswa/jenisbeasiswa');
        }
    }

    //hapus data jenisbeasiswa
    public function jenisbeasiswa_delete($id)
    {
        $this->JenisBeasiswa_model->deleteJenisBeasiswa($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Jenis Beasiswa Berhasil dihapus!</div>');
        redirect('jenisbeasiswa/jenisbeasiswa');
    }

    //detail data jenisbeasiswa
    public function jenisbeasiswa_view($id)
    {
        $data['title'] = 'Detail Data Jenis Beasiswa';
        $data['user_email'] = $this->User_model->getEmail();
        $data['jenisbeasiswa'] = $this->JenisBeasiswa_model->getJenisBeasiswaById($id);

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('JenisBeasiswa/view', $data);
        $this->load->view('template/footer');
    }
}
