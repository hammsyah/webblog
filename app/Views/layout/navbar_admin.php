 <!-- navbar -->
 <div class="container">
     <div class="row">
         <div class="col-sm-10">
             <nav class="navbar navbar-expand-lg navbar-light bg-light">
                 <a class="navbar-brand" href="#">WEBLOG</a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse" id="navbarNavDropdown">
                     <ul class="navbar-nav">
                         <li class="nav-item active">
                             <a class="nav-link" href="<?= base_url('/page/index'); ?>">DASBOARD </a>
                             <!-- jika klik Dasboard kita arahkan ke kontroller page method index -->
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="<?= base_url('/page/katagori'); ?>">KATAGORI</a>
                             <!-- jika klik Dasboard kita arahkan ke kontroller page method katagori -->
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="<?= base_url('/artikel/index'); ?>">ARTIKEL</a>
                             <!-- jika klik Dasboard kita arahkan ke kontroller artikel method index -->
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="<?= base_url('/user/index'); ?>">USER MANAJER</a>
                             <!-- jika klik Dasboard kita arahkan ke kontroller user method index -->
                         </li>
                     </ul>

                 </div>
             </nav>

         </div>
         <div class="col-sm-2 row align-items-center">
             <button type="button" class="btn btn-danger btn-sm">LOGOUT</button>
         </div>
     </div>
 </div>
 <!-- akhir navbar -->