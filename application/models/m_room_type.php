<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_room_type extends CI_Model
{
    public function get_allData()
    {
        return $this->db->get('tb_room_type')->result_array();
    }

    public function get_data_by_id($id)
    {
        return $this->db->get_where('tb_room_type', array('id_type' => $id))->row_array();
    }

    public function insert_data($data)
    {
        $this->db->insert('tb_room_type', $data);
    }

    public function update_data($id, $data)
    {
        $this->db->where('id_type', $id);
        $this->db->update('tb_room_type', $data);
    }

    public function delete_data($id)
    {
        $this->db->where('id_type', $id);
        $this->db->delete('tb_room_type');
    }
}
