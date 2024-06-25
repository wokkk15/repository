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

    public function hapus ($id)
    {
        $where = array('id' => $id);
        $this->model_table->hapus_data($where, 'tabel');
        redirect('admin/repository_admin/index');
    }


    public function detail($file) {
        $file_path = FCPATH . 'uploads/file/' . $file;

        if (file_exists($file_path)) {
            header('Content-Type: application/pdf');
            header('Content-Disposition: inline; filename="' . $file . '"');
            header('Content-Transfer-Encoding: binary');
            header('Accept-Ranges: bytes');

            @readfile($file_path);
        } else {
            show_404();
        }
    }

    public function acc()
    {
        
        echo json_encode(array('id' => $_POST['id']));
        exit();
    }
}