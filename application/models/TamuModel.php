<?php

class TamuModel extends CI_Model
{
    public function tambahDataPesanan($idPesan, $noPembayaran)
    {
        $data = [
            'no_pembayaran' => $noPembayaran,
            'id_pesan' => $idPesan,
            'email' => html_escape($this->input->post('email', true)),
            'nama' => html_escape($this->input->post('nama', true)),
            'instansi' => html_escape($this->input->post('instansi', true)),
            'alamat' => html_escape($this->input->post('alamat', true)),
            'telp' => html_escape($this->input->post('telp', true)),
            'tgl_sewa' => date('Y-m-d')
        ];

        $this->db->insert('kode', $data);
    }

    public function tambahDataPembayaran($noPembayaran, $totalPembayaran, $idPesan)
    {
        $data = [
            'no_pembayaran' => $noPembayaran,
            'id_pesan' => $idPesan,
            'total_pembayaran' => $totalPembayaran,
            'status' => '0'
        ];

        $this->db->insert('pembayaran', $data);
    }
}
