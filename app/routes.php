<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function(){
  return Redirect::to('nerds');
});
// Route::get('nerds', 'NerdController@index');
Route::get('nerds', ['uses' => 'NerdController@index', 'as' => 'nerds.index']);
Route::get('nerds/create', ['uses' => 'NerdController@create' 'as' => 'nerds.create')];
Route::post('nerds', ['uses' => 'NerdController@store', 'as' => 'nerds.store']);
Route::get('nerds/{id}', ['uses' => 'NerdController@show', 'as' => 'nerds.show']);
Route::get('nerds/{id}/edit', ['uses' => 'NerdController@edit', 'as' => 'nerds.edit']);
Route::put('nerds/{id}', ['uses' => 'NerdController@update', 'as' => 'nerds.update']);
Route::delete('nerds/{id}', ['uses' => 'NerdController@destroy', 'as' => 'nerds.destroy']);


