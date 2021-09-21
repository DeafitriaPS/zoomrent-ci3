<?php

class Pages extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'RadNext | Jasa Sewa Zoom';
        // $data['stasiun'] = $this->db->get('stasiun')->result_array();
        $this->load->view('layout/header', $data);
        $this->load->view('tamu/home');
        $this->load->view('layout/footer');
    }

    public function contact()
    {
        $data['title'] = 'Contact Us';
        $this->load->view('layout/header', $data);
        $this->load->view('tamu/contact');
        $this->load->view('layout/footer');
    }

    public function about()
    {
        $data['title'] = 'About Us';
        $this->load->view('layout/header', $data);
        $this->load->view('tamu/about');
        $this->load->view('layout/footer');
    }
}
