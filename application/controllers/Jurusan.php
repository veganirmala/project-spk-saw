<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jurusan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //is_logged_in();
        $this->load->model('Jurusan_model');
        $this->load->model('User_model');
    }

    //menampilkan seluruh data jurusan
    public function jurusan()
    {
        $data['title'] = "Data Jurusan";
            $data['user_email'] = $this->User_model->getEmail();

            $data['jurusan'] = $this->Jurusan_model->getJurusan();

            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('jurusan/index', $data);
            $this->load->view('template/footer');
    }

    //tambahkan data jurusan
    public function jurusan_tambah()
    {
            $this->form_validation->set_rules('nama_jurusan', 'Nama Jurusan', 'required|is_unique[tabel_jurusan.nama_jurusan]');
            if ($this->form_validation->run() == false) {
                $data['title'] = "Tambah Data Jurusan";
                $data['user_email'] = $this->User_model->getEmail();

                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('jurusan/add', $data);
                $this->load->view('template/footer');
            } else {
                $this->Jurusan_model->addJurusan();
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Jurusan Berhasil ditambahkan!</div>');
                redirect('jurusan/jurusan');
            }
    }

    //edit data jurusan 
    public function jurusan_edit($id)
    {
            $this->form_validation->set_rules('nama_jurusan', 'Nama Jurusan', 'required');
            if ($this->form_validation->run() == false) {
                $data['title'] = "Edit Data Jurusan";
                $data['user_email'] = $this->User_model->getEmail();
                $data['jurusan'] = $this->Jurusan_model->getJurusanById($id);

                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('jurusan/update', $data);
                $this->load->view('template/footer');
            } else {
                $this->Jurusan_model->updateJurusan();
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Jurusan Berhasil diubah!</div>');
                redirect('jurusan/jurusan');
            }
        
    }

    //hapus data jurusan
    public function jurusan_delete($id)
    {
        $this->Jurusan_model->deleteJurusan($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Jurusan Berhasil dihapus!</div>');
        redirect('jurusan/jurusan');
    }

    //detail data jurusan
    public function jurusan_view($id)
    {
        $data['title'] = 'Detail Data Jurusan';
        $data['user_email'] = $this->User_model->getEmail();

        $data['jurusan'] = $this->Jurusan_model->getJurusanById($id);

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('jurusan/view', $data);
        $this->load->view('template/footer');
    }
}
