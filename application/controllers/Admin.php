<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('bve_model');
        $this->load->library('form_validation');

        if( $this->session->userdata('role_id') != 1 ) {
            redirect('access');
        }
    }

    public function index()
    {
        $data['judul'] = 'openbve';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $data['bve'] = $this->bve_model->getAllKereta();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer2');
        $this->load->view('templates/footer');
    }

    
    public function addons()
    {
        $data['judul'] = 'addons';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $data['bve'] = $this->bve_model->getAllKereta();
        $this->load->view('admin/addons', $data);
        $this->load->view('templates/footer2');
        $this->load->view('templates/footer');
    }
    
    public function route()
    {
        $data['judul'] = 'route';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $data['route'] = $this->bve_model->getAllroute();
        $this->load->view('admin/route', $data);
        $this->load->view('templates/footer2');
        $this->load->view('templates/footer');
    }
    
    public function webdev()
    {
        $data['judul'] = 'webdev';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $data['webdev'] = $this->bve_model->getAllKereta();
        $this->load->view('admin/webdev', $data);
        $this->load->view('templates/footer2');
        $this->load->view('templates/footer');
    }
    
    public function tambahdata()
    {
        $data['judul'] = 'tambah data';

        $this->form_validation->set_rules('Title' , 'Title' , 'required');
        $this->form_validation->set_rules('jenis' , 'Jenis' , 'required');
        $this->form_validation->set_rules('link' , 'Link' , 'required');
        $this->form_validation->set_rules('deskripsi' , 'Deskripsi' , 'required');
        
        if($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('admin/tambahdata');
            $this->load->view('templates/footer2');
            $this->load->view('templates/footer');
        } else {
            $this->bve_model->tambahdata();
        }
        
        $this->session->set_flashdata('message', '<script>alert("data berhasil di tambahkan!");</script>');
    }

    public function ubahdata()
    {
        $data['judul'] = 'ubah data';
        
        $this->form_validation->set_rules('jenis' , 'Jenis' , 'required');
        $this->form_validation->set_rules('gambar' , 'Gambar' , 'required');
        $this->form_validation->set_rules('link' , 'Link' , 'required');
        $this->form_validation->set_rules('deskripsi' , 'Deskripsi' , 'required');
        
        if($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('admin/tambahdata');
            $this->load->view('templates/footer2');
            $this->load->view('templates/footer');
        } else {
            $this->bve_model->ubahdata();
        }                
    }

    public function hapus($id) 
    {
        $this->bve_model->hapusKereta($id);
        redirect('admin/addons');
    }

    public function ekspordata()
    {
        $data['judul'] = 'ekspor data';
        $this->load->view('templates/header', $data);
        $data['bve'] = $this->bve_model->getAllKereta();
        $this->load->view('admin/ekspor', $data);
        $this->load->view('templates/footer');
    }
}
