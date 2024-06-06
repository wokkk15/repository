<?php

class Subjek_admin extends CI_Controller{
    public function index()
    {
        $data['tabel'] = $this->model_table->tampil_data()->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/subjek', $data);
        $this->load->view('template_admin/footer');
    }
}