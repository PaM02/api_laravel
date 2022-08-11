<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiControllers;
use App\Http\Controllers\UserController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




Route::get('getid/{id?}',[ApiControllers::class,'getFind']);
Route::post('post',[ApiControllers::class,'post']);
Route::post('validation',[ApiControllers::class,'testData']);

Route::group(['middleware' => 'auth:sanctum'], function(){
    //All secure URL's
    Route::get('get',[ApiControllers::class,'getData']);

    });


Route::post("login",[UserController::class,'index']);