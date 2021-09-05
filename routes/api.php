<?php

use App\Http\Controllers\Api\RecipesController;
use Illuminate\Http\Request;

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

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'Auth\AuthController@login');
    Route::post('signup', 'Auth\AuthController@signup');
  
    Route::group([
      'middleware' => 'auth:api'
    ], function () {
        Route::get('logout', 'Auth\AuthController@logout');
        Route::get('user', 'Auth\AuthController@user');
    });
});

Route::get('recipes', ['uses'=>'Api\RecipesController@index']);
Route::get('/recipes/recommended', ['uses'=>'Api\RecipesController@recommended']);
Route::get('/recipes/last_added', ['uses'=>'Api\RecipesController@last_added']);
Route::get('/recipes/{recipe}', ['uses'=>'Api\RecipesController@show']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
