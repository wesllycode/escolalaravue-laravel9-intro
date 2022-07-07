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

Route::get('/users/{naoprecisanomeserigual}', function ($id) {
    return $id;
});



Route::get('/users/{paramA}/{paramB}', function ($paramA, $paramB) {
    return $paramA . ' - '. $paramB;
});

Route::get('/empresa/{string?}', function ($string = null) {
    return $string;
});