<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Input_barang extends CI_Controller
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
        $this->load->library(array('excel', 'session'));

    }

    public function index()
    {
  
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('input_barang/index');
        $this->load->view('templates/footer');
    }

    public function import_excel()
    {
        if (isset($_FILES["fileExcel"]["name"])) {
            $path = $_FILES["fileExcel"]["tmp_name"];
            $object = PHPExcel_IOFactory::load($path);
            foreach ($object->getWorksheetIterator() as $worksheet) {
                $highestRow = $worksheet->getHighestRow();
                $highestColumn = $worksheet->getHighestColumn();
                for ($row = 2; $row <= $highestRow; $row++) {


                    // $cari_barang = $this->db->query("SELECT * FROM barang WHERE kode_barang = '$kode_barang' ")->num_rows();

                    // if($cari_barang < 1){
                        $nama_barang = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                        $kode_barang = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                        $jenis_barang = $worksheet->getCellByColumnAndRow(2, $row)->getValue();

                        $temp_data[] = array(
                            'kode_barang'    => $kode_barang,
                            'nama_barang'    => $nama_barang,
                        'jenis_barang'    => $jenis_barang,
                            'id_user'    => 1

                        );
                    // }else{
                    //     $temp_data = 0;
                    // }


                }
            }
            $this->load->model('Model_barang');
// if($temp_data){
    
// }else{
    
// }

$insert = $this->Model_barang->insert($temp_data);
            if ($insert) {
                $this->session->set_flashdata('pesan', "<script> alert('Data Barang Berhasil di Import ke Database ')</script>");

                // $this->session->set_flashdata('pesan', '<span class="glyphicon glyphicon-ok"></span> Data Berhasil di Import ke Database');
                // redirect($_SERVER['HTTP_REFERER']);
                redirect('pemilik/input_barang/');
            } else {
                $this->session->set_flashdata('pesan', "<script> alert('Terjadi Kesalahan ')</script>");
                redirect('pemilik/input_barang/');

                // $this->session->set_flashdata('pesan', '<span class="glyphicon glyphicon-remove"></span> Terjadi Kesalahan');
                // redirect($_SERVER['HTTP_REFERER']);
            }
        } else {
            // echo "";
            $this->session->set_flashdata('pesan', "<script> alert('Tidak ada file yang masuk ')</script>");
            redirect('pemilik/input_barang/');
        }
    }
}