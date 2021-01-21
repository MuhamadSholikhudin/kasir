<div class="right_col" role="main" style="min-height: 4546px; ">
    <div class>


        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Form Tambah Tempat Barang</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br>
                        <form class="bg-white pd-20 mt-3" action="<?= base_url('pemilik/jenis_barang/aksi_tambah') ?>" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Kode Tempat Barang</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" name="kode_jenis_barang" placeholder="kode tempat barang" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Tempat Barang</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" name="tempat_barang" placeholder="Area Tempat barang" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Tingkat 1</label>
                                <div class="col-sm-12 col-md-10">
                                    <select class="custom-select col-12" name="tingkat_1" required>
                                        <option selected="">Choose...</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                        <option value="F">F</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Tingkat 2</label>
                                <div class="col-sm-12 col-md-10">
                                    <select class="custom-select col-12" name="tingkat_2" required>
                                        <option selected="">Choose...</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Tingkat 3</label>
                                <div class="col-sm-12 col-md-10">
                                    <select class="custom-select col-12" name="tingkat_3" required>
                                        <option selected="">Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Id User</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-12 col-md-4 col-form-label">Tekan Simpan Untuk Menambahkan -></label>
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