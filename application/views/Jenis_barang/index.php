<div class="min-height-200px">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4>Jenis Barang</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Jenis Barang</a></li>
                        <li class="breadcrumb-item active" aria-current="page">index</li>
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
        <div class="card-box mb-30">
            <div class="pd-10 ">
                <a class="btn btn-primary" href="<?= base_url('pemilik/jenis_barang/tambah') ?>" role="button">Tambah Jenis Barang</a>
            </div>
            <div class="pd-2 text-center">
                <h4 class="text-blue h4 ">Data Jenis Barang</h4>
            </div>
            <div class="pb-20">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                    <div class="row">
                        <div class="col-sm-12">
                            <table class="data-table table stripe hover nowrap dataTable no-footer dtr-inline" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                        <th class="table-plus datatable-nosort sorting_asc" rowspan="1" colspan="1" aria-label="Name">Id Jenis Barang</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Kode Jenis Barang</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending">Jenis Barang</th>
                                        <th class="datatable-nosort sorting_disabled" rowspan="1" colspan="1" aria-label="Action">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr role="row" class="odd">
                                        <td class="table-plus sorting_1" tabindex="0">Kode Barang</td>
                                        <td>Nama Barang</td>
                                        <td>Jumlah Tersedia</td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                    <i class="dw dw-more"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                    <a class="dropdown-item" href="<?= base_url('pemilik/jenis_barang/lihat') ?>"><i class="dw dw-eye"></i> Lihat</a>
                                                    <a class="dropdown-item" href="<?= base_url('pemilik/jenis_barang/edit') ?>"><i class="dw dw-edit2"></i> Ubah</a>
                                                    <a class="dropdown-item" href="<?= base_url('pemilik/jenis_barang/hapus') ?>"><i class="dw dw-delete-3"></i> Hapus</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="table-plus sorting_1" tabindex="0">Gloria F. Mead</td>
                                        <td>25</td>
                                        <td>Sagittarius</td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                    <i class="dw dw-more"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                    <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                                    <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>



    </div>
</div>