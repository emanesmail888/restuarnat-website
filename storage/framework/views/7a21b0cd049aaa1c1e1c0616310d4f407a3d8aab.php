

 <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
      <div class="container">
    <a href="<?php echo e('/'); ?>" class="navbar-brand text-primary ">
        <i class="fas fa-utensils  fa-2x text-success"></i>
         <span class="brand">Resto</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav ">
        <li class="nav-item active">
          <a class="nav-link text-bold " href="<?php echo e(url('/')); ?>">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-bold " href="<?php echo e(url('/dishes')); ?>">Dishes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-bold" href="#">Review</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-bold" href="#">Order</a>
          </li>


         <li class=" nav-item  ">
            <a href="<?php echo e(url('/cart')); ?>" class="nav-link text-black" >
            <i class=" fa fa-shopping-cart icon  text-dark bg-light"></i>(<?php echo e(Cart::count()); ?>)(<?php echo e(Cart::total()); ?>)
         </a>
        </li>
         </ul>


        </div>











     


      <?php echo Form::open(['route' => 'search']); ?>


      <?php echo Form::text('query'); ?>

      <?php echo Form::submit('Search'); ?>

      <?php echo Form::close(); ?>









    </div><!-- container -->
</nav>










<?php /**PATH C:\restaurant\restaurant\resources\views/front/menu.blade.php ENDPATH**/ ?>