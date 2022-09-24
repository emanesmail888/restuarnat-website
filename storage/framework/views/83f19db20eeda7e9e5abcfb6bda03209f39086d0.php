<?php $__env->startSection('content'); ?>
 <canvas class="my-4 w-100"  width="100" height="3"></canvas>


<?php if ($cartItems->isEmpty()) { ?>
<br>
<br>
<br>
    <section id="cart_items">
        <div class="container">
            <div class=" d-block  text-center">  <img src="<?php echo e(asset('dist/img/empty-cart.png')); ?>"/></div>
        </div>
    </section>

<?php } else { ?>
<br>
<br>
    <section id="cart_items">
        <div class="container">
<h1 class="text-warning text-center">Shopping Cart</h1>

                  <div id="updateDiv">


             <?php if(Session::has('success')): ?>
              <div class="alert alert-success">
                <h3><?php echo e(Session::get('success')); ?></h3>
             </div>
                  <?php endif; ?>



            <div class="table-responsive cart_info">

                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td class="image">Image</td>
                            <td class="description">Product</td>
                            <td class="price">Price</td>
                            <td class="quantity">Quantity</td>
                            <td class="total">Total</td>
                            <td class="delete">Delete</td>
                        </tr>





                 </thead>


                    <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tbody>
                        <tr>
                            <td class="cart_dish">

                         <img src="<?php echo e(url('images',$cartItem->options->image)); ?>" style="height: 50px; width:50px;" >

                            </td>
                            <td class="cart_description">
                            <a href="<?php echo e(url('/dish_details')); ?>/<?php echo e($cartItem->id); ?>">
                                <h4><a href="<?php echo e(url('/dish_details')); ?>/<?php echo e($cartItem->id); ?>" style="color:blue"><?php echo e($cartItem->name); ?></a></h4>
                                <p>Dish ID: <?php echo e($cartItem->id); ?></p>


                            </td>
                            <td class="cart_price">
                                <p>$<?php echo e($cartItem->price); ?></p>
                            </td>
                          <?php echo Form::open(['url' => ['cart/update',$cartItem->rowId], 'method'=>'put']); ?>


                            <td class="cart_quantity">

              <input type="number" size="2" value="<?php echo e($cartItem->qty); ?>" name="qty"
              autocomplete="off" style="text-align:center; max-width:65px; "  MIN="1" MAX="1000">

              <input type="submit" class="btn btn-success " value="Update" styel="margin:7px">

                         <?php echo Form::close(); ?>

                            </td>



                            <td class="cart_total">
                                <p class="cart_total_price">$<?php echo e($cartItem->subtotal); ?></p>
                            </td>
                            <td class="cart_delete">
                               <button class="btn btn-danger">
                                <a class="cart_quantity_delete text-white "
                                   href="<?php echo e(url('/cart/remove')); ?>/<?php echo e($cartItem->rowId); ?>">Delete</a>
                                   </button>
                            </td>
                        </tr>






                    </tbody>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>

               </div>
            <!-- End of Updatediv</div> --></div>


        </div>
    </section>

    <section >
        <div class="container">

                <h3>What would you like to do next?</h3>
                <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>

            <div class="row">
            <h1 class="text-center text-warning">Order Now</h1>

                <div class="col-sm-6">


               <form action="#" method="">
                  <div class="row">


                    <div class="form-group col-md-6">
                      <label for="firstname" class="form-label">Display Name</label>

                      <input id="firstname" type="text" name="fullname" placeholder="Display Name"  value="" class="form-control">



                    </div>

                     <div class="form-group col-md-6">
                      <label for="email" class="form-label">Email</label>

                      <input id="email" type="text" name="email" placeholder="Email" value="" class="form-control">
                    </div>




                    <div class="form-group col-md-6">
                      <label for="password" class="form-label">password</label>
                      <input id="password" type="text" name="pincode" placeholder="Password" value="" class="form-control">


                    </div>




                        <div class="form-group col-md-6">
                      <label for="city" class="form-label">City Name</label>

                      <input id="city" type="text" name="city" placeholder="City Name" value="" class="form-control">


                    </div>


                    <hr>

                            <select name="country" class="form-control" >
                                <option value="" selected="selected">Select country</option>
                                <option value="United States">United States</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="UK">UK</option>
                                <option value="India">India</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Ucrane">Ucrane</option>
                                <option value="Canada">Canada</option>
                                <option value="Dubai">Dubai</option>
                            </select>



                       <span>
                       <input type="radio" name="pay" value="COD" checked="checked"> COD
                          </span>

                        <span>
                        <input type="radio" name="pay" value="paypal"> PayPal
                        </span>


                      <input type="submit" value="Continue"  class="btn btn-success ">







                  </div>
                </form>

                </div>

                <div class="col-sm-6 d-block  text-center ">
                        <ul class="cartDetail  mt-5">
                            <h5 class="">Cart Sub Total :<span class="text-success">$<?php echo e(Cart::subtotal()); ?></span></h5>
                            <h5 class="">Shipping Cost : <span class="text-success">Free</span></h5>
                            <h5 class="">Tax : <span class="text-success"> $<?php echo e(Cart::tax()); ?></span></h5>
                            <h5 class="">Total :<span class="text-success">$<?php echo e(Cart::total()); ?></span></h5>

                        <a class="btn btn-success btn-md-block pl-3" href="<?php echo e(url('/')); ?>/checkout">Check Out</a>
                    </ul>

                </div><!-- col-sm-6 -->



            </div><!-- row -->
        </div><!-- container -->
    </section>
<?php } ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\restaurant\restaurant\restaurant\resources\views/front/cart.blade.php ENDPATH**/ ?>