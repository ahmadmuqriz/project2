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


route::get('/testing',function(){
    echo "This is testing";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

route::get('/blogs','BlogController@index')->name('blogs.index');

route::get('/blogs/create','BlogController@create')->name('blogs.create');

route::post('/blogs/create','BlogController@store')->name('blogs.store');


