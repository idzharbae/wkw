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


Route::get('/register','RegisterController@create')->name('register');

Route::get('/','TeamController@start')->name('index');

Route::post('/daftar/{id}','TeamController@addTeam');
Route::post('/bayar/{id}','TeamController@uploadPay');
Route::post('/berkas/{id}','TeamController@uploadLetter');

Route::get('/stp1','TeamController@showForm');

Route::get('/appstoday','TeamController@appsToday')->name('appstoday');
Route::get('/hacktoday','TeamController@hackToday')->name('hacktoday');
Route::get('/business','TeamController@businessIT')->name('business');
Route::get('/seminar','TeamController@seminarIT')->name('seminar');
Route::get('/workshop','TeamController@workshop')->name('workshop');
Route::get('/postevent','TeamController@postEvent')->name('postevent');
Route::get('/adminhome','TeamController@adminhome')->name('adminhome');
Route::get('/admindetail','TeamController@admindetail')->name('admindetail');

Route::get('/profile','TeamController@teamProfile')->name('team.profile');
Route::get('/payment','TeamController@payment')->name('payment');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



/***
*ADMIN ROUTE
***/
Route::GET('admin/home','AdminController@index');
Route::GET('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::POST('admin','Admin\LoginController@login');
Route::POST('admin/main','Admin\AdminController@main');
Route::POST('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::GET('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::POST('admin-password/reset','Admin\ResetPasswordController@reset');
Route::GET('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm');
