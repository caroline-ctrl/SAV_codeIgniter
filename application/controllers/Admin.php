<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->helper('url_helper');
        $this->load->library('session');
    }


    public function accueil()
    {
        $this->load->view('admin/admin_accueil');
    }


    public function inscription()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nomAdmin', 'NomAdmin', 'required');
        $this->form_validation->set_rules('psswdAdmin', 'PsswdAdmin', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('admin/create_admin');
            $this->load->view('templates/footer');
        } else {
            if ($_POST['psswdAdmin1'] === $_POST['psswdAdmin']) {
                $this->admin_model->sign_up();
                redirect(base_url('index.php/page/view'));
            } else {
                echo 'Les deux mots de passe ne sont pas identiques';
            }
        }
    }




    public function connection()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nomAdmin', 'NomAdmin', 'required');
        $this->form_validation->set_rules('psswdAdmin', 'PsswdAdmin', 'required');

        // $nomAdmin = $data['sign_in']['nomAdmin'];
        // $psswdAdmin = ; 
        $data['sign_in'] = $this->admin_model->sign_in();
        var_dump($this->session->userdata());

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('admin/connect_admin');
            $this->load->view('templates/footer');
        } else {
            foreach ($data['sign_in'] as $content) {
                if (($content['nomAdmin'] == $this->input->post('nomAdmin'))) {
                    if (password_verify($this->input->post('psswdAdmin'), $content['psswdAdmin'])){
                        var_dump($this->admin_model->session());
                        $this->admin_model->session();
                        redirect(base_url('index.php/page/view'));
                        return;
                    }
                } else {
                    echo 'Le nom ou le mot de passe n\'est pas bon<br>';
                    
                }
            }
        }
    }



    public function deconnection()
    {
        $this->admin_model->log_out();
        $this->load->view('admin/deconnection');
        var_dump($this->session->userdata());

    }
}
