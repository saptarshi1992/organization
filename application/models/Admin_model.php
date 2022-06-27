<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }
    public function login($username, $password)
    {
        $this->db->where('admin_name', $username);
        $this->db->where('admin_password', $password);

        $query = $this->db->get('admin');

        if ($query->num_rows() == 1) {
            return $query->row(0)->admin_id;
        } else {
            return false;
        }
    }
}
