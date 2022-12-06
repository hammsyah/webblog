<?= $this->extend('/layout/template'); ?>

<?= $this->section('isikonten'); ?>

<div class="container">
    <!-- membuat alert untuk delet, update, tambah dll -->
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
            <h2>Default Example <small>Users</small></h2>
            <!-- tombol triger untuk modal -->
            <button type="button" class="btn btn-success btn-sm text-uppercase fw-bold ml-5" data-toggle="modal" data-target="#userModal">
                Tambah User
            </button>
            <!-- tombol untuk tambah role user atau user level -->
            <a href="<?= base_url('user_level'); ?>" class="btn btn-primary btn-sm">TAMBAH ROLE</a>

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
                                <th scope="col">Role</th>
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
                                        <a href="<?= base_url('user/ubah/' . $isi->id_user); ?>" class="btn btn-warning btn-sm text-uppercase fw-bold" type="submit">edit</a>
                                        <a href="<?= base_url('user/hapususer/' . $isi->id_user); ?>" class="btn btn-danger btn-sm text-uppercase fw-bold" type="submit" onclick="return confirm('Yakin Hapus?')">Hapus</a>
                                        <a href="<?= base_url('user/resetpasword/' . $isi->id_user); ?>" class="btn btn-success btn-sm text-uppercase fw-bold" type="submit">reset Pswd</a>
                                        <a href="<?= base_url('user/enableuser/' . $isi->id_user); ?>/<?= $isi->enable_user ? '0' : '1' ?>" class="btn <?= $isi->enable_user ? 'btn-primary' : 'btn-secondary' ?>  btn-sm text-uppercase fw-bold" type="submit"><?= $isi->enable_user ? 'Disable' : 'Enable' ?></a>
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


    <!-- Skrip modal untuk tambah data -->
    <!-- Modal, skrip ini untuk membuat pop out dengan menekan tombol  triger -->
    <!-- kita contek dari dokumentasi bootstrap 4 -->
    <form method="post" action="<?= base_url('user/tambah'); ?>">
        <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">TAMBAH USER</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">


                        <div class="form-group">
                            <label>Real Name</label>
                            <input type="text" name="realname" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" name="user_name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Pasword</label>
                            <input type="password" name="pasword" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Role</label>
                            <select name="fid_level" class="form-control" required>
                                <option value="" hidden></option>
                                <?php foreach ($level as $lev) : ?>
                                    <option value="<?= $lev['id_level']; ?>"><?= $lev['nama_level']; ?></option>
                                <?php endforeach; ?>
                                <option value=""></option>
                            </select>

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

</div>

<?= $this->endSection(); ?>