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

Route::get('/me', function () {
    return 
    ["nis" =>"3103118119", 
    "name" => "Safina Nanda Kinanthi Asrie",
    "gender" => "Perempuan",
    "phone" => "088983129690",
    "class" => "XII RPL 4"];
});