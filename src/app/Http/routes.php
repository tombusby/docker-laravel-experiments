<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('endpointTest', function () {
    return "Yep, this works";
});

Route::get('dumpEnvVariables', function () {
    dd($_SERVER);
});

Route::get('databaseTest', function () {
    $users = DB::select('SELECT * FROM users;');
    dd($users);
});
