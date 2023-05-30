<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rekap extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rekap_model');
        $this->load->model('User_model');
    }

    //menampilkan seluruh data rekap
    public function rekap()
    {
        
            $data['title'] = "Data Rekap Hasil Seleksi";
            //ngambil data petugas yang login
            $data['user_email'] = $this->User_model->getEmail();

            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('rekap/index', $data);
            $this->load->view('template/footer');
        
    }




}
