<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Room extends CI_Controller
{
    public function index()
    {
        $data = [
            'judul' => "Halaman Ruangan",
            'isi' => 'admin/room/v_index',
            'kamar' => $this->m_room->get_allData(),
        ];
        $this->load->view('admin/layout/all', $data);
    }

    public function tambah()
    {
        $data = [
            'judul' => "Tambah Ruangan",
            'isi' => 'admin/room/v_tambah',
            'tipe_kamar' => $this->m_room_type->get_allData(),
        ];
        $this->load->view('admin/layout/all', $data);
    }

    public function insert()
    {
        $data = [
            'room' => $this->input->post('room'),
            'id_type' => $this->input->post('id_type'),
            'room_desc' => $this->input->post('room_desc'),
        ];
        $this->m_room->insert_data($data);
        redirect('room');
    }

    public function edit($id)
    {
        $data = [
            'judul' => "Edit Ruangan",
            'isi' => 'admin/room/v_edit',
            'kamar_id' => $this->m_room->get_data_by_id($id),
            'type' => $this->m_room_type->get_allData(),
        ];
        $this->load->view('admin/layout/all', $data);
    }

    public function update($id)
    {
        $data = [
            'room' => $this->input->post('room'),
            'id_type' => $this->input->post('id_type'),
            'room_desc' => $this->input->post('room_desc'),
        ];
        $this->m_room->update_data($id, $data);
        redirect('room');
    }

    public function delete($id)
    {
        $this->m_room->delete_data($id);
        redirect('room');
    }
}
