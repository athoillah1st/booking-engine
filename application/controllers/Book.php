<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Book extends CI_Controller
{
    public function index()
    {
        $data = [
            'judul' => "Halaman Booking",
            'isi' => 'admin/book/v_index',
            'kamar' => $this->m_room->get_allData(),
        ];
        $this->load->view('admin/layout/all', $data);
    }

    public function tambah($id)
    {
        $data = [
            'judul' => "Input Booking",
            'isi' => 'admin/book/v_tambah',
            'kamar' => $this->m_room->get_data_by_id($id),
        ];
        $this->load->view('admin/layout/all', $data);
    }

    public function insert($id)
    {

        $hargakamar = $this->input->post('harga');
        $tgl_cekin = strtotime($this->input->post('cek_in'));
        $tgl_cekout = strtotime($this->input->post('cek_out'));
        $selisih = ($tgl_cekout - $tgl_cekin) / 86400;
        $harga_tot = $selisih * $hargakamar;

        $data = [
            'id_room' => $this->input->post('id_room'),
            'cek_in' => $this->input->post('cek_in'),
            'cek_out' => $this->input->post('cek_out'),
            'harga_total' => $harga_tot,
        ];
        $this->m_book->insert_data($data);

        $data2 = [
            'cek_in' => $this->input->post('cek_in'),
            'cek_out' => $this->input->post('cek_out'),
            'status' => 1,
        ];
        $this->m_room->update_data($id, $data2);

        redirect('book');
    }
}
