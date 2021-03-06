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

// Redirect root requests to new paste page
Route::get('/', function()
{

    return Redirect::route('paste.new');
});


// Set globally accessible data to the views

View::composer('*', function($view) {

    $p = new Paste();
    $paste = $p->getLatestPastes();
    View::share('latest', $paste);
});

View::composer('*', function($view) {
    $site_name = Config::get('site_name');
    $view->with('site_name', $site_name);
});


// Paste pages
Route::pattern('token', '[A-Za-z0-9]+');
Route::get('/paste/create', array('as' => 'paste.new', 'uses' => 'PasteController@create'));
Route::post('/paste/create', array('as' => 'paste.store', 'uses' => 'PasteController@store'));
Route::get('/paste/{token}', array('as' => 'paste.show', 'uses' => 'PasteController@show'));
Route::get('/paste/delete/{token}', array('as' => 'paste.delete', 'uses' => 'PasteController@delete'));
Route::get('/paste', function()
{
    return Redirect::route('paste.new');
});


// Tag pages
Route::pattern('tag', '[a-z]{1,10}');
Route::get('tags/{tag}', array('as' => 'byTag', 'uses' => 'TagController@show'));

// Trending pastes
Route::get('trending/{tag}', array('as' => 'trending', 'uses' => 'TrendingController@show'));

