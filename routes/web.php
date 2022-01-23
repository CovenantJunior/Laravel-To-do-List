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
    All requests excluding the index/home activity are in the POST Request form
*/

//Homepage Activity (GET Request)
Route::get('/', 'App\Http\Controllers\TodoListController@index')->name('index');

//Create new list (POST Request)
Route::post('/save', 'App\Http\Controllers\TodoListController@save')->name('save');

//Edit list as completed (POST Request)
Route::post('/completed/{id}', 'App\Http\Controllers\TodoListController@completed')->name('completed');

//Delete list (POST Request)
Route::post('/delete/{id}', 'App\Http\Controllers\TodoListController@delete')->name('delete');