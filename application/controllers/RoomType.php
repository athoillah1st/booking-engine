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
}
