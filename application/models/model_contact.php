<?php

defined('BASEPATH') or exit('No direct script access allowed');
class model_contact extends CI_Model
{
    function insertDatacontact($data)
    {
        $this->db->insert('pesan', $data);
    }
}
