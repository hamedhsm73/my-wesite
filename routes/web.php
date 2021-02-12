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
    return view('front.welcome');
});

Auth::routes();
Route::prefix('admin')->middleware('checkrole')->group(function(){
    Route::get('','back\adminController@index')->name('admin.index');
});

Route::prefix('admin/books')->middleware('checkrole')->group(function(){
    Route::get('/','back\bookController@index')->name('books.index');
    Route::get('/create','back\bookController@create')->name('books.create');
});


Auth::routes();