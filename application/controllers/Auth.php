<?php
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //memanggil form validasi
        $this->load->library('form_validation');
        $this->load->model('Auth_model');
        $this->load->model('User_model');
    }

    //menampilkan form login
    public function index()
    {
        if ($this->session->userdata('email_user')) {
            redirect('Dashboard');
        }
        //aturan validasi
        $this->form_validation->set_rules('email_user', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
             $this->load->view('auth/auth_header', $data);
             $this->load->view('auth/login');
             $this->load->view('auth/auth_footer');
        } else {
            //memanggil fuction _login
            $this->_login();
        }
    }

    //memanggil function login dari auth model
    public function _login()
    {
        $this->Auth_model->login();
    }

    //digunakan edit profile user
    public function edit_profile($id)
    {
        $this->form_validation->set_rules('nama_user', 'Nama pengguna', 'required');
        $this->form_validation->set_rules('email_user','Email','required');
        $this->form_validation->set_rules('jk_user', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('telp_user', 'Telepon', 'required');
        $this->form_validation->set_rules('alamat_user', 'Alamat', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Edit Profile";
            $data['user_email'] = $this->User_model->getEmail();

            $data['user'] = $this->User_model->getUserById($id);

            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('auth/edit_profile', $data);
            $this->load->view('template/footer');
        } else {
            $this->User_model->updateUser();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data User Berhasil diubah!</div>');
            redirect('dashboard');
        }
    }

    //digunakan untuk logout
    public function logout()
    {
        $this->session->unset_userdata('email_user');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> You have been logged out!</div>');
        redirect('auth');
    }

    //digunakan registrasi oleh user
    public function registration()
    {
        if ($this->session->userdata('email_user')) {
            redirect('Dashboard');
        }
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
            $data['title'] = 'Registrasi Akun';

            $this->load->view('auth/auth_header', $data);
            $this->load->view('auth/registration', $data);
            $this->load->view('auth/auth_footer');
        } else {
            $this->Auth_model->registration();
        }
    }
}
