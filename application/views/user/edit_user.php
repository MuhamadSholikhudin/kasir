<div class="min-height-200px">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4>Edit User</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">User</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit User</li>
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
        <form class="bg-white pd-20" action="<?= base_url('pemilik/user/aksi_edit') ?>" method="POST" enctype="multipart/form-data">
            <?php foreach ($user as $usr) : ?>
                <div class="form-group row d-none">
                    <label class="col-sm-12 col-md-2 col-form-label">id_user</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" name="id_user" value="<?= $usr->id_user ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Username</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" name="username" value="<?= $usr->username ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Password</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" name="password" value="<?= $usr->password ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" name="nama_lengkap" value="<?= $usr->nama_lengkap ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Bagian</label>
                    <div class="col-sm-12 col-md-10">
                        <select class="custom-select col-12" name="bagian">
                            <?php foreach ($bagian as $bag) : ?>
                                <?php if ($bag == $usr->bagian) : ?>
                                    <option value="<?= $bag ?>" selected><?= $bag ?></option>
                                <?php else : ?>
                                    <option value="<?= $bag ?>"><?= $bag ?></option>
                                <?php endif ?>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Status Login</label>
                    <div class="col-sm-12 col-md-10">
                        <select class="custom-select col-12" name="status">
                            <?php foreach ($status as $sta) : ?>
                                <?php if ($sta == $usr->status) : ?>
                                    <option value="<?= $sta ?>" selected><?= $sta ?></option>
                                <?php else : ?>
                                    <option value="<?= $sta ?>"><?= $sta ?></option>
                                <?php endif ?>
                            <?php endforeach ?>
                        </select>
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