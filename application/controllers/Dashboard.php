<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller{
	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'form'));
        //is_logged_in();
        $this->load->model('User_model');
    }

    public function index()
	{
		//ngambil data petugas yang login
        $data['user_email'] = $this->User_model->getEmail();

		$this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
		$this->load->view('dashboard');
        $this->load->view('template/footer');
	}
}
