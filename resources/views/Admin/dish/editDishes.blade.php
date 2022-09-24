@extends('admin.master')


@section('content')

 <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
    <canvas class="my-4 w-100"  width="100" height="2"></canvas>

<h3>Products</h3>
  <div class="row">

              <div class="col-md-4">

                {!! Form::model($dishes, ['method'=>'post', 'action'=> ['App\Http\Controllers\DishesController@editDishes', $dishes->id], 'files'=>true]) !!}

                <Select class="form-control" name="meal_id">
                    @foreach($meals as $meal)
                    Meals:  <option value="{{ $meal->id }}"  <?php
                    if($dishes->meal_id==$meal->id) {?> selected="selected"<?php }?>


                    >{{ ucwords($meal->name) }}</option>
                    @endforeach
                    </select>
                    <br>



                <div class="form-group">
                 {!! Form::label('dish_name', 'Name:') !!}
                 {!! Form::text('dish_name', null, ['class'=>'form-control'])!!}
               </div>


               <div class="form-group">
                 {!! Form::label('dish_price', 'dish Price:') !!}
                 {!! Form::text('dish_price', null, ['class'=>'form-control'])!!}
               </div>


                <div class="form-group">
                 {!! Form::label('dish_code', 'dish Code:') !!}
                 {!! Form::text('dish_code', null, ['class'=>'form-control'])!!}
               </div>






                <img class="card-img-top img-fluid" src="{{url('images',$dishes->image)}}" style="width:50px" alt="Card image cap">


                <div class="form-group">
                 {!! Form::label('spl_price', 'Spl Price:') !!}
                 {!! Form::text('spl_price', null, ['class'=>'form-control'])!!}
               </div>


               <div class="form-group">
                 {!! Form::label('dish_info', 'dish Info:') !!}
                 {!! Form::text('dish_info', null, ['class'=>'form-control'])!!}
               </div>




            {{ Form::submit('Update', array('class' => 'btn btn-success btn-small')) }}
   {!! Form::close() !!}

              </div><!-- col-md-4 -->










 </div><!-- row -->



 </main>



  @endsection








