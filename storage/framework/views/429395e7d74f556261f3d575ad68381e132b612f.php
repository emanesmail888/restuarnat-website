<?php $__env->startSection('content'); ?>


<main role="main">

    <section class="mt-4 pt-5">

        <div class="container">
         <div class="row">
             
             <div class="col-sm-12">

               <div id="myCarousel" class="carousel slide bg-dark" data-ride="carousel">
                 <ol class="carousel-indicators">
                     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                 </ol>
                 <div class="carousel-inner bg-black  ">
                     <div class="carousel-item  active">
                         <img src="<?php echo e(asset('dist/img/1.jpg')); ?>" class="d-block img-fluid  "  alt="...">
                         </div>

                          <div class="carousel-item  ">
                                     <img src="<?php echo e(asset('dist/img/AR05132020.jpg')); ?>" class="d-block img-thumbnail bg-opacity-50" alt="...">
                                   </div>

                                    <div class="carousel-item ">
                                     <img src="<?php echo e(asset('dist/img/instant-pot-chicken-and-rice.png')); ?>" class="d-block img-fluid bg-opacity-100 " alt="...">
                                   </div>
                                    <div class="carousel-item ">
                                     <img src="<?php echo e(asset('dist/img/iimaagee.jpg.crdownload')); ?>" class="d-block img-fluid bg-opacity-100 " alt="...">
                                   </div>
                                    <div class="carousel-item ">
                                     <img src="<?php echo e(asset('dist/img/chicken_rice_and_peas_78882_16x9.jpg')); ?>" class="d-block img-fluid bg-opacity-100 " alt="...">
                                   </div>

                                 </div>
                         <div class="carousel-caption d-block text-white text-sm-right   ">

                          <h3 class=" text-bold bg-dark bg-opacity-50 ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et, labore?</h3>
                          <h5 class="text-bold bg-dark bg-opacity-75 ">Lorem ipsum dolor sit amet consectetur.</h5>

                     </div>

                     </div>


                 <a class="carousel-control-prev" href="#myCarousel" role="button"  data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true">     </span>
                     <span class="sr-only">Previous</span>
                 </a>
                 <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                 </a>
             </div>
         </div><!-- col-sm-12 -->


         </div><!-- row -->
         </div><!-- container -->
     </section>



<section id="dishes">

<div class="album py-5 bg-light">
  <div class="container">
    <h1 class=" text-center text-warning"> our <span>products</span> </h1>

    <div class="row">
       <?php $dishs=DB::table('dishes')->get();
      ?>
<?php $__empty_1 = true; $__currentLoopData = $dishs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dish): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

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

<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\restaurant\restaurant\resources\views/front/home.blade.php ENDPATH**/ ?>