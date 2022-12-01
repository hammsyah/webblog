<div class="container">
    <div class="row">
        <div class="col">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">WEB BLOG</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/page/index'); ?>">DASBOARD</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/page/katagori'); ?>">KATAGORI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/artikel/index'); ?>">ARTIKEL</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/user/index'); ?>">MANAJEMEN USER</a>
                        </li>
                    </ul>

                    <h6>Selamat Datang SIAPA</h6>

                    <a type="button" class="btn btn-outline-danger ml-2" href="<?= base_url('/logout/index'); ?>">LOGOUT</a>
                </div>
            </nav>
        </div>
    </div>
</div>