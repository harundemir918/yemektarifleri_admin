<?php

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
    return view('welcome');
});

Auth::routes();
Route::get('/inactive', 'Auth\RegisterController@inactive')->name('inactive');
Route::get('/resend', 'Auth\RegisterController@resendEmail')->name('resendEmail');
Route::get('/home', 'Admin\HomeController@index')->name('home');
Route::get('/users', 'Admin\UsersController@index')->name('users');
Route::get('/users/{id}', 'Admin\UsersController@edit')->name('users.edit');
Route::post('/users/{id}', 'Admin\UsersController@update')->name('users.edit');
Route::get('/users/{id}/delete', 'Admin\UsersController@delete')->name('users.delete');
Route::get('/user/activate/{token}', 'Auth\AuthController@signupActivate');

Route::get('/recipes', 'Admin\RecipesController@index')->name('recipes');
Route::get('/recipes/{id}', 'Admin\RecipesController@edit')->name('recipes.edit');
Route::post('/recipes/{id}', 'Admin\RecipesController@update')->name('recipes.edit');
Route::get('/recipes/{id}/delete', 'Admin\RecipesController@delete')->name('recipes.delete');
