<?= $this->extend('/layout/template'); ?>


<?= $this->section('isikonten'); ?>
<div class="x_panel">
    <div class="x_title">
        <h2>Daftar Artikel <small>Users</small></h2>
        <!-- tombol triger untuk modal -->
        <button type="button" class="btn btn-success btn-sm text-uppercase fw-bold ml-5" data-toggle="modal" data-target="#userlevelModal">
            Tambah Artikel
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
                        <th scope="col">No</th>
                        <th scope="col">Judul Artikel</th>
                        <th scope="col">Kategoti</th>
                        <th scope="col">Aksi</th>

                    </tr>


                </thead>
                <tbody>
                    <!-- body tabel, isi data kita ambil dari database yang sudah diatur oleh controller user -->
                    <tr>
                        <th scope="row">1</th>
                        <td>Tes Koding</td>
                        <td>Koding</td>

                        <td>
                            <button type="button" class="badge badge-warning">EDIT</button>
                            <button type="button" class="badge badge-danger">HAPUS</button>
                        </td>

                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>


</div>

<?= $this->endSection(); ?>