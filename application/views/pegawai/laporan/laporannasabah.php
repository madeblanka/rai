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

        table {
            margin-top: 5px;
            margin-left: 15px;
            margin-bottom: 15px;
        }

        .white {
            color: white;
        }
    </style>
</head>

<body>
    <h3 class="header">Laporan Nasabah</h3>
    <p class="">(<?= $nasabah['nik']; ?>) </p>
    <p>Nama <span class="white">aaaaaaaaa..</span> : <?= $nasabah['nama']; ?></p>
    <p>Status <span class="white">aaaaaaaaa.</span> : <?= $nasabah['status']; ?></p>
    <p>Ahli Waris <span class="white">aaaa.aa</span> : <?= $nasabah['ahliwaris']; ?></p>
    <p>Status Ahli Waris <span class="white">a</span> : <?= $nasabah['statusahliwaris']; ?></p>
    <p class="" style="margin-bottom: 15px;">Alamat <span class="white">aaaaaaaaa</span> : <?= $nasabah['alamat']; ?></p>

    <?php if (!empty($deposito)) { ?>
        <h4 class="">Deposito</h4>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Jumlah (Rp)</th>
                    <th>Waktu (Bulan)</th>
                    <th>Bunga</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($deposito as $d) : ?>
                    <tr>
                        <td><?php echo $i++; ?>.</td>
                        <td><?php echo date('d-m-Y', strtotime($d['tanggal'])) ?></td>
                        <td><?php echo number_format($d['jumlah'], 0, ',', '.') ?></td>
                        <td><?php echo $d['waktu'] ?></td>
                        <td><?php echo $d['bunga'] ?> %</td>
                        <td><?php echo $d['status'] ?></td>
                    </tr>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php } ?>
    <?php if (!empty($kredit)) { ?>
        <h4 class="">Kredit</h4>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Jumlah (Rp)</th>
                    <th>Waktu (Bulan)</th>
                    <th>Bunga</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($kredit as $d) : ?>
                    <tr>
                        <td><?php echo $i++; ?>.</td>
                        <td><?php echo date('d-m-Y', strtotime($d['tanggal'])) ?></td>
                        <td><?php echo number_format($d['jumlah'], 0, ',', '.') ?></td>
                        <td><?php echo $d['bulan'] ?></td>
                        <td><?php echo $d['bunga'] ?> %</td>
                        <td><?php echo $d['status'] ?></td>
                    </tr>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php } ?>
    <?php if (!empty($tabungan)) { ?>
        <h4 class="">Tabungan</h4>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Jumlah (Rp)</th>
                    <th>Waktu (Bulan)</th>
                    <th>Bunga</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($tabungan as $d) : ?>
                    <tr>
                        <td><?php echo $i++; ?>.</td>
                        <td><?php echo date('d-m-Y', strtotime($d['tanggal'])) ?></td>
                        <td><?php echo number_format($d['jumlah'], 0, ',', '.') ?></td>
                        <td><?php echo $d['waktu'] ?></td>
                        <td><?php echo $d['bunga'] ?> %</td>
                        <td><?php echo $d['status'] ?></td>
                    </tr>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php } ?>
</body>

</html>