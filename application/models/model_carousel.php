<?php

defined('BASEPATH') or exit('No direct script access allowed');

class model_carousel extends CI_Model
{
    function getDataCarousel()
    {
        $query = $this->db->get('carousel');
        return $query->result();
    }

    function insertDataCarousel($data)
    {
        $this->db->insert('carousel', $data);
    }

    function getDataCarouselDetail($id)
    {
        $this->db->where('id', $id);
        $query =  $this->db->get('carousel');
        return $query->row();
    }

    function updateDataCarousel($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('carousel', $data);
    }

    function hapusDataCarousel($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('carousel');
    }
}
