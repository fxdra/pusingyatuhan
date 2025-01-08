<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function index()
    {
        $data['products'] = $this->Product_model->get_products();
        $this->load->view('products/index', $data);
    }

    public function view($id)
    {
        $data['product'] = $this->Product_model->get_product_by_id($id);
        $this->load->view('products/view', $data);
    }

    public function create()
    {
        if ($this->input->post()) {
            $data = [
                'name' => $this->input->post('name'),
                'slug' => $this->input->post('slug'),
                'description' => $this->input->post('description'),
                'price' => $this->input->post('price'),
                'stock' => $this->input->post('stock'),
                'category_id' => $this->input->post('category_id'),
            ];
            $this->Product_model->insert_product($data);
            redirect('products');
        }
        $this->load->view('products/create');
    }

    public function edit($id)
    {
        if ($this->input->post()) {
            $data = [
                'name' => $this->input->post('name'),
                'slug' => $this->input->post('slug'),
                'description' => $this->input->post('description'),
                'price' => $this->input->post('price'),
                'stock' => $this->input->post('stock'),
                'category_id' => $this->input->post('category_id'),
            ];
            $this->Product_model->update_product($id, $data);
            redirect('products');
        }
        $data['product'] = $this->Product_model->get_product_by_id($id);
        $this->load->view('products/edit', $data);
    }

    public function delete($id)
    {
        $this->Product_model->delete_product($id);
        redirect('products');
    }
}
