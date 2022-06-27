<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employee extends CI_Controller
{

	public function index()
	{
	}
	public function add()
	{
		$data['gender'] =  $this->Gender_model->fetch_gender();
		$this->template->load('admin', 'default', 'employee/add', $data);
	}
	public function create_emp()
	{
		$this->form_validation->set_rules('firstname', 'firstname', 'required');
		$this->form_validation->set_rules('lastname', 'lastname', 'required');
		$this->form_validation->set_rules('birthdate', 'birthdate', 'required');
		$this->form_validation->set_rules('emailid', 'emailid', 'required');
		$this->form_validation->set_rules('mobileno', 'mobileno', 'required');
		if ($this->form_validation->run() === FALSE) {
			$data['gender'] =  $this->Gender_model->fetch_gender();
			$this->template->load('admin', 'default', 'employee/add', $data);
		} else {
			$this->Employee_model->create_emp();
			$this->session->set_flashdata('employee_created', 'you created a new employee in organization');
			redirect('admin', 'refresh');
		}
	}
	public function edit($emp_code)
	{
		$data['emp_data'] = $this->Employee_model->fetch_emp_record($emp_code);

		$data['gender'] =  $this->Gender_model->fetch_gender();

		if (empty($data['emp_data'])) {
			show_404();
		}

		$data['title'] = 'Update Employee  Data';
		$this->template->load('admin', 'default', 'employee/edit', $data);
	}
	public function edit_submit_post()
	{
		$this->Employee_model->update_emp_record();

		redirect('admin', 'refresh');
	}
}
