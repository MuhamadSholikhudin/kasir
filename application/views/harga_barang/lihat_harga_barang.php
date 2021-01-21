<div class="right_col" role="main" style="min-height: 4546px;">
    <div class>


        <div class="clearfix"></div>

        <div class="bg-white p-1">
            <h3 class="text-center">Data Harga Barang</h3>
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
                        <th>Harga jual</th>
                        <th>Harga kembali</th>
                        <th>Harga tukar</th>
                    </tr>
                <tbody>
                    <?php foreach ($barang as $brg) : ?>
                        <tr>
                            <td>
                                <div class="form-group row">
                                    <div class="col-xs-3 ">

                                        <input type="number" class="form-control" value="<?= $brg->jumlah_awal ?>" name="jumlah_awal[]" id="" min="0" disabled>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group row">
                                    <div class="col-xs-3">
                                        <input type="number" class="form-control" value="<?= $brg->jumlah_akhir ?>" name="jumlah_akhir[]" id="" min="0" disabled>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group row">
                                    <div class="col-xs-3">
                                        <input type="number" class="form-control" value="<?= $brg->harga_beli ?>" name="harga_beli[]" id="" min="0" disabled>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group row">
                                    <div class="col-xs-3">
                                        <input type="number" class="form-control" value="<?= $brg->harga_jual ?>" name="harga_jual[]" id="" min="0" disabled>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group row">
                                    <div class="col-xs-3">
                                        <input type="number" class="form-control" value="<?= $brg->harga_kembali ?>" name="harga_kembali[]" id="" min="0" disabled>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group row">
                                    <div class="col-xs-3">
                                        <input type="number" class="form-control" value="<?= $brg->harga_tukar ?>" name="harga_tukar[]" id="" min="0" disabled>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>


            <div class="container">
                <div class="row">
                    <div class="col-md-4">

                        <a href="<?= base_url('pemilik/harga_barang/') ?>" class="btn btn-secondary mb-3">kembali</a>
                    </div>

                </div>
            </div>



        </div>
    </div>
</div>


</div>
</div>