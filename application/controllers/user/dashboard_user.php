<?php

class Dashboard_user extends CI_Controller{
    public function index()
    {
        $this->load->view('user/dashboard');
    }
}