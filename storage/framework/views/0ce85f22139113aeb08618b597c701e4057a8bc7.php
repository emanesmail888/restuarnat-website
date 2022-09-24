<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Dashboard Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">

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
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    <?php echo $__env->make('Admin.admin_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
<div class="container-fluid">
  <div class="row">

    <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light pt-5  sidebar">
    <?php echo $__env->make('Admin.includes.sidenav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main class="col-sm-9 ml-sm-auto col-md-10 mt-5 pt-4" role="main">

    <?php echo $__env->yieldContent('content'); ?>
    
  </div>
</div>

        <script src="dashboard.js"></script>
        <script src="<?php echo e(asset('dist/js/jquery-3.3.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('dist/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('dist/js/bootstrap.js')); ?>"></script>
<script src="<?php echo e(asset('dist/js/jquery.js')); ?>"></script>
<script src="<?php echo e(asset('dist/js/bootstrap.bundle.min.js')); ?>"></script>

    
    </body>
</html>
<?php /**PATH C:\restaurant\restaurant\resources\views/admin/master.blade.php ENDPATH**/ ?>