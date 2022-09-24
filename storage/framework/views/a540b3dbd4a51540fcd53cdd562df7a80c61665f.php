

<?php $__env->startSection('content'); ?>

<canvas class="my-4 w-100"  width="100" height="10"></canvas>



<section>
    <div class="container">
        <div class="row">
           

                    <h2 class="title text-center text-warning mb-3">
                        <?php if (isset($msg)) {
                            echo $msg;
                        } else { ?>WishList Itemes  
                        <?php } ?> </h2>

                    <?php if ($dishes->isEmpty()) { ?>
                        sorry, dishes not found
                       <?php } else { ?>

                        <?php $__currentLoopData = $dishes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dish): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6">
                          
                                        <a href="<?php echo e(url('/dishes_details')); ?>">
                                           <img src="<?php echo e(url('images',$dish->image)); ?>" class="h-75 w-50" alt="" />
                                        </a>
                         </div>

                                         <div class="col-md-6">
                                        <h2>$<?php echo $dish->dish_price; ?></h2>

                                        <p><a href="<?php echo e(url('/dishes_details')); ?>"><?php echo $dish->dish_name; ?></a></p>
                                        <a href="<?php echo e(url('/cart/addItem')); ?>/<?php echo $dish->id; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Move to cart</a>
                                      <a href="<?php echo e(url('/')); ?>/removeWishList/<?php echo e($dish->id); ?>" style="color:red" class="btn btn-default btn-block"><i class="fa fa-minus-square"></i>Remove from wishlist</a></li>

                                    </div><!-- col-md-6 -->

                               
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                              
<?php } ?>
                                 
                      



             
    </div>
</div>
</section>



<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\eman\Desktop\restaurant\restaurant\resources\views/front/wishlist.blade.php ENDPATH**/ ?>