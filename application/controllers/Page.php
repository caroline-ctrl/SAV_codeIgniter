<?php

class Page extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('page_model');
        $this->load->helper('url_helper');
        $this->load->library('session');

    }


    public function view()
    {
        var_dump($this->session->userdata());

        $data['title'] = $this->session->userdata('nomAdmin');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/accueil', $data);
        $this->load->view('templates/footer');
        
    }
}