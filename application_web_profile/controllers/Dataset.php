<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataset extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if ($this->session->userdata('login_status') == false) {
            redirect('Auth/logout');
        }
    }

    public function index()
    {
        $this->Dataset_model->form_validation();
        $data['judul'] = 'Dataset';
        $data['sidebar'] = 'Master';
        $data['datashow'] = $this->Dataset_model->getAllDataset();
        $this->load->view('Template/header', $data);
        $this->load->view('Template/sidebar', $data);
        $this->load->view('Admin/Master/dataset', $data);
        $this->load->view('Template/footer',$data);
    }

    public function getDetail($id_dataset)
    {
        echo json_encode($this->Dataset_model->getDetail($id_dataset));
    }

    public function delete($id_dataset)
    {
        $this->Dataset_model->delete($id_dataset);
    }

}