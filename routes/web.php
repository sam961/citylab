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


Route::get('/', ['as' => 'index', function () {
    //
    return view('index');

}]);


Route::get('/services', ['as' => 'services', function () {
    //
    return view('services');

}]);

Route::get('/about', ['as' => 'about', function () {
    //
    return view('about');

}]);


Route::get('/news', ['as' => 'news', function () {
    //
    return view('news');

}]);

Route::get('/contact', ['as' => 'contact', function () {
    //
    return view('contactus');

}]);