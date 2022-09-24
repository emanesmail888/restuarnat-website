<?php $__env->startSection('content'); ?>


<main role="main">
<section class="mt-4 pt-5">

   <div class="container">
    <div class="row">
        
        <div class="col-sm-12  py-5">

          <div id="myCarousel" class="carousel slide bg-dark" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner bg-black  ">
                <div class="carousel-item  active">
                    <img src="<?php echo e(asset('dist/img/1.jpg')); ?>" class="d-block img-fluid  "  alt="...">
                    </div>

                     <div class="carousel-item  ">
                                <img src="<?php echo e(asset('dist/img/IMG_0034.PNG')); ?>" class="d-block img-thumbnail bg-opacity-50" alt="...">
                              </div>

                               <div class="carousel-item ">
                                <img src="<?php echo e(asset('dist/img/2.jpg')); ?>" class="d-block img-fluid bg-opacity-75 " alt="...">
                              </div>

                            </div>
                    <div class="carousel-caption d-block text-white text-sm-right  ">

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
    </div><!-- col-sm-8 -->
    

    </div><!-- row -->
    </div><!-- container -->
</section>




<section id="dishes">
<div class="album py-5 bg-light">
  <div class="container">
    <h1 class=" text-center text-warning"> Special <span>Dishes</span> </h1>

 <div class="row ">


    <div class="swiper product-slider  ">

        <div class="swiper-wrapper   ">
        <?php $__empty_1 = true; $__currentLoopData = $dishes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dish): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="swiper-slide  ">
                <div class="card card1 mb-4 shadow-sm">
                    <div class="card-body ">

                        <?php
                        $wishData = DB::table('wishlist')->rightJoin('dishes','wishlist.dish_id', '=', 'dishes.id')->where('wishlist.dish_id', '=', $dish->id)->get();
                        $count = App\Models\wishList::where(['dish_id' => $dish->id])->count();
                         ?>

                        <?php if($count=="0"){?>

                          <?php echo Form::open(['route' => 'addToWishList', 'method' => 'post']); ?>

                          <div class=" align-content-center">
                           <input type="hidden" value="<?php echo e($dish->id); ?>" name="dish_id"/>
                           <button type="submit" class="btn bg-transparent card-button ">
                              <i class="fas fa-heart fa-2x text-center text-success"></i>
                          </button>
                         </div>
                          <?php echo Form::close(); ?>

                         <?php } else {?>
                                <i class="fas fa-heart fa-2x text-center text-warning card-button"></i>
                            
                       <?php }?>


                      <img src="<?php echo e(url('images', $dish->image)); ?>" class="card-img  w-100 h-50 " alt="card image cap">
                      <p class="card-text d-4 text-center"><?php echo e($dish->dish_name); ?></p>



                      <div class="btn-group-vertical d-block">
                        <button type="button" class="btn btn-outline-secondary  btn-success ">
                            <a href="<?php echo e(url('/dish_details')); ?>/<?php echo $dish->id; ?>"
                                class="add-to-cart text-white ">View dish</a>
                        </button>

                        <button type="button" class="btn btn-outline-secondary mt-1 btn-success ">
                            <a href="<?php echo e(url('/cart/addItem')); ?>/<?php echo $dish->id; ?>"
                                class="add-to-cart text-white">Add To Cart
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                        </button>

                    </div><!-- btn-group -->
               </div><!-- card-body -->
             </div><!-- card -->


             </div><!-- swiper-slider -->


               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <h3>No Dishes</h3>

        <?php endif; ?>


       </div><!-- swiper-wrapper-->
       <div class="swiper-button-prev  "></div>
       <div class="swiper-button-next  "></div>
         <div class="swiper-pagination"></div>

       <!-- If we need scrollbar -->
       
     </div><!-- swiper -->

         <!-- If we need navigation buttons -->



</div><!-- row -->
  </div> <!-- container -->
  </div>




 </section>
</main>








