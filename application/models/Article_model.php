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




    // créer ou modifier un nouvel article
    public function set_article(int $id = 0)
    {

        $data = array(
            'nomProduit' => $this->input->post('nomProduit'),
            'descriptProduit' => $this->input->post('descriptProduit'),
            'qttProduit' => $this->input->post('qttProduit'),
            'isAvailable' => $this->input->post('isAvailable'),
            'prixProduit' => $this->input->post('prixProduit')
        );

        if ($id <= 0){
            return $this->db->insert('produit', $data);
        } else {
            $this->db->where('produitId', $id);
            return $this->db->update('produit', $data);
        }
    }



    //supprimer
    public function delete ($id)
    {
        return $this->db->delete('produit', array('produitId' => $id));
    }
}
