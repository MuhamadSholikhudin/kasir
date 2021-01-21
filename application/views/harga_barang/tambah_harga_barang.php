<div class="right_col" role="main" style="min-height: 4546px;">
    <div class>


        <div class="clearfix"></div>


        <div class="row">

            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Form Input Data Harga Barang</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br>
                        <!-- ISI HALAMAN -->
                        <?php foreach ($barang as $brg) : ?>
                            <a href="<?= base_url('pemilik/harga_barang/aksi_tambah/') . $brg->id_barang ?>" class="btn btn-primary " id="tambah_harga">Tambah harga</a>
                        <?php endforeach; ?>
                        


                  
                      
                    </div>
                </div>
            </div>


        </div>


    </div>
</div>