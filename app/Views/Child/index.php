<?php echo view('layouts/top') ?>
<?php echo view('layouts/front-end') ?>
<section class="content">
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1>Data Peserta Anak - Anak</h1>
                <hr />
                <div class="row">
                    <div class="col-md-2 ml-2 mt-2">
                        <button type="button" onclick="document.location.reload(true)" class="btn btn-primary">
                            <i class="nav-icon fas fa-sync-alt"></i> Refresh
                        </button>
                    </div>
                    <div class="col-md-2 ml-2 mt-2">
                        <a href="<?= base_url('Child/print') ?>" target="_blank" class="btn btn-outline btn-primary">
                            <i class="fas fa-print"></i> Cetak
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
        } ?>
        <div class="card">

            <!-- /.card-header -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-condensed table-hover" id="example1">
                        <thead>
                            <tr class="bg-primary" style="color:white; font-size:10pt;">
                                <th>No</th>
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
                            <?php $nomor = 1; ?>
                            <?php foreach ($participant as $row) : ?>
                                <tr>
                                    <td><?php echo $nomor++ ?>.</td>
                                    <td><?= $row->participant_nik ?></td>
                                    <td><?= $row->participant_name ?></td>

                                    <td><?= $row->gender ?></td>
                                    <td><?= $row->birth_date ?></td>
                                    <td><?= $row->vaccines_type ?></td>
                                    <td><?= $row->vaccines_phase ?></td>
                                    <td><?= $row->vaccination_date ?></td>
                                    <td><?= $row->phone_number ?></td>
                                    <td style="font-size: 9pt;"><?= $row->address ?></td>
                                    <td>

                                        <div class="nav-item dropdown">
                                            <a class="nav-link" data-toggle="dropdown" href="#">
                                                <i class="far fa-caret-square-down"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <form action="<?= base_url('Child/getDetail/') . '/' . $row->participant_id ?>" method="post">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="Details">
                                                    <button type="submit" class="dropdown-item"><i class="nav-icon fas fa-eye"></i>
                                                        Details
                                                    </button>
                                                </form>
                                                <div class="dropdown-divider"></div>
                                                <form action="<?= base_url('Child/getUpdate/') . '/' . $row->participant_id ?>" method="post">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="Edit">
                                                    <button type="submit" class="dropdown-item"><i class="nav-icon fas fa-edit"></i>
                                                        Edit
                                                    </button>
                                                </form>
                                                <div class="dropdown-divider"></div>
                                                <form action="<?= base_url('Child/Delete/') . '/' . $row->participant_id ?>" method="post">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="Delete">
                                                    <button type="submit" class="dropdown-item" onclick="return confirm('Apakah anda yakin?');"><i class="nav-icon fas fa-trash-alt"></i>
                                                        Delete
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
<div class="card ml-3 mr-3 mb-1">
    <!-- /.card-header -->
    <div class="card-body">
        <div class="well ml-4 col-6">
            <dl class="dl-horizontal">
                <dt>Total Anak-Anak</dt>
                <dd><?php echo $Child ?> orang</dd>

                <dt>Jumlah Laki-laki</dt>
                <dd><?php echo $L ?> orang</dd>

                <dt>Jumlah Perempuan</dt>
                <dd><?php echo $P ?> orang</dd>

            </dl>
        </div>
    </div>
</div>

<?php echo view('layouts/bottom') ?>