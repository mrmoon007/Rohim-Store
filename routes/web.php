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
    return view('addProduct');
});


Route::get('/addProduct','productController@addProduct')->name('product.addProduct');
Route::post('/create','productController@create')->name('product.create');
Route::get('/index','productController@index')->name('product.index');
Route::post('/update/{id}','productController@update')->name('product.update');
Route::get('/edit/{id}','productController@edit')->name('product.edit');
Route::get('/delete/{id}','productController@delete')->name('product.delete');
Route::get('/view/{id}','productController@view')->name('product.view');
Route::get('/search','productController@search')->name('product.search');

