<div class="min-height-200px">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4>Tambah Tempat Barang</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Tempat Barang</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah Tempat Barang</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <div class="dropdown">
                    <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        January 2018
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Export List</a>
                        <a class="dropdown-item" href="#">Policies</a>
                        <a class="dropdown-item" href="#">View Assets</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="  border-radius-4  mb-30">
        <!-- ISI HALAMAN -->
        <!-- <div class="bg-white">


            <div class="row">
                <div class="col-md-6 col-sm-12">

                    <div class="row">
                        <div class="col-md-1 bg-primary">
                            2
                        </div>
                        <div class="col-md-1">
                            jalan
                        </div>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-12 bg-warning">
                                    a
                                </div>
                                <div class="col-md-12 ">
                                    jalan
                                </div>
                                <div class="col-md-6 bg-secondary">
                                    rak
                                </div>
                                <div class="col-md-6 bg-danger">
                                    rak
                                </div>
                                <div class="col-md-1 bg-warning">
                                    rak
                                    <p></p>
                                    <p></p>
                                    <p></p>
                                    <p></p>
                                </div>
                                <div class="col-md-10">
                                    rak
                                </div>
                                <div class="col-md-1 bg-secondary">
                                    rak

                                </div>
                                <div class="col-md-12 ">
                                    jalan
                                </div>
                                <div class="col-md-12 bg-warning">
                                    a
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-md-1 bg-primary">
                            2
                        </div>
                        <div class="col-md-10">
                            jalan
                        </div>
                        <div class="col-md-1 bg-primary">
                            B
                        </div>
                        <div class="col-md-11 ">
                            jalan
                        </div>
                        <div class="col-md-1 bg-primary">
                            B
                        </div>

                        <div class="col-md-11 ">
                            jalan
                        </div>
                        <div class="col-md-1 bg-primary">
                            B
                        </div>
                        <div class="col-md-11 ">
                            jalan
                        </div>
                        <div class="col-md-1 bg-primary">
                            B
                        </div>
                        <div class="col-md-1 ">
                            a
                        </div>
                        <div class="col-md-10 bg-primary">
                            jalan
                        </div>
                        <div class="col-md-1 bg-danger">
                            a
                        </div>
                        <div class="col-md-11">
                            jalan
                        </div>
                        <div class="col-md-1 bg-danger">
                            a
                        </div>
                        <div class="col-md-1 bg-danger">
                            a
                        </div>
                        <div class="col-md-10">
                            a
                        </div>
                        <div class="col-md-1 bg-danger">
                            a
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    C
                    <div class="row">

                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    D
                    <div class="row">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    E
                    <div class="row">

                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    F
                    <div class="row">

                    </div>
                </div>
            </div>
        </div> -->



        <div class="row">
            <div class="col-md-6">

            </div>
            <div class="col-md-6">
                <form class="bg-white pd-20 mt-3" action="<?= base_url('pemilik/jenis_barang/aksi_tambah') ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Kode Tempat Barang</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" name="kode_jenis_barang" placeholder="kode barang" required>
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