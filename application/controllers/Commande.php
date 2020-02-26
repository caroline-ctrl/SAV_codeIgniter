<?php

class Commande extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->model('commande_model');
    }


    //affiche toutes les commandes
    public function view_commande()
    {
        $data['commandes'] = $this->commande_model->get_commande();

        $this->load->view('templates/header');
        $this->load->view('commande/commandeView', $data);
        $this->load->view('templates/footer');
    }



    //affiche une commande en fonction de son id
    public function view_commande_id($id)
    {
        $data['single_commande'] = $this->commande_model->get_commande($id);

        $this->load->view('templates/header');
        $this->load->view('commande/commandeViewId', $data);
        $this->load->view('templates/footer');

    }

}