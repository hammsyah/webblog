<!-- panggil header disini -->
<?= $this->include('layout/header'); ?>
<!-- panggil navbar admin disini -->
<?= $this->include('layout/navbar_admin'); ?>

<div class="container">
    <!-- membuat row atau baris dibawah navbar -->
    <div class="row">
        <div class="col">
            <h3>EDIT USER</h3>


            <form method="post" action="<?= base_url('user/ubahsekarang/' . $user->id_user); ?>">

                <div class="form-group">
                    <label>Real Name</label>
                    <input type="text" name="realname" class="form-control" value="<?= $user->realname; ?>">
                </div>

                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" name="user_name" class="form-control" value="<?= $user->user_name; ?>">
                </div>

                <div class="form-group">
                    <label>Role</label>
                    <select name="fid_level" class="form-control" required>
                        <option value="" hidden></option>
                        <?php foreach ($level as $u) : ?>
                            <option value="<?= $u['id_level']; ?>" <?= $user->fid_level == $u['id_level'] ? 'selected' : null ?>><?= $u['nama_level']; ?></option>

                        <?php endforeach; ?>
                    </select>

                </div>
                <div class="col">
                    <a href="<?= base_Url('user'); ?>" type="button" class="btn btn-secondary"> BATAL </a>
                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                </div>
        </div>

    </div>
</div>




<?= $this->include('layout/footer'); ?>