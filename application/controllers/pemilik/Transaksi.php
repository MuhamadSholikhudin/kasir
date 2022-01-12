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
		$data['tot'] = $this->db->query("SELECT SUM(jumlah) as jumlah FROM barang_transaksi WHERE id_transaksi = $id_transaksi");

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
		if ($keyword == " ") {
			$barang_loop = 'nothing';
			echo json_encode($barang_loop);
		} elseif ($keyword == "") {
			$barang_loop = 'nothing';
			echo json_encode($barang_loop);
		} else {

			$barang = $this->Model_barang->get_barang($keyword);
			// $data['keca'] = $this->db->query("SELECT COUNT(kode_wilayah), kecamatan FROM wilayah GROUP BY kecamatan")->result();

			// if($hakakses == 3){

			// $keca = $this->dep_kategori->get_sub_desa($id_kec);
			if (count($barang) > 0) {

				$barang_loop = '';
				$barang_loop .= '<tr><th>Kode Barang</th><th>Nama Barang</th><th>Jumlah</th><th>Harga</th><th>Add</th></tr>';
				foreach ($barang as $brg) {

					$cek_hrg = $this->db->query("SELECT * FROM harga_barang WHERE id_barang= $brg->id_barang ");
					if($cek_hrg->num_rows() > 0){
						$hrg = $cek_hrg->row();
						// $barang_loop .= '<tr><td>' . $brg->kode_barang . '</td><td>' . $brg->nama_barang . '</td><td>' . $hrg->harga_bakul . '</td><td> <a href="' . base_url("pemilik/transaksi/aksi_tambah_barang/$pembeli/$brg->id_barang") . '" class="btn btn-danger"><i class="fa fa-plus" </i></a></td></tr>';
						$barang_loop .= '
					
						<tr>
						
							<td>' . $brg->kode_barang . '</td><td>' . $brg->nama_barang . '</td>
							<td>
							<form action="' . base_url("pemilik/transaksi/aksi_tambah_cari/") . '" method="POST" >
								<input type="number" class="form-control" name="jumlah_beli" value="1" min="1">
								<input type="hidden" class="form-control" name="pembeli" value="' . $pembeli . '">
								<input type="hidden" class="form-control" name="id_barang" value="' . $brg->id_barang . '">
								<button type="submit" id="klik' . $brg->id_barang . '" class="d-none"><i class="fa fa-plus"> </i></button>
							 </form>
								</td>
							<td>' . $hrg->harga_bakul . '</td>							
							<td>
							
							 <button id="cu' . $brg->id_barang . '" data-id="' . $brg->id_barang . '" class="btn btn-danger"><i class="fa fa-plus"> </i></button>
							 <script>
							 $("#cu' . $brg->id_barang . '").on("click", function() {
								const id = $(this).data("id");
								var button = "klik" + id;

								if (id == 0) {
								// 	var button = "klik" + id;
								// 	 document.getElementById(button).click;
								}else{
								document.getElementById(button).click();
								}
							});         
							 </script>
							 </td>
						
						</tr>
					';
					}else{
						// $barang_loop .= '<tr><td>' . $brg->kode_barang . '</td><td>' . $brg->nama_barang . '</td><td>' . $hrg->harga_bakul . '</td><td> <a href="' . base_url("pemilik/transaksi/aksi_tambah_barang/$pembeli/$brg->id_barang") . '" class="btn btn-danger"><i class="fa fa-plus" </i></a></td></tr>';
						$barang_loop .= '
					
						<tr>
						
							<td>' . $brg->kode_barang . '</td><td>' . $brg->nama_barang . '</td>
							<td>
							<form action="' . base_url("pemilik/transaksi/aksi_tambah_cari/") . '" method="POST" >
								<input type="number" class="form-control" name="jumlah_beli" value="1" min="1">
								<input type="hidden" class="form-control" name="pembeli" value="' . $pembeli . '">
								<input type="hidden" class="form-control" name="id_barang" value="' . $brg->id_barang . '">
								<button type="submit" id="klik' . $brg->id_barang . '" class="d-none"><i class="fa fa-plus"> </i></button>
							 </form>
								</td>
							<td>0</td>							
							<td>
							
							 <button id="cu' . $brg->id_barang . '" data-id="' . $brg->id_barang . '" class="btn btn-danger"><i class="fa fa-plus"> </i></button>
							 <script>
							 $("#cu' . $brg->id_barang . '").on("click", function() {
								const id = $(this).data("id");
								var button = "klik" + id;

								if (id == 0) {
								// 	var button = "klik" + id;
								// 	 document.getElementById(button).click;
								}else{
								document.getElementById(button).click();
								}
							});         
							 </script>
							 </td>
						
						</tr>
					';
					}
					
				}
				echo json_encode($barang_loop);
			} else {
				$barang_loop = 'nothing';
				echo json_encode($barang_loop);
			}
			// }
		}
	}

	public function aksi_tambah_cari()
	{

		$id_transaksi = $this->input->post('pembeli');
		$id_barang = $this->input->post('id_barang');
		$jumlah = $this->input->post('jumlah_beli');

		// var_dump($jumlah);
		$cek_barang_tran = $this->db->query("SELECT * FROM barang_transaksi WHERE id_transaksi = '$id_transaksi' AND id_barang = '$id_barang' ");
		// Cek sudah di pesan
		if($cek_barang_tran->num_rows() > 0){
			$t_barang_transaksi = $cek_barang_tran->row();

			$id_barang_transaksi = $t_barang_transaksi->id_barang_transaksi;
			$banyak_barang_transaksi = $t_barang_transaksi->banyak;

			$nbanyak = $banyak_barang_transaksi + $jumlah;
			$cek_bakul = $this->db->query("SELECT * FROM transaksi WHERE id_transaksi = '$id_transaksi'  ")->row();
			$car_bar = $this->db->query("SELECT * FROM harga_barang WHERE id_barang = $id_barang ")->result();
			//cek bakul atau tidak
			if ($cek_bakul->jenis_pelanggan == 'bakul') {
				foreach ($car_bar as $cari_barang) :
					if ($nbanyak >= $cari_barang->jumlah_awal && $nbanyak <= $cari_barang->jumlah_akhir) {
						$njumlah = $nbanyak * $cari_barang->harga_bakul;
						// $this->db->set('banyak', $byk);
						$this->db->set('jumlah', $njumlah);
					}
				endforeach;
			} else {
				foreach ($car_bar as $cari_barang) :
					if ($nbanyak >= $cari_barang->jumlah_awal && $nbanyak <= $cari_barang->jumlah_akhir) {
						$njumlah = $nbanyak * $cari_barang->harga_umum;
						// $this->db->set('banyak', $byk);
						$this->db->set('jumlah', $njumlah);
					} 
				endforeach;
				// $njumlah = $byk * $car_bar->harga_jual;
			}
			// $njumlah = $nbanyak * $car_bar->harga_jual;

			$data = array(
				'banyak' => $nbanyak,
				// 'jumlah' => 1,
				'waktu_transaksi' => date('Y-m-d  H:i:s'),
				'id_user' => $this->session->userdata('id_user')
			);

			$this->db->set($data);
			$this->db->where('id_barang_transaksi', $id_barang_transaksi);
			$this->db->update('barang_transaksi');
			redirect('pemilik/transaksi/penjualan/' . $id_transaksi);

		// Cek belum di pesan
		}else{
			$car_bar = $this->db->query("SELECT * FROM harga_barang WHERE id_barang = $id_barang ")->result();
			$nbanyak = $jumlah;
			$cek_bakul = $this->db->query("SELECT * FROM transaksi WHERE id_transaksi = '$id_transaksi'  ")->row();

			//cek bakul atau tidak
			$i = 0;
			if ($cek_bakul->jenis_pelanggan == 'bakul') {
				foreach ($car_bar as $cari_barang) :
					if ($nbanyak >= $cari_barang->jumlah_awal && $nbanyak <= $cari_barang->jumlah_akhir) {
						$njumlah = $jumlah * $cari_barang->harga_bakul;
						$i++;
					}
					
				endforeach;
				if ($i != 0) {
					$data = array(
						'id_transaksi' => $id_transaksi,
						'id_barang' => $id_barang,
						'waktu_transaksi' => date('Y-m-d  H:i:s'),
						'id_user' => $this->session->userdata('id_user'),
						'banyak' => 1,
						'jumlah' => $njumlah
					);
				} else {
					$data = array(
						'id_transaksi' => $id_transaksi,
						'id_barang' => $id_barang,
						'waktu_transaksi' => date('Y-m-d  H:i:s'),
						'id_user' => $this->session->userdata('id_user'),
						'banyak' => 1,
						'jumlah' => 0
					);
				}
				// var_dump($data);
				$this->Model_barang_transaksi->tambah_barang_transaksi($data, 'barang_transaksi');
				redirect('pemilik/transaksi/penjualan/' . $id_transaksi);

				// Tidak bakul
			} else {
				$i = 0;
				foreach ($car_bar as $cari_barang) :
					if ($nbanyak >= $cari_barang->jumlah_awal && $nbanyak <= $cari_barang->jumlah_akhir) {
						$njumlah = 1 * $cari_barang->harga_umum;
						$i++;
					} 
				endforeach;

				if ($i != 0) {
					$data = array(
						'id_transaksi' => $id_transaksi,
						'id_barang' => $id_barang,
						'waktu_transaksi' => date('Y-m-d  H:i:s'),
						'id_user' => $this->session->userdata('id_user'),
						'banyak' => 1,
						'jumlah' => $njumlah
					);
				} else {
					$data = array(
						'id_transaksi' => $id_transaksi,
						'id_barang' => $id_barang,
						'waktu_transaksi' => date('Y-m-d  H:i:s'),
						'id_user' => $this->session->userdata('id_user'),
						'banyak' => 1,
						'jumlah' => 0
					);
				}

				$this->Model_barang_transaksi->tambah_barang_transaksi($data, 'barang_transaksi');
				redirect('pemilik/transaksi/penjualan/' . $id_transaksi);
			}
		}


	}


	function barcode()
	{
		// $this->load->Model('Model_barang', 'cari_barang', TRUE);
		// $keyword = $this->input->post('keyword');
		$keyword = $this->input->post('keyword', TRUE);
		$pembeli = $this->input->post('pembeli', TRUE);

		// $keyword = trim(strip_tags($_POST['keyword']));
		if ($keyword == " ") {
			$barang_transaksi = $this->db->query("SELECT * FROM barang_transaksi WHERE id_transaksi='$pembeli' ")->result();

			$barang_loop = '';
			$no = 1;
			$barang_loop .= '';
			foreach ($barang_transaksi as $brg) {
				$barang_tampil = $this->db->query("SELECT * FROM barang WHERE id_barang= $brg->id_barang ")->row();

				$barang_loop .= '<tr><td>' . $no++ . '  </td><td>' . $barang_tampil->nama_barang . '</td><td><input type="number" id="t' . $no++ . '" name="banyak" value=' . $brg->banyak . ' " min="1" class="form-control"></td><td>' . $brg->jumlah . '</td><td><a href="' . base_url("pemilik/transaksi/aksi_hapus_barang_transaksi/") . $brg->id_transaksi . ' / ' . $brg->id_barang_transaksi . '" class="btn btn-danger"><i class="fa fa-times"></i></a></td></tr>';
			}
			echo json_encode($barang_loop);
		} elseif ($keyword == "") {
			$barang_transaksi = $this->db->query("SELECT * FROM barang_transaksi WHERE id_transaksi='$pembeli' ")->result();

			$barang_loop = '';
			$no = 1;
			$barang_loop .= '';
			foreach ($barang_transaksi as $brg) {
				$barang_tampil = $this->db->query("SELECT * FROM barang WHERE id_barang= $brg->id_barang ")->row();

				$barang_loop .= '<tr><td>' . $no++ . '  </td><td>' . $barang_tampil->nama_barang . '</td><td><input type="number" id="t' . $no++ . '" name="banyak" value=' . $brg->banyak . ' " min="1" class="form-control"></td><td>' . $brg->jumlah . '</td><td><a href="' . base_url("pemilik/transaksi/aksi_hapus_barang_transaksi/") . $brg->id_transaksi . ' / ' . $brg->id_barang_transaksi . '" class="btn btn-danger"><i class="fa fa-times"></i></a></td></tr>';
			}
			echo json_encode($barang_loop);
		} else {

			$barang = $this->db->query("SELECT * FROM barang WHERE  kode_barang = '$keyword' ");

			if ($barang->num_rows() > 0) {
				// Cek barang yang di pesan 
				$bar = $barang->row();
				$cek_barang_tran = $this->db->query("SELECT * FROM barang_transaksi WHERE id_transaksi = '$pembeli' AND id_barang = $bar->id_barang ");


				if ($cek_barang_tran->num_rows() > 0) {
					//Barang sudah ada

					//cek id_barang transaksi
					$t_barang_transaksi = $cek_barang_tran->row();

					$id_barang_transaksi = $t_barang_transaksi->id_barang_transaksi;
					$banyak_barang_transaksi = $t_barang_transaksi->banyak;
					$nbanyak = $banyak_barang_transaksi + 1;
					$cek_bakul = $this->db->query("SELECT * FROM transaksi WHERE id_transaksi = '$pembeli'  ")->row();
					$car_bar = $this->db->query("SELECT * FROM harga_barang WHERE id_barang = $bar->id_barang ")->result();
					//cek bakul atau tidak
					if ($cek_bakul->jenis_pelanggan == 'bakul') {
						$i = 0;
						foreach ($car_bar as $cari_barang) :
							if ($nbanyak >= $cari_barang->jumlah_awal && $nbanyak <= $cari_barang->jumlah_akhir) {
								$njumlah = $nbanyak * $cari_barang->harga_bakul;
								// $this->db->set('banyak', $byk);
								$i++;
							}
						endforeach;

						if ($i != 0) {
							$this->db->set('jumlah', $njumlah);
						} else {
							$this->db->set('jumlah', 0);					
						}
					} else {
						$i = 0;
						foreach ($car_bar as $cari_barang) :
							if ($nbanyak >= $cari_barang->jumlah_awal && $nbanyak <= $cari_barang->jumlah_akhir) {
								$njumlah = $nbanyak * $cari_barang->harga_umum;
								// $this->db->set('banyak', $byk);
								$i++;
							} 
						endforeach;
						if ($i != 0) {
							$this->db->set('jumlah', $njumlah);
						} else {
							$this->db->set('jumlah', 0);
						}
						// $njumlah = $byk * $car_bar->harga_jual;
					}
					// $njumlah = $nbanyak * $car_bar->harga_jual;

					$data = array(
						'banyak' => $nbanyak,
						// 'jumlah' => 1,
						'waktu_transaksi' => date('Y-m-d  H:i:s'),
						'id_user' => $this->session->userdata('id_user')
					);

					$this->db->set($data);
					$this->db->where('id_barang_transaksi', $id_barang_transaksi);
					$this->db->update('barang_transaksi');

					$barang_transaksi = $this->db->query("SELECT * FROM barang_transaksi WHERE id_transaksi='$pembeli' ")->result();

					$barang_loop = '';
					$no = 1;
					$barang_loop .= '';
					foreach ($barang_transaksi as $brg) {
						$barang_tampil = $this->db->query("SELECT * FROM barang WHERE id_barang= $brg->id_barang ")->row();

						$barang_loop .= '<tr><td>' . $no++ . '  </td><td>' . $barang_tampil->nama_barang . '</td><td><input type="number" id="t' . $no++ . '" name="banyak" value=' . $brg->banyak . ' " min="1" class="form-control"></td><td>' . $brg->jumlah . '</td><td><a href="' . base_url("pemilik/transaksi/aksi_hapus_barang_transaksi/") . $brg->id_transaksi . ' / ' . $brg->id_barang_transaksi . '" class="btn btn-danger"><i class="fa fa-times"></i></a></td></tr>';
					}
					echo json_encode($barang_loop);
				} else {
					//Barang belum ada
					$cek_bakul = $this->db->query("SELECT * FROM transaksi WHERE id_transaksi = '$pembeli'  ")->row();
					$car_bar = $this->db->query("SELECT * FROM harga_barang WHERE id_barang = $bar->id_barang ")->result();
					//cek bakul atau tidak
					if ($cek_bakul->jenis_pelanggan == "bakul") {
						$i = 0;
						foreach ($car_bar as $cari_barang) :
							if (1 >= $cari_barang->jumlah_awal && 1 <= $cari_barang->jumlah_akhir) {
								$i++;
								$njumlah = 1 * $cari_barang->harga_bakul;
							
							}
						endforeach;
						if ($i != 0) {
							$data = array(
								'id_transaksi' => $pembeli,
								'id_barang' => $bar->id_barang,
								'waktu_transaksi' => date('Y-m-d  H:i:s'),
								'id_user' => $this->session->userdata('id_user'),
								'banyak' => 1,
								'jumlah' => $njumlah
							);
						} else {
							$data = array(
								'id_transaksi' => $pembeli,
								'id_barang' => $bar->id_barang,
								'waktu_transaksi' => date('Y-m-d  H:i:s'),
								'id_user' => $this->session->userdata('id_user'),
								'banyak' => 1,
								'jumlah' => 0
							);
						}
						$this->db->insert('barang_transaksi', $data);
					} else {
						$i = 0;
						foreach ($car_bar as $cari_barang) :
							if (1 >= $cari_barang->jumlah_awal && 1 <= $cari_barang->jumlah_akhir) {
								$i++;
							
							} 
						endforeach;
						if ($i != 0) {

							$njumlah = 1 * $cari_barang->harga_umum;
							// $this->db->set('banyak', $byk);
							// $this->db->set('jumlah', $njumlah);
							$data = array(
								'id_transaksi' => $pembeli,
								'id_barang' => $bar->id_barang,
								'waktu_transaksi' => date('Y-m-d  H:i:s'),
								'id_user' => $this->session->userdata('id_user'),
								'banyak' => 1,
								'jumlah' => $njumlah
							);
						} else {
					
							$data = array(
								'id_transaksi' => $pembeli,
								'id_barang' => $bar->id_barang,
								'waktu_transaksi' => date('Y-m-d  H:i:s'),
								'id_user' => $this->session->userdata('id_user'),
								'banyak' => 1,
								'jumlah' => 0
							);
						}
						$this->db->insert('barang_transaksi', $data);
					}

					$barang_transaksi = $this->db->query("SELECT * FROM barang_transaksi WHERE id_transaksi='$pembeli' ")->result();

					$barang_loop = '';
					$no = 1;
					$barang_loop .= '';
					foreach ($barang_transaksi as $brg) {
						$barang_tampil = $this->db->query("SELECT * FROM barang WHERE id_barang= $brg->id_barang ")->row();

						$barang_loop .= '<tr><td>' . $no++ . '  </td><td>' . $barang_tampil->nama_barang . '</td><td><input type="number" id="t' . $no++ . '" name="banyak" value=' . $brg->banyak . ' " min="1" class="form-control"></td><td>' . $brg->jumlah . '</td><td><a href="' . base_url("pemilik/transaksi/aksi_hapus_barang_transaksi/") . $brg->id_transaksi . ' / ' . $brg->id_barang_transaksi . '" class="btn btn-danger"><i class="fa fa-times"></i></a></td></tr>';
					}
					echo json_encode($barang_loop);
				}
			} else {
				$barang_transaksi = $this->db->query("SELECT * FROM barang_transaksi WHERE id_transaksi='$pembeli' ")->result();

				$barang_loop = '';
				$no = 1;
				$barang_loop .= '';
				foreach ($barang_transaksi as $brg) {
					$barang_tampil = $this->db->query("SELECT * FROM barang WHERE id_barang= $brg->id_barang ")->row();

					$barang_loop .= '<tr><td>' . $no++ . '  </td><td>' . $barang_tampil->nama_barang . '</td><td><input type="number" id="t' . $no++ . '" name="banyak" value=' . $brg->banyak . ' " min="1" class="form-control"></td><td>' . $brg->jumlah . '</td><td><a href="' . base_url("pemilik/transaksi/aksi_hapus_barang_transaksi/") . $brg->id_transaksi . ' / ' . $brg->id_barang_transaksi . '" class="btn btn-danger"><i class="fa fa-times"></i></a></td></tr>';
				}
				echo json_encode($barang_loop);
			}
			// }
		}
	}

	public function total_belanja()
	{
		$pembeli = $this->input->post('pembeli', TRUE);
		$total = $this->db->query("SELECT SUM(jumlah) as jumlah FROM barang_transaksi WHERE id_transaksi = $pembeli")->row();


		$tot =  $total->jumlah;
		echo json_encode($tot);
	}


	public function input_table()
	{
		$byk = $this->input->post('byk', TRUE);
		$id_barang_transaksi = $this->input->post('id_barang_transaksi', TRUE);
		$id_transaksi = $this->input->post('id_transaksi', TRUE);

		$cek_barang_tran = $this->db->query("SELECT * FROM barang_transaksi WHERE id_transaksi = '$id_transaksi' AND id_barang_transaksi = $id_barang_transaksi ")->row();

		$car_bar = $this->db->query("SELECT * FROM harga_barang WHERE id_barang = $cek_barang_tran->id_barang ")->result();

		$cek_bakul = $this->db->query("SELECT * FROM transaksi WHERE id_transaksi = '$id_transaksi'  ")->row();
		//cek bakul atau tidak
		if ($cek_bakul->jenis_pelanggan == 'bakul') {
			$i = 0;
			foreach ($car_bar as $cari_barang) :
				if ($byk >= $cari_barang->jumlah_awal && $byk <= $cari_barang->jumlah_akhir) {
					$njumlah = $byk * $cari_barang->harga_bakul;
					$i++;
					
					// $this->db->set('banyak', $byk);
					// $this->db->set('jumlah', $njumlah);
				}
			endforeach;
			
			if ($i != 0) {

				$this->db->set('jumlah', $njumlah);
			} else {
				$this->db->set('jumlah', 0);
			}
		} else {
			$i = 0;
			foreach ($car_bar as $cari_barang) :

				if ($byk >= $cari_barang->jumlah_awal && $byk <= $cari_barang->jumlah_akhir) {
					$njumlah = $byk * $cari_barang->harga_umum;
					$i++;
					
					// $this->db->set('banyak', $byk);
					// $this->db->set('jumlah', $njumlah);
				}
			endforeach;
			if ($i != 0) {

				$this->db->set('jumlah', $njumlah);
			} else {
				$this->db->set('jumlah', 0);
			}
			// $njumlah = $byk * $car_bar->harga_jual;
		}

		$data = array(
			'banyak' => $byk,
			'jumlah' => $njumlah,
			'waktu_transaksi' => date('Y-m-d  H:i:s'),
			'id_user' => $this->session->userdata('id_user')
		);

		$this->db->set($data);
		$this->db->where('id_barang_transaksi', $id_barang_transaksi);
		$this->db->update('barang_transaksi');

		$jumlah = $this->db->query("SELECT SUM(jumlah) as jml FROM barang_transaksi WHERE id_transaksi = $id_transaksi AND id_barang_transaksi = $id_barang_transaksi")->row();


		$jmlh =  $jumlah->jml;
		echo json_encode($jmlh);
	}

	public function jml()
	{
		$jml = $this->input->post('jml', TRUE);
		$id_barang_transaksi = $this->input->post('id_barang_transaksi', TRUE);
		$id_transaksi = $this->input->post('id_transaksi', TRUE);

		$cek_barang_tran = $this->db->query("SELECT * FROM barang_transaksi WHERE id_transaksi = '$id_transaksi' AND id_barang_transaksi = $id_barang_transaksi ")->row();

		$data = array(
			'jumlah' => $jml,
			'waktu_transaksi' => date('Y-m-d  H:i:s'),
			'id_user' => $this->session->userdata('id_user')
		);

		$this->db->set($data);
		$this->db->where('id_barang_transaksi', $id_barang_transaksi);
		$this->db->update('barang_transaksi');

		$jumlah = $this->db->query("SELECT SUM(jumlah) as jml FROM barang_transaksi WHERE id_transaksi = $id_transaksi AND id_barang_transaksi = $id_barang_transaksi")->row();

		$jmlh =  $jumlah->jml;
		echo json_encode($jmlh);
	}

	public function ceked()
	{
		$id_barang_transaksi = $this->input->post('id_barang_transaksi', TRUE);
		$cek = $this->input->post('cek', TRUE);
		$id_transaksi = $this->input->post('id_transaksi', TRUE);
		$ceked = $this->db->query("SELECT * FROM barang_transaksi WHERE id_transaksi = $id_transaksi AND id_barang_transaksi = $id_barang_transaksi")->row();

		if ($ceked->cek == 1) {
			$this->db->set('cek', 0);
			$this->db->where('id_barang_transaksi', $id_barang_transaksi);
			$this->db->update('barang_transaksi');
		} else {
			$this->db->set('cek', 1);
			$this->db->where('id_barang_transaksi', $id_barang_transaksi);
			$this->db->update('barang_transaksi');
		}

		$tot = "Berhasil";
		echo json_encode($tot);
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

		$car_bar = $this->db->query("SELECT * FROM harga_barang WHERE id_barang = $id_barang ")->result();

		foreach ($car_bar as $cari_barang) :
			if ($banyak >= $cari_barang->jumlah_awal && $banyak <= $cari_barang->jumlah_akhir) {
				$jumlah = $banyak * $cari_barang->harga_jual;
				$this->db->set('banyak', $banyak);
				$this->db->set('jumlah', $jumlah);
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
			'nama_pembeli' => 'pembeli' . (strtotime("now")),
			'nomer_telepon' => '08',
			'email' => 'email@gmail.com',
			'status_transaksi' => 0,
			'jenis_pelanggan' => 'umum',
			'waktu_transaksi' => date('Y-m-d  H:i:s'),
			'id_user' => $this->session->userdata('id_user'),
			'jumlah_transaksi' => 0,
			'jumlah_tunai' => 0
		);

		$this->Model_transaksi->tambah_transaksi($data, 'transaksi');

		redirect('pemilik/transaksi/penjualan/' . $id_transaksi);
	}

	public function aksi_tambah_barang($id_transaksi, $id_barang)
	{

		$car_bar = $this->db->query("SELECT * FROM harga_barang WHERE id_barang = $id_barang ")->result();
		$nbanyak = 1;
		$cek_bakul = $this->db->query("SELECT * FROM transaksi WHERE id_transaksi = '$id_transaksi'  ")->row();
		//cek bakul atau tidak
		if ($cek_bakul->jenis_pelanggan == 'bakul') {
			foreach ($car_bar as $cari_barang) :
				if ($nbanyak >= $cari_barang->jumlah_awal && $nbanyak <= $cari_barang->jumlah_akhir) {
					$njumlah = 1 * $cari_barang->harga_bakul;
					$data = array(
						'id_transaksi' => $id_transaksi,
						'id_barang' => $id_barang,
						'waktu_transaksi' => date('Y-m-d  H:i:s'),
						'id_user' => $this->session->userdata('id_user'),
						'banyak' => 1,
						'jumlah' => $njumlah
					);
				}else{
					$data = array(
						'id_transaksi' => $id_transaksi,
						'id_barang' => $id_barang,
						'waktu_transaksi' => date('Y-m-d  H:i:s'),
						'id_user' => $this->session->userdata('id_user'),
						'banyak' => 1,
						'jumlah' => 0
					);
				}
			endforeach;
			$this->Model_barang_transaksi->tambah_barang_transaksi($data, 'barang_transaksi');
			redirect('pemilik/transaksi/penjualan/' . $id_transaksi);
		} else {
			foreach ($car_bar as $cari_barang) :
				if ($nbanyak >= $cari_barang->jumlah_awal && $nbanyak <= $cari_barang->jumlah_akhir) {
					$njumlah = 1 * $cari_barang->harga_umum;
					$data = array(
						'id_transaksi' => $id_transaksi,
						'id_barang' => $id_barang,
						'waktu_transaksi' => date('Y-m-d  H:i:s'),
						'id_user' => $this->session->userdata('id_user'),
						'banyak' => 1,
						'jumlah' => $njumlah
					);
				}else{
					$data = array(
						'id_transaksi' => $id_transaksi,
						'id_barang' => $id_barang,
						'waktu_transaksi' => date('Y-m-d  H:i:s'),
						'id_user' => $this->session->userdata('id_user'),
						'banyak' => 1,
						'jumlah' => 0
					);
				}
			endforeach;
			$this->Model_barang_transaksi->tambah_barang_transaksi($data, 'barang_transaksi');
			redirect('pemilik/transaksi/penjualan/' . $id_transaksi);
		}
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


	public function aksi_hapus_barang_transaksi($id_transaksi, $id_barang_transaksi)
	{
		$where = ['id_barang_transaksi' => $id_barang_transaksi];
		$this->Model_barang_transaksi->hapus_data($where, 'barang_transaksi');
		redirect('pemilik/transaksi/penjualan/' . $id_transaksi);
	}

	// Jika klik bayar maka muncul alert oke atau cancel
	public function bayar()
	{
		$id_transaksi = $this->input->post('id_transaksi');
		$total = $this->input->post('total');
		$bayar = $this->input->post('bayar');
		// $id_user = $this->input->post('id_user');
		// $total = $this->input->post('kembali');

		$data = [
			'jumlah_transaksi' => $total,
			'jumlah_tunai' => $bayar,
			'status_transaksi' => 1,
			'id_user' => $this->session->userdata('id_user')
		];
		$this->db->set($data);
		$this->db->where('id_transaksi', $id_transaksi);
		$this->db->update('transaksi');

		// redirect('pemilik/transaksi/penjualan/' . $id_transaksi);
		$byr =  "Berhasil di simpan";
		echo json_encode($byr);
	}

	// Jika klik bayar maka muncul alert oke atau cancel
	public function edit_pembeli()
	{
		$id_tran = $this->input->post('id_tran');
		$pembeli = $this->input->post('pembeli');
		$jenis_pelanggan = $this->input->post('jenis_pelanggan');


		$data = [
			'nama_pembeli' => $pembeli,
			'jenis_pelanggan' => $jenis_pelanggan
		];

		$this->db->set($data);
		$this->db->where('id_transaksi', $id_tran);
		$this->db->update('transaksi');

		redirect('pemilik/transaksi/penjualan/' . $id_tran);
	}

	public function cetak_transaksi($id_transaksi)
	{
		$data['transaksi'] = $this->db->query("SELECT * FROM transaksi WHERE id_transaksi = '$id_transaksi' ")->row();
		$data['barang_transaksi'] = $this->db->query("SELECT * FROM barang_transaksi WHERE id_transaksi = '$id_transaksi' ")->result();
		$data['barang_transaksi'] = $this->db->query("SELECT * FROM barang_transaksi WHERE id_transaksi = '$id_transaksi' ")->result();

		$this->load->view('cetak/transaksi', $data);
	}
}
