<?php

class Client extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->model('client_model');
    }


    public function view_client()
    {
        $data['clients'] = $this->client_model->get_client();

        $this->load->view('templates/header');
        $this->load->view('clients/clientView', $data);
        $this->load->view('templates/footer');
    }



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
}