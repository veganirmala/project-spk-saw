<?php

class User_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getEmail()
    {
        return $this->db->get_where('tabel_user', ['email_user' => $this->session->userdata('email_user')])->row_array();
    }

    public function getUser()
    {
        $query = "SELECT * FROM tabel_user
        ORDER BY id_user ASC";
        return $this->db->query($query)->result_array();
    }

    public function getUserById($id)
    {
        return $this->db->get_where('tabel_user', ['id_user' => $id])->row_array();
    }

    public function addUser()
    {
        $nama = $this->input->post('nama_user', true);
        $email = $this->input->post('email_user', true);
        //$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        $password =$this->input->post('password', true);
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
    }

    public function updateUser()
    {
        $id_user = $this->input->post('id_user', true);
        $nama = $this->input->post('nama_user', true);
        $email = $this->input->post('email_user', true);
        $password = $this->input->post('password'); 
        $jk_user = $this->input->post('jk_user', true);
        $telp_user = $this->input->post('telp_user', true);
        $alamat_user = $this->input->post('alamat_user', true);

        if ($password == '') {
            $data = [
                'nama_user' => $nama,
                'email_user' => $email,
                'jk_user' => $jk_user,
                'telp_user' => $telp_user,
                'alamat_user' => $alamat_user
            ];
        } else {
            $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            $data = [
                'nama_user' => $nama,
                'email_user' => $email,
                'password' => $password,
                'jk_user' => $jk_user,
                'telp_user' => $telp_user,
                'alamat_user' => $alamat_user
            ];
        }
        $this->db->where('id_user', $id_user);
        $this->db->update('tabel_user', $data);
    }

    public function deleteUser($id)
    {
        $this->db->delete('tabel_user', ['id_user' => $id]);
    }
}
