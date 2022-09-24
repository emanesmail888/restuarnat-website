<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Dish;
use App\Models\Meal;

class MealsController extends Controller
{
    public function index(){

        $dishes=Dish::all();
        $meals=Meal::all();
        return view('Admin.meal.index',compact(['meals','dishes']));
    }

    public function create(){


    }

    public function store(Request $request)
    {

        Meal::create($request->all());
        return back();
    }

    public function show($id)
    {

      
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {

         Meal::findOrFail($id)->delete();

        return redirect()->back();
    }


}


