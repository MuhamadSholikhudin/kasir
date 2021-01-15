<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Harga_barang extends CI_Controller
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
    	$this->load->view('harga_barang/index');
    	$this->load->view('templates/footer');
	}

	public function tambah($id_barang)
	{
		$where = array('id_barang' => $id_barang);
		$data['barang'] = $this->Model_barang->edit_barang($where, 'barang')->result();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('harga_barang/tambah_harga_barang', $data);
		$this->load->view('templates/footer');
	}

	public function edit($id_barang)
	{
		$where = array('id_barang' => $id_barang);
		$data['barang'] = $this->db->query("SELECT * FROM harga_barang WHERE id_barang =  $id_barang")->result();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('harga_barang/edit_harga_barang', $data);
		$this->load->view('templates/footer');
	}

	public function aksi_tambah($id_barang)
	{
		// $id_barang = $this->input->post('id_barang');
		// $jumlah_awal = $this->input->post('jumlah_awal');
		// $jumlah_akhir = $this->input->post('jumlah_akhir');
		// $harga_beli = $this->input->post('harga_beli');
		// $harga_jual = $this->input->post('harga_jual');
		// $harga_kembali = $this->input->post('harga_kembali');
		// $harga_tukar = $this->input->post('harga_tukar');
		$waktu_modifikasi = date('Y-m-d');
		// $id_user = $this->input->post('id_user');

		$data = array(
			// 'jumlah_awal' => $jumlah_awal,
			// 'jumlah_akhir' => $jumlah_akhir,
			// 'harga_beli' => $harga_beli,
			// 'harga_jual' => $harga_jual,
			// 'harga_kembali' => $harga_kembali,
			// 'harga_tukar' => $harga_tukar,
			// 'id_user' => $id_user
			'id_barang' => $id_barang,
			'jumlah_awal' => 0,
			'jumlah_akhir' => 0,
			'harga_beli' => 0,
			'harga_jual' => 0,
			'harga_kembali' => 0,
			'harga_tukar' => 0,
			'id_user' => 0,
			'waktu_modifikasi' => $waktu_modifikasi
		);

		$this->Model_harga_barang->tambah_harga_barang($data, 'harga_barang');
		redirect('pemilik/harga_barang/edit/'. $id_barang);
		
	}

	public function aksi_hapus($id_harga_barang, $id_barang)
	{
		$where = ['id_harga_barang' => $id_harga_barang];
		$this->Model_harga_barang->hapus_data($where, 'harga_barang');

		redirect('pemilik/harga_barang/edit/' . $id_barang);	}
 
}
