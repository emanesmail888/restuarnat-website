<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Support\Facades\DB;

use App\Models\Dish;
use App\Models\Meal;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class DishesController extends Controller
{
    public function index(){
        $dishes=Dish::all();
        $meals=Meal::all();
        return view('Admin.dish.index',compact('dishes','meals'));
    }
    public function create(){
        $meals=Meal::pluck('name','id');
        return view('Admin.dish.create',compact('meals'));
    }

    public function store(Request $request)

    {


        $formInput=$request->except('image');

        $this->validate($request,[
            'dish_name'=>'required',
            'dish_code'=>'required',
            'dish_price'=>'required',
             'meal_id'=>'required',
            'dish_info'=>'required',
            'spl_price'=>'required',
            'image'=>'image|mimes:png,jpg,JPG,jpeg|max:10000|required',

        ]);



        $image=$request->image;
        if($image){
            $imageName=$image->getClientOriginalName();
            $image->move('images',$imageName);
            $formInput['image']=$imageName;
        }

        $meals=Meal::all();
        Dish::create($formInput);
         return redirect()->route('dish.index');
        //return redirect()->back();

}

// public function show($id)
//     {
//         $dish = Dish::findOrFail($id);
//         // $blog = Blog::whereSlug($slug)->first();
//         return view('dish.show', compact('dishes'));
//         // var_dump($product);
//     }

    public function dishEditForm($id) {


        $dishes = Dish::findOrFail($id);
        $meals = Meal::all();


        return view('admin.dish.editDishes', compact('dishes', 'meals'));
    }

    public function search(Request $request)
    {
    $query = $request->get('query');

    $dishes = Dish::where('dish_name', 'LIKE', "%$query%")->get();
    return view('front.search', compact('dishes'));
}

  public function editDishes(Request $request, $id) {


         $dishes = DB::table('dishes')->where('id', '=', $id)->get();

        $meal = Meal::findOrFail($id);



        $dishId = $request->id;

        $dish_name = $request->dish_name;

        $dish_code = $request->dish_code;
        $dish_price = $request->dish_price;
        $meal_id = $request->meal_id;
        $dish_info = $request->dish_info;
        $spl_price = $request->spl_price;




        DB::table('dishes')->where('id', $dishId)->update([
            'dish_name' => $dish_name,
            'meal_id' => $meal_id,
            'dish_code' => $dish_code,
            'dish_price' => $dish_price,
            'dish_info' => $dish_info,
            'spl_price' => $spl_price


        ]);
       return view('admin.dish.index', compact('dishes','meal',));


    }

    public function addComment(Request $request, $id){
        $this->validate($request,[
            'comment'=>'required|max:200'
        ]);
        $dishes = Dish::findOrFail($id);
        $comment=new Comment();
        $comment->user_id=auth()->user()->id;
        $comment-> dish_id =$request->id;
        $comment->comment=$request->input('comment');
         $comment->save();
         return view('front.dishes_details', compact('dishes'));



    }

    public function destroy($id)
    {

          Dish::findOrFail($id)->delete();

        return redirect()->back();
    }











}
