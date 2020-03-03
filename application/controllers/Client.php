<?php

class Client extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->model('client_model');
    }

    //affiche un client actif
    public function view_client_actif()
    {
        $data['clients'] = $this->client_model->get_client_actif();

        $this->load->view('templates/header');
        $this->load->view('clients/clientViewActif', $data);
        $this->load->view('templates/footer');
    }


        //affiche un client actif
        public function view_client_inactif()
        {
            $data['clients'] = $this->client_model->get_client_inactif();
    
            $this->load->view('templates/header');
            $this->load->view('clients/clientViewInactif', $data);
            $this->load->view('templates/footer');
        }
    


    // créer un client
    public function create ()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Formulaire';


        $this->form_validation->set_rules('nomClient', 'NomClient', 'required');
        $this->form_validation->set_rules('numClient', 'NumClient', 'required');
        $this->form_validation->set_rules('adresse', 'Adresse', 'required');
        $this->form_validation->set_rules('numTel', 'NumTel', 'required');
        $this->form_validation->set_rules('mail', 'Mail', 'required');

        if ($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('clients/create', $data);
            $this->load->view('templates/footer');
        } else {
            $this->client_model->set_client();
           redirect(base_url('index.php/client/view_client'));
        }
    }


    //modifier un client
    public function edit ($id)
    {

        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Modification d\'un client';
        //afin de pouvoir récuperer l'id on fait appel a la methode get_client dans le model
        $data['single_client'] = $this->client_model->get_client($id);

        $this->form_validation->set_rules('nomClient', 'NomClient', 'required');
        $this->form_validation->set_rules('numClient', 'NumClient', 'required');
        $this->form_validation->set_rules('adresse', 'Adresse', 'required');
        $this->form_validation->set_rules('numTel', 'NumTel', 'required');
        $this->form_validation->set_rules('mail', 'Mail', 'required');

        
        // vérifie les regles
        if ($this->form_validation->run() === FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('clients/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->client_model->set_client($id);
            redirect(base_url('index.php/client/view_client'));
        }

    }


    //supprimer un client
    public function delete($id)
    {
        $this->client_model->delete($id);
        redirect(base_url('index.php/client/view_client'));
    }


    // afficher les commandes d'un client
    public function get_commande_client($id)
    {
        $data['content_commandes'] = $this->client_model->get_commande_client($id);

        $this->load->view('templates/header', $data);
        $this->load->view('clients/commandesClient', $data);
        $this->load->view('templates/footer');
    }


    // affiche les produits de la commande
    public function get_product_client($id)
    {
        $data['products'] = $this->client_model->get_product_client($id);
        
        $this->load->view('templates/header', $data);
        $this->load->view('clients/produitClient', $data);
        $this->load->view('templates/footer');
    }
}