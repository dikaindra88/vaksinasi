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
    <link href="assets/css/material-icon.css" rel="stylesheet">

    <!-- Bootstrap Core Css -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="assets/css/bootstrap-select.min.css" rel="stylesheet" />

    <!-- Jquery UI Css -->
    <link href="plugins/jquery-ui/jquery-ui.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="assets/css/style3.css" rel="stylesheet">


    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="assets/css/theme-blue.css" rel="stylesheet" />

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

<body style="background-image:url(assets/img/gbr1.jpg);background-size:cover;background-attachment:fixed;" class="login-page">

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
    <?php echo form_open('Daftar/insertData') ?>
    <form method="post" action="" enctype="multipart/form-data">


        <div class="login-box" style="margin: 20px;">
            <div class="logo">
                <p class="align-center"><img src="assets/img/logo-hst.png" style="width: 100px; height: 100px;"></p>
                <a href="/">RUMAH SAKIT UMUM PAKUHAJI KAB. TANGERANG</a>
                <small>Jl. Raya Pakuhaji No.88, Pakuhaji, Kecamatan Pakuhaji, Tangerang, Banten 15570</small>
            </div>
            <div class="card col-10 position-relative">
                <div class="body">
                    <div class="card1">
                        <?php
                        session()->getFlashdata('tambah');
                        if (session()->getFlashdata('tambah')) {
                            echo '  <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h6><i class="icon fas fa-exclamation-circle"></i>';
                            echo session()->getFlashdata('tambah');
                            echo '</h6></div>';
                        }
                        ?>
                        <h5 style="text-align:center; margin-top:20px;">Silakan Isi Data Diri Sesuai Dengan Kartu Identitas Anda</h5>
                    </div>
                    <nav style="color:white">
                        <h5 style="margin-top: 5px;">DATA PESERTA VAKSINASI</h5>
                    </nav><br /><br />
                    <!-- 1-->
                    <!-- 1-->



                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="participant_nik" placeholder=" No. KTP Anda" maxlength="20" required autofocus />
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="participant_name" placeholder=" Nama Lengkap Anda" required autofocus />
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">event</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control datepicker" name="birth_date" id="datepicker" placeholder=" Tgl Lahir Anda (Bukan Tgl Saat ini)" required autofocus />

                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">whatsapp</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="phone_number" minlength="10" maxlength="15" placeholder=" Nomor Telepon/ HP Anda contoh : +62822xxxx" required autofocus />
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">view_list</i>
                        </span>
                        <div class="form-line">
                            <select class="form-select form-select-lg mb-3" name="participant_type" style="border: none;" aria-label="Default select example">
                                <option disabled selected>Pilih Kategori Usia</option>
                                <option value="Dewasa">Dewasa</option>
                                <option value="Remaja">Remaja</option>
                                <option value="Child">Anak-Anak</option>
                            </select>
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">event</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control datepicker" name="vaccination_date" id="datepicker" placeholder=" Silahkan pilih tanggal untuk melakukan vaksinasi" required autofocus />
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">vaccines</i>
                        </span>
                        <div class="form-line">
                            <select class="form-select form-select-lg mb-3" name="vaccines_type" style="border: none;" aria-label="Default select example">
                                <option disabled selected>Pilih Tipe Vaksin</option>
                                <option value="Sinovac">Sinovac</option>
                                <option value="Astrazeneca">Astrazeneca</option>
                                <option value="Booster">Booster</option>
                            </select>
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">pin</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="vaccines_phase" placeholder=" Tahap vaksin ke (1-3)" onkeypress="return event.charCode >= 48 && event.charCode <=57" required autofocus />
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">location_on</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="address" placeholder=" Alamat sesuai dengan KTP anda" required autofocus />
                        </div>
                    </div>
                    <!-- 5 -->
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">group</i>
                        </span>
                        <div class="">
                            <input name="gender" value="L" type="radio" id="radio_1" checked />
                            <label for="radio_1">Laki-Laki </label>
                            <input name="gender" value="P" type="radio" id="radio_2" />
                            <label for="radio_2">Perempuan</label>
                        </div>
                    </div>
                    <br>
                    <div class="col-xs-3"></div>
                    <div class="col-xs-6 align-center">
                        <input type="submit" class="btn btn-block btn-lg bg-green waves-effect mb-5" name="simpan" value="DAFTAR" />
                        <a href="<?= base_url('Daftar/Validation') ?>">
                            <h6 style="color:black; margin-top:10px;">KLIK DISINI jika sudah Mengisi Formulir Online Sebelumnya</h6>
                        </a>
                    </div><br><br>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </form>

    <!-- End Login Modal -->
    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <script src="plugins/jquery-ui/jquery-ui.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>


    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>

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