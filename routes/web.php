<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/','UserController@userDashboard')->name('/');

Auth::routes();
Route::group(['middleware' => [auth::class,admin::class]],function(){
    Route::get('/home','PizzaController@pizzaList')->name('home');
    Route::get('/addPizza','PizzaController@addPizza')->name('addPizza');
    Route::post('/createPizza','PizzaController@createPizza')->name('createPizza');
    Route::get('/pizzaList','PizzaController@pizzaList')->name('pizzaList');

    //edit pizza form
    Route::get('editPage/{id}','PizzaController@editPage')->name('editPage');

    //edit pizza
    Route::post('editPizza/{id}','PizzaController@editPizza')->name('editPizza');

    //delete Pizza
    Route::get('deletePizza/{id}','PizzaController@deletePizza')->name('deletePizza');

    //users' order
    Route::get('userOrderPage','UserController@orderPage')->name('userOrderPage');

    //change order status
    Route::post('changeStatus/{id}','OrderController@changeStatus')->name('changeStatus');

});

Route::get('userDashboard','UserController@userDashboard')->name('userDashboard');

//pizza Details page
Route::get('pizzaDetails/{id}','UserController@pizzaDetailsPage')->name('pizzaDetails');
