@extends('front.master')

@section('content')

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

                        @foreach($dishes as $dish)
                        <div class="col-md-4">
                          
                 <a href="{{url('/dishes_details')}}">
            <img src="{{url('images',$dish->image)}}" class="h-50 w-100" alt="" />
                     </a>
                         </div>

                         <div class="col-md-4 d-block text-center">
                          <h2 class="text-success">$<?php echo $dish->dish_price; ?></h2>

                        <h4 ><a class="text-success" href="{{url('/dishes_details')}}"><?php echo $dish->dish_name; ?></a></h4>
                        </div><!-- col-md-4 -->

                        <div class="col-md-4">
                  <a href="{{url('/cart/addItem')}}/<?php echo $dish->id; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Move to cart</a>
                   <a href="{{url('/')}}/removeWishList/{{$dish->id}}" style="color:red" class="btn btn-default btn-block"><i class="fa fa-minus-square"></i>Remove from wishlist</a></li>
                           </div><!-- col-md-4 -->

                               
                        @endforeach

                              
<?php } ?>
                                 
                      



             
    </div>
</div>
</section>



@endsection

