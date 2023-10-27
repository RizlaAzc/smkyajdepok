<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Quotes extends CI_Model
{
    function getDataQuotes()
    {
        $query = $this->db->get('quotes');
        return $query->result();
    }

    function insertDataQuotes($data)
    {
        $this->db->insert('quotes', $data);
    }

    function getDataQuotesDetail($id)
    {
        $this->db->where('id', $id);
        $query =  $this->db->get('quotes');
        return $query->row();
    }

    function updateDataQuotes($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('quotes', $data);
    }

    function hapusDataQuotes($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('quotes');
    }
}
