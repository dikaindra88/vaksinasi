<?php

use PhpParser\Node\Stmt\Echo_;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<style>
    @page {
        margin: 10px;
        padding: 10px;
    }


    table {
        border-collapse: collapse;

    }

    td {
        font-size: 10pt;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    th {
        font-size: 11pt;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
</style>

<body>

    <table width="47%" class=" table table-striped table-middle" border="1" style="border:1px solid #000; float:right;">
        <tr>
            <td width="3.5%">5.</td>
            <td align="left" width="40%">Apakah anda memiliki penyakit jantung berat atau asma dalam keadaan sesak?</td>
            <td align="left" width="10%"></td>
            <td align="left" width="10%"></td>
            <td align="left" width="30%">jika ya : vaksinasi ditunda dan dirujuk</td>
        </tr>
        <tr>
            <td>6.</td>
            <td align="left">Apakah anda pernah terkonfirmasi menderita COVID-19?</td>
            <td align="left"></td>
            <td align="left"></td>
            <td align="left">jika ya : vaksinasi ditunda sampai 3(tiga) bulan setelah sembuh</td>
        </tr>
        <tr>
            <td colspan="5"><i><b>Pertanyaan Nomor 7 dilanjutkan apabila terdapat penilaian kelemahan fisik pada sasaran vaksinasi.</b></i></td>
        </tr>
        <tr>
            <td>7.</td>
            <td align="left">Pertanyaan tambahan bagi sasaran lansia (≥60 tahun): <br> 1. Apakah Anda mengalami kesulitan naik 10 anak tangga?<br> 2. Apakah Anda sering merasa kelelahan?<br> 3. Apakah Anda memiliki paling sedikit 5 dari 11 penyakit (Hipertensi, diabetes, kanker, penyakit paru kronis, serangan jantung, gagal jantung kongestif, nyeri dada, asma, nyeri sendi, stroke dan penyakit ginjal)?<br> 4. Apakah Anda mengalami kesulitan berjalan kira-kira 100 sampai 200 meter?<br><br>Apakah Anda mengalami penurunan berat badan yang bermakna dalam setahun terakhir?</td>
            <td align="left"></td>
            <td align="left"></td>
            <td align="left">jika terdapat 3 atau lebih jawaban Ya maka vaksin tidak dapat diberikan<br><br><br></td>
        </tr>
        <tr>
            <td colspan="4"><b>HASIL SKRINING :<br>☐Lanjut Vaksin<br>☐Tunda<br>☐Tidak Diberikan</b></td>
            <td align="left">Paraf petugas:<br><br><br><br></td>
        </tr>
        <tr>
            <td colspan="5"><b>HASIL VAKSINASI</b></td>
        </tr>
        <tr>
            <td colspan="4"><b>Jenis Vaksin :<br><br>No. Batch :<br><br>Tanggal Vaksinasi :<br><br>Jam Vaksinasi :<br></b></td>
            <td align="left">Paraf petugas:<br><br><br><br><br><br><br></td>
        </tr>
        <tr>
            <td colspan="5"><b>C. MEJA 2 (PENCATATAN DAN OBSERVASI)</b></td>

        </tr>
        <tr>
            <td colspan="5"><b>HASIL OBSERVASI</b></td>
        </tr>
        <tr>
            <td colspan="4"><b>[ ]Tanpa Keluhan<br>[ ]ada Keluhan<br>Sebutkan keluhan jika ada.......</b></td>
            <td align="left">Paraf petugas:<br><br><br><br></td>
        </tr>


    </table>



    <table width="50%">

        <tr>
            <td align="center">
                <span style="line-height:1.6; font-family:Arial Black; float:left;">
                    <b style="font-size: 14pt;">KENDALI PELAYANAN VAKSINASI COVID-19 UNTUK VAKSIN 1 DAN 2</b><br>
                    <b style="font-family:Arial black; font-size:small; float:left">A. MEJA PRA-REGISTRASI</b>
                </span>

            </td>
        </tr>
    </table>
    <br>
    <br>
    <br>
    <table width="49%" class=" table table-striped table-middle" border="1" style="border:1px solid #000;">
        <tr>
            <th colspan="2">VERIFIKASI DATA IDENTITAS</th>

            <th align="center">Paraf Petugas</th>
        </tr>
        <tr>

            <th align="left">NIK</th>

            <td><?php echo $print[0]['participant_nik']; ?></td>
            <td rowspan="5" width="20px"></td>
        </tr>

        <tr>
            <th align="left">Nama</th>
            <td><?php echo $print[0]['participant_name']; ?></td>
        </tr>

        <tr>
            <th align="left">Tanggal Lahir</th>
            <td><?php echo ($print[0]['birth_date'] != '0000-00-00') ? date('d-m-Y', strtotime($print[0]['birth_date'])) : '' ?></td>
        </tr>

        <tr>
            <th align="left">No. Telp</th>
            <td><?php echo $print[0]['phone_number']; ?></td>
        </tr>



        <tr>
            <th align="left">Alamat</th>
            <td><?php echo $print[0]['address']; ?></td>
        </tr>
        <tr>
            <th align="left">Vaksin yang diberikan pada dosis 1</th>
            <td><?php echo $print[0]['vaccines_type']; ?></td>
            <td rowspan="1"></td>
        </tr>

    </table>
    <b style="font-family:Arial black; font-size:small;">B. MEJA 1(SKRINING DAN VAKSINASI)</b>
    <table width="52%" class=" table table-striped table-middle" border="1" style="border:1px solid #000;">

        <tr>
            <th colspan="5">SKRINING</th>
        </tr>
        <tr>
            <th width="10px">No.</th>
            <th width="40%">Pemeriksaan</th>
            <th colspan="2" width="20%">Hasil</th>
            <th width="40%">Tindak Lanjut</th>
        </tr>
        <tr>

            <td align="left">1.</td>
            <td align="left">Suhu</td>
            <td align="left"></td>
            <td align="left"></td>
            <td align="left">Suhu > 37,5°C vaksinasi ditunda sampai sasaran sembuh</td>
        </tr>
        <tr>

            <td align="left">2.</td>
            <td align="left">Tekanan Darah</td>
            <td align="left"></td>
            <td align="left"></td>
            <td align="left">Jika tekanan darah >180/110 mmHg pengukuran tekanan darah diulang 5(lima) sampai 10(sepuluh) menit kemudian jika masih tinggi maka vaksinasi ditunda sampai terkontrol</td>
        </tr>
        <tr>

            <td align="left"></td>
            <td align="left">Pertanyaan</td>
            <td align="left">Ya</td>
            <td align="left">Tidak</td>
            <td align="left"></td>
        </tr>
        <tr>

            <td align="left" rowspan="2">1.</td>
            <td align="left"><b>Pertanyaan untuk Vaksinasi ke-1</b><br>Apakah Anda memiliki riwayat alergi berat seperti sesak napas, bengkak dan urtikaria seluruh badan atau reaksi berat lainnya karena vaksin?</td>
            <td align="left"></td>
            <td align="left"></td>
            <td align="left">jika ya : vaksinasi diberikan di Rumah Sakit</td>
        </tr>
        <tr>


            <td align="left"><b>Pertanyaan untuk Vaksinasi ke-2</b><br>Apakah Anda memiliki riwayat alergi berat setelah divaksinasi COVID-19 sebelumnya?</td>
            <td align="left"></td>
            <td align="left"></td>
            <td align="left">Jika Ya : Merupakan kontradikasi untuk vaksinasi ke-2</td>
        </tr>
        <tr>

            <td>2.</td>
            <td align="left">Apakah anda mengidap penyakit autoimun seperti lupus?</td>
            <td align="left"></td>
            <td align="left"></td>
            <td align="left">jika ya, maka vaksinasi ditunda jika sedang dalam kondisi akut atau belum terkendali</td>
        </tr>
        <tr>

            <td>3.</td>
            <td align="left">Apakah anda sedang mendapat pengobatan untuk ganguan pembekuan darah, kelainan darah, defisiensi imun dan penerima produk darah/transfusi?</td>
            <td align="left"></td>
            <td align="left"></td>
            <td align="left">jika ya : vaksinasi ditunda dan dirujuk</td>
        </tr>
        <tr>

            <td>4.</td>
            <td align="left">Apakah anda sedang mendapat pengobatan immunosupressant seperti kortikosteroid dan kemoterapi?</td>
            <td align="left"></td>
            <td align="left"></td>
            <td align="left">jika ya : vaksinasi ditunda dan dirujuk</td>
        </tr>



    </table>



    <p align="center" style="color: grey;">Note : Membawa foto copy KTP jika sudah vaksinasi 1 Membawa foto copy kartu bukti vaksinasi</p>
</body>

</html>