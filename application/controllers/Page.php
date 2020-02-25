<?php

class Page extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('page_model');
        $this->load->helper('url_helper');

    }


    public function view()
    {
        // $this->page_model->url();
        
        $this->load->view('templates/header');
        $this->load->view('templates/accueil');
        $this->load->view('templates/footer');
        
    }
}