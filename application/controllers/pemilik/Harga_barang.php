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
		$data['harga_barang'] = $this->db->get('harga_barang')->result();
    	$this->load->view('templates/header');
    	$this->load->view('templates/sidebar');
    	$this->load->view('harga_barang/index', $data);
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
		$data['barang1'] = $this->db->query("SELECT * FROM harga_barang WHERE id_barang =  $id_barang LIMIT 1")->result();
		$data['barang'] = $this->db->query("SELECT * FROM harga_barang WHERE id_barang =  $id_barang")->result();
		$data['nama_barang'] = $this->db->query("SELECT * FROM harga_barang JOIN barang WHERE barang.id_barang =  $id_barang")->row();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('harga_barang/edit_harga_barang', $data);
		$this->load->view('templates/footer');
	}

	public function lihat($id_barang)
	{
		$where = array('id_barang' => $id_barang);
		$data['barang1'] = $this->db->query("SELECT * FROM harga_barang WHERE id_barang =  $id_barang LIMIT 1")->result();
		$data['barang'] = $this->db->query("SELECT * FROM harga_barang WHERE id_barang =  $id_barang")->result();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('harga_barang/lihat_harga_barang', $data);
		$this->load->view('templates/footer');
	}

	public function aksi_tambah($id_barang)
	{
		
		$waktu_modifikasi = date('Y-m-d');

		$data = array(
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

	public function aksi_edit()
	{
		

		//Update data attribut
		$id_barang = $this->input->post('id_barang');
		$id_harga_barang = $this->input->post('id_harga_barang');
		$result = array();
		foreach ($id_harga_barang as $key => $val) {
			$result[] = array(
				"id_harga_barang" => $id_harga_barang[$key],
				"jumlah_awal" => $_POST['jumlah_awal'][$key],
				"jumlah_akhir" => $_POST['jumlah_akhir'][$key],
				"harga_beli" => $_POST['harga_beli'][$key],
				"harga_jual"  =>  $_POST['harga_jual'][$key],
				"harga_kembali" => $_POST['harga_kembali'][$key],
				"harga_tukar"  =>$_POST['harga_tukar'][$key],
				"waktu_modifikasi" => date('Y-m-d'),
				"id_user" => $_POST['id_user'][$key]
			);
		}
		$this->db->update_batch('harga_barang', $result, 'id_harga_barang');

		redirect('pemilik/harga_barang/edit/' . $id_barang);
	}

	public function aksi_hapus($id_harga_barang, $id_barang)
	{
		$where = ['id_harga_barang' => $id_harga_barang];
		$this->Model_harga_barang->hapus_data($where, 'harga_barang');

		redirect('pemilik/harga_barang/edit/' . $id_barang);	
	}
 
}
