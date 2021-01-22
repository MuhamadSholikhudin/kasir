<div class="right_col" role="main" style="min-height: 4546px;">
    <div class>


        <div class="clearfix"></div>

        <div class="bg-white p-1">
            <h3 class="text-center">Data Harga Barang</h3>
            <hr>
            <div class="row">
                <div class="col-md-12 col-sm-12 table-responsive" border="1">
                    <table class="display text-dark" border="1" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                        <thead>
                            <tr role="row">
                                <!-- <th class="table-plus datatable-nosort sorting_asc" rowspan="1" colspan="1" aria-label="Name">Id harga_barang</th> -->
                                <th>Nama Barang</th>
                                <th>jumlah Awal</th>
                                <th>Jumlah Akhir</th>
                                <th>Harga beli</tharia-label="Office:>
                                <th>Harga jual</th>
                                <th>Harga kembali</th>
                                <th>Harga tukar</th>
                                <th>User Modifikasi</th>
                                <th>Waktu Modifikasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($harga_barang as $hrg_brg) : ?>

                                <tr role="row" class="odd">
                                    <!-- <td class="table-plus sorting_1" tabindex="0">Kode Barang</td> -->
                                    <td>
                                        <?php
                                        $barang = $this->db->query("SELECT * FROM barang WHERE id_barang = $hrg_brg->id_barang");
                                        $tbarang = $barang->row();
                                        echo $tbarang->nama_barang;
                                        ?>

                                    </td>
                                    <td><?= $hrg_brg->jumlah_awal ?></td>
                                    <td><?= $hrg_brg->jumlah_akhir ?></td>
                                    <td><?= $hrg_brg->harga_beli ?></td>
                                    <td><?= $hrg_brg->harga_jual ?></td>
                                    <td><?= $hrg_brg->harga_kembali ?></td>
                                    <td><?= $hrg_brg->harga_tukar ?></td>
                                    <td>
                                        <?php
                                        $user = $this->db->query("SELECT * FROM user WHERE id_user = $hrg_brg->id_user");
                                        $tuser = $user->row();
                                        echo $tuser->nama_lengkap;
                                        ?>
                                        <?= $hrg_brg->id_user ?></td>
                                    <td><?= $hrg_brg->waktu_modifikasi ?></td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                <a class="dropdown-item" href="<?= base_url('pemilik/harga_barang/lihat/' . $hrg_brg->id_barang) ?>"><i class="fa fa-eye"></i> Lihat</a>
                                                <a class="dropdown-item" href="<?= base_url('pemilik/harga_barang/edit/') . $hrg_brg->id_barang ?>"><i class="fa fa-edit"></i> Ubah</a>
                                                <a class="dropdown-item" href="<?= base_url('pemilik/harga_barang/hapus/') . $hrg_brg->id_harga_barang ?>"><i class="fa fa-remove"></i> Hapus</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                            <tr role="row" class="even">
                                <td>25</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
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
</div>