<div class="right_col" role="main" style="min-height: 4546px; ">
    <div class>


        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Form Edit Tempat Barang</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br>
                        <!-- ISI HALAMAN -->
                        <form class="bg-white pd-20" action="<?= base_url('pemilik/tempat_barang/aksi_edit') ?>" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Kode Tempat Barang</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" name="kode_tempat_barang" placeholder="kode barang" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Tempat Barang</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" name="tempat_barang" placeholder="Nama Panjang barang" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Tingkat 1</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" name="tingkat_1" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Tingkat 2</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" name="tingkat_2" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Tingkat 3</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" name="tingkat_3" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Id User</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-12 col-md-4 col-form-label">Tekan Simpan Untuk Mengubah -></label>
                                <div class="col-sm-12 col-md-8">
                                    <button type="submit" class="btn btn-primary" role="button">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>