<section id="about_Us" class="m-2">
    <div class="container">
        <h1 class="text-warning text-center">About<span>Us</span></h1>
        <h3 class="text-success text-center pb-2">Why <span>Choose Us ?</span></h3>
        <div class="row">

         <div class="col-md-6 col-sm-12">
             <img src="<?php echo e(asset('dist/img/melissia-suares-wvNGkJhsFjI-unsplash.jpg')); ?>" class="w-100 h-75" alt="">
             </div><!-- col-md-6 -->

             <div class="col-md-6">
                 <h2 class="text-center text-bold text-success pt-4"> Best Food In The Country</h2>
                 <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Ab sint consequuntur blanditiis error. Fugiat itaque vel id eaque 
                      sequi natus blanditiis dignissimos debitis illum numquam? Officia
                       iusto nostrum temporibus, illum nihil reiciendis odio modi pariatur 
                       totam quod voluptas adipisci nam sit laboriosam minus tempora nemo assumenda. 
                     Cum possimus ipsa libero itaque id labore nesciunt iusto?.</p>
                     <div class=" d-flex justify-content-around">
                         <button class="btn btn-secondary bg-light  text-secondary"> <i class="fas text-success fa-truck"></i> free Delivery</button>
                         <button class="btn btn-secondary bg-light  text-secondary "><i class="fas fa-dollar-sign text-success"></i> Easy Payment</button>
                         <button class="btn btn-secondary bg-light  text-secondary "><i class="fab fa-waze text-success"></i> 24/7 Service</button>
                     </div>

                         <button class="btn btn-primary  d-block mt-3 mx-auto px-5">learn more</button>
          
            </div><!-- col-md-6 -->
            
        
        </div><!-- row -->
    </div><!-- container -->



</section>














