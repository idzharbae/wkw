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
//     return view('test1');
// });

Route::get('/','TeamController@showForm');
Route::get('/showbayar','TeamController@showBayar');
Route::get('/showberkas','TeamController@showBerkas');

Route::post('/daftar/{id}','TeamController@addTeam');
Route::post('/bayar/{id}','TeamController@uploadPay');
Route::post('/berkas/{id}','TeamController@uploadLetter');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
