<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tempat_barang extends CI_Controller
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
 
    	$this->load->view('templates/header');
    	$this->load->view('templates/sidebar');
    	$this->load->view('tempat_barang/index');
    	$this->load->view('templates/footer');
	}

	public function tambah()
	{

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('tempat_barang/tambah_tempat_barang');
		$this->load->view('templates/footer');
	}

	public function edit()
	{

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('tempat_barang/edit_tempat_barang');
		$this->load->view('templates/footer');
	}

 
}
