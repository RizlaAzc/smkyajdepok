<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Ppdb extends CI_Model
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

    function getDataPpdbDetail($nisn)
    {
        $this->db->where('nisn', $nisn);
        $query =  $this->db->get('ppdb');
        return $query->row();
    }

    function updateDataPpdb($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('ppdb', $data);
    }

    function hapusDataPpdb($nisn)
    {
        $this->db->where('nisn', $nisn);
        $this->db->delete('ppdb');
    }
}
