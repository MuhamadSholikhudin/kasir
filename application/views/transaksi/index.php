<div class="right_col" role="main" style="min-height: 4546px; ">
    <div class>



        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-4">
                <a class="btn btn-primary" href="<?= base_url('pemilik/transaksi/aksi_tambah/') ?>" role="button">Tambah Transaksi</a>
            </div>
            <div class="col-md-8">
                <h3>Data Transaksi</h3>
            </div>
            <div class="col-md-12 col-sm-12" border="1">
                <div class="table-responsive">
                    <table class="display text-dark" style="width:100%" border="1" id="datatable" role="grid" aria-describedby="DataTables_Table_0_info">
                        <thead>
                            <tr role="row">
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Stok</th>
                                <th>Harga barang</th>
                                <th>Tempat barang</th>
                                <th>Tanggal Modifikasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($transaksi as $trsk) : ?>
                                <tr role="row" class="odd">
                                    <td>
                                        <a href="<?= base_url("pemilik/transaksi/penjualan/") . $trsk->id_transaksi ?>">
                                            <?= $trsk->id_transaksi ?>
                                        </a>
                                    </td>
                                    <td><?= $trsk->nama_pembeli ?></td>
                                    <td><?= $trsk->jumlah_transaksi ?></td>
                                    <td>
                                        <?= $trsk->status_transaksi ?>
                                    </td>
                                    <td><?= $trsk->jumlah_tunai ?></td>
                                    <td><?= $trsk->waktu_transaksi ?></td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                <a class="dropdown-item" href="<?= base_url('pemilik/barang/lihat/') . $trsk->id_transaksi ?>"><i class="fa fa-eye"></i> Lihat</a>
                                                <a class="dropdown-item" href="<?= base_url('pemilik/barang/edit/') . $trsk->id_transaksi ?>"><i class="fa fa-edit"></i> Ubah</a>
                                                <a class="dropdown-item" href="<?= base_url('pemilik/barang/hapus/') . $trsk->id_transaksi ?>"><i class="fa fa-trash"></i> Hapus</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>


                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Stok</th>
                                <th>Harga barang</th>
                                <th>Tempat barang</th>
                                <th>Tanggal Modifikasi</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                </div>

            </div>
        </div>
    </div>