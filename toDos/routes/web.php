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
Route::get('/new', ['uses'=>'newController@new' ]);
Route::get('/todos', 'todosController@index');
Route::post('/create/todo','todosController@store');
Route::get('/todo/delete/{id}',['uses' => 'todosController@destroy','as' => 'todo.delete' ]);
Route::get('/todo/update/{id}',['uses' => 'todosController@update','as' => 'todo.update' ]);
Route::post('/todo/save/{id}',['uses' => 'todosController@save','as' => 'todo.save' ]);
