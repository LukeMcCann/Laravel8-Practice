<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/view-only', 'welcome');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{params}', function ($params) {
    return view('welcome', ['params' => $params]);
});


