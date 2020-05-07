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

Route::get('/', 'Pages\GuestController@home')->name('home');
Route::get('/about', 'Pages\GuestController@about')->name('about');
Route::get('/blog', 'Pages\GuestController@blog')->name('blog');
Route::get('/blog/{id}', 'Pages\GuestController@blog')->name('blog-single');

Auth::routes();

Route::get('/home', 'Pages\GuestController@home')->name('home');
Route::get('/dashboard', 'Pages\Auth\Admin\DashboardController@home')->name('dashboard')->middleware('admin');
Route::get('/users', 'Pages\Auth\Admin\UserController@index')->name('users')->middleware('admin');


Route::get('/profile', 'Pages\AuthController@index')->name('profile')->middleware('auth');
Route::get('/profile/{user}', 'Pages\AuthController@index')->name('profileid');


Route::get('/confirmcompte/{id}/{token}', 'Auth\RegisterController@confirm')->name('confirm');
