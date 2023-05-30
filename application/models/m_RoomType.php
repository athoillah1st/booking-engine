<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_RoomType extends CI_Model
{
    public function get_allData()
    {
        return $this->db->get('room_type')->result_array();
    }
}
