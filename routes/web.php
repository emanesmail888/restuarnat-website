<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DishesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front/home');
});

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('allDishes/{id}', 'App\Http\Controllers\HomeController@show');


Route::post('addToWishList', 'App\Http\Controllers\HomeController@wishList')->name('addToWishList');


Route::get('/wishlist', 'App\Http\Controllers\HomeController@View_wishList');

Route::get('/removeWishList/{id}', 'App\Http\Controllers\HomeController@removeWishList');
// Route::post('comments', ['as' => 'comments.store', 'uses' => 'App\Http\Controllers\CommentsController@store']);
Route::POST('/comment/{id}', ['uses'=> 'App\Http\Controllers\DishesController@addComment'])->name('comment');



Auth::routes();

Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],
function(){
Route::get('/', function () {
    return view('admin.index');
})->name('admin.index');
Route::get('dishEditForm/{id}', 'App\Http\Controllers\DishesController@dishEditForm')->name('dishEditForm');
Route::POST('/editDishes/{id}', 'App\Http\Controllers\DishesController@editDishes')->name('editDishes');

Route::resource('dish','App\Http\Controllers\DishesController');
Route::resource('meal','App\Http\Controllers\MealsController');

});
Route::post('search', ['as' => 'search', 'uses' => 'App\Http\Controllers\DishesController@search']);

Route::get('/dish_details/{id}', 'App\Http\Controllers\HomeController@dish_details');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/cart', 'App\Http\Controllers\CartController@index');
Route::put('/cart/update/{id}', 'App\Http\Controllers\CartController@update');
Route::get('cart/addItem/{id}', 'App\Http\Controllers\CartController@addItem');
Route::get('/cart/remove/{id}','App\Http\Controllers\CartController@destroy');
