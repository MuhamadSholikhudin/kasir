<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
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
		$data['transaksi'] = $this->db->get('transaksi')->result();
 
    	$this->load->view('templates/header');
    	$this->load->view('templates/sidebar');
    	$this->load->view('transaksi/index', $data);
    	$this->load->view('templates/footer');
	}

	public function penjualan($id_transaksi)
	{
		$data['transaksi'] = $this->db->query("SELECT * FROM transaksi WHERE id_transaksi='$id_transaksi' ")->result();
		$data['barang_transaksi'] = $this->db->query("SELECT * FROM barang_transaksi WHERE id_transaksi='$id_transaksi' ")->result();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('transaksi/penjualan', $data);
		$this->load->view('templates/footer');
	}

	public function transaksi()
	{

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('transaksi/tambah_transaksi');
		$this->load->view('templates/footer');
	}

	function cari()
	{
		// $this->load->Model('Model_barang', 'cari_barang', TRUE);
		// $keyword = $this->input->post('keyword');
		$keyword = $this->input->post('keyword', TRUE);
		$pembeli = $this->input->post('pembeli', TRUE);

		// $keyword = trim(strip_tags($_POST['keyword']));
		$barang = $this->Model_barang->get_barang($keyword);
		// $data['keca'] = $this->db->query("SELECT COUNT(kode_wilayah), kecamatan FROM wilayah GROUP BY kecamatan")->result();

		// if($hakakses == 3){

		// $keca = $this->dep_kategori->get_sub_desa($id_kec);
		if (count($barang) > 0) {

			$barang_loop = '';
			$barang_loop .= '<tr><th>Kode Barang</th><th>Nama Barang</th><th>Add</th></tr>';
			foreach ($barang as $brg) {
				$barang_loop .= '<tr><td>' . $brg->kode_barang . '</td><td>' . $brg->nama_barang . '</td><td> <a href="' . base_url("pemilik/transaksi/aksi_tambah_barang/$pembeli/$brg->id_barang").'" class="btn btn-danger"><i class="fa fa-plus" </i></a></td></tr>';
			}
			echo json_encode($barang_loop);
		}
		// }

	}

	public function edit($id_transaksi)
	{
		$where = array('id_transaksi' => $id_transaksi);
		$data['transaksi'] = $this->Model_transaksi->edit_transaksi($where, 'transaksi')->result();
		$data['status'] = ['online', 'ditempat'];

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('transaksi/edit_transaksi', $data);
		$this->load->view('templates/footer');
	}

	public function edit_banyak()
	{

		$id_transaksi = $this->input->post('id_transaksi');
		$id_barang = $this->input->post('id_barang');
		$banyak = $this->input->post('banyak');
		$id_barang_transaksi = $this->input->post('id_barang_transaksi');

		$car_bar = $this->db->query("SELECT * FROM harga_barang WHERE id_barang = '$id_barang'")->result();

foreach($car_bar as $cari_barang):
			if ($banyak >= $cari_barang->jumlah_awal && $banyak <= $cari_barang->jumlah_akhir) {
				$jumlah = $banyak * $cari_barang->harga_jual;
				$this->db->set('jumlah', $jumlah);
				$this->db->set('banyak', $banyak);
			}
endforeach;


		$data = array(
			
			'waktu_transaksi' => date('Y-m-d  H:i:s'),
			'id_user' => $this->session->userdata('id_user')
		);

		$this->db->set($data);
		$this->db->where('id_barang_transaksi', $id_barang_transaksi);
		$this->db->update('barang_transaksi');
		
		redirect('pemilik/transaksi/penjualan/' . $id_transaksi);
	
	}

	public function lihat($id_transaksi)
	{
		$where = array('id_transaksi' => $id_transaksi);
		$data['transaksi'] = $this->Model_transaksi->edit_transaksi($where, 'transaksi')->result();
		$data['status'] = ['online', 'ditempat'];

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('transaksi/lihat_transaksi', $data);
		$this->load->view('templates/footer');
	}

	public function aksi_tambah()
	{
		$id_transaksi = (strtotime("now"));
			$data = array(
				'id_transaksi' => $id_transaksi,
				'nama_pembeli' => 'pembeli' . (strtotime("now")) ,
				'nomer_telepon' => '08',
				'email' => 'email@gmail.com',
				'status_transaksi' => 0,
				'waktu_transaksi' => date('Y-m-d  H:i:s'),
				'id_user' => $this->session->userdata('id_user'),
				'jumlah_transaksi' => 0,
				'jumlah_tunai' => 0
			);

			$this->Model_transaksi->tambah_transaksi($data, 'transaksi');

			redirect('pemilik/transaksi/penjualan/'. $id_transaksi);	
	}

	public function aksi_tambah_barang($id_transaksi, $id_barang)
	{
		$data = array(
			'id_transaksi' => $id_transaksi,
			'id_barang' => $id_barang,
			'waktu_transaksi' => date('Y-m-d  H:i:s'),
			'id_user' => $this->session->userdata('id_user'),
			'banyak' => 0,
			'jumlah' => 0
		);

		$this->Model_barang_transaksi->tambah_barang_transaksi($data, 'barang_transaksi');

		redirect('pemilik/transaksi/penjualan/' . $id_transaksi);
	}

	public function aksi_edit()
	{
		$where = $this->input->post('id_transaksi');

		$id_transaksi = $this->input->post('id_transaksi');
		$kode_transaksi = $this->input->post('kode_transaksi');
		$nama_transaksi = $this->input->post('nama_transaksi');
		$nama_singkat = $this->input->post('nama_singkat');
		$jumlah_stok = $this->input->post('jumlah_stok');
		$status_transaksi = $this->input->post('status_transaksi');
		$waktu_modifikasi = $this->input->post('waktu_modifikasi');
		$id_user = $this->input->post('id_user');

		$data['transaksi'] = $this->Model_transaksi->edit_transaksi($where, 'transaksi')->result();

		// cek jika ada gambar yang akan diupload
		$upload_gambar = $_FILES['gambar']['name'];

		if ($upload_gambar) {
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']      = '3072';
			$config['upload_path'] = './uploads/';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('gambar')) {
				$old_gambar = $data['transaksi']['gambar'];
				if ($old_gambar != 'default.jpg') {
					unlink(FCPATH . 'uploads/' . $old_gambar);
				}
				$new_gambar = $this->upload->data('file_name');
				$this->db->set('gambar', $new_gambar);
			} else {
				echo $this->upload->dispay_errors();
			}
		}
		$data = [
			'kode_transaksi' => $kode_transaksi,
			'nama_transaksi' => $nama_transaksi,
			'nama_singkat' => $nama_singkat,
			'jumlah_stok' => $jumlah_stok,
			'status_transaksi' => $status_transaksi,
			'waktu_modifikasi' => $waktu_modifikasi,
			'id_user' => $id_user
		];

		$where = [
			'id_transaksi' => $id_transaksi
		];

		$this->db->set($data);
		$this->db->where('id_transaksi', $id_transaksi);
		$this->db->update('transaksi');

		redirect('pemilik/transaksi');
		
	}

// 	$data['kat_harga']= $this->db->query("SELECT  * FROM harga_barang WHERE id_barang  = $id_barang")->result();
// foreach( $kat_harga as $kat_hrg) :
// if($jumlah >= $kat_hrg->jumlah_awal AND $jumlah <= $kat_hrg->jumlah_akhir){
// $harga = $jumlah * $kat_hrg->harga_jual;
// }

// endforeach;

Public function aksi_hapus_barang_transaksi($id_transaksi, $id_barang_transaksi){
		// $cari_barang = $this->db->query("SELECT * FROM barang_traksaksi WHERE id_barang_transaksi = $id_barang_transaksi ");
		// $hapus = $this->db->query("DELETE FROM barang_transaksi WHERE id_barang_transaksi = $id_barang_transaksi");
		$where = ['id_barang_transaksi' => $id_barang_transaksi];
		$this->Model_barang_transaksi->hapus_data($where, 'barang_transaksi');		
		redirect('pemilik/transaksi/penjualan/' . $id_transaksi);

}

// Jika klik bayar maka muncul alert oke atau cancel
Public function bayar()
{
$total = $this->input->post ('total');
}


}
