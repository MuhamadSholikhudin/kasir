<div class="min-height-200px">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4>Edit Tempat Barang</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Tempat Barang</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Tempat Barang</li>
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