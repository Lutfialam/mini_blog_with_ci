<?php

class Login extends CI_Controller {
    public function index()
    {
        $data['judul'] = 'Login';
        $this->load->view('templates/header', $data);
        $this->load->view('login/index');
        $this->load->view('templates/footer');
    }

    public function registrasi()
    {
        $data['judul'] = 'registrasi';
        $this->load->view('templates/header', $data);
        $this->load->view('login/registrasi');
        $this->load->view('templates/footer');
    }

}
