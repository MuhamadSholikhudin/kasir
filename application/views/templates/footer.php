<div class="footer-wrap pd-20 mb-20 card-box">
  DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
</div>
</div>
</div>
<!-- js -->

<script src="text/javascript">
  $(document).ready(function() {
    $('#DataTables_Table_0').DataTable();
    // $('#jenis_barang').DataTable();
    // $('#tempat_barang').DataTable();



  });
</script>
<script>
  function addCode() {
    var nom = document.getElementById("no").value;
    var no = parseInt(nom) + 1;
    $('#add_after_me').append("<tr><td>" + no + "</td><td scope='row'><input type='number' name='' id=''></td><td scope='row'><input type='number' name='' id=''> </td> <td scope ='row'><input type='number' name='' id=''> </td> <td scope='row'><input type='number' name='' id=''> </td><td scope='row'>hapus </td> </tr>");
    // var i = 0;
    // do {
    //   document.getElementById("add_after_me").insertAdjacentHTML("afterend", "<tr><td>" + i + "</td><td scope='row'><input type='number' name='' id=''></td><td scope='row'><input type='number' name='' id=''> </td> <td scope ='row'><input type='number' name='' id=''> </td> <td scope='row'><input type='number' name='' id=''> </td><td scope='row'>hapus </td> </tr>");
    //   i++;
    // } while (i);

    document.getElementById("nom").value = no;

  }
</script>



<script src="<?= base_url('assets/vendors/') ?>scripts/core.js"></script>
<script src="<?= base_url('assets/vendors/') ?>scripts/script.min.js"></script>
<script src="<?= base_url('assets/vendors/') ?>scripts/process.js"></script>
<script src="<?= base_url('assets/vendors/') ?>scripts/layout-settings.js"></script>
<script src="<?= base_url('assets/src/') ?>plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/src/') ?>plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/src/') ?>plugins/datatables/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/src/') ?>plugins/datatables/js/responsive.bootstrap4.min.js"></script>
<!-- buttons for Export datatable -->
<script src="<?= base_url('assets/src/') ?>plugins/datatables/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/src/') ?>plugins/datatables/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/src/') ?>plugins/datatables/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets/src/') ?>plugins/datatables/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets/src/') ?>plugins/datatables/js/buttons.flash.min.js"></script>
<script src="<?= base_url('assets/src/') ?>plugins/datatables/js/pdfmake.min.js"></script>
<script src="<?= base_url('assets/src/') ?>plugins/datatables/js/vfs_fonts.js"></script>
<!-- Datatable Setting js -->
<script src="<?= base_url('assets/vendors/') ?>scripts/datatable-setting.js"></script>
</body>

</html>