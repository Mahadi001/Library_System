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

Route::get('/dashboard', 'UserPagesController@dashboard')->name('user_dashboard');
Route::get('/books', 'UserPagesController@books')->name('user_books');


Route::get('/admin/dashboard', 'AdminPagesController@dashboard')->name('admin_books');
Route::get('/admin/rent', 'AdminPagesController@rent')->name('rent');
Route::get('/admin/add', 'AdminPagesController@add')->name('add');
Route::get('/admin/list', 'AdminPagesController@list')->name('list');
Route::get('/admin/penalties', 'AdminPagesController@penalties')->name('penalties');