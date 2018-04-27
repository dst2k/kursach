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

Route::get('/home', 'HomeController@index')->name('home');
//Route::post('upload', function() { echo 'hello';});
Route::post('/upload', 'UploadController@upload');
Route::get('/layouts', 'LayoutsController@index');
Route::get('/collage/{id}', 'CollageController@show');
//Route::get('create','CollageController@create');
Route::get('/preview', 'CollageController@create');
