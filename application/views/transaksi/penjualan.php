<div class="right_col" role="main" style="min-height: 4546px; ">
    <div class>



        <div class="clearfix"></div>

        <div class="row">
            <div class="col-lg-12 main-chart">
                <form action="" method="post">
                <h3>Keranjang Penjualan
                    <?php foreach ($transaksi as $tran) : ?>
                            <input type="text" id="pembeli" name="pembeli" value="<?= $tran->nama_pembeli ?>">
                            <button class="btn btn-success" type="submit">Edit</button>
                            <?php endforeach; ?>
                        </h3>
                    </form>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4><i class="fa fa-search"></i> Cari Barang</h4>
                            </div>
                            <div class="panel-body">
                                <?php foreach ($transaksi as $tran) : ?>
                                    <input type="text" id="cari" class="form-control" name="cari" placeholder="Masukan : Kode / Nama Barang  [ENTER]">
                                    <input type="text" id="pembeli" class="form-control d-none" name="pembeli" value="<?= $tran->id_transaksi ?>">
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-8 mb-3">
                        <div class="card">
                            <h5 class="card-header"><i class="fa fa-list"></i> Hasil Pencarian</h5>
                            <div class="card-body">

                                <table id="hasil_cari" class="table" border="1">

                                </table>
                                <div id="tunggu"></div>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4><i class="fa fa-shopping-cart"></i> KASIR
                                <a class="btn btn-danger pull-right" style="margin-top:-0.5pc;" href="fungsi/hapus/hapus.php?penjualan=jual">
                                    <b>RESET KERANJANG</b>
                                </a>
                            </h4>
                        </div>
                        <div class="panel-body">
                            <div id="keranjang">
                                <table class="table table-bordered">
                                    <tr>
                                        <td><b>Tanggal</b></td>
                                        <td><input type="text" readonly="readonly" class="form-control" value="<?= date('Y-m-d H:i:s') ?>" name="tgl"></td>
                                    </tr>
                                </table>
                                <table class="table table-bordered" id="example1">
                                    <thead>
                                        <tr>
                                            <td> No</td>
                                            <td> Nama Barang</td>
                                            <td style="width:10%;"> Jumlah</td>
                                            <td style="width:20%;"> Total</td>
                                            <td> Kasir</td>
                                            <td> Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($barang_transaksi as $brg_trs) : ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td>
                                                    <?php $barang = $this->db->query("SELECT * FROM barang WHERE id_barang = $brg_trs->id_barang ");
                                                    $brg = $barang->row();

                                                    ?>
                                                    <?= $brg->nama_barang ?>

                                                </td>
                                                <td>
                                                    <form method="POST" action="<?= base_url("pemilik/transaksi/edit_banyak/") .  $brg_trs->id_barang_transaksi ?>">
                                                        <input type="number" name="banyak" value="<?= $brg_trs->banyak ?>" min="0" class="form-control">
                                                        <input type="hidden" name="id_barang_transaksi" value="<?= $brg_trs->id_barang_transaksi ?>" class="form-control">
                                                        <input type="hidden" name="id_transaksi" value="<?= $brg_trs->id_transaksi ?>" class="form-control">
                                                        <input type="hidden" name="id_barang" value="<?= $brg_trs->id_barang ?>" class="form-control">
                                                </td>
                                                <td>Rp. <?= $brg_trs->jumlah ?>,-</td>
                                                <td><?= $brg_trs->id_user ?></td>
                                                <td>
                                                    <button type="submit" class="btn btn-warning">Update</button>
                                                    </form>
                                                    <a href="<?= base_url("pemilik/transaksi/aksi_hapus_barang_transaksi/") . $brg_trs->id_transaksi . '/' . $brg_trs->id_barang_transaksi ?>" class="btn btn-danger"><i class="fa fa-times"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <br />

                                <div id="kasirnya">
                                    <table class="table table-stripped">

                                        <form method="POST" action="<?= base_url("pemilik/transaksi/bayar") ?>">


                                            <tr>
                                                <td>Total Semua </td>
                                                <td>
                                                    <?php foreach ($barang_transaksi as $brg_trs) :
                                                        $tot = $this->db->query("SELECT SUM(jumlah) as jumlah FROM barang_transaksi WHERE id_transaksi = $brg_trs->id_transaksi");
                                                        if ($tot->num_rows() > 0) {
                                                            $total = $tot->row(); ?>
                                                            <input type="number" id="total" class="form-control" name="jumlah_transaksi" value="<?= $total->jumlah ?>">
                                                        <?php } elseif ($tot->num_rows() < 1) { ?>
                                                            <input type="number" id="total" class="form-control" name="jumlah_transaksi" value="0">

                                                    <?php }

                                                    endforeach;                 ?>

                                                    <?php foreach ($transaksi as $tran) : ?>
                                                        <input type="number" id="id_transaksi" class="form-control d-none" name="id_transaksi" value="<?= $tran->id_transaksi ?>">

                                                </td>

                                                <td>Bayar </td>
                                                <td>

                                                    <input type="number" id="bayar" class="form-control" name="jumlah_tunai" value="<?= $tran->jumlah_tunai ?>"></td>

                                                <td><button class="btn btn-success" id="btn_bayar"><i class="fa fa-shopping-cart"></i> Bayar</button>

                                                    <a class="btn btn-danger" href="fungsi/hapus/hapus.php?penjualan=jual">
                                                        <b>Ke Index</b></a></td>
                                                </td>
                                            </tr>
                                        </form>
                                        <tr>
                                            <td>Kembali</td>
                                            <td><input type="number" id="kembali" value="<?= $tran->jumlah_tunai - $tran->jumlah_transaksi ?>" class="form-control"></td>
                                            <td></td>
                                        <?php endforeach; ?>
                                        <td>
                                            <?php foreach ($transaksi as $tran) : ?>
                                                <?php if ($tran->status_transaksi > 0) { ?>
                                                    <input type="text" id="id_transaksi" class="form-control d-none" name="id_transaksi" value="<?= $tran->jumlah_transaksi ?>">
                                                    <a href="<?= 'isi' ?>" target="_blank">
                                                        <button class="btn btn-warning">
                                                            <i class="fa fa-print"></i> Print Untuk Bukti Pembayaran
                                                        </button></a>
                                                <?php } elseif ($tran->status_transaksi < 1) { ?>
                                                    <input type="text" id="id_transaksi" class="form-control d-none" name="id_transaksi" value="<?= $tran->jumlah_transaksi ?>">
                                                    <a href="<?= 'isi' ?>" target="_blank">
                                                        <button class="btn btn-default">
                                                            <i class="fa fa-print"></i> Print Untuk Bukti Pembayaran
                                                        </button></a>
                                                <?php } ?>

                                            <?php endforeach; ?>
                                        </td>

                                        </tr>
                                    </table>
                                    <br />
                                    <br />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
            </section>


        </div>
    </div>
</div>