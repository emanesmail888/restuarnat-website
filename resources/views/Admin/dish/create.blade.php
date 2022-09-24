@extends('admin.master')
@section('content')

            <h1 class="text-warning text-center">Add New Dish</h1>

         <div class="col-md-2" >
        </div>
             <div class="col-md-6 col-sm-9 d-block mx-auto ">
            <div class="panel-body  ">



            {!! Form::open(['route' => 'dish.store', 'method' => 'post', 'files' => true]) !!}

              <div class="form-group d-flex">
                    {{ Form::label('DishName', 'Name:') }}
                    {{ Form::text('dish_name', null, array('class' => 'form-control','required'=>'','minlength'=>'5')) }}

                       <span style="color:red">{{ $errors->first('dish_name') }}</span>
                </div>



                <div class="form-group d-flex">
                    {{ Form::label('Code', 'Code:') }}
                    {{ Form::text('dish_code', null, array('class' => 'form-control')) }}

                       <span style="color:red">{{ $errors->first('dish_code') }}</span>
                </div>



                <div class="form-group d-flex">
                    {{ Form::label('price', 'Price:') }}
                    {{ Form::text('dish_price', null, array('class' => 'form-control')) }}

                       <span style="color:red">{{ $errors->first('dish_price') }}</span>
                </div>

                <div class="form-group d-flex">
                    {{ Form::label('meal_id', 'Meals:') }}
                    {{ Form::select('meal_id',$meals, null, ['class' => 'form-control', 'placeholder'=>'SelectMeal']) }}

                    <span style="color:red">{{ $errors->first('meal_id') }}</span>
               </div>


                 <div class="form-group d-flex">
                    {{ Form::label('Description', 'Description:') }}
                    {{ Form::text('dish_info', null, array('class' => 'form-control')) }}

                       <span style="color:red">{{ $errors->first('dish_info') }}</span>
                </div>

           <div class="form-group d-flex">
                {{ Form::label('image', 'Image:') }}
                {{ Form::file('image',array('class' => 'form-control')) }}

                       <span style="color:red">{{ $errors->first('image') }}</span>

            </div>


                 <div class="form-group d-flex">
                    {{ Form::label('Sale Price', 'SalePrice:') }}
                    {{ Form::text('spl_price', null, array('class' => 'form-control')) }}

                       <span style="color:red">{{ $errors->first('spl_price') }}</span>
                </div>
                <div class="form-group d-flex">


                {{ Form::submit('Submit', array('class' => 'btn d-block  px-4 mt-3 mx-auto go text-white text-bold ')) }}
                </div>
     {!! Form::close() !!}

            </div>
            </div>
    {{-- </div><!-- row -->

</div><!-- container-fluid --> --}}


@endsection
