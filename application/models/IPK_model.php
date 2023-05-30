<?php

class IPK_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getIPK()
    {
        $query = "SELECT * FROM tabel_ipk
                ORDER BY id_ipk ASC";
        return $this->db->query($query)->result_array();
    }

    public function addIPK()
    {
        $nim = $this->input->post('nim');
        $ipk = $this->input->post('ipk');
        $data = [
            'nim' => $nim,
            'ipk' => $ipk
        ];
        $this->db->insert('tabel_ipk', $data);
    }

    public function getIPKById($id)
    {
        $query = "SELECT * FROM tabel_ipk
        WHERE id_ipk = $id";

        return $this->db->query($query)->row_array();
    }

    public function updateIPK()
    {
        $id_ipk = $this->input->post('id_ipk', true);
        $nim = $this->input->post('nim');
        $ipk = $this->input->post('ipk');
        $data = [
            'nim' => $nim,
            'ipk' => $ipk
        ];
        $this->db->where('id_ipk', $id_ipk);
        $this->db->update('tabel_ipk', $data);
    }

    public function deleteIPK($id)
    {
        $this->db->delete('tabel_ipk', ['id_ipk' => $id]);
    }
}
