<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TK NUR</title>
    <style>
        .center {
            margin: auto;
            width: 50%;
            border: 3px solid green;
            padding: 10px;
        }

        .table {
            margin: auto;
            width: 50%;
            border: 3px solid green;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="center">
        <?= $transaksi->id_transaksi ?>
        <table class="table">
            <thead>
                <tr>
                    <th>NM BRG</th>
                    <th>JML BRG</th>
                    <th>JML HRG</th>
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
                        </td>
                        <td><?= $brg_trs->banyak ?> </td>
                        <td><?= $brg_trs->jumlah ?> </td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td><?= $transaksi->jumlah_transaksi ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <script>
        window.print();
    </script>
</body>

</html>