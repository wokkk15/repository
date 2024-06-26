<?php

class Dashboard_user extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('model_table');
        $this->load->helper(array('form', 'url'));
    }

    public function index() {
        $data['tabel'] = $this->model_table->tampil_data()->result();
        $this->load->view('user/dashboard',$data);
    }

    public function tambah_aksi() { 
        $jenis  = $this->input->post('jenis');
        $judul  = $this->input->post('judul');
        $abstrak  = $this->input->post('abstrak');
        $penulis  = $this->input->post('penulis');
        $jurusan  = $this->input->post('jurusan');
        $keyword  = $this->input->post('keyword');
        $file     = $_FILES['file'];

        // Pastikan direktori upload ada dan dapat ditulisi
        $upload_path = './uploads/file/';
        if (!is_dir($upload_path) || !is_writable($upload_path)) {
            echo "Upload Gagal: Jalur unggahan tampaknya tidak valid.";
            return;
        }

        if (!empty($file['name'])) {
            $config['upload_path']          = $upload_path;
            $config['allowed_types']        = 'pdf';
            $config['max_size']             = 0;
            $config['encrypt_name']         = TRUE;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);


            if (!$this->upload->do_upload('file')) {
                $error = $this->upload->display_errors();
                echo "Upload Gagal: " . $error;
                return;
            } else {
                $file_data = $this->upload->data();
                $file_name = $file_data['file_name'];
            }
        } else {
            $file_name = null;
        }
        
        $data = array(
            'jenis'     => $jenis,
            'judul'     => $judul,
            'abstrak'   => $abstrak,
            'penulis'   => $penulis,
            'jurusan'   => $jurusan,
            'keyword'   => $keyword,
            'file'      => $file_name,
            'status'    => 'Pending',
        );
        // $this->model_table->tambah($data, 'tabel');
        $this->model_table->insert_file($data);
        redirect('user/dashboard_user');
    }
}
