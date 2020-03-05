<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->helper('url_helper');
    }


    public function accueil()
    {
        $this->load->view('templates/header');
        $this->load->view('admin/admin_accueil');
    }



    public function inscription()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nomAdmin', 'NomAdmin', 'required');
        $this->form_validation->set_rules('psswdAdmin', 'PsswdAdmin', 'required');
        // regle qui permet de comparer le passwAdmin avec le passwdAdmin1
        $this->form_validation->set_rules('psswdAdmin1', 'Confirm Password', 'matches[psswdAdmin]');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('admin/create_admin');
            $this->load->view('templates/footer');
        } else {
            $this->admin_model->sign_up();
            redirect(base_url('index.php/page/view'));
        }
    }




    public function connection()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nomAdmin', 'NomAdmin', 'required');
        $this->form_validation->set_rules('psswdAdmin', 'PsswdAdmin', 'required');

        var_dump($this->session->userdata());

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('admin/connect_admin');
            $this->load->view('templates/footer');
        } else {
            $this->admin_model->sign_in();
            redirect(base_url('index.php/page/view'));
        }
    }
    



    public function deconnection()
    {
        $this->admin_model->log_out();
        $this->load->view('templates/header');
        $this->load->view('admin/deconnection');
        var_dump($this->session->userdata());

    }
}
