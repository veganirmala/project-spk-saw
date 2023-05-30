<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Thusulan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //is_logged_in();
        $this->load->model('Thusulan_model');
        $this->load->model('JenisBeasiswa_model');
        $this->load->model('User_model');
    }

    //menampilkan data tahun usulan
    public function usulan()
    {
            $data['title'] = "Data Tahun Usulan";
            $data['user_email'] = $this->User_model->getEmail();
            $data['usulan'] = $this->Thusulan_model->getUsulan();

            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('thusulan/index', $data);
            $this->load->view('template/footer');
    }

    //tambah data tahun usulan
    public function usulan_tambah()
    {
            $this->form_validation->set_rules('id_jenis_beasiswa', 'Jenis Beasiswa', 'required');
            $this->form_validation->set_rules('tahun', 'Tahun', 'required');
            $this->form_validation->set_rules('kuota', 'Kuota', 'required');
            if ($this->form_validation->run() == false) {
                $data['title'] = "Tambah Data Tahun Usulan";
                $data['user_email'] = $this->User_model->getEmail();
                $data['jenisbeasiswa'] = $this->JenisBeasiswa_model->getJenisBeasiswa();

                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar');
                $this->load->view('thusulan/add', $data);
                $this->load->view('template/footer');
            } else {
                $this->Thusulan_model->addUsulan();
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Tahun Usulan Berhasil ditambahkan!</div>');
                redirect('thusulan/usulan');
            }
    }

    //edit data tahun usulan
    public function usulan_edit($id)
    {
            $this->form_validation->set_rules('id_jenis_beasiswa', 'Jenis Beasiswa', 'required');
            $this->form_validation->set_rules('tahun', 'Tahun', 'required');
            $this->form_validation->set_rules('kuota', 'Kuota', 'required');
            if ($this->form_validation->run() == false) {
                $data['title'] = "Edit Data Tahun Usulan";
                $data['user_email'] = $this->User_model->getEmail();
                $data['usulan'] = $this->Thusulan_model->getUsulanById($id);

                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar');
                $this->load->view('thusulan/update', $data);
                $this->load->view('template/footer');
            } else {
                $this->Thusulan_model->updateUsulan();
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Tahun Usulan Berhasil diubah!</div>');
                redirect('thusulan/usulan');
            }
    }

    //hapus data tahun usulan
    public function usulan_delete($id)
    {
        $this->Thusulan_model->deleteUsulan($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Tahun Usulan Berhasil dihapus!</div>');
        redirect('thusulan/usulan');
    }

    //detail data tahun usulan
    public function usulan_view($id)
    {
        $data['title'] = 'Detail Data Tahun Usulan';
        $data['user_email'] = $this->User_model->getEmail();
        $data['usulan'] = $this->Thusulan_model->getUsulanById($id);

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('thusulan/view', $data);
        $this->load->view('template/footer');
    }
}
