<?php echo view('layouts/top') ?>
<?php echo view('layouts/front-end') ?>
<section class="content">
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1>Data Jenis Vaksin</h1>
                <hr />
                <div class="row">
                    <div class="col-md-2 ml-2 mt-2">
                        <button type="button" onclick="document.location.reload(true)" class="btn btn-primary">
                            <i class="nav-icon fas fa-sync-alt"></i> Refresh
                        </button>
                    </div>
                    <div class="col-md-2 ml-2 mt-2">
                        <a href="<?= base_url('Vaccines/Add') ?>" class="btn btn-outline btn-primary">
                            <i class="fas fa-plus"></i> Tambah
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <hr />
        <br>
        <?php
        session()->getFlashdata('pesan');

        if (session()->getFlashdata('pesan')) {
            echo '  <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h6><i class="icon fas fa-exclamation-circle"></i>';
            echo session()->getFlashdata('pesan');
            echo '</h6></div>';
        } else {
            session()->getFlashdata('Error');
            if (session()->getFlashdata('Error')) {
                echo '  <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h6><i class="icon fas fa-exclamation-circle"></i>';
                echo session()->getFlashdata('Error');
                echo '</h6></div>';
            }
        } ?>
        <div class="card">

            <!-- /.card-header -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-condensed table-hover" id="example1">
                        <thead>
                            <tr class="bg-primary" style="color:white; font-size:10pt;">
                                <th>No</th>
                                <th>ID Vaksin</th>
                                <th>Jenis Vaksin</th>

                                <th>Aksi</th>
                            </tr>

                        </thead>
                        <tbody>
                            <?php $nomor = 1; ?>
                            <?php foreach ($vaccines as $row) : ?>
                                <tr>
                                    <td><?php echo $nomor++ ?>.</td>
                                    <td><?= $row->vaccines_id ?></td>
                                    <td><?= $row->vaccines_type ?></td>
                                    <td>

                                        <div class="nav-item dropdown">
                                            <a class="nav-link" data-toggle="dropdown" href="#">
                                                <i class="far fa-caret-square-down"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <form action="<?= base_url('Vaccines/getUpdate/') . '/' . $row->vaccines_id ?>" method="post">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="Edit">
                                                    <button type="submit" class="dropdown-item"><i class="nav-icon fas fa-edit"></i>
                                                        Ubah
                                                    </button>
                                                </form>
                                                <div class="dropdown-divider"></div>
                                                <form action="<?= base_url('Vaccines/Delete/') . '/' . $row->vaccines_id ?>" method="post">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="Delete">
                                                    <button type="submit" class="dropdown-item" onclick="return confirm('Apakah anda yakin?');"><i class="nav-icon fas fa-trash-alt"></i>
                                                        Hapus
                                                    </button>
                                                </form>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</section>
<br><br>


<?php echo view('layouts/bottom') ?>