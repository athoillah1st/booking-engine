<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_book extends CI_Model
{
    public function insert_data($data)
    {
        $this->db->insert('tb_book', $data);
    }
}
