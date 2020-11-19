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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','welcome@index');
Route::post('/index/upload','welcome@upload');
Route::get('/edit/{id}','welcome@edit');
Route::post('/index/update/{id}','welcome@update');
Route::get('/delete/{id}','welcome@delete');
Route::get('/index/complete/{id}','welcome@complete');