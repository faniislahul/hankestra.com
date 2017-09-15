<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'Index@index');
Route::get('showpost/{num}', 'Index@showpost');
Route::get('allpost', 'Index@allpost');
Route::get('login','Login@login');
Route::get('logout','Login@logout');
Route::get('Dash','Dash@dash');
Route::get('newpost','Dash@newpost');
Route::get('managepost/{num}','Dash@managepost');


Route::post('login','Login@auth');
Route::post('addpost','Postc@addpost');
Route::post('deletepost','Postc@delpost');
Route::post('updatepost','Postc@udtpost');