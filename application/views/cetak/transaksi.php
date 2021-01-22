<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TK NUR</title>
    <style>
        /* .center {
            margin: auto;
            width: 50%;
            padding: 10px;
        }

        .table {
            margin: auto;
            width: 50%;
            padding: 10px;
        }

        .table {
            margin: auto;
            width: 50%;
            padding: 10px;

        } */
    </style>
</head>

<body>
    <br>
    <div class="center">

    </div>
    <div class="center">
        No: <?= $transaksi->id_transaksi ?>&nbsp; <?= date('Y-m-d H:i') ?>
    </div>
    <table class="table" border="1">
        <thead>
            <tr>
                <th>NM_BRG&nbsp;</th>
                <th>JML_BRG&nbsp;</th>
                <th>JML_HRG</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($barang_transaksi as $brg_trs) : ?>
                <tr>
                    <td>
                        <?php
                        $barang = $this->db->query("SELECT * FROM barang WHERE id_barang = $brg_trs->id_barang");
                        $bar = $barang->row();

                        echo $bar->nama_singkat;
                        ?>
                        &nbsp;
                    </td>
                    <td><?= $brg_trs->banyak ?> &nbsp; </td>
                    <td><?= $brg_trs->jumlah ?> </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
    <div class="center">
        Total transaksi : <?= $transaksi->jumlah_transaksi ?>
    </div>
    <div class="center">
        Bayar Tunai&nbsp;&nbsp;&nbsp;&nbsp; : <?= $transaksi->jumlah_tunai  ?>
    </div>
    <div class="center">
        Kembali&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $transaksi->jumlah_tunai - $transaksi->jumlah_transaksi ?>
    </div>
    <h5>
        Kasir &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $this->session->userdata('username') ?>
    </h5>
    <h5>
        =========Terima Kasih===========
        <hr>
        --------------------------------

    </h5>
    <h5>
        ================================
    </h5>
    <h5>
        =========Toko Nurkayati=========
    </h5>
    <h5>
        ================================
    </h5>
    <br>
    <table class="table">
        <script>
            window.print();
        </script>
</body>

</html>