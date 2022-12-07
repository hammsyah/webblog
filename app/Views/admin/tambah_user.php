<?= $this->extend('layout/template'); ?>
<?= $this->section('isikonten'); ?>

<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>TAMBAH SUSER</h3>
        </div>

    </div>
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Tambahkan User Baru melalui formulir ini <small> .. </small></h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form class="" action="<?= base_url('user/tambah'); ?>" method="post" novalidate>

                        <?= csrf_field(); ?>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Real Name<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <input type="text" name="realname" class="form-control <?= ($salahnya->hasError('realname')) ? 'is-invalid' : ''; ?>" placeholder="Prayogo Conto" value="<?= old('realname'); ?>">
                                <div id="validationServer04Feedback" class="invalid-feedback">
                                    <?= $salahnya->getError('realname'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">email / User Name<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <input type="email" name="user_name" class="form-control <?= ($salahnya->hasError('user_name')) ? 'is-invalid' : ''; ?>" placeholder="contoh@webblog.com" value="<?= old('user_name'); ?>">
                                <div id="validationServer04Feedback" class="invalid-feedback">
                                    <?= $salahnya->getError('user_name'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Level<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <select name="fid_level" class="form-control" required>
                                    <option value="" hidden></option>
                                    <?php foreach ($level as $lev) : ?>
                                        <option value="<?= $lev['id_level']; ?>"><?= $lev['nama_level']; ?></option>
                                    <?php endforeach; ?>
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>


                        <div c\lass="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Password<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control <?= ($salahnya->hasError('pasword')) ? 'is-invalid' : ''; ?>" type="password" id="password1" name="pasword" required value="<?= old('pasword'); ?>">
                                <div id="validationServer04Feedback" class="invalid-feedback">
                                    <?= $salahnya->getError('pasword'); ?>
                                </div>
                                <span style="position: absolute;right:15px;top:7px;" onclick="hideshow()">
                                    <i id="slash" class="fa fa-eye-slash"></i>
                                    <i id="eye" class="fa fa-eye"></i>
                                </span>
                            </div>
                        </div>



                        <div class="ln_solid">
                            <div class="form-group">
                                <div class="col-md-6 offset-md-3 mt-2">
                                    <button type='submit' class="btn btn-primary">SIMPAN</button>
                                    <button type='reset' class="btn btn-success">RESET</button>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Javascript functions	-->
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