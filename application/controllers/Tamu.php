<?php

class Tamu extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'RadNext | Jasa Sewa Zoom';
        // $data['stasiun'] = $this->db->get('stasiun')->result_array();
        $this->load->view('layout/header', $data);
        $this->load->view('tamu/home');
        $this->load->view('layout/footer');
    }

    public function formpesan()
    {
        $data['title'] = 'Contact Us';
        $this->load->view('layout/header', $data);
        $this->load->view('tamu/formpesan');
        $this->load->view('layout/footer');
    }
}
