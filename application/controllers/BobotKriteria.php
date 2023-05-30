<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BobotKriteria extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //is_logged_in();
        $this->load->model('BobotKriteria_model');
        $this->load->model('Thusulan_model');
        $this->load->model('JenisBeasiswa_model');
        $this->load->model('User_model');
    }

    //menampilkan seluruh data BobotKriteria
    public function bobotkriteria()
    {
        $data['title'] = "Data BobotKriteria";
            $data['user_email'] = $this->User_model->getEmail();

            $data['bobotkriteria'] = $this->BobotKriteria_model->getBobotKriteria();

            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('bobotkriteria/index', $data);
            $this->load->view('template/footer');
    }

    //tambahkan data BobotKriteria
    public function bobotkriteria_tambah()
    {
            $this->form_validation->set_rules('nim', 'NIM', 'required');
            $this->form_validation->set_rules('id_usulan', 'Tahun Usulan', 'required');
            $this->form_validation->set_rules('id_jenis_beasiswa', 'Jenis Beasiswa', 'required');
            $this->form_validation->set_rules('kriteria_ipk', 'Kriteria IPK', 'required');
            $this->form_validation->set_rules('kriteria_prestasi', 'Kriteria Prestasi', 'required');
            $this->form_validation->set_rules('kriteria_penghasilan', 'Kriteria Penghasilan', 'required');
            if ($this->form_validation->run() == false) {
                $data['title'] = "Tambah Data Bobot Kriteria";
                $data['user_email'] = $this->User_model->getEmail();

                $data['usulan'] = $this->Thusulan_model->getUsulan();
                $data['jenisbeasiswa'] = $this->JenisBeasiswa_model->getJenisBeasiswa();

                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('bobotkriteria/add', $data);
                $this->load->view('template/footer');
            } else {
                $this->BobotKriteria_model->addBobotKriteria();
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Bobot Kriteria Berhasil ditambahkan!</div>');
                redirect('bobotkriteria/bobotkriteria');
            }
    }

    //edit data BobotKriteria 
    public function bobotkriteria_edit($id)
    {
        $this->form_validation->set_rules('nim', 'NIM', 'required');
        $this->form_validation->set_rules('id_usulan', 'Tahun Usulan', 'required');
        $this->form_validation->set_rules('id_jenis_beasiswa', 'Jenis Beasiswa', 'required');
        $this->form_validation->set_rules('kriteria_ipk', 'Kriteria IPK', 'required');
        $this->form_validation->set_rules('kriteria_prestasi', 'Kriteria Prestasi', 'required');
        $this->form_validation->set_rules('kriteria_penghasilan', 'Kriteria Penghasilan', 'required');
            if ($this->form_validation->run() == false) {
                $data['title'] = "Edit Data BobotKriteria";
                $data['user_email'] = $this->User_model->getEmail();
                $data['bobotkriteria'] = $this->BobotKriteria_model->getBobotKriteriaById($id);

                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('bobotkriteria/update', $data);
                $this->load->view('template/footer');
            } else {
                $this->BobotKriteria_model->updateBobotKriteria();
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Bobot Kriteria Berhasil diubah!</div>');
                redirect('bobotkriteria/bobotkriteria');
            }
        
    }

    //hapus data BobotKriteria
    public function bobotkriteria_delete($id)
    {
        $this->BobotKriteria_model->deleteBobotKriteria($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Bobot Kriteria Berhasil dihapus!</div>');
        redirect('bobotkriteria/bobotkriteria');
    }

    //detail data BobotKriteria
    public function bobotkriteria_view($id)
    {
        $data['title'] = 'Detail Data BobotKriteria';
        $data['user_email'] = $this->User_model->getEmail();

        $data['bobotkriteria'] = $this->BobotKriteria_model->getBobotKriteriaById($id);

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('bobotkriteria/view', $data);
        $this->load->view('template/footer');
    }
}
