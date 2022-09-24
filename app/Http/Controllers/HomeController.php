<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Meal;
use App\Models\Dish;
use App\Models\wishList;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $dishes=Dish::all();
        $meals=Meal::all();
        return view('front.home',compact('dishes','meals'));
    }


    public function show($id)
    {
         $meal = Meal::findOrFail($id);
        $dishes = DB::table('dishes')->where('meal_id', '=',"$id")->get();
        //$dishes = Dish::where('meal_id', '=', "$id")->get();

        return view('front.allDishes',compact(['meal','dishes']));
    }



    public function dish()
    {
        $dishes=Dish::all();
         $meals=Meal::all();
         return view('front.home',compact(['meals','dishes']));
        //return view('front.dishes');
    }
    public function dish_details($id)
    {
 $dishes=Dish::findOrFail($id);
  return view('front.dishes_details', compact('dishes'));


    }

    public function wishlist(Request $request) {

        $wishList = new wishlist;
        $wishList->user_id = Auth::user()->id;
        $wishList->dish_id = $request->dish_id;

        $wishList->save();
        $items=Dish::all();

        $dishes = DB::table('dishes')->where('id', $request->dish_id)->get();
        // $dishes = DB::table('dishes')->where('id',$id)->get();
        // return view('front.product_details', compact('Products','items'));
          return back();
        // return view('front.wishlist', compact('dishes','items'));

    }

    public function View_wishList() {

        $dishes = DB::table('wishlist')->leftJoin('dishes', 'wishlist.dish_id', '=', 'dishes.id')->get();
        return view('front.wishList', compact('dishes'));
    }

    public function removeWishList($id) {

        DB::table('wishlist')->where('dish_id', '=', $id)->delete();

        return back()->with('msg', 'Item Removed from Wishlist');
    }


}
