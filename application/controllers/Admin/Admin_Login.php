<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_login extends CI_Controller
{

    public function index()
    {
        $this->load->view('admin/admin_login');
    }
    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/admin_login');
        } else {
            $password = $this->input->post('password');
            $username = $this->input->post('username');

            $admin_id = $this->Admin_model->login($username, $password);

            if ($admin_id) {
                $admin_data = array(
                    'username' => $username,
                    'user_id' => $admin_id,
                    'user_login_status' => true
                );
                $this->session->set_userdata($admin_data);

                $this->session->set_flashdata('admin_login', 'Welcome in Organization');

                redirect('admin', 'refresh');
            } else {
                $this->session->set_flashdata('admin_login_fail', 'check your username and password');

                redirect('admin/admin_login', 'refresh');
            }
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('user_login_status');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');

        $this->session->set_flashdata('admin_logout', 'You Logout from organization');

        redirect('admin/admin_login', 'refresh');
    }
}
