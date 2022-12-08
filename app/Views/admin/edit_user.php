<?= $this->extend('/layout/template'); ?>

<?= $this->section('isikonten'); ?>

<div class="page-title">
    <div class="title_left">
        <h3>EDIT USER</h3>
    </div>

</div>

<div class="x_panel">

    <div class="x_title">
        <h2>Formulir Untuk Edit Profil User</h2>
        <div class="clearfix"></div>
    </div>
    <div class="x-conten">
        <form method="post" action="<?= base_url('user/ubahsekarang/' . $user->id_user); ?>">

            <?= csrf_field(); ?>

            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Real Name<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6">
                    <input type="text" name="realname" class="form-control" value="<?= $user->realname; ?>">
                </div>
            </div>

            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">email / User Name<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6">
                    <input type="text" name="user_name" class="form-control" value="<?= $user->user_name; ?>">
                </div>
            </div>


            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Level<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6">
                    <select name="fid_level" class="form-control" required>
                        <option value="" hidden></option>
                        <?php foreach ($level as $u) : ?>
                            <option value="<?= $u['id_level']; ?>" <?= $user->fid_level == $u['id_level'] ? 'selected' : null ?>><?= $u['nama_level']; ?></option>

                        <?php endforeach; ?>
                        <option value=""></option>
                    </select>
                </div>
            </div>

            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Keterangan<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6">
                    <input type="text" name="keterangan" class="form-control" value="<?= $user->keterangan; ?>">
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

<?= $this->endSection(); ?>