<!-- panggil header disini -->
<?= $this->include('layout/header'); ?>
<!-- panggil navbar admin disini -->
<?= $this->include('layout/navbar_admin'); ?>

<div class="container">
    <!-- membuat row atau baris dibawah navbar -->
    <!-- bootstrap membagi kolom dalam layar menjadi 12 kolom. tinggal kita bagi dengan class col-sm-xx, xx jumlah kolom -->
    <!-- misal 1 baris kita bagi 2 kolom sama besar, col-sm-6 dan col-sm-6 jadi total tetap 12 colom -->
    <div class="row mt-3">
        <div class="col-sm-6 mr-auto">
            <h4>DAFTAR USER</h4>
        </div>
        <div class="col-sm-4">
            <form class="form-inline ml-5">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success " type="submit">Search</button>
            </form>

        </div>
        <div class="col-sm-2">
            <!-- tombol triger untuk modal -->
            <button type="button" class="btn btn-success btn-sm text-uppercase fw-bold ml-5" data-toggle="modal" data-target="#userModal">
                Tambah User
            </button>

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
                                <a href="" class="btn btn-danger btn-sm text-uppercase fw-bold" type="submit">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal, skrip ini untuk membuat pop out dengan menekan tombol  triger -->
<!-- kita contek dari dokumentasi bootstrap 4 -->
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
                <form method="post" action="<?= base_url('user/tambah'); ?>">

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
                            <?php foreach ($user as $u => $isi) : ?>
                                <option value="<?= $isi->id_level; ?>"><?= $isi->nama_level; ?></option>
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

<?= $this->include('layout/footer'); ?>