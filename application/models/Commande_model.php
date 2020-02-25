<?php

class Commande_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }


    public function get_commande($slug = FALSE)
    {
        if ($slug === FALSE){
            $query = $this->db->get('commande');
            return $query->result_array();
        } else {
            $query = $this->db->get_where('commande', array('slug' => $slug));
            return $query->row_array();
        }
    }
}