<?php

class Dashboard_admin extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        // Memuat model yang diperlukan
        $this->load->model('Model_tesis');
        $this->load->model('Model_jurnal');
        $this->load->model('Model_skripsi');
        $this->load->model('Model_proceeding');
    }

    public function index()
    {
        $data['tesis'] = $this->Model_tesis->tesis();
        $data['jurnal'] = $this->Model_jurnal->jurnal();
        $data['skripsi'] = $this->Model_skripsi->skripsi();
        $data['proceeding'] = $this->Model_proceeding->proceeding();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('template_admin/footer');
    }
}
?>
