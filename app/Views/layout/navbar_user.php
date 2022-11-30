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
                            <a class="nav-link" href="<?= base_url('/page/katagori'); ?>">KATAGORI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/artikel/index'); ?>">ARTIKEL</a>
                        </li>

                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

                    </form>
                    <button type="button" class="btn btn-outline-danger ml-2">LOGOUT</button>
                </div>
            </nav>
        </div>
    </div>
</div>