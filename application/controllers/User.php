<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //is_logged_in();
        #load library dan helper yang dibutuhkan
        $this->load->library('form_validation');
        $this->load->model('User_model');
    }

    //menampilkan seluruh data dari tabel user
    public function user()
    {
        $data['title'] = "Data User";
        //ngambil data user saat login
        $data['user_email'] = $this->User_model->getEmail();

        $data['user'] = $this->User_model->getUser();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('template/footer');
    }

    //tambahkan data user
    public function user_tambah()
    {
        $this->form_validation->set_rules('nama_user', 'Nama pengguna', 'required|trim');
        $this->form_validation->set_rules(
            'email_user','Email','required|trim|valid_email|is_unique[tabel_user.email_user]',
            [
                'is_unique' => 'This email has already registered!'
            ]
        );
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', [
            'min_length' => 'Password to short!'
        ]);
        $this->form_validation->set_rules('jk_user', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('telp_user', 'Telepon', 'required');
        $this->form_validation->set_rules('alamat_user', 'Alamat', 'required');

         if ($this->form_validation->run() == false) {
             $data['title'] = "Tambah Data User";
             $data['user_email'] = $this->User_model->getEmail();

             $this->load->view('template/header', $data);
             $this->load->view('template/sidebar');
             $this->load->view('user/add', $data);
             $this->load->view('template/footer');
         } else {
            //$this->User_model->registrasi();
            $this->User_model->addUser();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data User Berhasil ditambahkan!</div>');
            redirect('user/user');
         }
    }

    public function verify()
    {
        $this->User_model->verify();
    }

    //edit data user
    public function user_edit($id)
    {
        $this->form_validation->set_rules('id_user', 'ID', 'required');
        $this->form_validation->set_rules('nama_user', 'Nama', 'required');
        $this->form_validation->set_rules('email_user','Email','required');
        $this->form_validation->set_rules('jk_user', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('telp_user', 'Telepon', 'required');
        $this->form_validation->set_rules('alamat_user', 'Alamat', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Edit Data User";
            $data['user_email'] = $this->User_model->getEmail();
            $data['user'] = $this->User_model->getUserById($id);

            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('user/update', $data);
            $this->load->view('template/footer');
        } else {
            $this->User_model->updateUser();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data User Berhasil diubah!</div>');
            redirect('user/user');
        }
    }

    //hapus data user
    public function user_delete($id)
    {
        $this->User_model->deleteUser($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data User Berhasil dihapus!</div>');
        redirect('user/user');
    }

    //detail data user
    public function user_view($id)
    {
        $data['title'] = 'Detail Data User';
        $data['user_email'] = $this->User_model->getEmail();

        $data['user'] = $this->User_model->getUserById($id);

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('user/view', $data);
        $this->load->view('template/footer');
    }
}
