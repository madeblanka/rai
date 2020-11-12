<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Nasabah Deposito</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            padding-top: 50px;
            padding-bottom: 50px;
            padding-left: 50px;
            padding-right: 50px;
        }

        .header {
            margin-bottom: 30px;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>

<body>
    <h3 class="header">Laporan Nasabah Deposito</h3>
    <h4 class="">Periode : <?= date('d F Y', strtotime($tanggal_mulai)); ?> s/d <?= date('d F Y', strtotime($tanggal_selesai)); ?></h4>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jumlah (Rp)</th>
                <th>Waktu</th>
                <th>Bunga</th>
                <th>Tanggal</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach ($deposito as $d) : ?>
                <tr>
                    <td><?php echo $i++; ?>.</td>
                    <td><?php echo $d['nama'] ?></td>
                    <td><?php echo number_format($d['jumlah'], 0, ',', '.') ?></td>
                    <td><?php echo $d['waktu'] ?> Bulan</td>
                    <td><?php echo $d['bunga'] ?> %</td>
                    <td><?php echo date('d-m-Y', strtotime($d['tanggal'])) ?></td>
                    <td><?php echo $d['status'] ?></td>
                </tr>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>