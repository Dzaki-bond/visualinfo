<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chart extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'diagram brand kendaraan';
        $data['motor'] = $this->db->get('motor')->result_array();

        $this->load->view('chart', $data);
    }
}