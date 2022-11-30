<?= $this->include('layout/header'); ?>
<?= $this->include('layout/navbar_admin'); ?>

<div class="container">

    <div class="row mt-3">
        <div class="col-auto mr-auto">
            <h3>DAFTAR USER</h3>
        </div>
        <div class="col-auto">.
            <a href="" class="btn btn-success btn-sm text-uppercase fw-bold" type="submit">Tambah User</a>
        </div>
    </div>

    <div class="row">
        <div class="col mt-2">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Real Name</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Role</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>@mdo</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->include('layout/footer'); ?>