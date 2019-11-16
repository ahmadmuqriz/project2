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


route::get('/blogs/show/{blog}','BlogController@show')->name('blogs.show');

route::get('/blogs/edit/{blog}','BlogController@edit')->name('blogs.edit');

route::post('/blogs/edit/{blog}','BlogController@update')->name('blogs.update');

route::get('blogs/delete/{blog}','BlogController@padam')->name('blogs.padam');


