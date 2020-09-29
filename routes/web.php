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
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/start', function () {
    return view('start');
});

Route::get('/testimonial', function () {
    return view('testimonial');
});
Route::get('/service', function () {
    return view('service');
});

Route::get('/about', function () {
    return view('about');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add-task' , function(){
    return view('task.add');
});


Route::resource('docs', 'DocumentController');
Route::get('/users', 'TestController@ShowUsers');
Route::resource('profile', 'ProfileController');
Route::get('/identity/{id}', 'ProfileController@myprofile')->name('showId');
Route::get('/approve/{id}', 'ProfileController@approve')->name('approve');
Route::post('/search', 'ProfileController@search')->name('search');
Route::resource('task', 'TaskController');