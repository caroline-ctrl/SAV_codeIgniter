<?php

class Article extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('article_model');
        $this->load->helper('url_helper');

    }

    //affiche les articles
    public function index()
    {
        $data['produit'] = $this->article_model->get();


        $this->load->view('templates/header');
        $this->load->view('articles/articleView', $data);
        $this->load->view('templates/footer');
    }
}