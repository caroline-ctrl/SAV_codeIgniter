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



    //créer ou modifier une commande
    public function set_commande(int $id = 0)
    {
        $data = array(
            'nomCommande' => $this->input->post('nomCommande'),
            'dateCommande' => $this->input->post('dateCommande'),
            'isDelivred' => $this->input->post('isDelivred')
        );

        if ($id = 0){
            return $this->db->insert('commande');
        } else {
            $this->db->where('commande', $id);
            return $this->db->update('commande', $data);
        }
    }



    // supprimer une commande
    public function delete($id)
    {
        return $this->db->delete('commande', array('commandeId' => $id));
    }

}