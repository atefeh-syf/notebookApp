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

Auth::routes();

Route::get('/home', 'MemoriesController@index')->name('memory.index');


Route::get('/m', 'MemoriesController@index')->name('memory.index');
Route::get('/m/create', 'MemoriesController@create');
Route::post('/m', 'MemoriesController@store');
Route::get('/m/{memory}', 'MemoriesController@show');
Route::get('/m/{memory}/edit', 'MemoriesController@edit')->name('memory.edit');
Route::patch('/m/{memory}', 'MemoriesController@update')->name('memory.update');
Route::delete('/m/{memory}', 'MemoriesController@destroy')->name('memory.destroy');


//Route::get('/profile/{user}', 'ProfilesController@index')->name('memory.showMemories');

