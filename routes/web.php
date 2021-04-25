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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('github', 'ProfileController@github')->name('github');

//**************Profiles Routes ****************************
Route::prefix('/profile')->group(function(){
   Route::get('/','ProfileController@index')->name('profile');
});;

Route::redirect('.env', 'https://www.youtube.com/watch?v=M8ogFbLP9XQ');
Route::redirect('wp-login.php', 'https://www.youtube.com/watch?v=M8ogFbLP9XQ');
Route::redirect('wp-admin', 'https://www.youtube.com/watch?v=M8ogFbLP9XQ');
