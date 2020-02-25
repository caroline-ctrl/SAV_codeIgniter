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
    public function view_article()
    {
        $data['produit'] = $this->article_model->get_article();


        $this->load->view('templates/header');
        $this->load->view('articles/articleView', $data);
        $this->load->view('templates/footer');
    }




    //afficher un article en fonction de l'id
    public function view_article_id($id)
    {
        $data['single_produit'] = $this->article_model->get_article($id);
        $data['title'] = $data['single_produit']['nomProduit'];

        $this->load->view('templates/header');
        $this->load->view('articles/articleViewId', $data);
        $this->load->view('templates/footer');

    }
}