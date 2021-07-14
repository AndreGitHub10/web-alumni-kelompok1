<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Web Alumni PJJ</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Js Bootsrap-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

    <!-- Remember to include jQuery :) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-primary shadow-sm">
            <div class="container">
                <img src="https://www.pens.ac.id/wp-content/uploads/2018/04/Logo_PENS_putih.png" style="width: 5%; height: 5%; margin-right: 10px;">
                <a class="navbar-brand text-white" href="<?php echo e(url('/')); ?>">
                    Alumni PJJ
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item" >
                          <a class="nav-link active text-white" aria-current="page" href="<?php echo e(url('/')); ?>">Beranda</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active text-white" href="<?php echo e(url('loker')); ?>">Info Loker</a>
                        </li>
                         <li class="nav-item">
                          <a class="nav-link active text-white" aria-current="page" href="<?php echo e(url('mahasiswa')); ?>">Data Alumni Mahasiswa</a>
                        </li>
                       
                       <li class="nav-item" >
                          <a class="nav-link active text-white" aria-current="page" href="<?php echo e(url('tentang')); ?>">Tentang Kami</a>
                        </li>

                        <?php if(Auth::check()): ?>
                        <li class="nav-item" >
                          <a class="nav-link active text-white" aria-current="page" href="<?php echo e(url('berita')); ?>">Menu Berita</a>
                        </li>
                        <?php endif; ?>

                      </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" style="color: white!important;" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" style="color: white!important;" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color: white!important;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
    <div>
        <!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fa fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fa fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fa fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fa fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fa fa-linkedin"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fa fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
    <hr>
    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-2">
          <h5 class="text-uppercase">Tempat USBJJ</h5>

          <ol class="text-start">
            <li>
              <a target="_blank" href="http://www.smkn1mojokerto.sch.id/ver/1/" class="text-white text-decoration-none">SMKN 1 Kota Mojokerto</a>
            </li>
            <li>
              <a target="_blank" href="http://www.smkn1pungging.sch.id/" class="text-white text-decoration-none">SMKN 1 Pungging Kabupaten Mojokerto</a>
            </li>
            <li>
              <a target="_blank" href="https://www.smkn1jenpo.sch.id/index" class="text-white text-decoration-none">SMKN 1 Jenangan Ponorogo </a>
            </li>
            <li>
              <a target="_blank" href="http://www.smkn1ngasem-kediri.sch.id/" class="text-white text-decoration-none">SMKN 1 Ngasem Kabupaten Kediri</a>
            </li>
            <li>
              <a target="_blank" href="http://www.smkn1-sby.sch.id/" class="text-white text-decoration-none">SMKN 1 Surabaya</a>
            </li>
          </ol>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-2">
          <h5 class="text-uppercase">Prodi PJJ</h5>

          <ol class="text-start ">
            <li>
              <a href="#!" class="text-white text-decoration-none">D3 PJJ Teknik Informatika</a>
            </li>
            <li>
              <a href="#!" class="text-white text-decoration-none">D4 PJJ Teknik Telekomunikasi</a>
            </li>
          </ol>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-2">
          <h5 class="text-uppercase">Team</h5>

          <ol class="text-start ">
            <li>
              <a href="#!" class="text-white text-decoration-none">Afif Abdillah Jusuf (2103177020)</a>
            </li>
             <li>
              <a href="#!" class="text-white text-decoration-none">Muhammad Fiqri Aidin (2103197005)</a>
            </li>
            <li>
              <a href="#!" class="text-white text-decoration-none">Retnaldi Putra Harlianto (2103197008)</a>
            </li>
            <li>
              <a href="#!" class="text-white text-decoration-none">Dwi Putra Andreansyah (2103197010)</a>
            </li>
            <li>
              <a href="#!" class="text-white text-decoration-none">Shofi Widuri (2103197016)</a>
            </li>
            <li>
              <a href="#!" class="text-white text-decoration-none">Muhammad Hardiansyah (2103197032)</a>
            </li>
          </ol>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <a class="text-white text-decoration-none" href="#">Kelompok1.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    </div>
</body>
</html>
<?php /**PATH /opt/lampp/htdocs/web-alumni-rpl-master/resources/views/layouts/app.blade.php ENDPATH**/ ?>