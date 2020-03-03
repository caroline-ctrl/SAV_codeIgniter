<?php
class Client_model extends CI_Model
{

    //CONSTRUCT
    public function __construct()
    {
        $this->load->database();
    }





    // affiche les clients ACTIF
    public function get_client_actif()
    {
        $this->db->where('isActiv', 1);
        $query = $this->db->get('client');
        return $query->result_array();
    }


    // affiche les clients INACTIF
    public function get_client_inactif()
    {
        $this->db->where('isActiv', 0);
        $query = $this->db->get('client');
        return $query->result_array();
    }



    // create, update
    public function set_client(int $id = 0)
    {
        $data = array(
            'nomClient' => $this->input->post('nomClient'),
            'numClient' => $this->input->post('numClient'),
            'adresse' => $this->input->post('adresse'),
            'numTel' => $this->input->post('numTel'),
            'mail' => $this->input->post('mail')
        );

        if ($id <= 0) {
            return $this->db->insert('client', $data);
        }
        $this->db->where('clientId', $id);
        return $this->db->update('client', $data);
    }




    //supprimer un client
    public function delete($id)
    {
        return $this->db->delete('client', array('clientId' => $id));
    }



    // afficher les commandes d'un client
    public function get_commande_client($id)
    {
        
        if ($id > 0) {
            $this->db->select('commande.*, client.clientId, client.nomClient');
            $this->db->from('commande');
            $this->db->join('client', 'client.clientId = commande.fk_clientId');
            $this->db->where('client.clientId', $id);
            $query = $this->db->get();
            return $query->result_array();
        }
    }


    //afficher les produits de la commande d'un produit
    public function get_product_client($id)
    {
        if ($id > 0){
            $this->db->select('produit.*, commandeproduit.quantite_commande');
            $this->db->from('produit');
            $this->db->join('commandeProduit', 'commandeProduit.fk_produitId = produit.produitId', 'left');
            $this->db->join('commande', 'commande.commandeId = produit.produitId');
            $this->db->where('commandeproduit.fk_commandeId', $id);
            $query = $this->db->get();
            return $query->result_array();
        }
    }
}
