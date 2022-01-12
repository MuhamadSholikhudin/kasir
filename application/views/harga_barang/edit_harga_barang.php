<div class="right_col" role="main" style="min-height: 4546px;">
    <div class>


        <div class="clearfix"></div>

        <div class="bg-white p-1">
            <h3 class="text-center">Data Harga <?= $nama_barang->nama_barang ?></h3>
            <hr>
            <!-- ISI HALAMAN -->
            <?php foreach ($barang1 as $brg) : ?>
                <a href="<?= base_url('pemilik/harga_barang/aksi_tambah/') . $brg->id_barang ?>" class="btn btn-primary " id="tambah_harga">Tambah harga</a>
            <?php endforeach; ?>
            <table class="table bg-white mt-3 table-bordered">
                <thead>
                    <tr>
                        <th>jumlah awal</th>
                        <th>jumlah akhir</th>
                        <th>Harga beli</th>
                        <th>Harga Bakul</th>
                        <th>Harga Umum</th>
                        <th>Harga kembali</th>
                        <th>Harga tukar</th>
                        <th>Hapus</th>
                    </tr>
                <tbody>
                    <form class="bg-white" action="<?= base_url('pemilik/harga_barang/aksi_edit/') . $brg->id_barang ?>" method="post" enctype="multipart/form-data">
                        <?php foreach ($barang as $brg) : ?>
                            <tr>
                                <td>
                                    <div class="form-group row">
                                        <div class="col-xs-3 ">
                                            <input type="hidden" class="form-control" value="<?= $brg->id_harga_barang ?>" name="id_harga_barang[]" id="" min="0">
                                            <input type="hidden" class="form-control" value="<?= $this->session->userdata('id_user') ?>" name="id_user[]" id="" min="0">
                                            <input type="number" class="form-control" value="<?= $brg->jumlah_awal ?>" name="jumlah_awal[]" id="" min="0">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group row">
                                        <div class="col-xs-3">
                                            <input type="number" class="form-control" value="<?= $brg->jumlah_akhir ?>" name="jumlah_akhir[]" id="" min="0">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group row">
                                        <div class="col-xs-3">
                                            <input type="number" class="form-control" value="<?= $brg->harga_beli ?>" name="harga_beli[]" id="" min="0">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group row">
                                        <div class="col-xs-3">
                                            <input type="number" class="form-control" value="<?= $brg->harga_bakul ?>" name="harga_bakul[]" id="" min="0">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group row">
                                        <div class="col-xs-3">
                                            <input type="number" class="form-control" value="<?= $brg->harga_umum ?>" name="harga_umum[]" id="" min="0">
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="form-group row">
                                        <div class="col-xs-3">
                                            <input type="number" class="form-control" value="<?= $brg->harga_kembali ?>" name="harga_kembali[]" id="" min="0">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group row">
                                        <div class="col-xs-3">
                                            <input type="number" class="form-control" value="<?= $brg->harga_tukar ?>" name="harga_tukar[]" id="" min="0">
                                        </div>
                                    </div>
                                </td>
                                <td><a href="<?= base_url('pemilik/harga_barang/aksi_hapus/') . $brg->id_harga_barang . "/" . $brg->id_barang ?>" class="btn btn-danger">Hapus</a></td>
                            </tr>
                        <?php endforeach; ?>
                </tbody>
            </table>

            <?php foreach ($barang1 as $brg) : ?>
                <input type="hidden" name="id_barang" value="<?= $brg->id_barang ?>">
            <?php endforeach; ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">

                        <a href="<?= base_url('pemilik/harga_barang/') ?>" class="btn btn-secondary mb-3">kembali</a>
                    </div>
                    <div class="col-md-8">

                        <button type="submit" class="btn btn-success mb-3">Simpan harga</button>
                    </div>
                </div>
            </div>


            </form>

        </div>
    </div>
</div>


</div>
</div>