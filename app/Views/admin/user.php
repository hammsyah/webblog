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

                                        <button type="button" class="badge badge-warning" data-toggle="modal" data-target="#modal<?= $isi->id_user; ?>">EDIT</button>
                                        <a href="<?= base_url('user/hapususer/' . $isi->id_user); ?>" class="badge badge-danger" type="submit" onclick="return confirm('Yakin Hapus?')">Hapus</a>
                                        <a href="<?= base_url('user/resetpasword/' . $isi->id_user); ?>" class="badge badge-success " type="submit">Reset Pswd</a>
                                        <a href="<?= base_url('user/enableuser/' . $isi->id_user); ?>/<?= $isi->enable_user ? '0' : '1' ?>" class="badge <?= $isi->enable_user ? 'badge-primary' : 'badge-secondary' ?>  " type="submit"><?= $isi->enable_user ? 'Disable' : 'Enable' ?></a>
                                        <!-- if satu baris untuk logika warna dan tombol enable-->

                                        <!-- Modal edit -->
                                        <div class="modal fade" id="modal<?= $isi->id_user; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <form method="post" action="<?= base_url('user/ubahsekarang/' . $isi->id_user); ?>">
                                                <?= csrf_field(); ?>
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">EDIT DATA USER</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">


                                                            <div class="field item form-group">
                                                                <label class="col-form-label col-md-3 col-sm-3  label-align">Real Name<span class="required">*</span></label>
                                                                <div class="col-md-6 col-sm-6">
                                                                    <input type="text" name="realname" class="form-control" value="<?= $isi->realname; ?>">
                                                                </div>
                                                            </div>

                                                            <div class="field item form-group">
                                                                <label class="col-form-label col-md-3 col-sm-3  label-align">email / User Name<span class="required">*</span></label>
                                                                <div class="col-md-6 col-sm-6">
                                                                    <input type="text" name="user_name" class="form-control" value="<?= $isi->user_name; ?>">
                                                                </div>
                                                            </div>


                                                            <div class="field item form-group">
                                                                <label class="col-form-label col-md-3 col-sm-3  label-align">Level<span class="required">*</span></label>
                                                                <div class="col-md-6 col-sm-6">
                                                                    <select name="fid_level" class="form-control" required>
                                                                        <option value="" hidden></option>
                                                                        <?php foreach ($level as $u) : ?>
                                                                            <option value="<?= $u['id_level']; ?>" <?= $isi->fid_level == $u['id_level'] ? 'selected' : null ?>><?= $u['nama_level']; ?></option>

                                                                        <?php endforeach; ?>
                                                                        <option value=""></option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="field item form-group">
                                                                <label class="col-form-label col-md-3 col-sm-3  label-align">Keterangan<span class="required">*</span></label>
                                                                <div class="col-md-6 col-sm-6">
                                                                    <input type="text" name="keterangan" class="form-control" value="<?= $isi->keterangan; ?>">
                                                                </div>
                                                            </div>



                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">BATAL</button>
                                                            <button type="submit" class="btn btn-primary"> SIMPAN </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

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