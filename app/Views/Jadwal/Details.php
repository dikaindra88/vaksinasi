<?php echo view('layouts/top'); ?>
<?php echo view('layouts/front-end'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1>Detail Data Peserta</h1>
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
                        <th width="20%">Participant Nik</th>
                        <td width="1%">:</td>
                        <td><?php echo $Detail[0]['participant_nik']; ?></td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>:</td>
                        <td><?php echo $Detail[0]['participant_name']; ?></td>
                    </tr>
                    <tr>
                        <th>Birth Date</th>
                        <td>:</td>
                        <td><?php echo $Detail[0]['birth_date']; ?></td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <td>:</td>
                        <td><?php echo $Detail[0]['gender']; ?></td>
                    </tr>
                    <tr>
                        <th>Participant Type</th>
                        <td>:</td>
                        <td><?php echo $Detail[0]['role']; ?></td>
                    </tr>
                    <tr>
                        <th>Phone Number</th>
                        <td>:</td>
                        <td><?php echo $Detail[0]['phone_number']; ?></td>
                    </tr>
                    <tr>
                        <th>Vaccines Type</th>
                        <td>:</td>
                        <td><?php echo $Detail[0]['vaccines_type']; ?></td>
                    </tr>
                    <tr>
                        <th>Vaccination Date</th>
                        <td>:</td>
                        <td><?php echo $Detail[0]['vaccination_date']; ?></td>
                    </tr>
                    <tr>
                        <th>Vaccines Phase</th>
                        <td>:</td>
                        <td><?php echo $Detail[0]['vaccines_phase']; ?></td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>:</td>
                        <td><?php echo $Detail[0]['address']; ?></td>
                    </tr>
                    <tr>
                        <th>Register Date</th>
                        <td>:</td>
                        <td><?php echo ($Detail[0]['create_at'] != '0000-00-00') ? Date('d-m-Y H:i:s', strtotime($Detail[0]['create_at'])) : '' ?></td>
                    </tr>

                </table>
            </div>
        </div>
    </div>

</section>
<?php echo view('layouts/bottom'); ?>