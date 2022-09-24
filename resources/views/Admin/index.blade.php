@extends('admin.master')
@section('content')
{{-- <canvas class="my-4 w-100"  width="100" height="5"></canvas> --}}

    <div class="container">
        <div class="row align-center mt-5">


            <div class="col-md-4 col-sm-12 mb-3 ">
          <a href="{{route('meal.index')}}" class="btn btn-lg btn-block  text-white action">
            <img src="{{asset('dist/img/20-tetrazzini.jpg')}}" class=" mb-1" alt="">
            <i class="fas fa-plus"></i>
            Create New Meal</a>
            </div>

            <div class="col-md-4 mb-3">
          <a href="{{route('dish.create')}}" class="btn btn-lg btn-block   text-white action">
          <img src="{{asset('dist/img/images (5).jpg')}}" class="  mb-1" alt="">
          <i class="fas fa-plus"></i>
            Create New Dish</a>
            </div>


            <div class="col-md-4 mb-3">
                <a href="{{route('dish.index')}}" class="btn btn-lg btn-block  text-white action">
                    <img src="{{asset('dist/img/image.jpg')}}"
                    class=" mb-1" alt="">
                    <i class="fas fa-eye"></i>
                    Display all Dishes</a>

            </div>










            </div><!-- row -->
        </div><!-- container -->





@endsection

