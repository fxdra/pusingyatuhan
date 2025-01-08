<?php

class Home extends CI_Controller {
    public function index() {
        $data['title'] = 'Home Page';

        $menu = $this->Menu_model->get_menu_structure();

        $data['content'] = $this->load->view('pages/home', [
            'menu' => $menu,
        ], true); 
        $this->load->view('layouts/home', $data);
    }
}
