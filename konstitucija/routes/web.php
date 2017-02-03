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
  return view('vartotojo_info');
});

//::get('/', 'pageController@hello');
Route::get('/pradzia', function () {
  return view('welcome');
});
Route::get("klausimai", 'klausimai@index');
Route::post("store1", 'klausimai@store');
Route::post("store", 'vartotojo_info@store');
Route::get('/foo', function()
{
    $exitCode = Artisan::call('migrate');

    //
});