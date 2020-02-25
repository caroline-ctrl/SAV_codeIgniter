<?php

class Article_model extends CI_Model
{

    //permet de recupérer les données de la db
    public function __construct()
    {
        $this->load->database();
    }




    //recupere la totalité des articles
    public function get_article($id = 0)
    {
        if($id == 0)
        {
            $query = $this->db->get('produit');
            return $query->result_array();
        } else {
            $query = $this->db->get_where('produit', array('produitId' => $id));
            return $query->row_array();
        }
    }
}
