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
        <div class="bg-white pd-20">
            <?php foreach ($barang as $brg) : ?>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Kode Barang</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" value="<?= $brg->kode_barang ?>" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" value="<?= $brg->nama_barang ?>" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Nama Singkat barang</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" value="<?= $brg->nama_singkat ?>" type="text" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Jumlah Stok Baru</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" value="<?= $brg->jumlah_stok ?>" type="number" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Status Jual</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" value="<?= $brg->id_user ?>" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Id User</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" name="id_user" value="<?= $brg->id_user ?>" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Waktu Modifikasi</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="date" name="waktu_modifikasi" value="<?= $brg->waktu_modifikasi ?>" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Gambar</label>

                    <div class="col-sm-12 col-md-10">
                        <img src="<?= base_url('uploads/barang/') . $brg->gambar ?>" alt="" srcset="">
                    </div>
                </div>



                <div class="form-group row">
                    <label class="col-sm-12 col-md-4 col-form-label">Tekan Kembali -></label>
                    <div class="col-sm-12 col-md-8">
                        <a href="<?= base_url('pemilik/barang/') ?>" class="btn btn-primary" role="button">Kembali</a>
                    </div>
                </div>
            <?php endforeach; ?>


        </div>


    </div>
</div>