<?= $this->extend('/layout/template'); ?>

<?= $this->section('isikonten'); ?>

<div class="container">
    <!-- membuat row atau baris dibawah navbar -->
    <!-- bootstrap membagi kolom dalam layar menjadi 12 kolom. tinggal kita bagi dengan class col-sm-xx, xx jumlah kolom -->
    <!-- misal 1 baris kita bagi 2 kolom sama besar, col-sm-6 dan col-sm-6 jadi total tetap 12 colom -->
    <div class="row mt-3">
        <div class="col-sm-6 mr-auto">
            <h2>KATAGORI</h2>
        </div>
        <div class="col-sm-4">
            <form class="form-inline ml-5">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success " type="submit">Search</button>
            </form>

        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">katagori</th>
                    <th scope="col">aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Berita</td>
                    <td>Otto</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>

<?= $this->endSection(); ?>