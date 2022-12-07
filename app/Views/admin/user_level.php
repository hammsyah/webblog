<?= $this->extend('/layout/template'); ?>

<?= $this->section('isikonten'); ?>
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


    <div class="x_panel">
        <div class="x_title">
            <h2>Daftar Level <small>Users</small></h2>
            <!-- tombol triger untuk modal -->
            <button type="button" class="btn btn-success btn-sm text-uppercase fw-bold ml-5" data-toggle="modal" data-target="#userlevelModal">
                Tambah level
            </button>

            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Settings 1</a>
                        <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>

        <!-- membuat tabel disini -->
        <div class="row">
            <div class="card-box table-responsive">
                <!-- mt-2 -> margin top  -->
                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
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
    <form novalidate class="" method="post" action="<?= base_url('user_level/tambah'); ?>">
        <div class="modal fade" id="userlevelModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> TAMBAH LEVEL</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label>Nama Level</label>
                            <input type="text" name="nama_level" class="form-control" required>

                        </div>

                        <div class="form-group">
                            <label>id Level</label>
                            <input type="text" name="id_level" class="form-control" required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">BATAL</button>
                        <button type="submit" class="btn btn-primary ">SIMPAN</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>