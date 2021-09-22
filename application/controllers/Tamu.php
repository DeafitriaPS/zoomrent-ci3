<?php

class Tamu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('TamuModel');
        $this->load->helper('form');
    }

    public function index()
    {
        $data['title'] = 'RadNext | Jasa Sewa Zoom';
        $this->load->view('layout/header', $data);
        $this->load->view('tamu/home');
        $this->load->view('layout/footer');
    }

    public function formpesan()
    {
        $data['title'] = 'Pesan Paket Zoom';
        $data['pemesanan'] = $this->db->get('pemesanan')->result_array();
        $this->load->view('layout/header', $data);
        $this->load->view('tamu/formpesan');
        $this->load->view('layout/footer');
    }

    public function pesan()
    {
        $idPesan = $this->input->post('id_pesan');
        $harga = $this->input->post('harga');

        // Generate no pembayaran
        $cekPembayaran = $this->TamuModel->countPembayaran() + 1;
        $noPembayaran = 'P' . date('dmY') . $cekPembayaran;
        $totalPembayaran = $harga;

        // Input Pembayaran
        // Generate no tiket
        // $cek = $this->TamuModel->countTiket() + 1;
        // $noTiket = 'T00'.$cek;
        $this->TamuModel->tambahDataPembayaran($noPembayaran, $totalPembayaran, $idPesan);

        // Input Detail Pemesan/Tiket
        // $this->TamuModel->tambahDataTiket($idPesan, $noTiket);
        $this->session->set_flashdata('kode', $noPembayaran);
        $this->session->set_flashdata('total', $totalPembayaran);
        redirect('pembayaran', $totalPembayaran);
    }
}
