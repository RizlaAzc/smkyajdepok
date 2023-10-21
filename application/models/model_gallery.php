<?php

defined('BASEPATH') or exit('No direct script access allowed');

class model_gallery extends CI_Model
{
    function getDataGallery()
    {
        $query = $this->db->get('gallery');
        return $query->result();
    }

    function insertDataGallery($data)
    {
        $this->db->insert('gallery', $data);
    }

    function getDataGalleryDetail($id)
    {
        $this->db->where('id', $id);
        $query =  $this->db->get('gallery');
        return $query->row();
    }

    function updateDataGallery($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('gallery', $data);
    }

    function hapusDataGallery($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('gallery');
    }
}
