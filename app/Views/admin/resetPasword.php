<?= $this->extend('/layout/template'); ?>

<?= $this->section('isikonten'); ?>

<div class="container">
    <!-- membuat row atau baris dibawah navbar -->
    <div class="row">
        <div class="col">
            <h3>RESET PASWORD</h3>


            <form method="post" action="<?= base_url('user/resetpaswordsekarang/' . $user->id_user); ?>">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label>Real Name</label>
                    <input type="text" name="realname" class="form-control" value="<?= $user->realname; ?>" readonly>
                </div>
                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" name="user_name" class="form-control" value="<?= $user->user_name; ?>" readonly>
                </div>

                <div class="form-group">
                    <label>Pasword Baru</label>
                    <input type="password" name="pasword" class="form-control">
                </div>

                <div class="col">
                    <a href="<?= base_Url('user'); ?>" type="button" class="btn btn-secondary"> BATAL </a>
                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                </div>
        </div>

    </div>
</div>




<?= $this->endSection(); ?>