<?php 

class Dataset_model extends CI_Model {
    
    public function form_validation()
	{
        $this->form_validation->set_rules('nama_dataset','Nama Data','trim|required');
        if ($this->form_validation->run() != false) {
            if (empty($this->input->post('id_dataset'))) {
            	$this->tambahDataset($this->input->post());
            }else{
            	$this->editDataset($this->input->post());
            }
        }
	}

    public function uploadFile()
	{
        if (!empty($_FILES['gambar_dataset']['name'])) {
            $filename = date('d-m-Y');
            $config['upload_path']          = FCPATH.'/assets_web_profile/img/dataset/';
            $config['allowed_types']        = 'jpg|png|jpeg';
            $config['max_size']             = 2048;
            $config['file_name']             = substr(md5($filename), 0, 100);
            // $config['max_width']            = 10000;
            // $config['max_height']           = 10000;
    
    
            $this->load->library('upload', $config);
            
            if ($this->upload->do_upload('gambar_dataset')){
                $data = array('upload_data' => $this->upload->data());
                return $data['upload_data']['file_name'];
            }
        }
        return "";
	}

    public function tambahDataset($dataset)
    {
        if (is_null($this->getKodeData($dataset['kode_dataset'], null))) {
            $data['gambar_dataset'] = $this->uploadFile();
            $this->db->insert('tbl_dataset', $dataset);
            $this->session->set_flashdata('alert', 'swal("Berhasil Di Tambahkan!", {
                icon: "success",
            });');
        }else{
            $this->session->set_flashdata('alert', 'swal("Gagal, Kode Data Sudah Ada!", {
                icon: "error",
            });');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function getKodeData($kode_dataset, $id_dataset)
    {
        return $this->db->get_where('tbl_dataset', ['kode_dataset' => $kode_dataset, 'id_dataset !=' => $id_dataset])->row_array();
    }
    
    public function editDataset($dataset)
    {
        $id_dataset = $dataset['id_dataset'];
        unset($dataset['id_dataset']);
        $dataCek['id_dataset'] = $id_dataset;
        if (isset($dataset['kode_dataset'])) {
            $dataCek = $this->getKodeData($dataset['kode_dataset'], $id_dataset);
        }
        if ($dataCek['id_dataset'] == null) {
            $data['gambar_dataset'] = $this->uploadFile();
            if (!empty($data['gambar_dataset'])) {
                $dataToEdit = $this->getDetail($id_dataset);
                $arrayData = explode('/', $dataToEdit['gambar_dataset']);
                unlink(FCPATH.'/assets_web_profile/img/dataset/'.$arrayData[count($arrayData) - 1]);
            }
            $this->db->set($data);
            $this->db->where('id_dataset', $id_dataset);
            $this->db->update('tbl_dataset');
            $this->session->set_flashdata('alert', 'swal("Berhasil Di Ubah!", {
                icon: "success",
            });');
        }else{
            $this->session->set_flashdata('alert', 'swal("Gagal, Kode Data Sudah Ada!", {
                icon: "error",
            });');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function getAllDataset()
    {
        $this->db->from('tbl_dataset');
        return $this->db->get()->result_array();
    }

    public function getDetail($id_dataset)
    {
        $this->db->from('tbl_dataset');
        $this->db->where('id_dataset', $id_dataset);
        $dataset = $this->db->get()->row_array();
        if (!empty($dataset['gambar_dataset'])) {
            $dataset['gambar_dataset'] = base_url('assets_web_profile/img/dataset/'.$dataset['gambar_dataset']);
        }else{
            $dataset['gambar_dataset'] = base_url('assets_web_profile/img/uploads.jpg');
        }
        return $dataset;
    }

    public function delete($id_dataset)
    {
        $dataset = $this->getDetail($id_dataset);
        $arrayData = explode('/', $dataset['gambar_dataset']);
        if ($arrayData[count($arrayData) - 1] != base_url('assets_web_profile/img/uploads.jpg')) {
            unlink(FCPATH.'/assets_web_profile/img/dataset/'.$arrayData[count($arrayData) - 1]);
        }
        $this->db->delete('tbl_dataset', ['id_dataset' => $id_dataset]);
    }

}