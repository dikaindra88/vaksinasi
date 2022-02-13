<?php echo view('layouts/top') ?>
<?php echo view('layouts/front-end') ?>
<section class="content">
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1>Data Jenis Vaksin</h1>
                <hr />
            </div>
        </div>
        <hr />
        <br>
        <div class="card">

            <!-- /.card-header -->
            <div class="card-body">

                <form action="<?= base_url('Vaccines/EditAction/') . '/' . $Update[0]['vaccines_id']; ?>" method="post">

                    <table class="table table-striped table-middle">
                        <tr>
                            <th width="20%">ID Vaksin</th>
                            <td width="1%">:</td>
                            <td><input type="text" class="form-control" name="vaccines_id" value="<?php echo $Update[0]['vaccines_id']; ?>" disabled></td>
                        </tr>
                        <tr>
                            <th>Jenis Vaksin</th>
                            <td>:</td>
                            <td><input type="text" class="form-control" name="vaccines_type" value="<?php echo $Update[0]['vaccines_type']; ?>"></td>
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
        <input type="hidden" name="vaccines_id" value="<?php echo $Update[0]['vaccines_id']; ?>">
        </form>
    </div>
    </div>
    </div>

</section>
<?php echo view('layouts/bottom') ?>