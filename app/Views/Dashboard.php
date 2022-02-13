<?php echo view('layouts/top') ?>
<?php echo view('layouts/front-end') ?>
<!-- Content Wrapper. Contains page content -->

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <h2>
                    <center><strong>
                            <font color="blue">Hai.. <?= session()->get('name'); ?> <i class="fa fa-user"></i></font>
                        </strong></center>
                </h2><span></span>
                <div class="col-xs-12">
                    <font color="Grey">
                        <h4>
                            <center>Selamat datang di Aplikasi Sistem Informasi Pendaftaran Vaksinasi</center>
                        </h4>
                    </font>
                </div>
            </div>
            <!-- /.col-lg-12 -->
            <!-- /.row -->
        </div>
    </div>
</div><!-- /.container-fluid -->
<!-- /.content-header -->
<hr />
<!-- Main content -->
<?php if (session()->get('status') == 'staf') { ?>
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?php echo $dewasa ?></h3>

                            <p>Jumlah Data Dewasa</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="/Dewasa" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?php echo $remaja ?></h3>

                            <p>Jumlah Data Remaja</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-friends"></i>
                        </div>
                        <a href="/Remaja" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?php echo $Child ?></h3>

                            <p>Jumlah Data Anak-anak</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-child"></i>
                        </div>
                        <a href="/Child" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

            </div>

        </div><!-- /.container-fluid -->
    </section>
<?php } ?>
<?php if (session()->get('status') == 'admin') { ?>
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?php echo $dewasa ?></h3>

                            <p>Jumlah Data Dewasa</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="/Dewasa" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?php echo $remaja ?></h3>

                            <p>Jumlah Data Remaja</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-friends"></i>
                        </div>
                        <a href="/Remaja" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?php echo $Child ?></h3>

                            <p>Jumlah Data Anak-anak</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-child"></i>
                        </div>
                        <a href="/Child" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

            </div>

        </div><!-- /.container-fluid -->
    </section>
<?php } ?>
<!-- /.content -->

<?php echo view('layouts/bottom') ?>