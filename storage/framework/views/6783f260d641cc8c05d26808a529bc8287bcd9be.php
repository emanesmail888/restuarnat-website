<?php $__env->startSection('content'); ?>


<main role="main">
    <canvas class="my-4 w-100"  width="100" height="3"></canvas>

<section id="dishes">

    <div class="album py-5 bg-light">
      <div class="container">
        <h1 class=" text-center text-warning">Search<span>Dishes</span> </h1>
    
        <div class="row">
<?php $__empty_1 = true; $__currentLoopData = $dishes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dish): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

<div class="col-md-4 ">
  <div class="card mb-4 shadow-sm">


   <div class="card-body">
      <img src="<?php echo e(url('images', $dish->image)); ?>" class="card-img-top " alt="card image cap">

      <p class="card-text"><?php echo e($dish->dish_name); ?></p>

      <div class="btn-group-vertical d-block">
          <button type="button" class="btn btn-outline-secondary  btn-primary ">
              <a href="<?php echo e(url('/dish_details')); ?>/<?php echo $dish->id; ?>"
                  class="add-to-cart text-white ">View dish</a>
          </button>

          <button type="button" class="btn btn-outline-secondary mt-1  btn-primary ">
              <a href="#"
                  class="add-to-cart text-white">Add To Cart
                  <i class="fa fa-shopping-cart"></i>
              </a>
          </button>

         </div>

    </div><!-- card-body -->
  </div><!-- card -->
</div><!-- col-md-4 -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<h3>No Dishes</h3>
<?php endif; ?>
</div><!-- row -->

</div><!-- container -->
</div>
</section>
</main>


<?php $__env->stopSection(); ?>






<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\eman\Desktop\restaurant\restaurant\resources\views/front/search.blade.php ENDPATH**/ ?>