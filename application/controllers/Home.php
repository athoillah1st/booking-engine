<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


    public function index()
    {
        $data = [
            'judul' => "Halaman Home",
            'isi' => 'admin/v_home'
        ];
        $this->load->view('admin/layout/all', $data);
    }
}
