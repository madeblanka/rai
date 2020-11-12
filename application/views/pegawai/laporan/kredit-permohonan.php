<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pernyataan Pengajuan Pinjaman</title>
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
            text-align: center;
        }

        .white {
            color: white;
        }

        /* .center {
            margin-left: auto;
            margin-right: auto;
        } */

        table,
        th,
        td {
            padding: 5px;
        }
    </style>
</head>

<body>
    <h3 class="header">Pernyataan Pengajuan Pinjaman (Perorangan)</h3>

    <table>
        <tr>
            <td>Id Pengajuan kredit</td>
            <td>:</td>
            <td><?= $kredit['idpengajuankredit']; ?></td>
        </tr>
        <tr>
            <td>Id Nasabah</td>
            <td>:</td>
            <td><?= $kredit['idnasabah']; ?></td>
        </tr>
        <tr>
            <td>Nama Nasabah</td>
            <td>:</td>
            <td><?= $kredit['nama']; ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?= $kredit['alamat']; ?></td>
        </tr>
        <tr>
            <td>Jumlah kredit</td>
            <td>:</td>
            <td>Rp. <?= number_format($kredit['jumlah'], 0, ',', '.') ?> </td>
        </tr>
        <tr>
            <td>Jangka Waktu</td>
            <td>:</td>
            <td><?= $kredit['bulan']; ?> Bulan</td>
        </tr>
        <tr>
            <td>Bunga</td>
            <td>:</td>
            <td><?= $kredit['bunga']; ?> %</td>
        </tr>
        <tr>
            <td>Status</td>
            <td>:</td>
            <td><?= $kredit['status']; ?></td>
        </tr>
    </table>
    <table style="margin-top: 30px;">
        <tr>
            <td style="text-align:center">Pengesahan/Legalisasi</td>
            <td class="white">aaaaaaaaaaaaaaaaaaaaaaaaa</td>
            <td style="text-align:center">Badung, <?php echo date('d-m-Y', strtotime($kredit['tanggal'])) ?></td>
        </tr>
        <tr>
            <td style="text-align:center">Koperasi Mitra Sari Bumi</td>
            <td class="white">aaaaaaaaaaaaaaaaaaaaaaaaa</td>
            <td style="text-align:center">Nasabah/Pemohon</td>
        </tr>
        <tr>
            <td style="text-align:center">Manager</td>
            <td class="white">aaaaaaaaaaaaaaaaaaaaaaaaa</td>
        </tr>
        <tr>
            <td class="white">aaaaaaaaaaaaaaaaaaaaaaaaa</td>
        </tr>
        <tr>
            <td class="white">aaaaaaaaaaaaaaaaaaaaaaaaa</td>
        </tr>
        <tr>
            <td class="white">aaaaaaaaaaaaaaaaaaaaaaaaa</td>
        </tr>
        <tr>
            <td style="text-align:center">(I Putu Murjaya)</td>
            <td class="white">aaaaaaaaaaaaaaaaaa</td>
            <td style="text-align:center">(<?= $kredit['nama']; ?>)</td>
        </tr>
    </table>
</body>

</html>