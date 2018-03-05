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

Route::get('/tasks','TaskController@index');
Route::post('/create/task',['uses' => 'TaskController@store']);
Route::get('/task/delete/{id}',['uses' => 'TaskController@delete','as' => 'task.delete']);
Route::get('/task/update/{id}',['uses' => 'TaskController@update','as' => 'task.update']);
Route::post('/task/save/{id}',['uses' => 'TaskController@save','as' => 'task.save']);
Route::get('/task/completed/{id}',['uses'=>'TaskController@completed','as'=>'task.completed']);