<?= $this->extend('/layout/template'); ?>

<?= $this->section('isikonten'); ?>

<div class="page-title">
    <div class="title_left">
        <h3>RESET PASSWORD</h3>
    </div>

</div>

<div class="x_panel">

    <div class="x_title">
        <h2>Formulir Untuk Resett Pasword</h2>
        <div class="clearfix"></div>
    </div>


    <div class="x_conten">
        <form method="post" action="<?= base_url('user/resetpaswordsekarang/' . $user->id_user); ?>">
            <?= csrf_field(); ?>

            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Real Name<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6">
                    <input type="text" name="realname" class="form-control" value="<?= $user->realname; ?>" readonly />
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        <?= $salahnya->getError('realname'); ?>
                    </div>
                </div>
            </div>

            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">email / User Name<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6">
                    <input type="email" name="user_name" class="form-control " value="<?= $user->user_name; ?>" readonly />
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        <?= $salahnya->getError('user_name'); ?>
                    </div>
                </div>
            </div>

            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Password Baru<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control <?= ($salahnya->hasError('pasword')) ? 'is-invalid' : ''; ?>" type="password" id="password1" name="pasword" value="<?= old('pasword'); ?>" />

                    <span style=" position: absolute;right:15px;top:7px;" onclick="hideshow()">
                        <i id="slash" class="fa fa-eye-slash"></i>
                        <i id="eye" class="fa fa-eye"></i>
                    </span>
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        <?= $salahnya->getError('pasword'); ?>
                    </div>
                </div>
            </div>

            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Konfirmasi Password Baru<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control <?= ($salahnya->hasError('pasword2')) ? 'is-invalid' : ''; ?>" type="password" id="password2" name="pasword2" required />

                    <div id="validationServer04Feedback" class="invalid-feedback">
                        <?= $salahnya->getError('pasword2'); ?>
                    </div>
                </div>
            </div>


            <div class="ln_solid">
                <!--  -->
                <div class="form-group">
                    <div class="col-md-6 offset-md-3 mt-2">
                        <a href="<?= base_Url('user'); ?>" type="button" class="btn btn-secondary"> BATAL </a>
                        <button type="submit" class="btn btn-primary">SIMPAN</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>

<!-- Javascript functions	untuk tombol mata pada field pasword -->
<script>
    function hideshow() {
        var password = document.getElementById("password1");
        var slash = document.getElementById("slash");
        var eye = document.getElementById("eye");

        if (password.type === 'password') {
            password.type = "text";
            slash.style.display = "block";
            eye.style.display = "none";
        } else {
            password.type = "password";
            slash.style.display = "none";
            eye.style.display = "block";
        }

    }
</script>
<?= $this->endSection(); ?>