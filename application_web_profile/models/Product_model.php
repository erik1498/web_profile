<?php 

class Product_model extends CI_Model {
    public function getDetail($id)
    {
        return $this->db->get_where('tbl_product', [
            'id_produk' => $id
        ])->row_array();
    }
}