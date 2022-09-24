<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
//use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Validation\ConditionalRules;
use Illuminate\Support\Facades\DB;
use App\Models\Dish;
use Illuminate\Http\Request;

class CartController extends Controller
{


    public function index() {

        $cartItems =Cart::content();
        return view('front.cart', compact('cartItems'));
    }

    public function addItem( Request $request, $id) {
        $dish = Dish::find($id);
         Cart::add($id,$dish->dish_name,1,$dish->dish_price,['image' => $dish->image],);
          return back();




        }
    public function destroy($id){
        Cart::remove($id);
        $cartItems =Cart::content();
        return back();
    }


    public function update(Request $request,$rowId)

    {
         $cart = Cart::get($rowId);

        if(isset($request->qty))

        {
            $cart->qty = $request->qty;
        }

       return back()->with('success', 'Item quantity updated in your cart');

    }





}





