@extends('admin.master')
@section('content')



    {{-- <canvas class="my-4 w-100"  width="100" height="1"></canvas> --}}

<div class="row">

<div class="col-md-5">

<h3 class=" text-center text-warning">Meals</h3>

<table class="table table-secondary">
            <thead>
                <tr class="text-secondary">

                    <th>Meal Name</th>

                    <th>Delete</th>
                </tr>
            </thead>

            <tbody>

            @foreach($meals as $meal)

            <tr>
                <td class="text-secondary text-bold">

                    {{$meal->name}}</td>


            {!! Form::open(['method'=>'delete', 'action'=> ['App\Http\Controllers\MealsController@destroy', $meal->id]]) !!}


                <td>  {!! Form::submit('Delete Meal', ['class'=>'btn delete text-white col-sm-12']) !!}</td>



                {!! Form::close() !!}

              </tr>
              @endforeach


            </tbody>
    </table>


</div>


      <div class="col-md-5">

        <br>

        <div class="card card-body  text-white meal py-5">
       <h2 class="text-center">Create Meal</h2>
       <p class="lead">Lorem Ipsum has been the industry's standard dummy text ever since the</p>
          {!! Form::open(['route' => 'meal.store', 'method' => 'post']) !!}
            <div class="form-group ">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control ')) }}


        <button type="submit" class="btn text-white d-block go mx-auto ">Add Meal</button>




          {!! Form::close() !!}

     </div><!-- card -->




    </div><!-- col-md-5 -->

</div><!-- row -->




@endsection
