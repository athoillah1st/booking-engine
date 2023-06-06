<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RoomType extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_RoomType');
    }

    public function index()
    {
        $data = [
            'judul' => "Halaman Tipe Ruangan",
            'isi' => 'admin/room_type/v_index',
            'tipe_kamar' => $this->m_RoomType->get_allData(),
        ];
        $this->load->view('admin/layout/all', $data);
    }

    public function tambah()
    {
        $data = [
            'judul' => "Tambah Tipe Ruangan",
            'isi' => 'admin/room_type/v_tambah',
        ];
        $this->load->view('admin/layout/all', $data);
    }

    public function insert()
    {
        $data = [
            'type' => $this->input->post('type'),
            'deskripsi' => $this->input->post('deskripsi'),
        ];
        $this->m_RoomType->insert_data($data);
        redirect('RoomType');
    }

    public function edit($id)
    {
        $data = [
            'judul' => "Edit Tipe Ruangan",
            'isi' => 'admin/room_type/v_edit',
            'kamar_id' => $this->m_RoomType->get_data_by_id($id)
        ];
        $this->load->view('admin/layout/all', $data);
    }

    public function update($id)
    {
        $data = [
            'type' => $this->input->post('type'),
            'deskripsi' => $this->input->post('deskripsi'),
        ];
        $this->m_RoomType->update_data($id, $data);
        redirect('RoomType');
    }

    public function delete($id)
    {
        $this->m_RoomType->delete_data($id);
        redirect('RoomType');
    }
}
