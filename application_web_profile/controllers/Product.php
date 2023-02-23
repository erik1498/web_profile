<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
    public function detail($product_id)
    {
        $data['judul'] = 'Produk';
        $data['sidebar'] = 'Product';
        $data['produk'] = $this->Product_model->getDetail($product_id);
        $this->load->view('Template/header_inject', $data);
        $this->load->view('Template/header', $data);
        $this->load->view('Profile/product', $data);
        $this->load->view('Template/footer', $data);
        $this->load->view('Template/footer_inject', $data);
    }
}