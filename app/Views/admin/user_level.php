<!-- panggil header disini -->
<?= $this->include('layout/header'); ?>
<!-- panggil navbar admin disini -->
<?= $this->include('layout/navbar_admin'); ?>

<div class="container">

    <!-- alert untuk pesan sukses operasi delet, tambah dan edit -->
    <div class="row">
        <div class="col">
            <?php
            if (session()->getFlashData('success')) {
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= session()->getFlashData('success') ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php
            }
            ?>

            <?php
            if (session()->getFlashData('danger')) {
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= session()->getFlashData('danger') ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php
            }
            ?>
        </div>
    </div>



    <!-- membuat row atau baris dibawah navbar -->
    <!-- bootstrap membagi kolom dalam layar menjadi 12 kolom. tinggal kita bagi dengan class col-sm-xx, xx jumlah kolom -->
    <!-- misal 1 baris kita bagi 2 kolom sama besar, col-sm-6 dan col-sm-6 jadi total tetap 12 colom -->
    <div class="row mt-4">
        <!-- <div class="col-sm-2 mr-auto"> -->

        <div class="col-sm-3 ">
            <h4>DAFTAR USER LEVEL</h4>
        </div>
        <div class="col-sm-4 mr-atuo">
            <!-- tombol triger untuk modal -->
            <button type="button" class="btn btn-success btn-sm text-uppercase fw-bold ml-5" data-toggle="modal" data-target="#userlevelModal">
                Tambah level
            </button>
        </div>

        <div class="col-sm-4">
            <form class="form-inline ml-5">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success " type="submit">Search</button>
            </form>

        </div>
    </div>
    <!-- membuat tabel disini -->
    <div class="row">
        <div class="col mt-2">
            <!-- mt-2 -> margin top  -->
            <table class="table table-hover">
                <thead>
                    <!-- header tabel -->
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Level</th>
                        <th scope="col">Id Level</th>
                        <th scope="col">Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    <!-- body tabel, isi data kita ambil dari database yang sudah diatur oleh controller user -->
                    <?php $no = 1; ?>
                    <?php foreach ($level as $isi) : ?>
                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><?= $isi['nama_level'] ?></td>
                            <td><?= $isi['id_level'] ?></td>

                            <td>
                                <a href="<?= base_url('user_level/ubah/' . $isi['id']); ?>" class="btn btn-warning btn-sm text-uppercase fw-bold" type="submit">edit</a>
                                <a href="<?= base_url('user_level/hapuslevel/' . $isi['id']); ?>" class="btn btn-danger btn-sm text-uppercase fw-bold" type="submit" onclick="return confirm('Yakin Hapus?')">Hapus</a>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Skrip modal untuk tambah role-->
<!-- Modal, skrip ini untuk membuat pop out dengan menekan tombol  triger -->
<!-- kita contek dari dokumentasi bootstrap 4 -->
<form class="needs-validation" novalidate method="post" action="<?= base_url('user_level/tambah'); ?>">
    <div class="modal fade" id="userlevelModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">TAMBAH LEVEL</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <div class="form-group">
                        <label>Nama Level</label>
                        <input type="text" name="nama_level" class="form-control" required>
                        <div class="valid-feedback">
                            bagus
                        </div>
                    </div>

                    <div class="form-group">
                        <label>id Level</label>
                        <input type="text" name="id_level" class="form-control">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">BATAL</button>
                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                </div>
            </div>
        </div>
    </div>
</form>

<?= $this->include('layout/footer'); ?>