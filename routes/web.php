<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/','WelcomeController@index');
Route::get('home','HomeController@index');
Route::get('contact','WelcomeController@contact');
Route::get('ura','HomeController@ura');
Route::get('date1','WelcomeController@date1');
Route::get('data2','WelcomeController@data2');
Route::get('data3','WelcomeController@data3');
Route::get('data4','WelcomeController@data4');
Route::get('form','FormController@index');
Route::any('test1','FormController@test1');
Route::any('test2','FormController@test2');
Route::any('test3','FormController@test3');
Route::any('test4','FormController@test4');
Route::any('test5','FormController@test5');
Route::get('content','HomeController@content');
Route::get('foreach','HomeController@foreach');
Route::any('test6','FormController@test6');
Route::any('test7','FormController@test7');
Route::any('test8','FormController@test8');
Route::any('test9','FormController@test9');
Route::any('test10','FormController@test10');