<?php

defined('BASEPATH') or exit('No direct script access allowed');

class model_ppdb extends CI_Model
{
    function getDataPpdb()
    {
        $query = $this->db->get('ppdb');
        return $query->result();
    }

    function insertDataPpdb($data)
    {
        $this->db->insert('ppdb', $data);
    }

    function getDataPpdbDetail($id)
    {
        $this->db->where('id', $id);
        $query =  $this->db->get('ppdb');
        return $query->row();
    }

    function updateDataPpdb($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('ppdb', $data);
    }

    function hapusDataPpdb($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('ppdb');
    }
}
