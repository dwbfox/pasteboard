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

// Paste pages
Route::pattern('token', '[A-Za-z0-9]+');
Route::get('/paste/new', array('as' => 'new', 'uses' => 'PasteController@create'));
Route::get('/paste/{token}', array('as' => 'show', 'uses' => 'PasteController@show'));
Route::get('/paste/{token/raw}', 'PasteController@show', array('raw' => true));
Route::get('/paste/delete/{token}', 'PasteController@delete');

// Tag pages
Route::pattern('tag', '[A-Za-z0-9+-_]');
Route::get('tags/{tag}', 'TagController@show');


Route::get('/', function()
{
    Redirect::to('new');
});

Route::get('/paste', function()
{
    Redirect::to('new');
});


