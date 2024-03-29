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
    return view('welcome');
});

Route::get('company/{company}/confirmDelete', 'CompanyController@confirmDelete')->name('company/confirmDelete');

Route::resource('/company', 'CompanyController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
