<?php echo view('layouts/top') ?>
<?php echo view('layouts/front-end') ?>
<section class="content">
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1>Jadwal Peserta Vaksinasi</h1>
                <hr />

            </div>
        </div>
        <hr />
        <br>

        <div class="card">

            <!-- /.card-header -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-condensed table-hover" id="example1">
                        <thead>
                            <tr class="bg-primary" style="color:white; font-size:10pt;">
                                <th>No</th>
                                <th>Name</th>
                                <th>Vaccines Type</th>
                                <th>Phase</th>
                                <th>Vaccination Date</th>
                                <th>Phone</th>
                                <th>Register Date</th>
                                <th>Aksi</th>
                            </tr>

                        </thead>
                        <tbody>
                            <?php $nomor = 1; ?>
                            <?php foreach ($participant as $row) : ?>
                                <tr>
                                    <td><?php echo $nomor++ ?>.</td>
                                    <td><?= $row['participant_name'] ?></td>
                                    <td><?= $row['vaccines_type'] ?></td>
                                    <td><?= $row['vaccines_phase'] ?></td>
                                    <td><?= $row['vaccination_date'] ?></td>
                                    <td><?= $row['phone_number'] ?></td>
                                    <td><?= ($row['create_at'] != '0000-00-00') ? Date('d-m-Y H:i:s', strtotime($row['create_at'])) : '' ?></td>
                                    <td>

                                        <div class="nav-item dropdown">
                                            <a class="nav-link" data-toggle="dropdown" href="#">
                                                <i class="far fa-caret-square-down"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <form action="<?= base_url('Jadwal/getDetail/') . '/' . $row['participant_id'] ?>" method="post">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="Details">
                                                    <button type="submit" class="dropdown-item"><i class="nav-icon fas fa-eye"></i>
                                                        Details
                                                    </button>
                                                </form>
                                                <div class="dropdown-divider"></div>
                                                <a href="https://api.whatsapp.com/send?phone=<?= $row['phone_number'] ?>&text=Silahkan Datang ke RSUD PAKUHAJI Pada Tanggal <?= $row['vaccination_date'] ?> untuk melakukan vaksinasi dengan jenis vaksin <?= $row['vaccines_type'] ?> serta memperlihatkan bukti pendaftaran online dan membawa foto copy KTP.. Terimakasih.." target="_blink" type="submit" class="dropdown-item"><i class="nav-icon fab fa-whatsapp-square"></i>
                                                    Whatsapp
                                                </a>


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