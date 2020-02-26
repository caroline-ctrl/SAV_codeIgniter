<?php

class Commande_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }





    

    public function get_commande($id = 0)
    {
        if ($id == 0){
            $query = $this->db->get('commande');
            return $query->result_array();
        } else {
            $query = $this->db->get_where('commande', array('commandeId' => $id));
            return $query->row_array();
        }
    }
}