<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    // Register User
    public function register()
    {
        if ($this->session->userdata('is_logged_in')) {
            if($this->session->userdata('role') == 'admin') {
                redirect('admin/dashboard');
            }

            redirect('login');
        }

        if ($this->input->post()) {
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

            if ($this->form_validation->run() == TRUE) {
                $data = [
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                    'role' => 'customer',
                ];

                if ($this->User_model->insert_user($data)) {
                    $this->session->set_flashdata('success', 'Registration successful. You can now log in.');
                    redirect('auth/login');
                } else {
                    $this->session->set_flashdata('error', 'Failed to register. Please try again.');
                }
            }

            redirect('login');
        }

        $data['title'] = 'Register Page';

        $menu = $this->Menu_model->get_menu_structure();

        $data['content'] = $this->load->view('pages/register', array_merge($data, [
            'menu' => $menu,
        ]), true);  
        $this->load->view('layouts/main', $data);
    }

    // Login User
    public function login()
    {
        if ($this->session->userdata('is_logged_in')) {
            if($this->session->userdata('role') == 'admin') {
                redirect('admin/dashboard');
            }

            redirect('login');
        }

        if ($this->input->post()) {
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() == TRUE) {
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $user = $this->User_model->get_user_by_email($email);

                if ($user && password_verify($password, $user['password'])) {
                    $session_data = [
                        'id' => $user['id'],
                        'name' => $user['name'],
                        'email' => $user['email'],
                        'role' => $user['role'],
                        'is_logged_in' => TRUE,
                    ];
                    $this->session->set_userdata($session_data);

                    if($user['role'] == 'admin') {
                        redirect('admin/dashboard');
                    }

                    redirect('my-account'); // Redirect to a dashboard or homepage
                } else {
                    $this->session->set_flashdata('error', 'Invalid email or password.');
                }
            }
        }

        $data['title'] = 'Login Page';

        $menu = $this->Menu_model->get_menu_structure();

        $data['content'] = $this->load->view('pages/login', array_merge($data, [
            'menu' => $menu,
        ]), true); 
        $this->load->view('layouts/main', $data);
    }

    // Logout User
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
