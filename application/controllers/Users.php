<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['users'] = $this->User_model->get_users();
        $this->load->view('users/index', $data);
    }

    public function view($id)
    {
        $data['user'] = $this->User_model->get_user_by_id($id);
        $this->load->view('users/view', $data);
    }

    public function create()
    {
        if ($this->input->post()) {
            $data = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'phone' => $this->input->post('phone'),
                'address' => $this->input->post('address'),
                'role' => $this->input->post('role'),
            ];
            $this->User_model->insert_user($data);
            redirect('users');
        }
        $this->load->view('users/create');
    }

    public function edit($id)
    {
        if ($this->input->post()) {
            $data = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'address' => $this->input->post('address'),
                'role' => $this->input->post('role'),
            ];
            $this->User_model->update_user($id, $data);
            redirect('users');
        }
        $data['user'] = $this->User_model->get_user_by_id($id);
        $this->load->view('users/edit', $data);
    }

    public function delete($id)
    {
        $this->User_model->delete_user($id);
        redirect('users');
    }
}
