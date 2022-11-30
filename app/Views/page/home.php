<?= $this->include('layout/header'); ?>

<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">WEBLOG</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>
    </div>
    <form class="form-inline my-1 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="cari artikel" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
    </form>
    <div class="col-sm-2 row align-items-center justify-content-center">
      <a type="button" class="btn btn-primary btn-lg" href="<?= base_url('/login/index'); ?>">LOGIN</a>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-9">
      <h1>Judul Artikel</h1>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus maxime tempora, deserunt amet quasi hic nesciunt voluptas nobis corrupti quas iure libero perspiciatis mollitia, distinctio ipsa odit est aut. Reprehenderit.</p>
    </div>

    <div class="col-sm-3">
      <h3>Katagori</h3>
      <p>katagori 1</p>
      <p>katagori 2</p>
      <p>katagori 3</p>

    </div>


  </div>
</div>

<?= $this->include('layout/footer'); ?>