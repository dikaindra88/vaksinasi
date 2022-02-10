<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="#" class="h1"><b>LOGIN</b></a>
        </div>
        <?php echo form_open('auth/cek_login') ?>
        <div class="card-body">
            <?php
            session()->getFlashdata('errors');
            if (session()->getFlashdata('pesan')) {
                echo '  <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h6><i class="icon fas fa-exclamation-circle"></i>';
                echo session()->getFlashdata('pesan');
                echo '</h6></div>';
            }  ?>



            <p class="login-box-msg">Login to start your session</p>
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-12">
                    <input type="submit" name="login" value="Login" class="btn btn-primary btn-block" />
                </div>
                <!-- /.col 
                <p class="mb-1 mt-1" style="text-align: center;">
                    <a href="forgot-password.html">I forgot my password</a>
                </p>-->
                <?php echo form_close() ?>
        </div>
        </form>


        <!-- /.social-auth-links -->


    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.login-box -->