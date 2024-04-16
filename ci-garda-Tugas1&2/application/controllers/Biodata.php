<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        // Data untuk ditampilkan di view
        $data['nama'] = 'Gias Garda Pamungkas';
        $data['nim'] = 'STI202102533';
        $data['alamat'] = 'Purbalingga';
        $data['pekerjaan'] = 'Mahasiswa';
        $data['email'] = 'Giasgardapamungkas@gmail.com';
        $data['no_hp'] = '0895377116047'; // Mengganti Telepon menjadi NoHP

        // Load view biodata_view.php
        $this->load->view('biodata_view', $data);
    }
}