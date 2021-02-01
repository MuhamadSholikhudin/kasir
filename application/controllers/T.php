<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class T extends CI_Controller{

    public function index()
    {
        $this->load->view('templates_olshop/header');
        $this->load->view('templates_olshop/navbar');
        $this->load->view('olshop/index/isi');
        $this->load->view('templates_olshop/footer');
    }


    public function kategori($jenis, $nama_barang)
    {

        $data['barang']= $this->db->query("SELECT * FROM `barang` WHERE nama_barang LIKE '%$nama_barang%' AND jenis_barang LIKE '%$jenis%' ")->result();
        
        $this->load->view('templates_olshop/header');
        $this->load->view('templates_olshop/navbar');
        $this->load->view('olshop/index/isi', $data);
        $this->load->view('templates_olshop/footer');
    }

    public function search()
    {
        $cari = $this->input->post('search');

        $data['barang'] = $this->db->query("SELECT * FROM `barang` WHERE nama_barang LIKE '%$cari%'  ")->result();

        $this->load->view('templates_olshop/header');
        $this->load->view('templates_olshop/navbar');
        $this->load->view('olshop/index/isi', $data);
        $this->load->view('templates_olshop/footer');
    }

}
