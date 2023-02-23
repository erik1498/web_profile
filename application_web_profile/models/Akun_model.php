<?php 

class Akun_model extends CI_Model {

    public function form_validation()
    {
        $this->form_validation->set_rules('username','Username','trim|required');
        if ($this->form_validation->run() != false) {
            $this->editAkun($this->input->post());
        }
    }

    private function cekUsername($tbl, $username, $redirect, $id, $id_field)
    {
        $cek = $this->db->get_where($tbl, ['username' => $username])->row_array();
        if (!is_null($cek) && $id != $cek[$id_field]) {
            $this->session->set_flashdata('alert', 'swal("Username Sudah Terdaftar!", {
                icon: "warning",
                timer:1000,
                button:false
            });');
            redirect($redirect);
        }
        return true;
    }

    public function uploadFile()
	{
        if (!empty($_FILES['gambar_admin']['name'])) {
            $filename = date('d-m-Y H:i:s');
            $config['upload_path']          = FCPATH.'/assets_web_profile/img/admin/';
            $config['allowed_types']        = 'jpg|png|jpeg';
            $config['max_size']             = 2048;
            $config['file_name']             = substr(md5($filename), 0, 100);
            // $config['max_width']            = 10000;
            // $config['max_height']           = 10000;
    
    
            $this->load->library('upload', $config);
            
            if ($this->upload->do_upload('gambar_admin')){
                $data = array('upload_data' => $this->upload->data());
                return $data['upload_data']['file_name'];
            }
        }
        return "";
	}

    public function editAkun($data)
    {
        $this->cekUsername('tbl_admin', $data['username'], 'Admin/akun_saya', $this->session->userdata('id_admin'), 'id_admin');
        $this->db->set('username', $data['username']);
        $data_gambar = $this->uploadFile();
        if (!empty($data_gambar)) {
            $this->deleteProfileAdmin();
            $this->db->set('gambar_admin', $data_gambar);
            $this->session->set_userdata('gambar', $data_gambar);
        }
        if (!empty($data['password'])) {
            $this->db->set('password', md5($data['password']));
        }
        $this->db->where('id_admin', $this->session->userdata('id_admin'));
        $this->db->update('tbl_admin');
        $this->session->set_userdata('username', $data['username']);
        $this->session->set_flashdata('alert', 'swal("Berhasil Di Ubah!", {
            icon: "success",
        });');
        redirect('Admin/akun_saya');
    }

    public function deleteProfileAdmin()
    {
        $id_admin = $this->session->userdata('id_admin');
        $data = $this->getData($id_admin);
        if ($data['gambar_admin'] != base_url('assets_web_profile/img/admin/AdminLTELogo.png')) {
            $arrayDeleteProfile = explode('/', $data['gambar_admin']);
            unlink(FCPATH.'/assets_web_profile/img/admin/'.$arrayDeleteProfile[count($arrayDeleteProfile) - 1]);
        }
    }

    public function getData($id_admin)
    {
        $this->db->from('tbl_admin');
        $this->db->where('id_admin', $id_admin);
        $data = $this->db->get()->row_array();
        if (!empty($data['gambar_admin'])) {
            $data['gambar_admin'] = base_url('assets_web_profile/img/admin/'.$data['gambar_admin']);
        }else{
            $data['gambar_admin'] = base_url('assets_web_profile/img/admin/AdminLTELogo.png');
        }
        return $data;
    }
}