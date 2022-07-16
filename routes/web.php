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

Route::get('/', function () {
    return view('welcome');
});

Route::domain('https://nova.gotechint.com/')->group(function ($router) {
    //
});


Route::domain('{gotechint}.com')->group(function () {
    Route::get('/nova.gotechint.com', function () {
        return 'gotechint.com';
    });
});
