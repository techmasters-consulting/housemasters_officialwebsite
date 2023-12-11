<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/listings', 'PropertyController@index')->name('property');
Route::get('/stories', 'StoryController@index')->name('story.index');
Route::post('send/email', 'HomeController@emailservice')->name('home.emailservice');
