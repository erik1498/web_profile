<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function index()
    {
        $data['judul'] = 'Beranda';
        $data['sidebar'] = 'Home';
        $this->load->view('Template/header', $data);
        $this->load->view('Profile/home', $data);
        $this->load->view('Template/footer', $data);
    }
    
    public function blog_detail($id)
    {
        $data['judul'] = 'Artikel';
        $data['sidebar'] = 'Blog';
        $data['artikel'] = $this->Blog_model->getDetail($id);
        $data['artikel_recent'] = $this->Blog_model->getAllData(3, 0, "", "");
        $data['kategori'] = $this->Blog_model->getAllKategori();
        
        $this->load->view('Template/header_inject', $data);
        $this->load->view('Template/header', $data);
        $this->load->view('Profile/blog_detail', $data);
        $this->load->view('Template/footer', $data);
        $this->load->view('Template/footer_inject', $data);
    }
}