<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Dish;

class CommentsController extends Controller
{
    public function store(Request $request)
    {

    	$this->validate($request,array(
            'name'=>'required|max:255',
            'mail'=>'required|max:255',
            'comment'=>'required|min:5|max:255',
        ));
        $dish=Dish::find($request->dish_id);

        $comment = new Comment;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->comment = $request->comment;
        // Comment::create($request->all());

          $comment->dish()->associate($dish);
        // $comment->dish()->save($comment);
        // $comment->save();
        return view('front.dishes_details' );

    }
}
