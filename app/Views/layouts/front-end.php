<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="<?= base_url('assets/img/rsph.png') ?>" alt="logorsph" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">


            <!-- Notifications Dropdown Menu -->
            <li class="nav-item">
                <a class="nav-link" href="#" role="button">
                    <i class="fas fa-user"></i> Hai.. <?= session()->get('name'); ?>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="signout" href="<?= base_url('Auth/logout') ?>">
                    <i class="fas fa-sign-out-alt nav-icon"></i> Keluar
                </a>
            </li>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <?php if (session()->get('status') == 'admin') { ?>
            <!-- Brand Logo -->
            <a href="" class="brand-link">
                <img src="<?= base_url('assets/img/rsph2.png') ?>" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">RSUD PAKUHAJI</span>
            </a>


            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                    <li class="nav-item">
                        <a href="<?= base_url('/Dashboard') ?>" class="nav-link <?php if (current_url(true)->getSegment('2') == 'Dashboard') {
                                                                                    echo "active";
                                                                                } ?> ">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>

                    <li class="nav-header">JADWAL</li>
                    <li class="nav-item">
                        <a href="<?= base_url('Jadwal/index') ?>" class="nav-link <?php if (current_url(true)->getSegment('2') == 'Jadwal') {
                                                                                        echo "active";
                                                                                    } ?> ">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>
                                Jadwal Vaksinasi
                            </p>
                        </a>
                    </li>

                    <li class="nav-header">DATA PESERTA</li>
                    <li class="nav-item">
                        <a href="<?= base_url('Dewasa/index') ?>" class="nav-link <?php if (current_url(true)->getSegment('2') == 'Dewasa') {
                                                                                        echo "active";
                                                                                    } ?> ">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Dewasa
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('Remaja/index') ?>" class="nav-link <?php if (current_url(true)->getSegment('2') == 'Remaja') {
                                                                                        echo "active";
                                                                                    } ?> ">
                            <i class="nav-icon fas fa-user-friends"></i>
                            <p>
                                Remaja
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('Child/index') ?>" class="nav-link <?php if (current_url(true)->getSegment('2') == 'Child') {
                                                                                        echo "active";
                                                                                    } ?> ">
                            <i class="nav-icon fas fa-child"></i>
                            <p>
                                Anak-Anak
                            </p>
                        </a>
                    </li>

                    <li class="nav-header">DATA VAKSIN</li>
                    <li class="nav-item">
                        <a href="<?= base_url('Vaccines/index') ?>" class="nav-link <?php if (current_url(true)->getSegment('2') == 'Vaccines') {
                                                                                        echo "active";
                                                                                    } ?> ">
                            <i class="material-icons">vaccines</i>
                            <p>
                                Jenis Vaksin
                            </p>
                        </a>
                    </li>

                    <li class="nav-header">USERS</li>
                    <li class="nav-item">
                        <a href="<?= base_url('Admin/index') ?>" class="nav-link <?php if (current_url(true)->getSegment('2') == 'Admin') {
                                                                                        echo "active";
                                                                                    } ?> ">
                            <i class="nav-icon fas fa-users-cog"></i>
                            <p>Admin</p>
                        </a>
                    </li>
                </ul>
            </nav>
        <?php } ?>
        <?php if (session()->get('status') == 'staf') { ?>
            <!-- Brand Logo -->
            <a href="" class="brand-link">
                <img src="<?= base_url('assets/img/rsph2.png') ?>" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">RSUD PAKUHAJI</span>
            </a>


            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                    <li class="nav-item">
                        <a href="<?= base_url('/Dashboard') ?>" class="nav-link <?php if (current_url(true)->getSegment('2') == 'Dashboard') {
                                                                                    echo "active";
                                                                                } ?> ">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>

                    <li class="nav-header">JADWAL</li>
                    <li class="nav-item">
                        <a href="<?= base_url('Jadwal/index') ?>" class="nav-link <?php if (current_url(true)->getSegment('2') == 'Jadwal') {
                                                                                        echo "active";
                                                                                    } ?> ">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>
                                Jadwal Vaksinasi
                            </p>
                        </a>
                    </li>

                    <li class="nav-header">DATA PESERTA</li>
                    <li class="nav-item">
                        <a href="<?= base_url('Dewasa/index') ?>" class="nav-link <?php if (current_url(true)->getSegment('2') == 'Dewasa') {
                                                                                        echo "active";
                                                                                    } ?> ">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Dewasa
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('Remaja/index') ?>" class="nav-link <?php if (current_url(true)->getSegment('2') == 'Remaja') {
                                                                                        echo "active";
                                                                                    } ?> ">
                            <i class="nav-icon fas fa-user-friends"></i>
                            <p>
                                Remaja
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('Child/index') ?>" class="nav-link <?php if (current_url(true)->getSegment('2') == 'Child') {
                                                                                        echo "active";
                                                                                    } ?> ">
                            <i class="nav-icon fas fa-child"></i>
                            <p>
                                Anak-Anak
                            </p>
                        </a>
                    </li>

                    <li class="nav-header">DATA VAKSIN</li>
                    <li class="nav-item">
                        <a href="<?= base_url('Vaccines/index') ?>" class="nav-link <?php if (current_url(true)->getSegment('2') == 'Vaccines') {
                                                                                        echo "active";
                                                                                    } ?> ">
                            <i class="material-icons">vaccines</i>
                            <p>
                                Jenis Vaksin
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
        <?php } ?>
        <!-- /.sidebar-menu -->

        <!-- /.sidebar -->
    </aside>
</div>
<div class="content-wrapper">