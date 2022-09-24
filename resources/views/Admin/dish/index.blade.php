@extends('admin.master')


@section('content')





<h3 class="text-center text-warning">Dishes</h3>



        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Dish Image</th>
                    <th>Dish Id</th>
                    <th>Dish Name</th>
                    <th>Dish Code</th>
                    <th>Dish Price</th>
                    <th>Dish Id</th>
                    <th>Update Dish</th>
                    <th>Delete Dish</th>
                </tr>
            </thead>

            <tbody>
                <?php
             use App\Models\Dish;
                ?>

               @foreach($dishes as $dish)
                <tr>
                    <td style="width:50px; border: 1px solid #333;"><img class="card-img-top img-fluid" src="{{url('images',$dish->image)}}" width="50px" alt="Card image cap"></td>
                    <td style="width:50px;">{{$dish->id}} </td>
                    <td style="width:50px;">{{$dish->dish_name}} </td>
                    <td style="width:50px;">{{$dish->dish_code}} </td>
                    <td style="width:50px;">{{$dish->dish_price}} </td>


                    <td style="width:50px;">{{$dish->meal_id}}</td>


                    <td><a href="{{route('dishEditForm',$dish->id)}}" class="btn btn-success btn-small">Edit</a></td>

                    {!! Form::open(['method'=>'DELETE', 'action'=> ['App\Http\Controllers\DishesController@destroy', $dish->id]]) !!}


                      <td>  {!! Form::submit('Delete Dish', ['class'=>'btn btn-danger col-sm-12']) !!}</td>

                    {!! Form::close() !!}
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>



 @endsection
