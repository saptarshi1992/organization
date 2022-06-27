<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

	public function index()
	{
		$data['gender'] =  $this->gender_model->fetch_gender();
        $this->load->view("admin/employee/add",$data);

	}
	
}