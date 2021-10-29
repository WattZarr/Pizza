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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/addPizza','PizzaController@addPizza')->name('addPizza');
Route::post('/createPizza','PizzaController@createPizza')->name('createPizza');
Route::get('/pizzaList','PizzaController@pizzaList')->name('pizzaList');

//edit pizza form
Route::get('editPage/{id}','PizzaController@editPage')->name('editPage');

//edit pizza
Route::post('editPizza/{id}','PizzaController@editPizza')->name('editPizza');

//delete Pizza
Route::get('deletePizza/{id}','PizzaController@deletePizza')->name('deletePizza');
