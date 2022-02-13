<?php echo view('layouts/top') ?>
<?php echo view('layouts/front-end') ?>
<section class="content">
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1>Tambah Data Vaksin</h1>
                <hr />
            </div>
        </div>
        <hr />
        <br>
        <div class="card">

            <!-- /.card-header -->
            <div class="card-body">

                <form method="post" action="<?= base_url('Vaccines/insert') ?>" enctype="multipart/form-data">

                    <table class="table table-striped table-middle">
                        <tr>
                            <th width="20%">ID Vaksin</th>
                            <td width="1%">:</td>
                            <td><input type="text" class="form-control" name="vaccines_id"></td>
                        </tr>
                        <tr>
                            <th width="20%">Jenis Vaksin</th>
                            <td width="1%">:</td>
                            <td><input type="text" class="form-control" name="vaccines_type"></td>
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