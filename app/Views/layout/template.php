<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?= base_url(); ?>/assets/images/favicon.png" type="image/ico" />

    <title><?= $title; ?> | WebBlok </title>

    <!-- Bootstrap ok -->
    <link href="<?= base_url('/assets'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome ok -->
    <link href="<?= base_url('/assets'); ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress ok -->
    <link href="<?= base_url('/assets'); ?>/css/nprogress.css" rel="stylesheet">
    <!-- iCheck ok -->
    <link href="<?= base_url('/assets'); ?>/css/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar ok -->
    <link href="<?= base_url('/assets'); ?>/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap ok -->
    <link href="<?= base_url('/assets'); ?>/css/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="<?= base_url('/assets'); ?>/css/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url('/assets'); ?>/css/custom.min.css" rel="stylesheet">

    <!-- Datatables -->
    <link href="<?= base_url('/assets'); ?>/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('/assets'); ?>/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('/assets'); ?>/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('/assets'); ?>/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('/assets'); ?>/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- untuk tombol -->
    <link href="<?= base_url('/assets'); ?>/css/tombol.css" rel="stylesheet">


</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href=" " class="site_title"><i class="fa fa-cubes"></i> <span>WebBlog</span></a>

                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="<?= base_url(); ?>/assets/images/pp/img.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Selamat Datang,</span>
                            <h2> <?= session('realname'); ?></h2>


                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3><?= session('nama_level'); ?> </h3>


                            <ul class="nav side-menu">

                                <?php if (session('level') == 1) { ?>
                                    <li><a href="<?= base_url('/dasboard'); ?>"> <i class="fa fa-tachometer"></i> Dasboard </a>
                                    </li>

                                    <li><a href="<?= base_url('/katagori'); ?>"> <i class="fa fa-edit"></i> Kategori </a>
                                    </li>

                                    <li><a href="<?= base_url('/artikel'); ?>"> <i class="fa fa-pencil"></i> Artikel </a>
                                    </li>

                                    <li><a><i class="fa fa-group"></i> Manajemen User <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="<?= base_url('/user'); ?>">Daftar User</a></li>
                                            <li><a href="<?= base_url('/user_level'); ?>">Level User</a></li>

                                        </ul>
                                    </li>
                                <?php } ?>


                                <?php if (session('level') == 2) { ?>
                                    <li><a href="<?= base_url('/dasboard'); ?>"> <i class="fa fa-tachometer"></i> Dasboard </a>
                                    </li>

                                    <li><a href="<?= base_url('/katagori'); ?>"> <i class="fa fa-edit"></i> Kategori </a>
                                    </li>

                                    <li><a href="<?= base_url('/artikel'); ?>"> <i class="fa fa-pencil"></i> Artikel </a>
                                    </li>


                                <?php } ?>

                                <?php if (session('level') == 3) { ?>

                                    <li><a href="<?= base_url('/katagori'); ?>"> <i class="fa fa-edit"></i> Kategori </a>
                                    </li>

                                    <li><a href="<?= base_url('/artikel'); ?>"> <i class="fa fa-pencil"></i> Artikel </a>
                                    </li>


                                <?php } ?>

                            </ul>
                        </div>


                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?= base_url(); ?>">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <img src="<?= base_url(); ?>/assets/images/pp/img.jpg" alt=""><?= session('realname'); ?>
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="javascript:;"> Profile</a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Settings</span>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">Help</a>
                                    <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                </div>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">

                <?= $this->renderSection('isikonten'); ?>

            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    WebBlog - Web dibuat oleh tim 7 <a href="">WebbLog</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    <!-- SKRIP untuk menutup alert sescara otomatis -->
    <script>
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 3000); //lama waktu tampil alert 3000 = 3 detik
    </script>

    <!-- jQuery ok -->
    <script src="<?= base_url('/assets'); ?>/js/jquery.min.js"></script>
    <!-- Bootstrap ok -->
    <script src="<?= base_url('/assets'); ?>/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick ok -->
    <script src="<?= base_url('/assets'); ?>/js/fastclick.js"></script>
    <!-- NProgress ok -->
    <script src="<?= base_url('/assets'); ?>/js/nprogress.js"></script>
    <!-- Chart.js ok -->
    <script src="<?= base_url('/assets'); ?>/js/Chart.min.js"></script>
    <!-- gauge.js ok -->
    <script src="<?= base_url('/assets'); ?>/js/gauge.min.js"></script>
    <!-- bootstrap-progressbar ok -->
    <script src="<?= base_url('/assets'); ?>/js/bootstrap-progressbar.min.js"></script>
    <!-- iCheck ok -->
    <script src="<?= base_url('/assets'); ?>/js/icheck.min.js"></script>
    <!-- Skycons ok -->
    <script src="<?= base_url('/assets'); ?>/js/skycons.js"></script>
    <!-- Flot ok -->
    <script src="<?= base_url('/assets'); ?>/js/jquery.flot.js"></script>
    <script src="<?= base_url('/assets'); ?>/js/jquery.flot.pie.js"></script>
    <script src="<?= base_url('/assets'); ?>/js/jquery.flot.time.js"></script>
    <script src="<?= base_url('/assets'); ?>/js/jquery.flot.stack.js"></script>
    <script src="<?= base_url('/assets'); ?>/js/jquery.flot.resize.js"></script>
    <!-- Flot plugins ok -->
    <script src="<?= base_url('/assets'); ?>/js/jquery.flot.orderBars.js"></script>
    <script src="<?= base_url('/assets'); ?>/js/jquery.flot.spline.min.js"></script>
    <script src="<?= base_url('/assets'); ?>/js/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?= base_url('/assets'); ?>/js/date.js"></script>
    <!-- JQVMap ok -->
    <script src="<?= base_url('/assets'); ?>/js/jquery.vmap.js"></script>
    <script src="<?= base_url('/assets'); ?>/js/jquery.vmap.world.js"></script>
    <script src="<?= base_url('/assets'); ?>/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker ok -->
    <script src="<?= base_url('/assets'); ?>/js/moment.min.js"></script>
    <script src="<?= base_url('/assets'); ?>/js/daterangepicker.js"></script>
    <!-- Datatables -->
    <script src="<?= base_url('/assets'); ?>/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('/assets'); ?>/js/dataTables.bootstrap.min.js"></script>
    <script src="<?= base_url('/assets'); ?>/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('/assets'); ?>/js/buttons.bootstrap.min.js"></script>
    <script src="<?= base_url('/assets'); ?>/js/buttons.flash.min.js"></script>
    <script src="<?= base_url('/assets'); ?>/js/buttons.html5.min.js"></script>
    <script src="<?= base_url('/assets'); ?>/js/buttons.print.min.js"></script>
    <script src="<?= base_url('/assets'); ?>/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?= base_url('/assets'); ?>/js/dataTables.keyTable.min.js"></script>
    <script src="<?= base_url('/assets'); ?>/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('/assets'); ?>/js/responsive.bootstrap.js"></script>
    <script src="<?= base_url('/assets'); ?>/js/dataTables.scroller.min.js"></script>
    <script src="<?= base_url('/assets'); ?>/js/jszip.min.js"></script>
    <script src="<?= base_url('/assets'); ?>/js/pdfmake.min.js"></script>
    <script src="<?= base_url('/assets'); ?>/js/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts ok -->
    <script src="<?= base_url('/assets'); ?>/js/custom.min.js"></script>

</body>

</html>