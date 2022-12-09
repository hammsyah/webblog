<?= $this->extend('/layout/template'); ?>

<?= $this->section('isikonten'); ?>


<!-- membuat alert untu berhasil delete  -->
<div class="row">
    <div class="col">
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

<!-- membuat alert untuk update -->
<div class="row">
    <div class="col">
        <?php
        if (session()->getFlashData('success')) { //success -> diambil dari controller fungsi with()
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

    </div>


    <!-- membuat tampilan tabel mulai dari sini -->
    <!-- x_panel untuk membuat panel -->
    <div class="x_panel">
        <div class="x_title">
            <h2>Daftar User <small>semua</small></h2>
            <!-- tombol tambah user -->
            <a href="<?= base_url('user/mautambah'); ?>" type="button" class="button-70 text-uppercase fw-bold ml-5">TAMBAH USER</a>

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
            <div class="col mt-2">
                <div class="card-box table-responsive">
                    <!-- mt-2 -> margin top  -->
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <!-- header tabel -->
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Real Name</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Level User</th>
                                <th scope="col">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <!-- body tabel, isi data kita ambil dari database yang sudah diatur oleh controller user -->
                            <?php $no = 1; ?>
                            <?php foreach ($user as $u => $isi) : ?>
                                <tr>
                                    <th scope="row"><?= $no++; ?></th>
                                    <td><?= $isi->realname ?></td>
                                    <td><?= $isi->user_name ?></td>
                                    <td><?= $isi->nama_level ?></td>

                                    <td>
                                        <a href="<?= base_url('user/ubah/' . $isi->id_user); ?>" class="badge badge-warning" type="submit">Edit</a>
                                        <a href="<?= base_url('user/hapususer/' . $isi->id_user); ?>" class="badge badge-danger" type="submit" onclick="return confirm('Yakin Hapus?')">Hapus</a>
                                        <a href="<?= base_url('user/resetpasword/' . $isi->id_user); ?>" class="badge badge-success " type="submit">Reset Pswd</a>
                                        <a href="<?= base_url('user/enableuser/' . $isi->id_user); ?>/<?= $isi->enable_user ? '0' : '1' ?>" class="badge <?= $isi->enable_user ? 'badge-primary' : 'badge-secondary' ?>  " type="submit"><?= $isi->enable_user ? 'Disable' : 'Enable' ?></a>
                                        <!-- if satu baris untuk logika warna dan tombol enable-->


                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>


<?= $this->endSection(); ?>