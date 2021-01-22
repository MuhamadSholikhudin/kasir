<div class="right_col" role="main" style="min-height: 4546px; ">
    <div class>

        <div class="page-title">
            <div class="title_center">
                <h3>Selamat datang, <?= $this->session->userdata('nama_lengkap') ?> </h3>

            </div>

        </div>

        <div class="clearfix"></div>
        <br>
        <br>
        <div class="row">

            <div class="top_tiles">
                <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 ">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-user"></i></div>
                        <div class="count"><?= $user->num_rows() ?></div>
                        <h3>Data User</h3>
                        <p>Jumlah data pengguna aplikasi</p>
                    </div>
                </div>
                <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 ">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-archive"></i></div>
                        <div class="count"><?= $barang->num_rows() ?></div>
                        <h3>Data Barang</h3>
                        <p>Jumlah barang yang ada di sistem.</p>
                    </div>
                </div>
                <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 ">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-money"></i></div>
                        <div class="count"><?= $transaksi->num_rows() ?></div>
                        <h3>Data Transaksi</h3>
                        <p>Jumlah transaksi keseluruhan.</p>
                    </div>
                </div>
                <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 ">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-calendar"></i></div>
                        <div class="count"><?= $transaksi_hari->num_rows() ?></div>
                        <h3>Transaksi / Hari</h3>
                        <p>Jumlah transaksi yang ter jadi hari ini.</p>
                    </div>
                </div>
                <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 ">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-calendar"></i></div>
                        <div class="count"><?= $transaksi_minggu->num_rows() ?></div>
                        <h3>Transaksi / Minggu</h3>
                        <p>Jumlah transaksi perminggu belakang ini.</p>
                    </div>
                </div>
                <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 ">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-calendar"></i></div>
                        <div class="count"><?= $transaksi_bulan->num_rows() ?></div>
                        <h3>Transaksi / Bulan</h3>
                        <p>Jumlah transaksi perbulan belakang ini.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>