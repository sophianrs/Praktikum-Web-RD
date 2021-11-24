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

// Route::get('/', function () {
//     return view('index');

// });

// Route::get('/beauty', function(){
//     return view('beauty');
// });

Route::get('/education', function(){
    return view('education');
});

Route::get('/travel', function(){
    return view('travel');
});

// Route::get('/about', function(){
//     return view('about');
// });

Route::get('/', 'App\http\controllers\PageController@home');
Route::get('/about', 'App\http\controllers\PageController@about');

//beauty
Route::get('/beauty','App\http\controllers\BeautyController@index');
Route::get('/beauty/create','App\http\controllers\BeautyController@create');
Route::get('/beauty/{beauty}','App\http\controllers\BeautyController@show');
Route::post('/beauty','App\http\controllers\BeautyController@store');
Route::delete('/beauty/{beauty}', 'App\http\controllers\BeautyController@destroy');
Route::get('/beauty/{beauty}/edit','App\http\controllers\BeautyController@edit');
Route::patch('/beauty/{beauty}', 'App\http\controllers\BeautyController@update');
