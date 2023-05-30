<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JenisPrestasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //is_logged_in();
        #load library dan helper yang dibutuhkan
        $this->load->library('form_validation');
        $this->load->model('JenisPrestasi_model');
        $this->load->model('User_model');
    }

    //menampilkan seluruh data dari tabel JenisPrestasi
    public function jenisprestasi()
    {
        $data['title'] = "Data Jenis Prestasi";
        $data['user_email'] = $this->User_model->getEmail();
        $data['jenisprestasi'] = $this->JenisPrestasi_model->getJenisPrestasi();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('jenisprestasi/index', $data);
        $this->load->view('template/footer');
    }

    //tambahkan data JenisPrestasi
    public function jenisprestasi_tambah()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('jenis', 'jenis', 'required');
        $this->form_validation->set_rules('tingkat', 'tingkat', 'required');
        $this->form_validation->set_rules('nilai', 'nilai', 'required');

         if ($this->form_validation->run() == false) {
             $data['title'] = "Tambah Data Jenis Prestasi";
             $data['user_email'] = $this->User_model->getEmail();
             $this->load->view('template/header', $data);
             $this->load->view('template/sidebar');
             $this->load->view('jenisprestasi/add', $data);
             $this->load->view('template/footer');
         } else {
            $this->JenisPrestasi_model->addJenisPrestasi();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Jenis Prestasi Berhasil ditambahkan!</div>');
            redirect('jenisprestasi/jenisprestasi');
         }
    }

    //edit data JenisPrestasi
    public function jenisprestasi_edit($id)
    {
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('jenis', 'jenis', 'required');
        $this->form_validation->set_rules('tingkat', 'tingkat', 'required');
        $this->form_validation->set_rules('nilai', 'nilai', 'required');
        
        if ($this->form_validation->run() == false) {
            $data['title'] = "Edit Data Jenis Prestasi";
            $data['user_email'] = $this->User_model->getEmail();
            $data['jenisprestasi'] = $this->JenisPrestasi_model->getJenisPrestasiById($id);

            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('jenisprestasi/update', $data);
            $this->load->view('template/footer');
        } else {
            $this->JenisPrestasi_model->updateJenisPrestasi();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Jenis Prestasi Berhasil diubah!</div>');
            redirect('jenisprestasi/jenisprestasi');
        }
    }

    //hapus data JenisPrestasi
    public function jenisprestasi_delete($id)
    {
        $this->JenisPrestasi_model->deleteJenisPrestasi($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Jenis Prestasi Berhasil dihapus!</div>');
        redirect('jenisprestasi/jenisprestasi');
    }

    //detail data JenisPrestasi
    public function jenisprestasi_view($id)
    {
        $data['title'] = 'Detail Data Jenis Prestasi';
        $data['user_email'] = $this->User_model->getEmail();
        $data['jenisprestasi'] = $this->JenisPrestasi_model->getJenisPrestasiById($id);

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('jenisprestasi/view', $data);
        $this->load->view('template/footer');
    }
}
