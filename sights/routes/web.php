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


/*Route::get('/test', function () {

    $data = "123";
    $data = App\Event::all();
    //$data = DB::table('events')->get();
    return view('home', compact('data'));
});*/

Route::get('/test', 'EventsController@index');
