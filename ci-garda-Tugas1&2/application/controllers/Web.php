<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Web extends CI_Controller
{
    function construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index()
    {
        $data['judul'] = "Halaman Home";
        $this->load->view('v_header', $data);
        $this->load->view('v_index', $data);
        $this->load->view('v_footer', $data);
    }

    public function about()
    {
        $data['judul'] = "Tentang Kami (About)";
        $this->load->view('v_header', $data);
        $this->load->view('v_about', $data);
        $this->load->view('v_footer', $data);
    }

    public function produk()
    {
        $data['judul'] = "Toko Online";
        $this->load->view('v_header', $data);
        $this->load->view('v_produk', $data);
        $this->load->view('v_footer', $data);
    }

    public function keranjang()
    {
        $data['judul'] = "Keranjang Belanja";
        $this->load->view('v_header', $data);
        $this->load->view('v_keranjang', $data);
        $this->load->view('v_footer', $data);
    }
}
