<?php echo view('layouts/top') ?>
<?php echo view('layouts/front-end') ?>
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
                <?php echo form_open('Admin/EditAction/' . $Update[0]['id_user']); ?>
                <form action="" method="post">

                    <table class="table table-striped table-middle">
                        <tr>
                            <th width="20%">Nama</th>
                            <td width="1%">:</td>
                            <td><input type="text" class="form-control" name="name" value="<?php echo $Update[0]['name']; ?>"></td>
                        </tr>
                        <tr>
                            <th>Username</th>
                            <td>:</td>
                            <td><input type="text" class="form-control" name="username" value="<?php echo $Update[0]['username']; ?>"></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>:</td>
                            <td>

                                <input type="email" class="form-control" name="email" value="<?php echo $Update[0]['email']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <th>Password</th>
                            <td>:</td>
                            <td>
                                <input type="password" class="form-control" name="password">
                                <small>Jika dikosongkan, maka password tidak berubah</small>
                            </td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>:</td>
                            <td>
                                <select class="form-control selectpicker" name="status" required>
                                    <option value="<?php echo $Update[0]['status'] ?>" selected><?php echo $Update[0]['status'] ?></option>
                                    <option value="admin">admin</option>
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
        <input type="hidden" name="id_user" value="<?php echo $Update[0]['id_user']; ?>">
        </form>
        <?php echo form_close() ?>
    </div>
    </div>
    </div>

</section>
<?php echo view('layouts/bottom') ?>