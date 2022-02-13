<?php echo view('layouts/top') ?>
<?php echo view('layouts/front-end') ?>
<section class="content">
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1>Tambah Data Users</h1>
                <hr />
            </div>
        </div>
        <hr />
        <br>
        <div class="card">

            <!-- /.card-header -->
            <div class="card-body">

                <form method="post" action="<?= base_url('Admin/insert') ?>" enctype="multipart/form-data">

                    <table class="table table-striped table-middle">
                        <tr>
                            <th width="20%">Name</th>
                            <td width="1%">:</td>
                            <td><input type="text" class="form-control" name="name"></td>
                        </tr>
                        <tr>
                            <th>Username</th>
                            <td>:</td>
                            <td><input type="text" class="form-control" name="username"></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>:</td>
                            <td>

                                <input type="email" class="form-control" name="email">
                            </td>
                        </tr>
                        <tr>
                            <th>Password</th>
                            <td>:</td>
                            <td>
                                <input type="password" class="form-control" name="password">
                            </td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>:</td>
                            <td>
                                <select class="form-control selectpicker" name="status" required>
                                    <option value="admin" selected>admin</option>
                                    <option value="staf">staf</option>
                                    <option value="teknisi">teknisi</option>
                                </select>
                            </td>
                        </tr>


            </div>
        </div>

        </table>

        <button type="submit" class="btn btn-success">
            <i class="far fa-save"></i> Simpan
        </button>
        <button type="button" class="btn btn-danger" onclick="javascript:history.back()">
            <i class="fa fa-arrow-circle-left"></i> Batal
        </button>

        </form>
    </div>
    </div>
    </div>

</section>
<?php echo view('layouts/bottom') ?>