<?php 

class Blog_model extends CI_Model {
    public function getAllData($limit = 3, $page = 0, $kategori = "", $search = "")
    {
        $this->db->from('tbl_artikel');
        $this->db->join('tbl_kategori_artikel', 'tbl_artikel.kategori = tbl_kategori_artikel.id_kategori');
        if (!empty($kategori) && $kategori != 0) {
            $this->db->where('kategori', $kategori);
        }
        if (!empty($search)) {
            $this->db->like('judul', $search);
        }
        $this->db->limit($limit, $page);
        $this->db->order_by('id_artikel', 'desc');
        return $this->db->get()->result_array();
    }
    
    public function getAllDataNoLimit()
    {
        $this->db->from('tbl_artikel');
        $this->db->join('tbl_kategori_artikel', 'tbl_artikel.kategori = tbl_kategori_artikel.id_kategori');
        return $this->db->get()->result_array();
    }

    public function getDetail($id)
    {
        $this->db->from('tbl_artikel');
        $this->db->join('tbl_kategori_artikel', 'tbl_artikel.kategori = tbl_kategori_artikel.id_kategori');
        $this->db->where('id_artikel', $id);
        return $this->db->get()->row_array();
    }

    public function getAllKategori()
    {
        return $this->db->get('tbl_kategori_artikel')->result_array();
    }

    public function getCount($search, $kategori)
    {
        $this->db->select('count(*)');
        if (!empty($kategori) && $kategori != 0) {
            $this->db->where('kategori', $kategori);
        }
        if (!empty($search)) {
            $this->db->like('judul', $search);
        }
        $query = $this->db->get('tbl_artikel');
        $cnt = $query->row_array();
        return $cnt['count(*)'];
    }
}