<?= $this->include('layout/header'); ?>

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


          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

          </form>
          <a type="button" class="btn btn-outline-danger ml-2" href="<?= base_url('/login/index'); ?>">LOGIN</a>
        </div>
      </nav>
    </div>
  </div>

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