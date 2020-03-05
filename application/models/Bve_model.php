<?php

class Bve_model extends CI_Model{
    public function getAllKereta()
    {
        return $this->db->get('bve')->result_array();
    }

    public function getAllroute()
    {
        return $this->db->get('route')->result_array();
    }
    
    public function getAllwebdev()
    {
        return $this->db->get('webdev')->result_array();
    }

    // public function getlink($id)
    // {
    //     return $this->db->get_where('bve', ['id' => $id])->row_array();
    //     return $this->db->get_where('user')->row_array();
    // }

    public function getKeretaById($id)
    {
        return $this->db->get_where('bve', ['id' => $id])->row_array();
    }

    
    public function tambahdata()
    {
        $uploadImage = $_FILES['gambar']['name'];

        if ( $uploadImage ) {
            $config['upload_path']          = './img/gambar/';
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['max_size']             = 5000;

            $this->load->library('upload', $config);

            if ( $this->upload->do_upload('gambar') ) {
                $newImage = $this->upload->data('file_name');
                $this->db->set('gambar', $newImage);
            } else {
                $error = array('error' => $this->upload->display_errors());
            }
        }

        $data = [
            "Title" => $this->input->post('Title', true),
            "jenis" => $this->input->post('jenis', true),
            "link" => $this->input->post('link', true),
            "deskripsi" => $this->input->post('deskripsi', true)
        ];

        $this->db->insert('bve', $data);
        $this->session->set_flashdata('message', '<script>alert("data berhasil di tambah!");</script>');
        redirect('admin');

    }

    public function upload() 
    {

        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];

        if ( $error == 4 ) {
            echo 'pilih gambar dulu mhamank';
            return false;
        }

        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
            echo 'file yang anda upload bukan gambar';
            return false;
        }

        move_uploaded_file($tmpName, base_url('img/') . $namaFile);

        return $namaFile;

    }
    
    public function ubahdata()
    {
        $data = [
            "jenis" => $this->input->post('jenis', true),
            "gambar" => $this->input->post('gambar', true),
            "link" => $this->input->post('link', true),
            "deskripsi" => $this->input->post('deskripsi', true)
        ];

        $this->db->replace('bve', $data);
        $this->session->set_flashdata('message', '<script>alert("data berhasil di tambah!");</script>');
        redirect('admin');
    }

    public function hapusKereta($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('bve');

        $this->session->set_flashdata('message', '<script>alert("data berhasil di hapus!");</script>');
    }

    public function getLink($id)
    {
        if ( !$this->session->userdata('email') ) {
            echo '<script>alert("jika mau mendownload anda harus login terlebih dahulu");</script>';
        } else {
            echo $this->db->get_where('bve', 'link')->row_array();
        }
    }

    private function _uploadImage()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']     = '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';

        $this->load->library('upload', $config);

        if ( $this->upload->do_upload('image') ) {
            return $this->upload->data('file_name');
        }

        return "default.jpg";
    }
}
