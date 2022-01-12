<div class="min-height-200px">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4>Edit Barang</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Barang</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Barang</li>
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

        <form class="bg-white pd-20" action="<?= base_url('pemilik/barang/aksi_edit') ?>" method="POST" enctype="multipart/form-data">
            <?php foreach ($barang as $brg) : ?>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Kode Barang</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" name="kode_barang" value="<?= $brg->kode_barang ?>" placeholder="kode barang" required>
                        <input class="form-control" type="hidden" name="id_barang" value="<?= $brg->id_barang ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" name="nama_barang" value="<?= $brg->nama_barang ?>" placeholder="Nama Panjang barang" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Nama Singkat barang</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" name="nama_singkat" value="<?= $brg->nama_singkat ?>" type="text" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Jumlah Stok Baru</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" name="jumlah_stok" value="<?= $brg->jumlah_stok ?>" type="number" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Status Jual</label>
                    <div class="col-sm-12 col-md-10">
                        <select class="custom-select col-12" name="status_barang">
                            <?php foreach ($status as $sta) : ?>
                                <?php if ($sta == $brg->status_barang) : ?>
                                    <option value="<?= $sta ?>" selected><?= $sta ?></option>
                                <?php else : ?>
                                    <option value="<?= $sta ?>"><?= $sta ?></option>
                                <?php endif ?>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Gambar</label>
                    <div class="col-sm-12 col-md-10">
                        <input type="file" name="gambar" class="form-control-file form-control height-auto">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Id User</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" name="id_user" value="<?= $brg->jumlah_stok ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Waktu Modifikasi</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="date" name="waktu_modifikasi" value="<?= date('Y-m-d') ?>" required>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-12 col-md-4 col-form-label">Tekan Simpan Untuk Mengubah -></label>
                    <div class="col-sm-12 col-md-8">
                        <button type="submit" class="btn btn-primary" role="button">Simpan</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </form>



    </div>
</div>