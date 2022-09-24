 
<?php $__env->startSection('content'); ?>
<div class="container">
    <canvas class="my-4 w-100"  width="100" height="10"></canvas>



        <h1>Details Page</h1>
  <div class="row">
        <div class="col-sm-6">

            <img src="<?php echo e(url('images',$dishes->image)); ?>" class="h-70 w-50" alt="cardImagecap" >
        </div><!-- col-sm-6 -->

        <div class="col-sm-6">
            <a href="/"><h3>Go Back</h3></a>
            <h2><?php echo ucwords($dishes->dish_name) ?></h2>
            <h3>Price:  <?php echo e($dishes->dish_price); ?></h3>
            <h5>Details:  <?php echo e($dishes->dish_info); ?></h5>
<br><br>


    <form action="/add_to_cart" method="post">
<input type="hidden" name="dish_id" value="<?php echo e($dishes['id']); ?>">
    <?php echo csrf_field(); ?>
<button class="btn btn-primary">buy Now</button>

</form>


        </div><!-- col-sm-6 -->
        </div><!-- row -->
    </div><!-- container -->









<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\restaurant\restaurant\resources\views/front/dishes_details.blade.php ENDPATH**/ ?>