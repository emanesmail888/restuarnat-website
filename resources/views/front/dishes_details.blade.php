 @extends('front.master')
@section('content')



<section>
<div class="container">
    <canvas class="my-4 w-100"  width="100" height="2"></canvas>



  <div class="row">
    <h1 class=" text-bold text-warning text-center">Details Page</h1>

        <div class="col-sm-6">

            <img src="{{url('images',$dishes->image)}}" class="h-70 w-50" alt="cardImagecap" >
        </div><!-- col-sm-6 -->

        <div class="col-sm-6">
            <a href="/" class="text-success"><h3 >Go Back</h3></a>
            <h2><?php echo ucwords($dishes->dish_name) ?></h2>
            <h3>Price:  {{$dishes->dish_price}}</h3>
            <h5>Details:  {{$dishes->dish_info}}</h5>
<br><br>

<button type="button" class="btn btn-outline-secondary mb-1 btn-success ">
    <a href="{{url('/cart/addItem')}}/<?php echo $dishes->id; ?>"
        class="add-to-cart text-white">Add To Cart
        <i class="fa fa-shopping-cart"></i>
    </a>
</button>



<?php
 $wishData = DB::table('wishlist')->rightJoin('dishes','wishlist.dish_id', '=', 'dishes.id')->where('wishlist.dish_id', '=', $dishes->id)->get();
 $count = App\Models\wishList::where(['dish_id' => $dishes->id])->count();
  ?>

 <?php if($count=="0"){?>

   {!! Form::open(['route' => 'addToWishList', 'method' => 'post']) !!}
    <input type="hidden" value="{{$dishes->id}}" name="dish_id"/>
    <input type="submit" value="Add to Wishlist" class="btn btn-success bg-success"/>



   {!! Form::close() !!}
  <?php } else {?>
     <h3 style="color:green">Already Added to Wishlist <a href="{{url('/wishlist')}}">wishlist</a></h3>
<?php }?>

        </div><!-- col-sm-6 -->
        </div><!-- row -->
    </div><!-- container -->


</section>


    <section class="mt-4 pt-4">

        <div class="container">
            <h2 class="text-center text-warning">Display Comments</h2>
        <div class="row">
            <div class="col-md-10 mx-auto">
                <table class="table table-success">
                    <thead>
                        <tr>
                            <th>comment Id</th>
                            <th>user Name</th>
                            <th>user Email</th>
                            <th>comment</th>
                        </tr>

                    </thead>

                    <tbody>

                @forelse ($dishes->comments as $comment )
                <tr>
               <td> <strong class="text-primary">{{ $comment->id }}</strong></td>
               <td> <strong class="text-primary">{{ $comment->user->name }}</strong></td>
               <td><p class="text-bold text-success"> {{$comment->user->email}}</p></td>
                <td><h5 class="text-bold text-success">{{$comment->comment}}</h5></td>
           </tr>
           </tbody>
           </table>


        @empty
        <h3 class="text-danger text-center">No Comments Yet .</h3>

        @endforelse


            </div><!-- col-md-10 -->
        </div><!-- row -->

        </div><!-- container -->


    </section>


        <div class="container my-4">
            <div class="row">

<h2 class="text-warning text-center">You Can Add Comment Here</h2>
                <div class="col-md-8 col-sm-9 d-block mx-auto ">
                    <div class="panel-body  ">


                        {!! Form::open(['method'=>'post', 'route'=>['comment',$dishes->id]]) !!}
                      <div class="form-group d-flex mb-2">
                            {{ Form::label('name', 'Name:') }}
                            {{ Form::text('name', null, array('class' => 'form-control')) }}

                        </div>


                        <div class="form-group d-flex mb-2">
                            {{ Form::label('email', 'Email:') }}
                            {{ Form::text('email', null, array('class' => 'form-control')) }}

                        </div>

                        <div class="form-group d-flex mb-2">
                            {{ Form::label('comment', 'Comment:') }}
                            {{ Form::textarea('comment', null, array('class' => 'form-control','rows'=>'5' )) }}

                        </div>


                        <div class="form-group d-flex">
                        {{ Form::submit('Add Comment', array('class' => 'btn d-block  px-4 mt-3 mx-auto go text-white text-bold ')) }}
                        </div
                    {!! Form::close() !!}

                        </div>
            </div><!-- col-md-8 -->
            </div><!-- row -->

        </div><!-- container -->








@endsection
