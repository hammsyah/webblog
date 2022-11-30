<!-- halaman ini merujuk ke view template_admin.php -->
<?= $this->extend('/layout/template_admin'); ?>;

<!-- buat section disini untuk render di template -->
<?= $this->section('isikonten'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>DASBOARD</h2>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
<!-- akhir section -->