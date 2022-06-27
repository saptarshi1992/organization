<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gender_model extends CI_Model {
	
	public function __construct()
	{
		$this->load->database();
	}
    public function fetch_gender()
	{  

		$query = $this->db->get('gender');
    
		return $query->result_array();
		
	}
}