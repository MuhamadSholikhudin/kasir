<div class="min-height-200px">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4>Edit Kategori Harga</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Kategori Harga</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Kategori Harga</li>
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
                <form class="bg-white" action="<?= base_url('pemilik/harga_barang/aksi_edit/') . $brg->id_barang ?>" method="post" enctype="multipart/form-data">
                    <?php foreach ($barang as $brg) : ?>
                        <tr>
                            <td>
                                <div class="form-group row pl-2 pr-2">
                                    <div class="col-xs-3 ">
                                        <input type="number" class="form-control" value="<?= $brg->jumlah_awal ?>" name="jumlah_awal[]" id="" min="0">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group row pl-2 pr-2">
                                    <div class="col-xs-3">
                                        <input type="number" class="form-control" value="<?= $brg->jumlah_akhir ?>" name="jumlah_akhir[]" id="" min="0">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group row pl-2 pr-2">
                                    <div class="col-xs-3">
                                        <input type="number" class="form-control" value="<?= $brg->harga_beli ?>" name="harga_beli[]" id="" min="0">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group row pl-2 pr-2">
                                    <div class="col-xs-3">
                                        <input type="number" class="form-control" value="<?= $brg->harga_jual ?>" name="harga_jual[]" id="" min="0">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group row pl-2 pr-2">
                                    <div class="col-xs-3">
                                        <input type="number" class="form-control" value="<?= $brg->harga_kembali ?>" name="harga_kembali[]" id="" min="0">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group row pl-2 pr-2">
                                    <div class="col-xs-3">
                                        <input type="number" class="form-control" value="<?= $brg->harga_tukar ?>" name="harga_tukar[]" id="" min="0">
                                    </div>
                                </div>
                            </td>
                            <td><a href="<?= base_url('pemilik/harga_barang/aksi_hapus/'). $brg->id_harga_barang . "/". $brg->id_barang ?>" class="btn btn-danger">Hapus</a></td>
                        </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>

        <button type="submit" class="btn btn-primary mb-3" id="tambah_harga">Simpan harga</button>

        </form>



        <form class="bg-white pd-20" action="<?= base_url('pemilik/harga_barang/aksi_edit') ?>" method="POST" enctype="multipart/form-data">
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

            <div class="form-group row">
                <label class="col-sm-12 col-md-4 col-form-label">Tekan Simpan Untuk Mengubah -></label>
                <div class="col-sm-12 col-md-8">
                    <button type="submit" class="btn btn-primary" role="button">Simpan</button>
                </div>
            </div>
        </form>



    </div>
</div>