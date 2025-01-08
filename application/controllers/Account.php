<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
    public function index() {
        if (!$this->session->userdata('is_logged_in')) {
            if($this->session->userdata('role') == 'admin') {
                redirect('admin/account');
            }

            redirect('login');
        }

        $data['title'] = 'My Account';

        $menu = $this->Menu_model->get_menu_structure();

        $id = $this->session->userdata('id');
        $user = $this->User_model->get_user_by_id($id);

        $data['content'] = $this->load->view('pages/my-account', array_merge($data, [
            'menu' => $menu,
            'user' => $user,
        ]), true); 
        $this->load->view('layouts/main', $data);
    }
}