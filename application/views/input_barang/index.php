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
        <small><?= $this->session->flashdata('pesan'); ?></small>

        <div class="row">
            <div class="col-md-6 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>INPUT BARANG DATA XSLX</h2>
                        <!-- <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul> -->
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        Ini adalah tempalte xlsx data barang <a href="<?= base_url('assets/template_input_barang.xlsx') ?>" target="_blank" rel="noopener noreferrer">Download Template</a>
                    </div>
                    <div class="x_content">
                        <br>
                        <form action="<?= base_url('pemilik/input_barang/import_excel') ?>" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Data excel <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="file" name="fileExcel" id="first-name" required="required" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"  class="form-control ">
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <!-- <button class="btn btn-primary" type="button">Cancel</button>
                                    <button class="btn btn-primary" type="reset">Reset</button> -->
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>