<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        if( $this->session->userdata('email') ) {
            redirect('home');
        }

        $this->form_validation->set_rules('email' , 'Email' , 'trim|required|valid_email');
        $this->form_validation->set_rules('password' , 'Password' , 'trim|required');

        if($this->form_validation->run() == false ) {
            $data['judul'] = 'Login';
            $this->load->view('templates/header', $data);
            $this->load->view('auth/index');
            $this->load->view('templates/footer');
        } else {
            $this->_login();
        }
        
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if($user) {
            if($user['is_active'] == 1) {
                if(password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if($user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('home');
                    }
                } else {
                    $this->session->set_flashdata('message', '<script>alert("wrong password!");</script>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<script>alert("email not registered!");</script>');
                redirect('auth');
            }

        } else {
            $this->session->set_flashdata('message', '<script>alert("this email has not activated!");</script>');
            redirect('auth');
        }
    }

    public function registrasi()
    {
        if( $this->session->userdata('email') ) {
            redirect('home');
        }
        
        $this->form_validation->set_rules('nama' , 'Nama' , 'required|trim');
        $this->form_validation->set_rules('email' , 'Email' , 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'this email has already registered!'
        ]);
        $this->form_validation->set_rules('password' , 'Password' , 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'password dont match!',
            'min_length' => 'password too short!'
        ]);
        $this->form_validation->set_rules('password2' , 'Password' , 'required|trim|matches[password]');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'registrasi';
            $this->load->view('templates/header', $data);
            $this->load->view('auth/registrasi');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<script>alert("selamat akun anda telah terdaftar!");</script>');
            redirect('auth');
        }
        
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<script>alert("anda telah logout!");</script>');
        redirect('home');
    }

}