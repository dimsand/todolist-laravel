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
})->name('welcome');

Auth::routes();

Route::get('/tasks', 'HomeController@index')->name('tasks');

Route::get('/tasks/add', function (){
    return view('add');
})->name('add_task');

Route::post('/tasks/add', 'HomeController@add')->name('add_task_form');

Route::get('/tasks/edit', 'HomeController@edit')->name('edit_task');
