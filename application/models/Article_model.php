<?php

class Article_model extends CI_Model
{

    //permet de recupérer les données de la db
    public function __construct()
    {
        $this->load->database();
    }




    //recupere la totalité des articles
    public function get_article($slug = FALSE)
    {
        if($slug === FALSE)
        {
            $query = $this->db->get('produit');
            return $query->result_array();
        } else {
            $query = $this->db->get_were('produit', array('slug' => $slug));
            return $query->row_array();
        }
    }
}
