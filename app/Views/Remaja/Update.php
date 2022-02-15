<?php echo view('layouts/top') ?>
<?php echo view('layouts/front-end') ?>
<section class="content">
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1>Data Pribadi Peserta Remaja</h1>
                <hr />
            </div>
        </div>
        <hr />
        <br>
        <div class="card">

            <!-- /.card-header -->
            <div class="card-body">
                <?php echo form_open('Remaja/EditAction/' . $Update[0]['participant_id']); ?>

                <form action="" method="post">

                    <table class="table table-striped table-middle">
                        <tr>
                            <th width="20%">NIK Peserta</th>
                            <td width="1%">:</td>
                            <td><input type="text" class="form-control" name="participant_nik" value="<?php echo $Update[0]['participant_nik']; ?>"></td>
                        </tr>
                        <tr>
                            <th>Nama Peserta</th>
                            <td>:</td>
                            <td><input type="text" class="form-control" name="participant_name" value="<?php echo $Update[0]['participant_name']; ?>"></td>
                        </tr>
                        <tr>
                            <th>Tanggal Lahir</th>
                            <td>:</td>
                            <td>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="date" class="form-control" name="birth_date" value="<?php echo $Update[0]['birth_date']; ?>">
                                </div>


                            </td>
                        </tr>
                        <tr>
                            <th>No. Telp</th>
                            <td>:</td>
                            <td><input type="text" class="form-control" name="phone_number" value="<?php echo $Update[0]['phone_number']; ?>"></td>
                        </tr>
                        <tr>
                            <th>Kategori</th>
                            <td>:</td>
                            <td>
                                <select class="form-control selectpicker" name="role_id" required>
                                    <option value="<?php echo $Update[0]['role_id'] ?>" selected><?php echo $Update[0]['role'] ?></option>
                                    <?php foreach ($role as $row) : ?>
                                        <option value="<?= $row['role_id'] ?>"><?= $row['role'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>Tanggal Vaksinasi</th>
                            <td>:</td>
                            <td>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="date" class="form-control" name="vaccination_date" value="<?php echo $Update[0]['vaccination_date']; ?>">
                                </div>

                            </td>
                        </tr>
                        <tr>
                            <th>Jenis Vaksin</th>
                            <td>:</td>
                            <td>
                                <select class="form-control selectpicker" name="vaccines_id" required>
                                    <option value="<?php echo $Update[0]['vaccines_id'] ?>" selected><?php echo $Update[0]['vaccines_type'] ?></option>
                                    <?php foreach ($vaccines as $row) : ?>
                                        <option value="<?= $row['vaccines_id'] ?>"><?= $row['vaccines_type'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>Fase</th>
                            <td>:</td>
                            <td><input type="text" class="form-control" name="vaccines_phase" value="<?php echo $Update[0]['vaccines_phase']; ?>"></td>
                        </tr>

                        <tr>
                            <th>Alamat</th>
                            <td>:</td>
                            <td><input type="text" class="form-control" name="address" value="<?php echo $Update[0]['address']; ?>"></td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td>:</td>
                            <td>
                                <?php
                                if ($Update[0]['gender'] == 'Laki-laki') {
                                ?>

                                    <div class="radio">
                                        <label class="radio"><input type="radio" name="gender" value="Laki-laki" checked="checked"> Laki - laki</label>
                                    </div>
                                    <div class="radio">
                                        <label class="radio"><input type="radio" name="gender" value="Perempuan"> Perempuan</label>
                                    </div>
                                <?php } else {
                                ?>
                                    <div class="radio">
                                        <label class="radio"><input type="radio" name="gender" value="Laki-laki"> Laki - laki</label>
                                    </div>
                                    <div class="radio">
                                        <label class="radio"><input type="radio" name="gender" value="Perempuan" checked="checked"> Perempuan</label>
                                    </div>
                                <?php
                                } ?>
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
        <input type="hidden" name="participant_id" value="<?php echo $Update[0]['participant_id']; ?>">
        </form>
        <?php echo form_close() ?>
    </div>
    </div>
    </div>

</section>
<?php echo view('layouts/bottom') ?>