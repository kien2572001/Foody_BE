<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    //
    public function getAllPosts(Request $request)
    {   
        $restaurant_id = $request->route('id');
        $posts = Post::with('user')->where('restaurant_id', $restaurant_id)->get();
        return response()->json($posts);
    }

}
