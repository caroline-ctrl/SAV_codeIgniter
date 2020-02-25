<?php

class Client extends CI_Controller
{
    public function __construct()
    {
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
}