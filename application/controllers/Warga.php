<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Warga extends CI_Controller
{

    public function index()
    {
        // Menghubungkan ke Model
        $data['title'] = "Belajar CRUD";
        $data['warga'] = $this->model_warga->get_data();
        // Menghubungkan ke view_warga
        $this->load->view('view_warga', $data);
    }

    public function tambah()
    {
        if (isset($_POST['submit'])) {
            $this->model_warga->tambah();
            redirect('warga');
        }

        $this->load->view('view_tambah');
    }

    public function hapus()
    {
        $this->model_warga->hapus();
        redirect('warga');
    }

    public function edit()
    {
        if (isset($_POST['submit'])) {
            $this->model_warga->update();
            redirect('warga');
        }

        $data['warga'] = $this->model_warga->edit();

        $this->load->view('view_ubah', $data);
    }

    // public function update()
    // {
    // if (isset($_POST['submit'])) {
    // $this->model_warga->update();
    // redirect('warga');
    // }
    // }
}
