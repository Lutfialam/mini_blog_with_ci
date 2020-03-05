<?php

class Bve extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Bve_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'openbve indonesia';
        $data['bve'] = $this->Bve_model->getAllKereta();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('bve/index', $data);
        $this->load->view('templates/footer2');
        $this->load->view('templates/footer');
    }

    public function Detail($id)
    {
        $data['bve'] = $this->Bve_model->getKeretaById($id);
        $data['link'] = $this->Bve_model->getLink($id);
        $this->load->view('templates/navbar');
        $this->load->view('bve/detail', $data);
        $this->load->view('templates/footer2');
        $this->load->view('templates/footer');
    }
}