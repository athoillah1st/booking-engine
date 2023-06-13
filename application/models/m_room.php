<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_room extends CI_Model
{
    public function get_allData()
    {
        //return $this->db->get('tb_room')->result_array();
        return $this->db->from('tb_room_type')
            ->join('tb_room', 'tb_room.id_type = tb_room_type.id_type', 'left')
            ->get()->result_array();
    }

    public function get_data_by_id($id)
    {
        //return $this->db->get_where('tb_room', array('id_room' => $id))->row_array();
        return $this->db->from('tb_room_type')
            ->join('tb_room', 'tb_room.id_type = tb_room_type.id_type', 'left')
            ->where('id_room', $id)
            ->get()->row_array();
    }

    public function insert_data($data)
    {
        $this->db->insert('tb_room', $data);
    }

    public function update_data($id, $data)
    {
        $this->db->where('id_room', $id);
        $this->db->update('tb_room', $data);
    }

    public function delete_data($id)
    {
        $this->db->where('id_room', $id);
        $this->db->delete('tb_room');
    }
}
