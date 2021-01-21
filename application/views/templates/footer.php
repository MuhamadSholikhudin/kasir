        <!-- footer content -->
        <footer>
          <div class="pull-right">
            By Lisa Rachmawati
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
        </div>
        </div>




        <!-- jQuery -->
        <script src="<?= base_url('assets/'); ?>vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?= base_url('assets/'); ?>vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <!-- FastClick -->
        <script src="<?= base_url('assets/'); ?>vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="<?= base_url('assets/'); ?>vendors/nprogress/nprogress.js"></script>
        <!-- iCheck -->
        <script src="<?= base_url('assets/'); ?>vendors/iCheck/icheck.min.js"></script>
        <!-- Datatables -->
        <script type="text/javascript">
          $(document).ready(function() {
            $('#DataTables_Table_0').DataTable();

            $("#cari").change(function() {
              var keyword = $(this).val();
              var pembeli = document.getElementById("pembeli").value;
              // $("#hasil_cari").html(keyword);

              $.ajax({
                type: "POST",
                url: "<?= site_url('pemilik/transaksi/cari'); ?>",
                data: {
                  keyword: keyword,
                  pembeli: pembeli
                },
                // async: true,
                dataType: 'json',
                beforeSend: function() {
                  $("#hasil_cari").hide();
                  $("#tunggu").html('<div class="spinner-border" role="status"> <span class = "visually-hidden" >  </span> </div>');
                },
                success: function(html) {
                  $("#tunggu").html('');
                  $("#hasil_cari").show();
                  $("#hasil_cari").html(html);
                }
              });
              return false;
            });

            $("#bayar").keydown(function() {
              $("#kembali").css("background-color", "yellow");
              $("#bayar").css("background-color", "yellow");
              var bayar = $(this).val();
              var total = $("#total").val();
              var kembali = bayar - total;
              // if (bayar < total) {
                // $("#kembali").val(0);
                // $("#btn_bayar").prop("disabled", true);
              // } else if (bayar > total) {
              $("#kembali").val(kembali);
              // $("#btn_bayar").prop("disabled", false);
              // }


            });

            $("#bayar").keyup(function() {
              $("#kembali").css("background-color", "white");
              $("#bayar").css("background-color", "white");
              var bayar = $(this).val();
              var total = $("#total").val();
              var kembali = bayar - total;
              // if (bayar < total) {
                // $("#kembali").val(0);
                // $("#btn_bayar").prop("disabled", true);
              // } else if (bayar > total) {
              $("#kembali").val(kembali);
            // }
            });

          });
        </script>



        <script type="text/javascript">
          //Saldo awal
          var rupiah = document.getElementById('saldomasuk1');
          rupiah.addEventListener('keyup', function(e) {
            // tambahkan 'Rp.' pada saat form di ketik
            // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
            // document.getElementById("saldomasuk1").value = rupiah.value;


            rupiah.value = formatRupiah(this.value);
          });

          /* Fungsi formatRupiah */
          function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
              split = number_string.split(','),
              sisa = split[0].length % 3,
              rupiah = split[0].substr(0, sisa),
              ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            // tambahkan titik jika yang di input sudah menjadi angka ribuan
            if (ribuan) {
              separator = sisa ? '.' : '';
              rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? rupiah : '');
          }


          //Transaksi
          var rupiahtr = document.getElementById('jumlah1');
          rupiahtr.addEventListener('keyup', function(e) {
            // tambahkan 'Rp.' pada saat form di ketik
            // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
            // document.getElementById("saldomasuk1").value = rupiah.value;


            rupiahtr.value = formatRupiah(this.value);
          });

          /* Fungsi formatRupiah */
          function formatRupiah1(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
              split = number_string.split(','),
              sisa = split[0].length % 3,
              rupiahtr = split[0].substr(0, sisa),
              ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            // tambahkan titik jika yang di input sudah menjadi angka ribuan
            if (ribuan) {
              separator = sisa ? '.' : '';
              rupiahtr += separator + ribuan.join('.');
            }

            rupiahtr = split[1] != undefined ? rupiahtr + ',' + split[1] : rupiahtr;
            return prefix == undefined ? rupiahtr : (rupiahtr ? rupiahtr : '');
          }
        </script>
        <!-- <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type=" text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script> -->
        <!-- <script type=" text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script> -->
        <script src="<?= base_url('assets/'); ?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?= base_url('assets/'); ?>vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <script src="<?= base_url('assets/'); ?>vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?= base_url('assets/'); ?>vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
        <script src="<?= base_url('assets/'); ?>vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
        <script src="<?= base_url('assets/'); ?>vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="<?= base_url('assets/'); ?>vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="<?= base_url('assets/'); ?>vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
        <script src="<?= base_url('assets/'); ?>vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="<?= base_url('assets/'); ?>vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?= base_url('assets/'); ?>vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
        <script src="<?= base_url('assets/'); ?>vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
        <script src="<?= base_url('assets/'); ?>vendors/jszip/dist/jszip.min.js"></script>
        <script src="<?= base_url('assets/'); ?>vendors/pdfmake/build/pdfmake.min.js"></script>
        <script src="<?= base_url('assets/'); ?>vendors/pdfmake/build/vfs_fonts.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="<?= base_url('assets/'); ?>build/js/custom.min.js"></script>

        <!-- <script>
          $().DataTable();
        </script> -->

        </body>

        </html>