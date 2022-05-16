<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

Route::group(['middleware' => ['api','cors']], function () {
    Route::middleware('auth:sanctum')->group( function () {
        Route::get('me', [AuthController::class, 'me']);
    
        // Restaurant manager 
        Route::get('restaurants', [AdminController::class, 'getAllRestaurants']);
        Route::post('new-restaurants', [AdminController::class, 'saveNewRestaurant']);
        Route::get('delete-restaurant/{id}', [AdminController::class, 'deleteRestaurant']);
        Route::post('update-restaurant/{id}', [AdminController::class, 'updateRestaurant']);
        Route::get('restaurant/{id}', [AdminController::class, 'getRestaurantById']);

        // Dish manager
        Route::post('add-dish', [AdminController::class, 'addDish']);
        Route::get('get-dishes-by-restaurant/{id}', [AdminController::class, 'getDishesByRestaurantId']);
    });
});

