<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


//gelen post isteklerine gore yonlendirme yapıyor
Route::group([
    'prefix'=>'auth'
],function(){
    Route::post('login',[\App\Http\Controllers\AuthController::class,'login']);
    Route::post('register',[\App\Http\Controllers\AuthController::class,'register']);
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
