<?php echo view('layouts/top'); ?>
<?php echo view('layouts/front-end'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1>Data Pribadi Users</h1>
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
                        <th width="20%">Name</th>
                        <td width="1%">:</td>
                        <td><?php echo $Detail[0]['name']; ?></td>
                    </tr>
                    <tr>
                        <th>Username</th>
                        <td>:</td>
                        <td><?php echo $Detail[0]['username']; ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>:</td>
                        <td><?php echo $Detail[0]['email']; ?></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>:</td>
                        <td><?php echo $Detail[0]['status']; ?></td>
                    </tr>


                </table>
            </div>
        </div>
    </div>

</section>
<?php echo view('layouts/bottom'); ?>