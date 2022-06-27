<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barchart extends CI_Controller
{

    public function index()
    {
        $record = $this->Employee_model->get_bar_chart_data();

        foreach ($record as $row) {
            $data['gender'][] = $row->emp_gender;
            $data['num_of_time'][] = (int) $row->num_of_time;
        }
        $data['chart_data'] = json_encode($data);
        $this->load->view('admin/barchart', $data);
    }
}
