

 <nav class="navbar navbar-expand-md navbar-light fixed-top bg-white">
      <div class="container">
    <a href="{{'/'}}" class="navbar-brand text-primary ">
        <i class="fas fa-utensils  fa-2x text-success logo"></i>
         <span class="brand">Resto</span>
    </a>
    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav main-nav mx-auto">
        <li class="nav-item ">
          <a class="nav-link " href="{{url('/')}}">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="{{url('/')}}#dishes">Dishes</a>
        </li>



        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Meals</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <?php  $meals = DB::table('meals')->get(); ?>
                 @foreach($meals as $meal)
              <a class="dropdown-item text-center bg-successs" href="{{url('allDishes',$meal->id)}}">{{ucwords($meal->name)}}</a>
               <hr>

               @endforeach

            </li>




        <li class="nav-item">
            <a class="nav-link " href="{{url('/')}}#review">Review</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{url('/wishlist')}}">WhisList</a>
          </li>




          <!-- Start Of Dropdown of Cart Iems -->

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <span class="badge badge-secondary "><i class="fa fa-shopping-cart "></i>{{Cart::count()}}</span></a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <div class=" align-items-center">
          <h4 class="d-flex justify-content-between align-items-center mb-2">

            <span class="badge badge-secondary   "><i class="fa fa-shopping-cart  text-success fa-5x"></i>{{Cart::count()}}</span>
            <span class="text-muted text-center">Total: ({{Cart::total()}})</span>

          </h4>



          <h4 class="d-flex justify-content-between align-items-center  mb-3">
            <span class="text-muted">Your cart</span>

          </h4>

          <ul class="list-group mb-3 w-100 ">
            <?php $cartItems = Cart::content();?>
                @foreach($cartItems as $cartItem)
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class="col-md-4">
              <div>


                <img  class="dropdownimage" src="{{url('images',$cartItem->options->image)}}"  class="img-responsive dropdownimage" style="width:50px" />



              </div>
            </div>

              <div class="col-md-8">
              <h6 class="my-0">Name: {{$cartItem->name}}</h6>
              <span class="text-muted">Price: {{$cartItem->price}}</span>

              <span class="text-muted foat-right">Qty: {{$cartItem->qty}}</span>

            </div>

            </li>
             @endforeach


              <li class="list-group-item d-flex justify-content-between">

              <a class="btn btn-success d-block mx-auto float-right" href="{{url('/cart')}}">View Cart</a>


            </li>
          </ul>







        </div>

        </div>

          </li>


























        </li>
         </ul>

         {!! Form::open(['route' => 'search']) !!}

         {!! Form::text('query',) !!}
         {!! Form::submit('Search' ) !!}
         {!! Form::close() !!}











     {{-- <li class="list-inline-item ">
      <i class="fas fa-heart icon text-dark bg-light"></i>
      </li> --}}










    </div><!-- container -->
</nav>










