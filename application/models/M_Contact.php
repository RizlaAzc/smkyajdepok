<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Contact extends CI_Model
{
    function getDataContact()
    {
        $query = $this->db->get('pesan');
        return $query->result();
    }

    function insertDataContact($data)
    {
        $this->db->insert('pesan', $data);
    }

    function getDataContactDetail($id)
    {
        $this->db->where('id', $id);
        $query =  $this->db->get('pesan');
        return $query->row();
    }

    function updateDataContact($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('pesan', $data);
    }

    function hapusDataContact($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pesan');
    }
}
