<?php

defined('BASEPATH') or exit('No direct script access allowed');

class model_team extends CI_Model
{
    function getDatateam()
    {
        $query = $this->db->get('team');
        return $query->result();
    }

    function insertDatateam($data)
    {
        $this->db->insert('team', $data);
    }

    function getDatateamDetail($id)
    {
        $this->db->where('id', $id);
        $query =  $this->db->get('team');
        return $query->row();
    }

    function updateDatateam($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('team', $data);
    }

    function hapusDatateam($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('team');
    }
}
