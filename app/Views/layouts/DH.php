<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>RSUD PAKUHAJI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Material Icon Css -->
    <link href="public/assets/css/material-icon.css" rel="stylesheet">

    <!-- Bootstrap Core Css -->
    <link href="public/assets/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="public/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="public/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="public/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="public/assets/css/bootstrap-select.min.css" rel="stylesheet" />

    <!-- Jquery UI Css -->
    <link href="public/plugins/jquery-ui/jquery-ui.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="public/assets/css/style3.css" rel="stylesheet">


    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="public/assets/css/theme-blue.css" rel="stylesheet" />

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