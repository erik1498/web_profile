<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {
    public function index()
    {
        $data['judul'] = 'Layanan';
        $data['sidebar'] = 'Services';
        $this->load->view('Template/header_inject', $data);
        $this->load->view('Template/header', $data);
        $this->load->view('Profile/services', $data);
        $this->load->view('Template/footer', $data);
        $this->load->view('Template/footer_inject', $data);
    }
}