<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
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
		$data['user'] = $this->db->get('user')->result();
 
    	$this->load->view('templates/header');
    	$this->load->view('templates/sidebar');
    	$this->load->view('user/index', $data);
    	$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['bagian'] = ['karyawan', 'pemilik'];
		$data['status'] = ['Aktif', 'Tidak-Aktif'];
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('user/tambah_user');
		$this->load->view('templates/footer');
	}

	public function edit($id_user)
	{
		$where = array('id_user' => $id_user);
		$data['user'] = $this->Model_user->edit_user($where, 'user')->result();
		$data['bagian'] = ['karyawan', 'pemilik'];
		$data['status'] = ['Aktif', 'Tidak-Aktif'];

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('user/edit_user', $data);
		$this->load->view('templates/footer');
	}

	public function aksi_tambah(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$bagian = $this->input->post('bagian');
		$status = $this->input->post('status');


		$data = array(
			'username' => $username,
			'password' => $password,
			'nama_lengkap' => $nama_lengkap,
			'bagian' => $bagian,
			'status' => $status
		);

		$this->Model_user->tambah_user($data, 'user');
		$this->session->set_flashdata("message", "<script>Swal.fire('SUKSES', 'DATA PENDAFTARAN BERHASIL DI TAMBAHKAN', 'success')</script>");

		redirect('pemilik/user');
	}

	public function aksi_edit()
	{
		$id_user = $this->input->post('id_user');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$bagian = $this->input->post('bagian');
		$status = $this->input->post('status');

		$data = [
			'username' => $username,
			'password' => $password,
			'nama_lengkap' => $nama_lengkap,
			'bagian' => $bagian,
			'status' => $status
		];

		$where = [
			'id_user' => $id_user
		];

		$this->Model_user->update_data($where, $data, 'user');

		redirect('pemilik/user');
	}
 
}
