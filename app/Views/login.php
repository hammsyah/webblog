<?= $this->include('layout/header'); ?>


<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">                    
                    <div class="card-title text-center mb-3 fw-light fs-5">
                        <a href="<?= base_url('/home/index'); ?>">
                            <img src="<?= base_url('assets/images/logo.png')?>">
                        </a>
                    </div>
                    <form>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                            <label class="form-check-label" for="rememberPasswordCheck">
                                Remember password
                            </label>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-success btn-login text-uppercase fw-bold" type="submit">MASUK</button>
                            <a class="btn btn-warning btn-login text-uppercase fw-bold" type="button">DAFTAR</a>                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->include('layout/footer'); ?>