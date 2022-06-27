<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employee extends CI_Controller
{

    public function index()
    {
        $this->load->view('employee');
    }
    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('employee');
        } else {
            $password = $this->input->post('password');
            $username = $this->input->post('username');

            $employee_id = $this->Employee_model->login($username, $password);
            $get_emp_info = $this->Employee_model->fetch($employee_id);
            $data['employee_data'] = $get_emp_info;

            if ($employee_id) {
                $employee_data = array(
                    'username' => $username,
                    'user_id' => $employee_id,
                    'user_login_status' => true
                );
                $this->session->set_userdata($employee_data);

                $this->session->set_flashdata('employee_login', 'Welcome in Organization');

                $this->load->view('employee_view', $data);
            } else {
                $this->session->set_flashdata('emp_login_fail', 'check your username and password');

                redirect('employee', 'refresh');
            }
        }
    }
    public function logout()
    {

        $this->session->unset_userdata('user_login_status');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');

        $this->session->set_flashdata('emp_logout', 'You Logout from organization');

        redirect('employee', 'refresh');
    }
}
