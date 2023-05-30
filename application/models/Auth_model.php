<?php
class Auth_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function login()
    {
        //mengambil nilai yang diinputkan di email dan password
        $email_user = $this->input->post('email_user');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tabel_user', ['email_user' => $email_user])->row_array();
        //cek jika user ada
        if ($user) {
                //cek password untuk user
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email_user' => $user['email_user'],
                    ];
                    $this->session->set_userdata($data);
                    redirect('Dashboard');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Wrong Password!</div>');
                    redirect('auth');
                }
            } 
         else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email is not registered!</div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        //ambil inputan di form registration
        $nama = $this->input->post('nama_user', true);
        $email = $this->input->post('email_user', true);
        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        $jk_user = $this->input->post('jk_user', true);
        $telp_user = $this->input->post('telp_user', true);
        $alamat_user = $this->input->post('alamat_user', true);
        $data = [
            'nama_user' => $nama,
            'email_user' => $email,
            'password' => $password,
            'jk_user' => $jk_user,
            'telp_user' => $telp_user,
            'alamat_user' => $alamat_user
        ];
        $this->db->insert('tabel_user', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Congratulations! Your account has been created. Please activate your account!</div>');
        redirect('auth');
    }
}
