<?php

class Dashboard_user extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_modal');
    }

    public function index()
    {
        $data['jenis_dokumen']= $this->model_modal->getdata();
        $this->load->view('user/dashboard',$data);
    }
}