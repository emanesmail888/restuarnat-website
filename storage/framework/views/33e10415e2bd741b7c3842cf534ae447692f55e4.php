<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Restaurant</title>

    <!-- Bootstrap core CSS -->

    <link type="text/css" rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="<?php echo e(asset('dist/css/album.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('dist/css/owl.carousel.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('dist/css/swiper-bundle.min.css')); ?>" rel="stylesheet">
     <link href="<?php echo e(asset('dist/css/owl.carousel.min.css')); ?>" rel="stylesheet">
     <link href="<?php echo e(asset('dist/css/owl.theme.green.min.css')); ?>" rel="stylesheet">
     <link href="<?php echo e(asset('dist/css/owl.theme.default.css')); ?>" rel="stylesheet">
     <link href="<?php echo e(asset('dist/css/animate.css')); ?>" rel="stylesheet">
     <link href="<?php echo e(asset('dist/css/owl.theme.default.min.css')); ?>" rel="stylesheet">
  </head>
  <body>

    <?php echo $__env->make('front.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>





<?php echo $__env->yieldContent('content'); ?>

<canvas class="my-4 w-100"  width="100" height="7"></canvas>

<footer class="mt-5  fixed-bottom">

    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <ul class="footer-nav">
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Shop </a></li>
                    <li><a href="#">Menu </a></li>
                    <li><a href="#">Wish List </a></li>
                    <li><a href="#">Order Now </a></li>
                </ul>
            </div><!-- footer-nav -->
            <div class="col-md-3">
                    <p>Copyright &copy by zero/one Team</p>

            </div>
            <div class="col-md-4">
                <ul class="social-nav">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter "></i></a></li>
                    <li><a href="#"><i class="fab fa-google"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>

        </div><!-- row -->

    </div><!-- container -->

</footer>





<script src="<?php echo e(asset('dist/js/jquery-3.6.0.min.js')); ?>"></script>


<script src="<?php echo e(asset('dist/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('dist/js/bootstrap.js')); ?>"></script>
<script src="<?php echo e(asset('dist/js/jquery.js')); ?>"></script>
<script src="<?php echo e(asset('dist/js/swiper-bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('dist/js/bootstrap.bundle.min.js')); ?>"></script>
<?php echo $__env->yieldContent('scripts'); ?>

<script src="<?php echo e(asset('dist/js/wow.min.js')); ?>"></script>
<script>
new WOW().init();
</script>
  </body>
</html>
<?php /**PATH D:\from lab E\restaurant\system Integeration\system Integeration\restaurant\restaurant\restaurant\restaurant\resources\views/front/master.blade.php ENDPATH**/ ?>