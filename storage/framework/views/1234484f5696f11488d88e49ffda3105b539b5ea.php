<?php $__env->startSection('content'); ?>


<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 mt-5">
    <div class="container">
        <div class="row">


            <div class="col-sm-4">
          <a href="<?php echo e(route('meal.index')); ?>" class="btn btn-lg btn-block btn-success text-white">Create New Meal</a>
            </div>
            <div class="col-sm-4">
          <a href="<?php echo e(route('dish.create')); ?>" class="btn btn-lg btn-block btn-success text-white">Create New Dish</a>
            </div>


            <div class="col-sm-4">
                <a href="<?php echo e(route('dish.index')); ?>" class="btn btn-lg btn-block btn-success text-white">Display all Dishes</a>

            </div>

            </div><!-- row -->
        </div><!-- container -->




  </main>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\restaurant\restaurant\resources\views/admin/index.blade.php ENDPATH**/ ?>