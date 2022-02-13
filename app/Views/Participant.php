<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>RSUD PAKUHAJI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?= base_url('assets/img/favicon.ico') ?>" type="image/x-icon">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Material Icon Css -->
    <link href="<?= base_url('assets/css/material-icon.css') ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('plugins/fontawesome-free/css/all.min.css') ?>">

    <!-- Bootstrap Core Css -->
    <link href="<?= base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?= base_url('plugins/node-waves/waves.css') ?>" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?= base_url('plugins/animate-css/animate.css') ?>" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="<?= base_url('plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') ?>" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="<?= base_url('assets/css/bootstrap-select.min.css') ?>" rel="stylesheet" />

    <!-- Jquery UI Css -->
    <link href="<?= base_url('plugins/jquery-ui/jquery-ui.css') ?>" rel="stylesheet">

    <!-- Custom Css -->
    <link href="<?= base_url('assets/css/style3.css') ?>" rel="stylesheet">


    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?= base_url('assets/css/theme-blue.css') ?>" rel="stylesheet" />

    <script>
        $(function() {
            $("#datepicker");
        });

        window.onload = function() {
            $('#datepicker').on('change', function() {
                var dob = new Date(this.value);
                var today = new Date();
                var age = Math.floor((today - dob) / (365.25 * 24 * 60 * 60 * 1000));
                $('#umur').val(age);
            });
        }
    </script>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        nav {
            margin: auto;
            text-align: center;
            width: 100%;
            font-family: arial;
            background: #4f9e81;
            padding: 0 0px;
            list-style: none;
            position: relative;
            display: inline-table;
        }
    </style>
</head>

