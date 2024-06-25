<?php
class detail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_table');
        $this->load->model('model_detail');
    }

    public function index()
    {
        $data['tabel'] = $this->model_table->tampil_data();
        $this->load->view('detail', $data);
    }
    public function tabelid()
    {
        $id = $this->uri->segment(3);
        $data['tabel'] = $this->model_detail->tampil_idtabel($id);
        $this->load->view('detail', $data);
    }

    public function download($file){
        $tbl = $this->db->query("SELECT * FROM tabel WHERE file='$file'")->row();
        $file = FCPATH . 'uploads/file/'.$tbl->file;
        if (file_exists($file))
        {
            force_download($file, file_get_contents($file));
        } else {
            show_error('File not found.');
        }
    }
}
