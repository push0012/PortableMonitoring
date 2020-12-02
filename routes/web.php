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
    return view('dashboard');
});
Route::get('edit', function () {
    return view('profile.edit');
});

Route::get('adapter', function () {
    return view('pages.adapterconfig');
});
Route::get('client', function () {
    return view('pages.clientnodes');
});
Route::get('credits', function () {
    return view('pages.credits');
});
Route::get('monitoring', function () {
    return view('pages.monitoring');
});
Route::post('prom','PrometheusController@index');
Route::post('adapterdata','AdapterController@index');