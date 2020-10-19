<?php

class Model_warga extends CI_Model
{
    public function get_data()
    {   // return $this->db->get('tb_mhs')->result();
        return $this->db->query("SELECT * FROM warga")->result();
    }

    public function tambah()
    {
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');

        return $this->db->query("INSERT INTO warga (nama, alamat) VALUES ('$nama','$alamat')");
    }

    public function edit()
    {
        $id = $_GET["id"];

        return $this->db->query("SELECT * FROM warga WHERE id='$id'")->result();
    }

    public function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');

        return $this->db->query("UPDATE warga SET nama='$nama', alamat='$alamat' WHERE id='$id'");
    }

    public function hapus()
    {
        $id = $_GET['id'];

        $this->db->query("DELETE FROM warga WHERE id='$id'");
    }
}
