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

Route::get('/', 'GoalController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/goals/login', 'loginController@create');

Route::get('/goals/create', 'GoalController@create');

Route::post('/goals', 'GoalController@store');

Route::delete('/goals/{goal}', 'GoalController@delete');