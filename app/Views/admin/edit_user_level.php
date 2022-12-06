<?= $this->extend('/layout/template'); ?>

<?= $this->section('isikonten'); ?>

<div class="container">
    <!-- membuat row atau baris dibawah navbar -->
    <div class="row">
        <div class="col">
            <h4>EDIT USER LEVEL</h4>


            <form method="post" action="<?= base_url('user_level/ubahsekarang/' . $level['id']); ?>">

                <div class="form-group">
                    <label>Nama Level</label>
                    <input type="text" name="nama_level" class="form-control" value="<?= $level['nama_level']; ?>">
                </div>

                <div class="form-group">
                    <label>id Level</label>
                    <input type="text" name="user_name" class="form-control" value="<?= $level['id_level']; ?>">
                </div>

                <a href="<?= base_Url('user_level'); ?>" type="button" class="btn btn-secondary"> BATAL </a>
                <button type="submit" class="btn btn-primary">SIMPAN</button>
            </form>
        </div>

    </div>

</div>
</div>




<?= $endSection(); ?>