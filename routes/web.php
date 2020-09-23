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
Route::post('/search', 'ProfileController@search')->name('search');
Route::resource('task', 'TaskController');