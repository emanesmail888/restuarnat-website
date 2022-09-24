

<?php $__env->startSection('content'); ?>

<canvas class="my-4 w-100"  width="100" height="3"></canvas>



<section>
    <div class="container">
        <div class="row">
           

                    <h2 class="title text-center text-warning mb-3">
                        <?php if (isset($msg)) {
                            echo $msg;
                        } else { ?>
                            WishList  <span>Itemes</span> 
                                
                        <?php } ?> 
                    </h2>

                    <?php if ($dishes->isEmpty()) { ?>
                        <h2 class=" text-danger text-center">sorry, dishes not found</h2>
                       <?php } else { ?>

                        <?php $__currentLoopData = $dishes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dish): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4">
                          
                 <a href="<?php echo e(url('/dishes_details')); ?>">
            <img src="<?php echo e(url('images',$dish->image)); ?>" class="h-50 w-100" alt="" />
                     </a>
                         </div>

                         <div class="col-md-4 d-block text-center">
                          <h2 class="text-success">$<?php echo $dish->dish_price; ?></h2>

                        <h4 ><a class="text-success" href="<?php echo e(url('/dishes_details')); ?>"><?php echo $dish->dish_name; ?></a></h4>
                        </div><!-- col-md-4 -->

                        <div class="col-md-4">
                  <a href="<?php echo e(url('/cart/addItem')); ?>/<?php echo $dish->id; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Move to cart</a>
                   <a href="<?php echo e(url('/')); ?>/removeWishList/<?php echo e($dish->id); ?>" style="color:red" class="btn btn-default btn-block"><i class="fa fa-minus-square"></i>Remove from wishlist</a></li>
                           </div><!-- col-md-4 -->

                               
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                              
<?php } ?>
                                 
                      



             
    </div>
</div>
</section>



<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\restaurant\restaurant\restaurant\resources\views/front/wishList.blade.php ENDPATH**/ ?>