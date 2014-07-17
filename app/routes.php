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

//seeding
Route::get('/seed', function()
{
    Cache::forget('round');
    Cache::forget('track');
    Cache::forever('track', 'Iron Throne');
    Cache::forever('round', '1');   
    Round::where('number', '=', '2')->delete();
    $user = User::find(1);
    $user->tokens = 5;
    $user->save();
});

//show pages
Route::get('/', 'ThroneController@index');
Route::get('/bid', array(
	'before' => 'auth.basic', 'uses' => 'ThroneController@bid'));

Route::get('/user', 'ThroneController@user');
Route::get('/admin', 'AdminController@admin');

//REST APIs
Route::post('/bid', 'ThroneController@editBid');
Route::post('/user', 'ThroneController@addUser');
Route::post('/changeBid', 'ThroneController@changeBid');
Route::post('/updateUser', 'AdminController@updateUser');
Route::post('/updateMeta', 'AdminController@updateMeta');

Route::get('/logout', function()
{
    Auth::logout();
    return Response::make('You are now logged out.');
});
