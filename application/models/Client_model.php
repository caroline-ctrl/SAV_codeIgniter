<?php

class Client_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }


    // affiche les clients
    public function get_client()
    {
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

        if ($id <= 0){
            return $this->db->insert('client', $data);
        }
        $this->db->where('clientId', $id);
        return $this->db->update('client', $data);
    }
}