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
    $name = "Alexandre";
    $lastname = "Pereira";
    $age = 33;
    return view('welcome', ['name' => $name, 'lastname'=> $lastname ,'age'=> $age ]);
});

Route::get('/exemple', function() {
    return view('exemple');
});
