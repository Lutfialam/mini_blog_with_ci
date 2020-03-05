<?php

class Home extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Bve_model');
    }

    public function index()
    {
        $data['judul'] = 'tempat download openBVE';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/slider');
        $data['bve'] = $this->bve_model->getAllKereta();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer2');
        $this->load->view('templates/footer');
    }
}