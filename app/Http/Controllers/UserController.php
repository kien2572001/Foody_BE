<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class UserController extends Controller
{
    //User Controller
    public function sendPost(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->footer = $request->footer;
        $post->user_id = $request->user_id;
        $post->restaurant_id = $request->restaurant_id;
        $post->location = $request->vitri;
        $post->price = $request->giaca;
        $post->quality = $request->chatluong;
        $post->service = $request->phucvu;
        $post->space = $request->khonggian;
        $post->save();
        return response()->json($post);
    }
}
