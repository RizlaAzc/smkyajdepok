<?php

defined('BASEPATH') or exit('No direct script access allowed');

class model_study extends CI_Model
{
    function getDataStudy()
    {
        $query = $this->db->get('study');
        return $query->result();
    }

    function insertDataStudy($data)
    {
        $this->db->insert('study', $data);
    }

    function getDataStudyDetail($id)
    {
        $this->db->where('id', $id);
        $query =  $this->db->get('study');
        return $query->row();
    }

    function updateDataStudy($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('study', $data);
    }

    function hapusDataStudy($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('study');
    }
}
