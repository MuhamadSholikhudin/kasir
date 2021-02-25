<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
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
		$data['barang'] = $this->db->get('barang')->result();
 
    	$this->load->view('templates/header');
    	$this->load->view('templates/sidebar');
    	$this->load->view('barang/index', $data);
    	$this->load->view('templates/footer');
	}

		
	public function tambah()
	{
		$data['kategori'] = [
			'susu', 'kopi', 'sabun mandi', 'pembersih baju', 'pembersih perabotan & rumah', 
			'sampo', 'rokok', 'mie', 'obat', 'obat nyamuk', 'larutan', 'bedak', 'jamu',	'pampes', 
			'pasta gigi', 'sikat gigi', 'kopi'
		];
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('barang/tambah_barang', $data);
		$this->load->view('templates/footer');
	}

	public function edit($id_barang)
	{
		$where = array('id_barang' => $id_barang);
		$data['barang'] = $this->Model_barang->edit_barang($where, 'barang')->result();
		$data['status'] = ['online', 'ditempat'];
		$data['untuk'] = ['Pria', 'Wanita', 'Anak', 'Lainnya'];
		$data['jenis_barang'] = [
			'susu', 'kopi', 'sabun mandi', 'pembersih baju',
			'pembersih perabotan & rumah', 'sampo', 'rokok', 'mie',
			'obat', 'obat nyamuk', 'larutan', 'bedak', 'jamu', 'pampes',
			'pasta gigi', 'sikat gigi', 'kopi', 'makanan ringan', 'minuman ringan'
		];

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('barang/edit_barang', $data);
		$this->load->view('templates/footer');
	}

	public function lihat($id_barang)
	{
		$where = array('id_barang' => $id_barang);
		$data['barang'] = $this->Model_barang->edit_barang($where, 'barang')->result();
		$data['status'] = ['online', 'ditempat'];

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('barang/lihat_barang', $data);
		$this->load->view('templates/footer');
	}

	public function aksi_tambah()
	{
		$kode_barang = $this->input->post('kode_barang');
		$nama_barang = $this->input->post('nama_barang');
		$nama_singkat = $this->input->post('nama_singkat');
		$jumlah_stok = $this->input->post('jumlah_stok');
		$untuk = $this->input->post('untuk');
		$jenis_barang = $this->input->post('jenis_barang');
		$status_barang = $this->input->post('status_barang');
		$waktu_modifikasi = $this->input->post('waktu_modifikasi');
		$id_user = $this->input->post('id_user');

		$gambar = $_FILES['gambar']['name'];
		if ($gambar = '') {
		} else {
			$config['upload_path'] = './uploads/barang/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				echo "Gambar Gagal Di Upload";
			} else {
				$gambar = $this->upload->data('file_name');
			}
			$data = array(
				'kode_barang' => $kode_barang,
				'nama_barang' => $nama_barang,
				'nama_singkat' => $nama_singkat,
				'jumlah_stok' => $jumlah_stok,
				'untuk' => $untuk,
				'jenis_barang' => $jenis_barang,
				'status_barang' => $status_barang,
				'waktu_modifikasi' => $waktu_modifikasi,
				'id_user' => $id_user,
				'gambar' => $gambar,
			);

			$this->Model_barang->tambah_barang($data, 'barang');

			redirect('pemilik/barang');
		}
		
	}

	public function aksi_edit()
	{
		$where = $this->input->post('id_barang');

		$id_barang = $this->input->post('id_barang');
		$kode_barang = $this->input->post('kode_barang');
		$nama_barang = $this->input->post('nama_barang');
		$nama_singkat = $this->input->post('nama_singkat');
		$jumlah_stok = $this->input->post('jumlah_stok');
		$untuk = $this->input->post('untuk');
		$jenis_barang = $this->input->post('jenis_barang');
		$status_barang = $this->input->post('status_barang');
		$waktu_modifikasi = $this->input->post('waktu_modifikasi');
		$id_user = $this->input->post('id_user');

		$data_barang = $this->db->query("SELECT * FROM barang WHERE id_barang = $where ")->row();

		// cek jika ada gambar yang akan diupload
		$upload_gambar = $_FILES['gambar']['name'];

		if ($upload_gambar) {
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']      = '10240';
			$config['upload_path'] = './uploads/barang/';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('gambar')) {
				$old_gambar = $data_barang->gambar;
				if ($old_gambar != 'default.jpg') {
					unlink(FCPATH . 'uploads/barang/' . $old_gambar);
				}
				$new_gambar = $this->upload->data('file_name');
				$this->db->set('gambar', $new_gambar);
			} else {
				echo $this->upload->dispay_errors();
			}
		}
		$data = [
			'kode_barang' => $kode_barang,
			'nama_barang' => $nama_barang,
			'nama_singkat' => $nama_singkat,
			'jumlah_stok' => $jumlah_stok,
			'untuk' => $untuk,
			'jenis_barang' => $jenis_barang,
			'status_barang' => $status_barang,
			'waktu_modifikasi' => $waktu_modifikasi,
			'id_user' => $id_user
		];

		$where = [
			'id_barang' => $id_barang
		];

		$this->db->set($data);
		$this->db->where('id_barang', $id_barang);
		$this->db->update('barang');

		redirect('pemilik/barang');
		
	}

	public function backup()
	{

		$this->load->dbutil();

		$prefs = array(
			'format' => 'zip',
			'filename' => 'my_db_backup.sql'
		);

		$backup = &$this->dbutil->backup($prefs);

		$db_name = 'backup-on-' . date("Y-m-d-H-i-s") . '.zip'; // file name
		$save  = 'backup/db/' . $db_name; // dir name backup output destination

		$this->load->helper('file');
		write_file($save, $backup);

		$this->load->helper('download');
		force_download($db_name, $backup);

		redirect('pemilik/barang');
	}


}
