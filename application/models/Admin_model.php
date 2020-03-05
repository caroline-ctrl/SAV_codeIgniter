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
        // dans une variable, on recupère toutes les info de la table 'admin'
        $userName = $this->input->post('nomAdmin');
        $passwd = $this->input->post('psswdAdmin');
        
        $query = $this->db->get_where('admin', array('nomAdmin' => $userName));
        $user = $query->row_array();

        if ($user['nomAdmin'] == $userName) {
            if (password_verify($passwd, $user['psswdAdmin'])){
                $this->session();
                return $user;
            }
        }
    }


    public function session()
    {
        // dans une variable on recupère la valeur du formulaire 'nomAdmin'
        $name = $this->input->post('nomAdmin');
        // dans l'objet courant, on utilise session pour enregistrer les données de l'utilisateur en session
        $this->session->set_userdata('nomAdmin', $name);
    }


    public function log_out()
    {
        // dans l'objet , on supprime les données utilisateurs qui s'appelle 'nomAdmin'
        $this->session->unset_userdata('nomAdmin');
    }
}
