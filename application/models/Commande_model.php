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
            $this->db->select('commande.*, client.nomClient, client.numClient');
            $this->db->from('commande');
            $this->db->join('client', 'client.clientId = commande.commandeId', 'left');
            $query = $this->db->get();
            return $query->row_array();
            // $queryCommande = $this->db->get_where('commande', array('commandeId' => $id));
            // return $queryCommande->row_array();
        }
    }
}