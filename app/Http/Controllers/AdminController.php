<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Log;
use App\Models\Dish;
class AdminController extends Controller
{
    //Restaurant manager
    public function getAllRestaurants()
    {
        $restaurants = Restaurant::all();
        return response()->json($restaurants);
    }

    public function saveNewRestaurant(Request $request)
    {
        $restaurant = new Restaurant();
        $restaurant->name = $request->name;
        $restaurant->address = $request->address;
        $restaurant->phone = $request->phone;
        $restaurant->time_from = $request->time_from;
        $restaurant->time_to = $request->time_to;
        $restaurant->image = $request->image;
        $restaurant->price_from = $request->price_from;
        $restaurant->price_to = $request->price_to;
        $temp = $restaurant->save();
        return response()->json($temp);
    }

    public function deleteRestaurant(Request $request)
    {
        $id = $request->route('id');
        $restaurant = Restaurant::find($id);
        $temp = $restaurant->delete();
        return response()->json($temp);
    }

    public function updateRestaurant(Request $request)
    {
        $id = $request->route('id');
        $restaurant = Restaurant::find($id);
        $restaurant->name = $request->name;
        $restaurant->address = $request->address;
        $restaurant->phone = $request->phone;
        $restaurant->time_from = $request->time_from;
        $restaurant->time_to = $request->time_to;
        $restaurant->image = $request->image;
        $restaurant->price_from = $request->price_from;
        $restaurant->price_to = $request->price_to;
        $temp = $restaurant->save();
        return response()->json($temp);
    }

    public function getRestaurantById(Request $request)
    {
        $id = $request->route('id');
        $restaurant = Restaurant::find($id);
        return response()->json($restaurant);
    }

    //Dish manager

    public function addDish(Request $request)
    {
        $dish = new Dish();
        $dish->name = $request->name;
        $dish->description = $request->description;
        $dish->price = $request->price;
        $dish->image = $request->image;
        $dish->restaurant_id = $request->restaurant_id;
        $temp = $dish->save();
        return response()->json($temp);
    }

    public function getDishesByRestaurantId(Request $request)
    {
        $id = $request->route('id');
        $dishes = Dish::where('restaurant_id', $id)->get();
        return response()->json($dishes);
    }

}
