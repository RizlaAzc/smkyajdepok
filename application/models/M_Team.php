<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Team extends CI_Model
{
    function getDataTeam()
    {
        $query = $this->db->get('team');
        return $query->result();
    }

    function insertDataTeam($data)
    {
        $this->db->insert('team', $data);
    }

    function getDataTeamDetail($id)
    {
        $this->db->where('id', $id);
        $query =  $this->db->get('team');
        return $query->row();
    }

    function updateDataTeam($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('team', $data);
    }

    function hapusDataTeam($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('team');
    }
}
