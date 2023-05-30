<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prestasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //is_logged_in();
        $this->load->model('Prestasi_model');
        $this->load->model('JenisPrestasi_model');
        $this->load->model('JenisBeasiswa_model');
        $this->load->model('Thusulan_model');
        $this->load->model('User_model');
    }

    //tampil data prestasi
    public function prestasi()
    {
            $data['title'] = "Data Prestasi";
            $data['user_email'] = $this->User_model->getEmail();
            $data['prestasi'] = $this->Prestasi_model->getPrestasi();

            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('prestasi/index', $data);
            $this->load->view('template/footer');
    }

    //menambahkan data prestasi
    public function prestasi_tambah()
    {
            $this->form_validation->set_rules('nim', 'NIM', 'required');
            $this->form_validation->set_rules('id_jenis_prestasi', 'id_jenis_prestasi', 'required');
            $this->form_validation->set_rules('skor', 'Skor Prestasi', 'required');
            $this->form_validation->set_rules('id_usulan', 'Tahun Usulan', 'required');
            $this->form_validation->set_rules('id_jenis_beasiswa', 'Jenis Beasiswa', 'required');
            if ($this->form_validation->run() == false) {
                $data['title'] = "Tambah Data Prestasi";
                $data['user_email'] = $this->User_model->getEmail();
                $data['usulan'] = $this->Thusulan_model->getUsulan();

                $data['jenisprestasi'] = $this->JenisPrestasi_model->getJenisPrestasi();
                $data['jenisbeasiswa'] = $this->JenisBeasiswa_model->getJenisBeasiswa();
                
                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar');
                $this->load->view('prestasi/add', $data);
                $this->load->view('template/footer');
            } else {
                $this->Prestasi_model->addPrestasi();
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Prestasi Berhasil ditambahkan!</div>');
                redirect('prestasi/prestasi');
            }
    }

    //edit data prestasi
    public function prestasi_edit($id)
    {
        $this->form_validation->set_rules('nim', 'NIM', 'required');
        $this->form_validation->set_rules('id_jenis_prestasi', 'Jenis Prestasi', 'required');
        $this->form_validation->set_rules('skor', 'Skor Prestasi', 'required');
        $this->form_validation->set_rules('id_usulan', 'Tahun Usulan', 'required');
        $this->form_validation->set_rules('id_jenis_beasiswa', 'Jenis Beasiswa', 'required');
            if ($this->form_validation->run() == false) {
                $data['title'] = "Edit Data Prestasi";
                $data['user_email'] = $this->User_model->getEmail();

                $data['prestasi'] = $this->Prestasi_model->getPrestasiById($id);
                $data['usulan'] = $this->Thusulan_model->getUsulan();
                $data['jenisprestasi'] = $this->JenisPrestasi_model->getJenisPrestasi();

                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar');
                $this->load->view('prestasi/update', $data);
                $this->load->view('template/footer');
            } else {
                $this->Prestasi_model->updatePrestasi();
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Prestasi Berhasil diubah!</div>');
                redirect('prestasi/prestasi');
            }
    }

    //hapus data prestasi
    public function prestasi_delete($id)
    {
        $this->Prestasi_model->deletePrestasi($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Prestasi Berhasil dihapus!</div>');
        redirect('prestasi/prestasi');
    }

    //detail data prestasi
    public function prestasi_view($id)
    {
        $data['title'] = 'Detail Data Prestasi';
        $data['user_email'] = $this->User_model->getEmail();
        $data['prestasi'] = $this->Prestasi_model->getPrestasiById($id);

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('prestasi/view', $data);
        $this->load->view('template/footer');
    }
}
