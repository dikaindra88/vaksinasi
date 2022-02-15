<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Print</title>
</head>
<style>
    table {

        border-collapse: collapse;
    }
</style>

<body>
    <img src="assets/img/logo-hst.png" style="width:60px; height:auto; position:absolute;">
    <img src="assets/img/rsph.png" style="width:60px; height:auto; position:absolute; margin-left:95%;">
    <table width="100%">
        <tr>
            <td align="center">
                <span style="line-height:1.6; font-weight:bold;">
                    PEMERINTAH KABUPATEN TANGERANG<br />RUMAH SAKIT UMUM PAKUHAJI<br />KEC. PAKUHAJI
                </span>
            </td>
        </tr>
    </table>

    <hr />

    <h4 align="center">Data Peserta Remaja <?php echo date('F Y') ?></h4>
    <table width="100%" border="2" cellpadding="0">
        <thead>
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <!-- <th>Lahir</th> -->
                <th>Tanggal Lahir</th>
                <th>Jenis Vaksin</th>
                <th>Fase</th>
                <th>Tanggal Vaksinasi</th>
                <th>No. Telp</th>
                <th>Alamat</th>

            </tr>

        </thead>
        <tbody>
            <?php $nomor = 1; ?>
            <?php foreach ($print as $row) : ?>
                <tr style="text-align: center;">
                    <td><?php echo $nomor++ ?>.</td>
                    <td><?= $row['participant_nik'] ?></td>
                    <td><?= $row['participant_name'] ?></td>

                    <td><?= $row['gender'] ?></td>
                    <td><?= ($row['birth_date'] != '0000-00-00') ? date('d-m-Y', strtotime($row['birth_date'])) : '' ?></td>
                    <td><?= $row['vaccines_type'] ?></td>
                    <td><?= $row['vaccines_phase'] ?></td>
                    <td><?= ($row['vaccination_date'] != '0000-00-00') ? date('d-m-Y', strtotime($row['vaccination_date'])) : '' ?></td>
                    <td><?= $row['phone_number'] ?></td>
                    <td style="font-size: 9pt;"><?= $row['address'] ?></td>

                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

</body>

</html>