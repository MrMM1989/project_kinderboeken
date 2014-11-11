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
    $avis=Avi::lists('name', 'id');
    $avis_desc=DB::Table('avis')->select('id', 'description')->get();
    if(Auth::check())
    {
        $name = Auth::user()->username;
        return View::make('start', ['name'=>$name, 'avis'=>$avis, 'avis_desc'=>$avis_desc]);
    }
    else
    {
        return View::make('start', ['avis'=>$avis, 'avis_desc'=>$avis_desc]);
    }
});
Route::get('info', function()
{
    return View::make('info');
});
//Sessions
Route::get('login', 'SessionController@create');
Route::get('logout', 'SessionController@destroy');
Route::resource('session', 'SessionController');
//Searches
Route::resource('search', 'SearchController');
//Users
Route::get('register', 'UserController@create');
Route::resource('user', 'UserController');
//Books
Route::resource('book', 'BookController');