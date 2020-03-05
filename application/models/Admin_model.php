<?php

class Admin_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }



    // créer un nouvel admin
    public function sign_up()
    {
        /**
         * Création d'une variable
         * on utilise la methode password_hash
         * on récupere dans l'objet courant le resultat de l'input 'passwdAdmin' 
         * et on lance la methode d'encryptage BCRYPT
         */
        $pass_hache = password_hash($this->input->post('psswdAdmin'), PASSWORD_BCRYPT);

        // dans une variable $data on stock un tableau qui comprend
        // le resultat de de l'input 'nomAdmin' et le resultat du hachage
        $data = array(
            'nomAdmin' => $this->input->post('nomAdmin'),
            'psswdAdmin' => $pass_hache
        );

        // on insere dans la bdd le tableau data dans la table 'admin'
        return $this->db->insert('admin', $data);
    }


    // connection
    public function sign_in()
    {
        // $this->db->where('nomAdmin', $nomAdmin);
        // $this->db->where('psswdAdmin', $psswdAdmin);

        // 
        $query = $this->db->get('admin');
        return $query->result_array();
    }


    public function session()
    {
        $name = $this->input->post('nomAdmin');
        $this->session->set_userdata('nomAdmin', $name);
    }


    public function log_out()
    {
        $this->session->unset_userdata('nomAdmin');
    }
}
