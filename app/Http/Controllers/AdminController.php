<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class AdminController extends Controller
{
    //Restaurant manager
    public function getAllRestaurants()
    {
        $restaurants = Restaurant::all();
        return response()->json($restaurants);
    }
}