<section class="review mt-5" id="review">
    <div class="container">



    <h1 class="text-warning text-center"> customer's <span>review</span> </h1>

    <div class="row">

        <div class="swiper product-slider  ">

            <div class="swiper-wrapper ">

                <div class="swiper-slide box ">
                    <div class="card card2 mb-4 shadow-sm">
                        <div class="card-body text-center">
                            <img src="<?php echo e(asset('dist/img/pic-1.png')); ?>" class="img-fluid rounded-circle w-50" alt="">
                            <p class="card-text text-center">Youssef</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                            <div class="d-flex justify-content-around">
                                <div class="p-3"> <a href="#"> <i class="fab fa-facebook fa-2x"></a></i> </div>
                                <div class="p-3"> <a href="#"> <i class="fab fa-twitter fa-2x"></a></i> </div>
                                <div class="p-3"> <a href="#"> <i class="fab fa-instagram fa-2x"></a></i> </div>
                            </div>

                   </div><!-- card-body -->
                 </div><!-- card -->
                 </div><!-- swiper-slider -->




                <div class="swiper-slide box ">
                    <div class="card card2 mb-4 shadow-sm">
                        <div class="card-body text-center">
                            <img src="<?php echo e(asset('dist/img/person2.jpg')); ?>" class="img-fluid rounded-circle w-50" alt="">
                            <p class="card-text text-center">Shimaa</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                            <div class="d-flex justify-content-around">
                                <div class="p-3"> <a href="#"> <i class="fab fa-facebook fa-2x"></a></i> </div>
                                <div class="p-3"> <a href="#"> <i class="fab fa-twitter fa-2x"></a></i> </div>
                                <div class="p-3"> <a href="#"> <i class="fab fa-instagram fa-2x"></a></i> </div>
                            </div>

                   </div><!-- card-body -->
                 </div><!-- card -->
                 </div><!-- swiper-slider -->




                <div class="swiper-slide box ">
                    <div class="card card2  mb-4 shadow-sm">
                        <div class="card-body text-center">
                            <img src="<?php echo e(asset('dist/img/person3.jpg')); ?>" class="img-fluid rounded-circle w-50" alt="">
                            <p class="card-text">Ali</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                            <div class="d-flex justify-content-around">
                                <div class="p-3"> <a href="#"> <i class="fab fa-facebook fa-2x"></a></i> </div>
                                <div class="p-3"> <a href="#"> <i class="fab fa-twitter fa-2x"></a></i> </div>
                                <div class="p-3"> <a href="#"> <i class="fab fa-instagram fa-2x"></a></i> </div>
                            </div>

                   </div><!-- card-body -->
                 </div><!-- card -->
                 </div><!-- swiper-slider -->




                 <div class="swiper-slide box ">
                    <div class="card card2  mb-4 shadow-sm">
                        <div class="card-body text-center">
                            <img src="<?php echo e(asset('dist/img/pic-3.png')); ?>" class="img-fluid rounded-circle w-50" alt="">
                            <p class="card-text">Ayman</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                            <div class="d-flex justify-content-around">
                                <div class="p-3"> <a href="#"> <i class="fab fa-facebook fa-2x"></a></i> </div>
                                <div class="p-3"> <a href="#"> <i class="fab fa-twitter fa-2x"></a></i> </div>
                                <div class="p-3"> <a href="#"> <i class="fab fa-instagram fa-2x"></a></i> </div>
                            </div>

                   </div><!-- card-body -->
                 </div><!-- card -->
                 </div><!-- swiper-slider -->

                <div class="swiper-slide box ">
                    <div class="card card2  mb-4 shadow-sm">
                        <div class="card-body text-center">
                            <img src="<?php echo e(asset('dist/img/person4.jpg')); ?>" class="img-fluid rounded-circle w-50" alt="">
                            <p class="card-text">Mohamed</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                            <div class="d-flex justify-content-around">
                                <div class="p-3"> <a href="#"> <i class="fab fa-facebook fa-2x"></a></i> </div>
                                <div class="p-3"> <a href="#"> <i class="fab fa-twitter fa-2x"></a></i> </div>
                                <div class="p-3"> <a href="#"> <i class="fab fa-instagram fa-2x"></a></i> </div>
                            </div>

                   </div><!-- card-body -->
                 </div><!-- card -->
                 </div><!-- swiper-slider -->



                    <div class="swiper-slide box ">
                        <div class="card card2  mb-4 shadow-sm">
                            <div class="card-body text-center ">
                                <img src="<?php echo e(asset('dist/img/person1.jpg')); ?>" class="img-fluid rounded-circle w-50 align-content-center" alt="">
                                <p class="card-text">eman</p>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                                <div class="d-flex justify-content-around">
                                    <div class="p-3"> <a href="#"> <i class="fab fa-facebook fa-2x"></a></i> </div>
                                    <div class="p-3"> <a href="#"> <i class="fab fa-twitter fa-2x"></a></i> </div>
                                    <div class="p-3"> <a href="#"> <i class="fab fa-instagram fa-2x"></a></i> </div>
                                </div>

                       </div><!-- card-body -->
                     </div><!-- card -->
                     </div><!-- swiper-slider -->



                     <div class="swiper-slide box ">
                        <div class="card card2  mb-4 shadow-sm">
                            <div class="card-body text-center ">
                                <img src="<?php echo e(asset('dist/img/pic-2.png')); ?>" class="img-fluid rounded-circle w-50 align-content-center" alt="">
                                <p class="card-text">Shimaaa</p>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                                <div class="d-flex justify-content-around">
                                    <div class="p-3"> <a href="#"> <i class="fab fa-facebook fa-2x"></a></i> </div>
                                    <div class="p-3"> <a href="#"> <i class="fab fa-twitter fa-2x"></a></i> </div>
                                    <div class="p-3"> <a href="#"> <i class="fab fa-instagram fa-2x"></a></i> </div>
                                </div>

                       </div><!-- card-body -->
                     </div><!-- card -->
                     </div><!-- swiper-slider -->



                </div><!-- swiper-wrapper -->
      </div><!-- swiper-->


    </div><!-- row -->
      </div> <!-- container -->


</section>








<?php $__env->stopSection(); ?>





































<?php $__env->startSection('scripts'); ?>
<script>
    var swiper = new Swiper(".product-slider", {
    loop:true,
    spaceBetween: 20,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    centeredSlides: true,
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      800: {
        slidesPerView: 2,
      },
      1020: {
        slidesPerView: 3,
      },


    },
    pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
//   scrollbar: {
//     el: '.swiper-scrollbar',
//   },
});

 </script>



<?php $__env->stopSection(); ?>







<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\eman\Desktop\restaurant\restaurant\resources\views/front/dishes.blade.php ENDPATH**/ ?>