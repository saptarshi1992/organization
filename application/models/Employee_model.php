<?php
defined('BASEPATH') or exit('No direct script access allowed');

class employee_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }
    public function get_record()
    {
        $query = $this->db->get('employee');
        return $query->result_array();
    }
    public function create_emp()
    {
        $emp_code = $this->Employee_model->generate_emp_code();
        $name =  $this->input->post('firstname');
        $dob =  $this->input->post('birthdate');
        $year = explode('/', $dob);
        $year = $year[count($year) - 1];
        $username = $name . '@' . $year;
        $this->Employee_model->create_emp_login($username, $emp_code);

        if (!$this->input->post('middlename')) {
            $data = array(
                'emp_firstname' => $this->input->post('firstname'),
                'emp_lastname' => $this->input->post('lastname'),
                'emp_DOB' => $this->input->post('birthdate'),
                'emp_age' => $this->input->post('age'),
                'emp_emailid' => $this->input->post('emailid'),
                'emp_mobilenum' => $this->input->post('mobileno'),
                'emp_gender' => $this->input->post('genders'),
                'emp_code' => $emp_code


            );
        } else {
            $data = array(
                'emp_firstname' => $this->input->post('firstname'),
                'emp_middlename' => $this->input->post('middlename'),
                'emp_lastname' => $this->input->post('lastname'),
                'emp_DOB' => $this->input->post('birthdate'),
                'emp_age' => $this->input->post('age'),
                'emp_emailid' => $this->input->post('emailid'),
                'emp_mobilenum' => $this->input->post('mobileno'),
                'emp_gender' => $this->input->post('genders'),
                'emp_code' => $emp_code


            );
        }
        return $this->db->insert('employee', $data);
    }

    public function create_emp_login($username, $emp_code)
    {
        $password = mt_rand(1000, 9999);
        $password = $username . $password;

        $data = array(
            'emp_code' => $emp_code,
            'emp_username' => $username,
            'emp_password' => $password

        );
        $this->db->insert('emp_login', $data);
    }
    public function generate_emp_code()
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < 3; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        $chrset = $randomString;
        $digits = mt_rand(1000000, 9999999);
        $current_year = date("Y");
        $emp_code = 'WB/EMP/' . $current_year . $chrset . $digits;
        return $emp_code;
    }
    public function fetch_emp_record($emp_id)
    {
        $query = $this->db->get_where('employee', array(
            'emp_id' => $emp_id
        ));
        return $query->row_array();
    }
    public function update_emp_record()
    {
        if (!$this->input->post('middlename')) {
            $data = array(
                'emp_firstname' => $this->input->post('firstname'),
                'emp_lastname' => $this->input->post('lastname'),
                'emp_DOB' => $this->input->post('birthdate'),
                'emp_age' => $this->input->post('age'),
                'emp_emailid' => $this->input->post('emailid'),
                'emp_mobilenum' => $this->input->post('mobileno'),
                'emp_gender' => $this->input->post('genders')
            );
        } else {
            $data = array(
                'emp_firstname' => $this->input->post('firstname'),
                'emp_middlename' => $this->input->post('middlename'),
                'emp_lastname' => $this->input->post('lastname'),
                'emp_DOB' => $this->input->post('birthdate'),
                'emp_age' => $this->input->post('age'),
                'emp_emailid' => $this->input->post('emailid'),
                'emp_mobilenum' => $this->input->post('mobileno'),
                'emp_gender' => $this->input->post('genders')

            );
        }
        $this->db->where('emp_id', $this->input->post('emp_id'));
        return $this->db->update('employee', $data);
    }
    public function get_bar_chart_data()
    {
        $query = $this->db
            ->select('emp_gender, count(emp_id) AS num_of_time')
            ->group_by('emp_gender')
            ->get('employee', 10);
        return $query->result();
    }
    public function login($username, $password)
    {
        $this->db->where('emp_username', $username);
        $this->db->where('emp_password', $password);

        $query = $this->db->get('emp_login');

        if ($query->num_rows() == 1) {
            return $query->row(0)->emp_code;
        } else {
            return false;
        }
    }
    public function fetch($emp_code)
    {
        $query = $this->db->get_where('employee', array(
            'emp_code' => $emp_code
        ));
        return $query->row_array();
    }
}
