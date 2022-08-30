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

Route::get('/', 'HomeController@index')->name('home');

Route::middleware("auth")
    ->namespace("Admin") // indica la cartella dove si trovano i controller
    ->name("admin.") // Aggiungie prima del nome di ogni rotta questo prefisso
    ->prefix("admin") // Aggiunge prima di ogni URI questo pregisso
    ->group(function () {
    Route::get('/', 'HomeController@index')->name('index');

    Route::get("/users","UserController@index")->name("users.index");
    Route::get("/users/{user}/edit","UserController@edit")->name("users.edit");
    Route::patch("/users/{user}","UserController@update")->name("users.update");

    Route::resource("posts", "PostController");

    Route::get("/categories","CategoryController@index")->name("categories.index");

    Route::get("/tags","TagController@index")->name("tags.index");
    Route::get("/tags/{tag}","TagController@show")->name("tags.show");
});

Route::get("{any?}", function () {
    return view("welcome");
})->where("any", ".*");
