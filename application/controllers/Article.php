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



    // créer un article
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nomProduit', 'NomProduit', 'required');
        $this->form_validation->set_rules('descriptProduit', 'DescriptProduit', 'required');
        $this->form_validation->set_rules('qttProduit', 'QttProduit', 'required');
        $this->form_validation->set_rules('isAvailable', 'IsAvailable', 'required');
        $this->form_validation->set_rules('prixProduit', 'prixProduit', 'required');

        if ($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('articles/create');
            $this->load->view('templates/footer');
        }else {
            $this->article_model->set_article();
            redirect(base_url('index.php/article'));
        }
    }


    // modifier un article
    public function edit($id)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['single_article'] = $this->article_model->get_article($id);

        $this->form_validation->set_rules('nomProduit', 'NomProduit', 'required');
        $this->form_validation->set_rules('descriptProduit', 'DescriptProduit', 'required');
        $this->form_validation->set_rules('qttProduit', 'QttProduit', 'required');
        $this->form_validation->set_rules('isAvailable', 'IsAvailable', 'required');
        $this->form_validation->set_rules('prixProduit', 'prixProduit', 'required');

        if ($this->form_validation->run() === FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('articles/edit', $data);
            $this->load->view('templates/footer');
        }else {
            $this->article_model->set_article($id);
            redirect(base_url('index.php'));
        }

    }


    //supprimer
    public function delete ($id)
    {
        $this->article_model->delete($id);
        redirect(base_url('index.php/article'));
    }
}