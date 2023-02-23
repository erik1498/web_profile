<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
    public function index($page_index = 0, $kategori = "", $search = "")
    {
        $search = str_replace("%20", " ", $search);
        $count = $this->Blog_model->getCount($search, $kategori);
        $data['judul'] = 'Artikel';
        $data['sidebar'] = 'Blog';

        $limitJum = strval($count / 3);
        $plus = count(explode('.', $limitJum)) > 1 ? 1 : 0;
        $page_count = $plus + floor($limitJum);

        $limit = 3;
        $data['artikel'] = $this->Blog_model->getAllData($limit, $limit * $page_index, $kategori, $search);

        $data['artikel_recent'] = $this->Blog_model->getAllData(3, 0, "", "");
                
        $data['kategori'] = $this->Blog_model->getAllKategori();
        $data['page'] = $page_count;
        $data['page_index'] = $page_index;

        $this->load->view('Template/header_inject', $data);
        $this->load->view('Template/header', $data);
        $this->load->view('Profile/blog', $data);
        $this->load->view('Template/footer', $data);
        $this->load->view('Template/footer_inject', $data);
    }
}