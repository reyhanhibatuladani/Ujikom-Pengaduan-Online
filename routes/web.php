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
    return view('auth.login');
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('/landing', 'AdviceController@showAdvices')->name('landing');;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UserController');

Route::get('/pdf/reports', 'ReportController@exportPdf');
Route::resource('reports', 'ReportController');

Route::get('/ajax/advices/search', 'AdviceController@ajaxSearch');
Route::resource('advices', 'AdviceController');
