<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends CI_Controller {

    public function index() {
        $this->load->view('kasir_view');
    }

    public function proses_pembayaran() {
        $data['barang'] = $this->input->post('barang');
        $data['total'] = $this->input->post('total');
        $data['bayar'] = $this->input->post('bayar');
        $data['kembali'] = $data['bayar'] - $data['total'];

        $this->load->view('kasir_view', $data);
    }

}
