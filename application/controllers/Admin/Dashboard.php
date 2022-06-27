<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function index()
	{
		if (!$this->session->userdata('user_login_status')) {
			redirect('admin/admin_login', 'refresh');
		} else {
			$data['employee_record'] = $this->Employee_model->get_record();
			$this->template->load('admin', 'default', 'dashboard', $data);
		}
	}
}
