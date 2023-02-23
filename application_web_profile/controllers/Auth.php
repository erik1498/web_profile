<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username','Username','trim|required');
        $this->form_validation->set_rules('password','Password','trim|required');
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Login Template App';
            $data['sidebar'] = 'Dashboard';
            $this->load->view('Profile/header', $data);
            $this->load->view('Profile/sidebar', $data);
            $this->load->view('Auth/login', $data);
            $this->load->view('Profile/footer',$data);
        }
        else{
            $this->_loginAdmin();
        }
    }
    private function _loginAdmin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->db->from('tbl_admin');
        $this->db->where('tbl_admin.username', $username);
        $user = $this->db->get()->row_array();
        if ($user) {
            if ($user['password'] == md5($password)) {
                $data=[
                    'login_status' => true,
                    'id_admin' => $user['id_admin'],
                    'role' => $user['role'],
                    'nama' => $user['nama_admin'],
                    'gambar' => $user['gambar_admin'],
                    'username' => $user['username'],
                ];
                $this->session->set_userdata($data);
                redirect('Admin');
            }
            else{
                $this->session->set_flashdata('alert', 'swal("Password Salah!", {
                    icon: "warning",
                    timer:1000,
                    button:false
                });');
                redirect('Auth');
            }
        }
        else{
            $this->_loginPeserta();
        }
    }

    private function _loginPeserta()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->db->from('tbl_peserta');
        $this->db->where('tbl_peserta.username', $username);
        $user = $this->db->get()->row_array();
        if ($user) {
            if ($user['password'] == md5($password)) {
                $data=[
                    'login_status' => true,
                    'id_peserta' => $user['id_peserta'],
                    'role' => 2,
                    'nama' => $user['nama_peserta'],
                    'username' => $user['username'],
                ];
                $this->session->set_userdata($data);
                redirect('Peserta');
            }
            else{
                $this->session->set_flashdata('alert', 'swal("Password Salah!", {
                    icon: "warning",
                    timer:1000,
                    button:false
                });');
                redirect('Auth');
            }
        }
        else{
            $this->session->set_flashdata('alert', 'swal("Akun Tidak Terdaftar!", {
                icon: "warning",
                timer:1000,
                button:false
            });');
            redirect('Auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('login_status');
        $this->session->unset_userdata('id_admin');
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('role');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('gambar');
        $this->session->unset_userdata('username');
        redirect('Auth');
    }
}
