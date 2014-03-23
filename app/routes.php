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

Route::get('/', function()
{
	return View::make('hello');
});


Route::pattern('token', '[A-Za-z0-9]+');

Route::get('/paste/{token}', 'PasteController@getPaste');
Route::get('/paste/delete/{token}', 'PasteController@deletePaste');