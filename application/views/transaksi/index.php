<div class="right_col" role="main" style="min-height: 4546px; ">
    <div class>

        <div class="page-title">
            <div class="title_center">
                <h3>Selamat datang, <?php echo  date("now") ?></h3>


            </div>

        </div>

        <div class="clearfix"></div>
        <br>
        <br>
        <div class="row">
            <div class="pd-20 ">
                <a class="btn btn-primary" href="<?= base_url('pemilik/transaksi/aksi_tambah/') ?>" role="button">Tambah Transaksi</a>
            </div>
            <div class="col-md-12 col-sm-12" border="1">
                <table class="display text-dark" style="width:100%" border="1" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                    <thead>
                        <tr role="row">
                            <th class="table-plus datatable-nosort sorting_asc" rowspan="1" colspan="1" aria-label="Name">Kode Barang</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Nama Barang</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending">Stok</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Address: activate to sort column ascending">Harga barang</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Address: activate to sort column ascending">Tempat barang</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start Date: activate to sort column ascending">Tanggal Modifikasi</th>
                            <th class="datatable-nosort sorting_disabled" rowspan="1" colspan="1" aria-label="Action">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($transaksi as $trsk) : ?>
                            <tr role="row" class="odd">
                                <td class="table-plus sorting_1" tabindex="0"><?= $trsk->id_transaksi ?></td>
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
                                            <a class="dropdown-item" href="<?= base_url('pemilik/barang/lihat/') . $trsk->id_transaksi ?>"><i class="dw dw-eye"></i> Lihat</a>
                                            <a class="dropdown-item" href="<?= base_url('pemilik/barang/edit/') . $trsk->id_transaksi ?>"><i class="dw dw-edit2"></i> Ubah</a>
                                            <a class="dropdown-item" href="<?= base_url('pemilik/barang/hapus/') . $trsk->id_transaksi ?>"><i class="dw dw-delete-3"></i> Hapus</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                        <tr role="row" class="even">
                            <td class="table-plus sorting_1" tabindex="0">Gloria F. Mead</td>
                            <td>25</td>
                            <td>Sagittarius</td>
                            <td>2829 Trainer Avenue Peoria, IL 61602 </td>
                            <td>29-03-2018</td>
                            <td>29-03-2018</td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                        <i class="dw dw-more"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                        <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                        <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                        <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>