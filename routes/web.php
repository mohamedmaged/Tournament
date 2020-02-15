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

    return redirect()->route('team.create');
});

Route::resource('team','TeamController',['only'=>['index','create','store']]);

Route::resource('match','MatchController',['only'=>['store','create']]);