<body style="background-image:url(<?= base_url('assets/img/gbr1.jpg') ?>);background-size:cover;background-attachment:fixed;" class="login-page">

    <!-- Page Loader-->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Memproses data ke server.....</p>
        </div>
    </div>
    <!-- #END# Page Loader -->

    <form method="post" action="" enctype="multipart/form-data">


        <div class="login-box" style="margin: 20px;">
            <div class="logo">
                <p class="align-center"><img src="<?= base_url('assets/img/logo-hst.png') ?>" style="width: 100px; height: 100px;"></p>
                <a href="/">RUMAH SAKIT UMUM PAKUHAJI KAB. TANGERANG</a>
                <small>Jl. Raya Pakuhaji No.88, Pakuhaji, Kecamatan Pakuhaji, Tangerang, Banten 15570</small>
            </div>
            <div class="card col-10 position-relative">
                <div class="body">
                    <div class="card1">
                        <?php
                        session()->getFlashdata('pesan');
                        if (session()->getFlashdata('pesan')) {
                            echo '  <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h6><i class="icon fas fa-exclamation-circle"></i>';
                            echo session()->getFlashdata('pesan');
                            echo '</h6></div>';
                        }  ?>
                        <h5 style="text-align:center; margin-top:20px;">Silakan Isi Nomor Nik Yang Anda Daftarkan</h5>
                    </div>
                    <nav style="color:white">
                        <h5 style="margin-top: 5px;">CETAK BUKTI PENDAFTARAN VAKSINASI ONLINE</h5>
                    </nav><br /><br />
                    <!-- 1-->
                    <!-- 1-->


                    <form action="Daftar/validation" method="POST">
                        <div class="input-group mb-3"><span class="input-group-addon input-group-sm">
                                <button class="btn btn-outline-secondary" name="src" type="submit" id="button-addon1"><i class="material-icons">search</i></button>


                            </span>
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Masukan Nik Anda" aria-label="Example text with button addon" name="participant_nik" aria-describedby="button-addon1">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </form>
    <div class="card1">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-condensed table-hover" id="example1" width="100%">
                    <thead>

                        <tr class="bg-success" style="color:white; font-size:10pt;">

                            <th>NIK</th>
                            <th>Name</th>
                            <th>L/P</th>
                            <!-- <th>Lahir</th> -->
                            <th>Birth Date</th>
                            <th>Vaccines Type</th>
                            <th>Phase</th>
                            <th>Vaccination Date</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Aksi</th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php foreach ($getdata as $row) { ?>

                            <tr>

                                <td style="font-size: 9pt;"><?= $row['participant_nik'] ?></td>
                                <td style="font-size: 9pt;"><?= $row['participant_name'] ?></td>

                                <td style="font-size: 9pt;"><?= $row['gender'] ?></td>
                                <td style="font-size: 9pt;"><?= $row['birth_date'] ?></td>
                                <td style="font-size: 9pt;"><?= $row['vaccines_type'] ?></td>
                                <td style="font-size: 9pt;"><?= $row['vaccines_phase'] ?></td>
                                <td style="font-size: 9pt;"><?= $row['vaccination_date'] ?></td>
                                <td style="font-size: 9pt;"><?= $row['phone_number'] ?></td>
                                <td style="font-size: 9pt;"><?= $row['address'] ?></td>
                                <td>
                                    <form action="<?= base_url('Daftar/cetak/') . '/' . $row['participant_nik'] ?>" method="post">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="Cetak">
                                        <button type="submit" class="btn"><i class="nav-icon fas fa-print"></i>

                                        </button>
                                    </form>

                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- End Login Modal -->
    <!-- Jquery Core Js -->
    <script src="<?= base_url('plugins/jquery/jquery.min.js') ?>"></script>

    <script src="<?= base_url('plugins/jquery-ui/jquery-ui.js') ?>"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?= base_url('plugins/bootstrap/js/bootstrap.js') ?>"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?= base_url('plugins/node-waves/waves.js') ?>"></script>

    <!-- Validation Plugin Js -->
    <script src="<?= base_url('plugins/jquery-validation/jquery.validate.js') ?>"></script>

    <!-- Autosize Plugin Js -->
    <script src="<?= base_url('plugins/autosize/autosize.js') ?>"></script>

    <!-- Moment Plugin Js -->
    <script src="<?= base_url('plugins/momentjs/moment.js') ?>"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="<?= base_url('plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') ?>"></script>

    <!-- Custom Js -->
    <script src="<?= base_url('assets/js/admin.js') ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('dist/js/adminlte.js') ?>"></script>

    <script>
        $(document).ready(function() {

            //Textare auto growth
            autosize($('textarea.auto-growth'));

            $('.datepicker').bootstrapMaterialDatePicker({
                format: 'YYYY-MM-DD',
                clearButton: true,
                weekStart: 1,
                time: false
            });

        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $.ajax({
                type: 'POST',
                url: "get_provinsi.php",
                cache: false,
                success: function(msg) {
                    $("#provinsi").html(msg);
                }
            });

            $("#provinsi").change(function() {
                var provinsi = $("#provinsi").val();
                $.ajax({
                    type: 'POST',
                    url: "get_kabupaten.php",
                    data: {
                        provinsi: provinsi
                    },
                    cache: false,
                    success: function(msg) {
                        $("#kabupaten").html(msg);
                    }
                });
            });

            $("#kabupaten").change(function() {
                var kabupaten = $("#kabupaten").val();
                $.ajax({
                    type: 'POST',
                    url: "get_kecamatan.php",
                    data: {
                        kabupaten: kabupaten
                    },
                    cache: false,
                    success: function(msg) {
                        $("#kecamatan").html(msg);
                    }
                });
            });

            $("#kecamatan").change(function() {
                var kecamatan = $("#kecamatan").val();
                $.ajax({
                    type: 'POST',
                    url: "get_kelurahan.php",
                    data: {
                        kecamatan: kecamatan
                    },
                    cache: false,
                    success: function(msg) {
                        $("#kelurahan").html(msg);
                    }
                });
            });

            $("#kelurahan").change(function() {
                var kecamatan = $("#kelurahan").val();
                $.ajax({
                    type: 'POST',
                    url: "get_kelurahan2.php",
                    data: {
                        kecamatan: kecamatan
                    },
                    cache: false,
                    success: function(msg) {
                        $("#kelurahan2").html(msg);
                    }
                });
            });
        });
    </script>

</body>

</html>