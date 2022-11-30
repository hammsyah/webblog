<?= $this->include('layout/header'); ?>



<?= $this->include('layout/navbar_admin'); ?>

<!-- isi konten kita taruh disini, sintax renderSection menampilkan section dengan nama 'isikonten' -->
<?= $this->renderSection('isikonten'); ?>

<!-- Optional JavaScript; choose one of the two! -->

<?= $this->include('layout/footer'); ?>

<!-- TEMPLATE INI KITA AMBIL DARI DOKUMENTASI BOOTSTRAP 4, SEARCH 'setarter template -->