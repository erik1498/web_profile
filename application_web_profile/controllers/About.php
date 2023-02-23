<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
    public function index()
    {
        $data['judul'] = 'Tentang';
        $data['sidebar'] = 'About';
        $this->load->view('Template/header_inject', $data);
        $this->load->view('Template/header', $data);
        $this->load->view('Profile/about', $data);
        $this->load->view('Template/footer', $data);
        $this->load->view('Template/footer_inject', $data);
    }
}