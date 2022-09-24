@extends('front.master')
@section('content')


<main role="main">
    <canvas class="my-4 w-100"  width="100" height="3"></canvas>

<section id="dishes">

    <div class="album py-5 bg-light">
      <div class="container">
        <h1 class=" text-center text-warning">Search<span>Dishes</span> </h1>
    
        <div class="row">
@forelse ($dishes as $dish)

<div class="col-md-4 ">
  <div class="card mb-4 shadow-sm">


   <div class="card-body">
      <img src="{{url('images', $dish->image)}}" class="card-img-top " alt="card image cap">

      <p class="card-text">{{$dish->dish_name}}</p>

      <div class="btn-group-vertical d-block">
          <button type="button" class="btn btn-outline-secondary  btn-primary ">
              <a href="{{url('/dish_details')}}/<?php echo $dish->id; ?>"
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
@empty
<h3>No Dishes</h3>
@endforelse
</div><!-- row -->

</div><!-- container -->
</div>
</section>
</main>


@endsection





{{-- <h1>Search results</h1>



    <h3>Pages:</h3>

    <ul>

        @foreach($dishes as $page)

           {{$page->dish_name}}
           {{$page->dish_id}}


        @endforeach

    </ul>
    --}}