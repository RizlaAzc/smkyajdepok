<?php

defined('BASEPATH') or exit('No direct script access allowed');

class model_quotes extends CI_Model
{
    function getDataquotes()
    {
        $query = $this->db->get('quotes');
        return $query->result();
    }

    function insertDataquotes($data)
    {
        $this->db->insert('quotes', $data);
    }

    function getDataquotesDetail($id)
    {
        $this->db->where('id', $id);
        $query =  $this->db->get('quotes');
        return $query->row();
    }

    function updateDataquotes($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('quotes', $data);
    }

    function hapusDataquotes($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('quotes');
    }
}
