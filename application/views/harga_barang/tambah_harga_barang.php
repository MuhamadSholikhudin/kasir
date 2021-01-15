<div class="min-height-200px">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4>Tambah Kategori Harga</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Kategori Harga</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah Kategori Harga</li>
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
    <div class="  border-radius-4 mb-30">
        <!-- ISI HALAMAN -->
        <?php foreach ($barang as $brg) : ?>
            <a href="<?= base_url('pemilik/harga_barang/aksi_tambah/') . $brg->id_barang ?>" class="btn btn-primary " id="tambah_harga">Tambah harga</a>
            <input type="number" class="form-control" name="id_user" id="" min="0">
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
                    <th>Hapus</th>
                </tr>
            <tbody>
                <?php foreach ($barang as $brg) : ?>
                    <tr>
                        <td>
                            <div class="form-group row pl-2 pr-2">
                                <div class="col-xs-3 ">
                                    <input type="number" class="form-control" name="" id="" min="0">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group row pl-2 pr-2">
                                <div class="col-xs-3">
                                    <input type="number" class="form-control" name="" id="" min="0">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group row pl-2 pr-2">
                                <div class="col-xs-3">
                                    <input type="number" class="form-control" name="" id="" min="0">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group row pl-2 pr-2">
                                <div class="col-xs-3">
                                    <input type="number" class="form-control" name="" id="" min="0">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group row pl-2 pr-2">
                                <div class="col-xs-3">
                                    <input type="number" class="form-control" name="" id="" min="0">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group row pl-2 pr-2">
                                <div class="col-xs-3">
                                    <input type="number" class="form-control" name="" id="" min="0">
                                </div>
                            </div>
                        </td>
                        <td><a href="<?= base_url('pemilik/harga_barang/aksi_hapus') ?>" class="btn btn-danger">Hapus</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>


        <div id="">



            <p id="add_after_me">
                This is the text which has already been typed into the div</p>
        </div>
        <form class="bg-white pd-20" action="<?= base_url('pemilik/harga_barang/aksi_tambah') ?>" method="POST" enctype="multipart/form-data">
            <div id="tambah_kategori">
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Kode Barang</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" name="kode_barang" value="" required disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" value="" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">jumlah awal</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="number" name="jumlah_awal" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">jumlah akhir</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="number" name="jumlah_akhir" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Harga barang</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="number" name="harga_barang" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Harga Tukar</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="number" name="harga_tukar" required>
                    </div>
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