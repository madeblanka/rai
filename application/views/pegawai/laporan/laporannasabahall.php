<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Nasabah</title>
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
    </style>
</head>

<body>
    <h3 class="header">Laporan Nasabah</h3>
    <h4 class="">Periode:</h4>
    <p class="" style="margin-bottom: 15px;"><?= date_format(date_create($tanggal_mulai), "d F Y"); ?> s/d <?= date_format(date_create($tanggal_selesai), "d F Y"); ?></p>


    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>ID Nasabah</th>
                <th>Nama</th>
                <th>Total Pengajuan Tabungan Program (Rp)</th>
                <th>Total Pengajuan Kredit (Rp)</th>
                <th>Total Pengajuan Deposito (Rp)</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($tampung as $t) : ?>
                <tr>
                    <td><?= $i++; ?>.</td>
                    <?php foreach ($t as $data) : ?>
                        <td><?php echo (gettype($data) == 'integer') ? number_format($data, 0, ",", ".") : $data ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>