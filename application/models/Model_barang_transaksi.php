<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_barang_transaksi extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('barang_transaksi');
    }

    public function tambah_barang_transaksi($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_barang_transaksi($where, $table)
    {
        return $this->db->get_where($table, $where);

    }

    public function update_data($where, $data, $table)
    {
         $this->db->where($where);
         $this->db->update($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }


    function get_barang_transaksi($keyword)
    {
        $query = $this->db->query("SELECT * FROM barang_transaksi WHERE  kode_barang_transaksi LIKE '%$keyword%' OR nama_barang_transaksi LIKE '%$keyword%' ");
        return $query->result();
    }

    public function find($id)
    {
        $result = $this->db->where('id_brg', $id)
        ->limit(1)
        ->get('tb_barang_transaksi');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }

    public function detail_brg($id_brg){
$result = $this->db->where('id_brg', $id_brg)->get('tb_barang_transaksi');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('tb_barang_transaksi');
        $this->db->like('nama_brg', $keyword);
        $this->db->or_like('kategori', $keyword);
        $this->db->or_like('harga', $keyword);
        $this->db->or_like('keterangan', $keyword);
        

        return $this->db->get()->result();
    }
}
