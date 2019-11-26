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
Route::get( 'xin-chao/{ten?}/{namsinh?}' ,'Mycontroller@getxinchao');
Route::get('/tambiet/{ten?}','Mycontroller@gettambiet');
Route::get('/connect','Mycontroller@connectdatabase');
Route::get('/hi','Mycontroller@sayhi');
Route::get('/addrecipe','Mycontroller@addrecipedemo');
Route::get('/recipe','Controller_recipe@index');
Route::get('/recipe/{id}','Controller_recipe@show');


