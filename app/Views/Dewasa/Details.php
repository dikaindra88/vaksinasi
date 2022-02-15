<?php echo view('layouts/top'); ?>
<?php echo view('layouts/front-end'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1>Data Pribadi Peserta Dewasa</h1>
                <hr />
            </div>
        </div>
        <hr />
        <br>
        <div class="card">

            <!-- /.card-header -->
            <div class="card-body">
                <button type="button" class="btn btn-info btn-sm" onclick="javascript:history.back()">
                    <i class="fa fa-arrow-circle-left"></i> Kembali
                </button>
                <h1></h1>
                <table class="table table-striped table-middle">

                    <tr>
                        <th width="20%">NIK Peserta</th>
                        <td width="1%">:</td>
                        <td><?php echo $Detail[0]['participant_nik']; ?></td>
                    </tr>
                    <tr>
                        <th>Nama Peserta</th>
                        <td>:</td>
                        <td><?php echo $Detail[0]['participant_name']; ?></td>
                    </tr>
                    <tr>
                        <th>Tanggal Lahir</th>
                        <td>:</td>
                        <td><?php echo ($Detail[0]['birth_date'] != '0000-00-00') ? date('d-m-Y', strtotime($Detail[0]['birth_date'])) : ''  ?></td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td>:</td>
                        <td><?php echo $Detail[0]['gender']; ?></td>
                    </tr>
                    <tr>
                        <th>Kategori</th>
                        <td>:</td>
                        <td><?php echo $Detail[0]['role']; ?></td>
                    </tr>
                    <tr>
                        <th>No. Telp</th>
                        <td>:</td>
                        <td><?php echo $Detail[0]['phone_number']; ?></td>
                    </tr>
                    <tr>
                        <th>Jenis Vaksin</th>
                        <td>:</td>
                        <td><?php echo $Detail[0]['vaccines_type']; ?></td>
                    </tr>
                    <tr>
                        <th>Tanggal Vaksinasi</th>
                        <td>:</td>
                        <td><?php echo ($Detail[0]['vaccination_date'] != '0000-00-00') ? date('d-m-Y', strtotime($Detail[0]['vaccination_date'])) : ''  ?></td>
                    </tr>
                    <tr>
                        <th>Fase</th>
                        <td>:</td>
                        <td><?php echo $Detail[0]['vaccines_phase']; ?></td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>:</td>
                        <td><?php echo $Detail[0]['address']; ?></td>
                    </tr>

                </table>
            </div>
        </div>
    </div>

</section>
<?php echo view('layouts/bottom'); ?>