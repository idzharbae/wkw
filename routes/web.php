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

Route::get('/', function () {
    return view('home');
});

<<<<<<< HEAD
Route::get('/login','LoginController@login')->name('login');
Route::get('/register','RegisterController@create')->name('register');

Route::get('/stp1','TeamController@showForm');
Route::get('/stp2','TeamController@showBerkas');
Route::get('/stp3','TeamController@stepBayar');

Route::get('/','TeamController@start')->name('index');
=======
Route::get('/showform','TeamController@showForm');
>>>>>>> 797e7ef4bb30792739d1b7df56f5cb16d26fe7d5
Route::get('/showbayar','TeamController@showBayar');
Route::get('/showberkas','TeamController@showBerkas');

Route::post('/daftar/{id}','TeamController@addTeam');
Route::post('/bayar/{id}','TeamController@uploadPay');
Route::post('/berkas/{id}','TeamController@uploadLetter');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
