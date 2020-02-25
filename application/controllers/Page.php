<?php

class Page extends CI_Controller
{
    public function view()
    {
        $this->page_model->url();
        
        $this->load->view('templates/header');
        $this->load->view('templates/accueil');
        $this->load->view('templates/footer');
        
    }
}