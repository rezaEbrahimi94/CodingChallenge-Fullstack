<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/metadata/read/all', ['as'=> 'api.metadata.all', 'uses' => 'ApiController@metadata']);
Route::get('/shelf/{slug}/read', ['as'=> 'api.metadata.shelf', 'uses' => 'ApiController@shelf']);
Route::get('/books/{id}', ['as'=> 'api.metadata.book', 'uses' => 'ApiController@book']);