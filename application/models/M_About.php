<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_About extends CI_Model
{
    function getDataAbout()
    {
        $query = $this->db->get('about');
        return $query->result();
    }

    function insertDataAbout($data)
    {
        $this->db->insert('about', $data);
    }

    function getDataAboutDetail($id)
    {
        $this->db->where('id', $id);
        $query =  $this->db->get('about');
        return $query->row();
    }

    function updateDataAbout($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('about', $data);
    }

    function hapusDataAbout($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('about');
    }
}
