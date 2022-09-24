<?php $__env->startSection('content'); ?>


<script>
$(document).ready(function(){


<?php for($i=1;$i<20;$i++){?>

$('#upCart<?php echo $i;?>').on('change keyup', function(){




    var newqty = $('#upCart<?php echo $i;?>').val();
    var rowId = $('#rowId<?php echo $i;?>').val();
    var proId = $('#proId<?php echo $i;?>').val();


    if(newqty <=0){ alert('enter only valid quantity') }


     else {


        // start of ajax

       $.ajax({
        type: 'get',
        dataType: 'html',
        url: '<?php echo url('/cart/update');?>/'+proId,
        data: "qty=" + newqty + "& rowId=" + rowId + "& proId=" + proId,
        success: function (response) {
            console.log(response);
            $('#updateDiv').html(response);
        }
    });

       // End of Aajx
     }
    });
  <?php } ?>
});
</script>
<?php if ($cartItems->isEmpty()) { ?>
<br>
<br>
<br>
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ol>
            </div>
            <div align="center">  <img src="<?php echo e(asset('dist/img/empty-cart.png')); ?>"/></div>
        </div>
    </section> <!--/#cart_items-->
<?php } else { ?>
<br>
<br>
    <section id="cart_items">


        <div class="container">

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="<?php echo e(url('/')); ?>"></a></li>
                    <li class="active">Shopping Cart</li>
                </ol>
            </div>






                  <div id="updateDiv">

                        <?php if(session('status')): ?>
                                    <div class="alert alert-success">
                                        <?php echo e(session('status')); ?>

                                    </div>
                                    <?php endif; ?>
                                      <?php if(session('error')): ?>

                                    <div class="alert alert-danger">
                                        <?php echo e(session('error')); ?>

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
                            <td></td>
                        </tr>




                        <!-- Start #updateDiv -->



                 </thead>

                    <?php $count =1;?>
                    <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tbody>
                        <tr>
                            <td class="cart_product">



                         <p><img src="<?php echo e(url('images',$cartItem->options->image)); ?>" class="w-25 h-25" ></p>



                            </td>



                            <td class="cart_description">
                            <a href="<?php echo e(url('/dish_details')); ?>/<?php echo e($cartItem->id); ?>">


                                <br>

                                <h4><a href="<?php echo e(url('/dish_details')); ?>/<?php echo e($cartItem->id); ?>" style="color:blue"><?php echo e($cartItem->name); ?></a></h4>
                                <p>Product ID: <?php echo e($cartItem->id); ?></p>


                            </td>
                            <td class="cart_price">
                                <p>$<?php echo e($cartItem->price); ?></p>
                            </td>
                            <td class="cart_quantity">



                  <input type="hidden" id="rowId<?php echo $count;?>" value="<?php echo e($cartItem->rowId); ?>"/>


              <input type="hidden" id="proId<?php echo $count;?>" value="<?php echo e($cartItem->id); ?>"/>



              <input type="number" size="2" value="<?php echo e($cartItem->qty); ?>" name="qty" id="upCart<?php echo $count;?>"
                                           autocomplete="off" style="text-align:center; max-width:50px; "  MIN="1" MAX="1000">






                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">$<?php echo e($cartItem->subtotal); ?></p>
                            </td>
                            <td class="cart_delete">
                               <button class="btn btn-primary">
                                <a class="cart_quantity_delete" style="background-color:red"
                                   href="<?php echo e(url('/cart/remove')); ?>/<?php echo e($cartItem->rowId); ?>"><i class="fa fa-times"></i></a>
                                   </button>
                            </td>
                        </tr>



                <?php $count++;?>



                    </tbody>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>

               </div>
            <!-- End of Updatediv</div> --></div>


        </div>
    </section>
    <section id="do_action">
        <div class="container">
            <div class="heading">
                <h3>What would you like to do next?</h3>
                <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
            </div>

            <div class="row">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-6">
                    <div class="total_area">
                        <ul>
                            <li ><h3 class="text-bold">Cart Sub Total :<span class="text-success">$<?php echo e($cartItem->subtotal); ?></span></h3></li>
                            <li><h3 class="text-bold">Eco Tax : <span class="text-success"> $<?php echo e(Cart::tax()); ?></span></h3></li>
                            <li><h3 class="text-bold">Shipping Cost : <span class="text-success">Free</span></h3></li>
                            <li><h3 class="text-bold">Total :<span class="text-success">$<?php echo e($cartItem->total); ?></span></h3> </li>

                        <a class="btn btn-success btn-md-block pl-3" href="<?php echo e(url('/')); ?>/checkout">Check Out</a>
                    </ul>
                     </div>

                </div><!-- col-sm-6 -->

                <div class="col-sm-3">
                </div>

            </div><!-- row -->
        </div><!-- container -->
    </section>
<?php } ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\restaurant\restaurant\resources\views/cart/index.blade.php ENDPATH**/ ?>