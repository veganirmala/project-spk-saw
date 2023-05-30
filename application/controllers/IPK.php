<?php
defined('BASEPATH') or exit('No direct script access allowed');

class IPK extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //is_logged_in();
        $this->load->model('IPK_model');
        $this->load->model('User_model');
    }

    //menampilkan seluruh data IPK
    public function IPK()
    {
        $data['title'] = "Data IPK";
            $data['user_email'] = $this->User_model->getEmail();

            $data['IPK'] = $this->IPK_model->getIPK();

            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('IPK/index', $data);
            $this->load->view('template/footer');
    }

    //tambahkan data IPK
    public function IPK_tambah()
    {
            $this->form_validation->set_rules('nim', 'NIM', 'required');
            $this->form_validation->set_rules('ipk', 'IPK', 'required');
            if ($this->form_validation->run() == false) {
                $data['title'] = "Tambah Data IPK";
                $data['user_email'] = $this->User_model->getEmail();

                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('IPK/add', $data);
                $this->load->view('template/footer');
            } else {
                $this->IPK_model->addIPK();
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data IPK Berhasil ditambahkan!</div>');
                redirect('IPK/IPK');
            }
    }

    //edit data IPK 
    public function IPK_edit($id)
    {
        $this->form_validation->set_rules('nim', 'NIM', 'required');
        $this->form_validation->set_rules('ipk', 'IPK', 'required');
            if ($this->form_validation->run() == false) {
                $data['title'] = "Edit Data IPK";
                $data['user_email'] = $this->User_model->getEmail();
                $data['IPK'] = $this->IPK_model->getIPKById($id);

                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('IPK/update', $data);
                $this->load->view('template/footer');
            } else {
                $this->IPK_model->updateIPK();
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data IPK Berhasil diubah!</div>');
                redirect('IPK/IPK');
            }
        
    }

    //hapus data IPK
    public function IPK_delete($id)
    {
        $this->IPK_model->deleteIPK($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data IPK Berhasil dihapus!</div>');
        redirect('IPK/IPK');
    }

    //detail data IPK
    public function IPK_view($id)
    {
        $data['title'] = 'Detail Data IPK';
        $data['user_email'] = $this->User_model->getEmail();

        $data['IPK'] = $this->IPK_model->getIPKById($id);

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('IPK/view', $data);
        $this->load->view('template/footer');
    }
}
