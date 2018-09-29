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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','CalculateController@index');
Route::resource('soft','CalculateController');
Route::resource('result','ResultController');
Route::get('/test','CalculateController@Data');
Route::get('/show','CalculationController@index');
Route::post('/show','CalculationController@index');

Route::post('/select-ajax',['as'=>'select-ajax','uses'=>'CalculateController@selectAjax']);


// Route::post('result','')
