<?php

class Client_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }


    public function get_client($slug = FALSE)
    {
        if ($slug === FALSE){
            $query = $this->db->get('client');
            return $query->result_array();
        }else {
            $query = $this->db->get_where('client', array('slug' => $slug));
            return $query->row_array();
        }
    }
}