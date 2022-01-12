<div class="right_col" role="main" style="min-height: 4546px; ">
    <div class>



        <div class="clearfix"></div>

        <div class="row">
            <div class="col-lg-12 main-chart">
                <h3>Keranjang Penjualan
                    <form action="<?= base_url("pemilik/transaksi/edit_pembeli") ?>" method="POST" enctype="multipart/form-data">
                        <?php foreach ($transaksi as $tran) : ?>
                            <?php
                            $pelanggan = ['umum', 'bakul'];
                            ?>
                            <select name="jenis_pelanggan">
                                <?php foreach ($pelanggan as $pel) : ?>
                                    <?php if ($pel == $tran->jenis_pelanggan) : ?>
                                        <option value="<?= $pel ?>" selected><?= $pel ?></option>
                                    <?php else : ?>
                                        <option value="<?= $pel ?>"><?= $pel ?></option>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </select>
                            <input type="text" class="d-none" name="id_tran" value="<?= $tran->id_transaksi ?>">
                            <input type="text" id="pembeli" name="pembeli" value="<?= $tran->nama_pembeli ?>">
                            <button class="btn btn-success" type="submit">Edit</button>
                        <?php endforeach; ?>
                    </form>
                </h3>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4><i class="fa fa-search"></i> Cari Barang</h4>
                            </div>
                            <div class="panel-body">
                                <?php foreach ($transaksi as $tran) : ?>
                                    <input type="text" id="cari" class="form-control" name="cari" placeholder="Masukan : Kode / Nama Barang  [ENTER]">
                                    <input type="text" id="id_pembeli" class="form-control d-none" name="pembeli" value="<?= $tran->id_transaksi ?>">
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4><i class="fa fa-search"></i> Input Kode Barang</h4>
                            </div>
                            <div class="panel-body">
                                <?php foreach ($transaksi as $tran) : ?>
                                    <input type="text" id="barcode" class="form-control" name="barcode">
                                    <input type="text" id="id_pembeli2" class="form-control d-none" name="pembeli2" value="<?= $tran->id_transaksi ?>">
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
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td><b>Tanggal</b></td>
                                            <td><input type="text" readonly="readonly" class="form-control" value="<?= date('Y-m-d H:i:s') ?>" name="tgl"></td>
                                        </tr>
                                    </table>


                                    <table class="table table-bordered table-responsive" id="DataTables_Table_0">
                                        <thead>
                                            <tr>
                                                <td> No</td>
                                                <td> Nama Barang</td>
                                                <td> Banyak</td>
                                                <td> Jumlah</td>
                                                <td> cek</td>
                                                <td> Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody id="daftar_beli">
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
                                                            <input type="number" id="byk<?= $brg_trs->id_barang_transaksi ?>" name="banyak" value="<?= $brg_trs->banyak ?>" min="1" class="form-control">
                                                            <input type="hidden" id="id_brg_tr<?= $brg_trs->id_barang_transaksi ?>" name="id_barang_transaksi" value="<?= $brg_trs->id_barang_transaksi ?>" class="form-control">
                                                            <input type="hidden" id="id_tr<?= $brg_trs->id_barang_transaksi ?>" name="id_transaksi" value="<?= $brg_trs->id_transaksi ?>" class="form-control">
                                                            <input type="hidden" id="id_brg<?= $brg_trs->id_barang_transaksi ?>" name="id_barang" value="<?= $brg_trs->id_barang ?>" class="form-control">

                                                            <!-- <script type="text/javascript">
                                                            
                                                        </script> -->

                                                    </td>
                                                    <td id="">
                                                        <input type="number" class="form-control" name="" id="jml<?= $brg_trs->id_barang_transaksi ?>" value="<?= $brg_trs->jumlah ?>">

                                                    </td>
                                                    <td>
                                                        <!--  -->
                                                        <input type="checkbox" name="cek<?= $brg_trs->id_barang_transaksi ?>" id="cek<?= $brg_trs->id_barang_transaksi ?>" <?php if ($brg_trs->cek == 1) { ?> checked="checked" <?php } else { ?> <?php } ?>>
                                                        <!-- <div class="checkbox">
                                                        <label class="">
                                                            <div class="icheckbox_flat-green" style="position: relative;">
                                                                <input type="checkbox" id="cek<?= $brg_trs->id_barang_transaksi ?>" <?php if ($brg_trs->cek == 1) { ?> checked="checked" <?php } else { ?> <?php } ?> data-role="<?= $brg_trs->cek ?>" data-menu="<?= $brg_trs->id_barang_transaksi ?>" class="flat" style="position: absolute; opacity: 0;">
                                                                <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                                </ins>
                                                            </div>
                                                        </label>
                                                    </div> -->
                                                    </td>
                                                    <td>
                                                        <!-- <button type="submit" class="btn btn-warning">Update</button>
                                                    </form> -->
                                                        <a href="<?= base_url("pemilik/transaksi/aksi_hapus_barang_transaksi/") . $brg_trs->id_transaksi . '/' . $brg_trs->id_barang_transaksi ?>" class="btn btn-danger"><i class="fa fa-times"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <br />

                                <div id="kasirnya">
                                    <div class="table-responsive">


                                        <table class="table table-stripped">

                                            <form method="POST" action="<?= base_url("pemilik/transaksi/bayar") ?>" enctype="multipart/form-data">


                                                <tr>
                                                    <td>Total Semua </td>
                                                    <td id="t_total">
                                                        <?php
                                                        if ($tot->num_rows() > 0) {
                                                            $total = $tot->row(); ?>
                                                            <input type="number" id="total_belanja" class="form-control" name="total" value="<?= $total->jumlah ?>">
                                                        <?php } elseif ($tot->num_rows() < 1) { ?>
                                                            <input type="number" id="total_belanja" class="form-control" name="total" value="0">

                                                        <?php }  ?>

                                                        <?php foreach ($transaksi as $tran) : ?>
                                                            <input type="number" id="id_transaksi" class="form-control d-none" name="id_transaksi" value="<?= $tran->id_transaksi ?>">

                                                    </td>

                                                    <td>
                                                        <a class="btn btn-danger" href="<?= base_url("pemilik/transaksi/") ?>"><b>Ke Index</b></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bayar </td>
                                                    <td>

                                                        <input type="number" id="bayar" class="form-control" name="bayar" value="<?= $tran->jumlah_tunai ?>"></td>

                                                    <td>
                                                        <button type="submit" class="btn btn-success" id="btn_bayar"><i class="fa fa-shopping-cart"></i> Bayar</button>

                                                    </td>
                                                </tr>
                                            </form>
                                            <tr>
                                                <td>Kembali</td>
                                                <td><input type="number" id="kembali" name="kembali" value="<?= $tran->jumlah_tunai - $tran->jumlah_transaksi ?>" class="form-control"></td>
                                            <?php endforeach; ?>
                                            <td>
                                                <?php foreach ($transaksi as $tran) : ?>
                                                    <?php if ($tran->status_transaksi < 1) { ?>
                                                        <input type="text" id="id_transaksi" class="form-control d-none" name="id_transaksi" value="<?= $tran->jumlah_transaksi ?>">
                                                        <a href="<?= 'isi' ?>">
                                                            <button>
                                                                <i class="fa fa-print"></i> Print Untuk Bukti Pembayaran
                                                            </button></a>
                                                    <?php } elseif ($tran->status_transaksi > 0) { ?>
                                                        <input type="text" id="id_transaksi" class="form-control d-none" name="id_transaksi" value="<?= $tran->jumlah_transaksi ?>">
                                                        <a href="<?= base_url("pemilik/transaksi/cetak_transaksi/") . $tran->id_transaksi ?>" target="_blank">
                                                            <button class="btn btn-warning">
                                                                <i class="fa fa-print"></i> Bukti
                                                            </button></a>
                                                    <?php } ?>

                                                <?php endforeach; ?>
                                            </td>

                                            </tr>
                                        </table>
                                    </div>
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