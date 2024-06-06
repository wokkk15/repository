<?php

class Repository_admin extends CI_Controller{
    public function index()
    {
        $data['tabel'] = $this->model_table->tampil_data()->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/repository', $data);
        $this->load->view('template_admin/footer');
    }
}