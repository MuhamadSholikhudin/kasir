<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('bagian') != 'pemilik') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Anda Belum Login
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
            redirect('auth/login_pemilik');
        }
    }

    public function index()
    {
        $data['user'] = $this->db->query("SELECT * FROM user");
        $data['barang'] = $this->db->query("SELECT * FROM barang");
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi WHERE status_transaksi > 0");
        $data['transaksi_hari'] = $this->db->query("SELECT * FROM transaksi WHERE status_transaksi > 0");
        $data['transaksi_minggu'] = $this->db->query("SELECT * FROM transaksi WHERE status_transaksi > 0");
        $data['transaksi_bulan'] = $this->db->query("SELECT * FROM transaksi WHERE status_transaksi > 0");

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/footer');
    }
}