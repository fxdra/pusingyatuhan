<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get_products()
    {
        return $this->db->get('products')->result_array();
    }

    public function get_product_by_id($id)
    {
        return $this->db->get_where('products', ['id' => $id])->row_array();
    }

    public function insert_product($data)
    {
        return $this->db->insert('products', $data);
    }

    public function update_product($id, $data)
    {
        return $this->db->where('id', $id)->update('products', $data);
    }

    public function delete_product($id)
    {
        return $this->db->where('id', $id)->delete('products');
    }
}
