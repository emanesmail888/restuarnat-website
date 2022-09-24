<?php $__env->startSection('content'); ?>


    <div class="container">
        <div class="row align-center mt-5">


            <div class="col-md-4 col-sm-12 mb-3 ">
          <a href="<?php echo e(route('meal.index')); ?>" class="btn btn-lg btn-block  text-white action">
            <img src="<?php echo e(asset('dist/img/20-tetrazzini.jpg')); ?>" class=" mb-1" alt="">
            <i class="fas fa-plus"></i>
            Create New Meal</a>
            </div>

            <div class="col-md-4 mb-3">
          <a href="<?php echo e(route('dish.create')); ?>" class="btn btn-lg btn-block   text-white action">
          <img src="<?php echo e(asset('dist/img/images (5).jpg')); ?>" class="  mb-1" alt="">
          <i class="fas fa-plus"></i>
            Create New Dish</a>
            </div>


            <div class="col-md-4 mb-3">
                <a href="<?php echo e(route('dish.index')); ?>" class="btn btn-lg btn-block  text-white action">
                    <img src="<?php echo e(asset('dist/img/image.jpg')); ?>"
                    class=" mb-1" alt="">
                    <i class="fas fa-eye"></i>
                    Display all Dishes</a>

            </div>










            </div><!-- row -->
        </div><!-- container -->





<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\eman\Desktop\restaurant\restaurant\resources\views/admin/index.blade.php ENDPATH**/ ?>